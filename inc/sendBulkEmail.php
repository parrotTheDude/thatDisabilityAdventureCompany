<?php
// sendBulkEmail.php

// Load Composer autoloader and required files
require_once('../vendor/autoload.php');
require_once('../inc/variables.php');  // Should define POSTMARK_TOKEN, FROM_EMAIL, TEMPLATE_ID_BULK_EMAIL, etc.
require_once('../inc/db-connect.php');

// Establish database connection
db_connect();

use Postmark\PostmarkClient;

// Check if a subscription list name was provided as a command-line argument
if ($argc < 2) {
    echo "Usage: php sendBulkEmail.php <subscription_list_name>\n";
    exit(1);
}

$targetList = $argv[1];

$recipientList = strtolower($targetList); // Normalize for comparison

$messageStream = 'admin';
$fromEmail = ($recipientList === 'newsletter') ? 'newsletter@tdacvic.com' : 'events@tdacvic.com';

try {
    // Prepare a query that joins the subscriptions and users tables,
    // filtering by the provided subscription list name and ensuring the user is subscribed.
    $sql = "SELECT u.email, u.name, u.last_name, s.list_name
            FROM subscriptions s
            JOIN users u ON s.user_id = u.id
            WHERE s.subscribed = 1 AND s.list_name = ?";
    $stmt = $db_link->prepare($sql);
    if (!$stmt) {
        throw new Exception("Database error: " . $db_link->error);
    }
    $stmt->bind_param('s', $targetList);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $subscribers = [];
    while ($row = $result->fetch_assoc()) {
        $subscribers[] = $row;
    }
    
    if (empty($subscribers)) {
        throw new Exception("No subscribers found for list: " . $targetList);
    }
    
    // Retrieve your bulk email template ID (assumed to be defined as TEMPLATE_ID_BULK_EMAIL)
    $templateId = 39506837;
    
    // Instantiate the Postmark client using your token
    $client = new PostmarkClient(POSTMARK_TOKEN);
    
    // Loop through each subscriber and send the email using Postmark's template API.
    foreach ($subscribers as $subscriber) {
        $toEmail = $subscriber['email'];
        $firstName = $subscriber['name'];
        $lastName  = $subscriber['last_name'];
        $listName  = $subscriber['list_name'];
    
        // Build the template model with variables that your template expects.
        $templateModel = [
            "email" => $toEmail,
            // Add any additional template variables here as needed.
        ];
    
    		try {
        // Send the email using Postmark's template API.
        $client->sendEmailWithTemplate(
            $fromEmail,    // Sender email (defined in variables)
            $toEmail,      // Recipient's email address
            $templateId,   // Bulk email template ID
            $templateModel,
            true,
            'may-calendar-release',
            true,
            null,
            null,
            null,
            null,
            null,
            'None',
            null,
            $messageStream
         );

        echo "✔ Sent to: $toEmail\n";

        } catch (Exception $emailError) {
		        error_log("❌ Failed to send to $toEmail: " . $emailError->getMessage());
		        echo "❌ Skipped $toEmail: " . $emailError->getMessage() . "\n";
		        continue; // Move on to the next subscriber
		    }
    
        // Optional: add a small delay between requests to help avoid rate limits.
        usleep(100000); // 0.1 second
    }
    
    echo "Bulk email sending complete. Sent emails to " . count($subscribers) . " subscribers on list '$targetList'.\n";
} catch (Exception $e) {
    error_log("Error in bulk email sending: " . $e->getMessage());
    echo "An error occurred: " . $e->getMessage() . "\n";
} finally {
    // Close the database connection
    $db_link->close();
}
?>