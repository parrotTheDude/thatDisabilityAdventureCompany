<?php
require_once('../vendor/autoload.php'); // Load Postmark PHP SDK
require_once('../inc/variables.php');
require_once('../inc/db-connect.php'); // Load database connection

use Postmark\PostmarkClient;

// This webhook waits for Postmark to reach out. It then notifies the admin of a subscription change or spam complaint. If it is sub related, the local DB is updated to reflect the users decision. 

// Connect to DB
db_connect();

// Postmark API Token
$client = new PostmarkClient(POSTMARK_TOKEN);

// Admin email for notifications
$fromEmail = FROM_EMAIL;
$toEmail = ADMIN_EMAIL;

// ✅ Ensure JSON Data is Read Properly
$requestBody = file_get_contents("php://input");
if (!$requestBody) {
    http_response_code(400);
    exit('Bad Request: No data received.');
}

$data = json_decode($requestBody, true);

// ✅ Ensure JSON Decoding Worked
if (!is_array($data)) {
    http_response_code(400);
    exit('Bad Request: Invalid JSON format.');
}

// ✅ Extract email from "Recipient"
$email = isset($data['Recipient']) ? filter_var($data['Recipient'], FILTER_SANITIZE_EMAIL) : '';

if (!empty($email) && isset($data['RecordType'])) {
    switch ($data['RecordType']) {
        case 'SubscriptionChange':
            if (isset($data['SuppressSending'])) {
                if ($data['SuppressSending'] === true) {
                    // ✅ User unsubscribed
                    $subject = "TDAC: Unsubscribe Event";
                    $htmlBody = "<strong>Email Unsubscribed:</strong> " . $email . "<br><pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
                    $textBody = "Email Unsubscribed: " . $email . "\n\nEvent Details:\n" . json_encode($data, JSON_PRETTY_PRINT);

                    // ✅ Update database to mark as unsubscribed
                    try {
                        $stmt = $db_link->prepare("UPDATE email_subscriptions SET is_subscribed = 0, unsubscribed_at = NOW() WHERE email = ?");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt->close();
                    } catch (Exception $e) {
                        // Error handling if needed
                    }

                } else {
                    // ✅ User resubscribed
                    $subject = "TDAC: Resubscribe Event";
                    $htmlBody = "<strong>Email Resubscribed:</strong> " . $email . "<br><pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
                    $textBody = "Email Resubscribed: " . $email . "\n\nEvent Details:\n" . json_encode($data, JSON_PRETTY_PRINT);

                    // ✅ Update database to mark as resubscribed
                    try {
                        $stmt = $db_link->prepare("UPDATE email_subscriptions SET is_subscribed = 1, unsubscribed_at = NULL WHERE email = ?");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt->close();
                    } catch (Exception $e) {
                        // Error handling if needed
                    }
                }

                // ✅ Send email notification to admin
                try {
                    $client->sendEmail(
                        $fromEmail,
                        $toEmail,
                        $subject,
                        $htmlBody,
                        $textBody,
                        "webhook-event",  // Tag
                        false,  // Track opens
                        NULL,  // Reply-To
                        NULL,  // CC
                        NULL,  // BCC
                        NULL,  // Headers
                        NULL,  // Attachments
                        "None",  // Track Links
                        NULL,  // Metadata
                        "outbound" // Message Stream
                    );
                } catch (Exception $e) {
                    // Admin email failed, log if needed
                }
            }
            break;

        default:
            // Unhandled event, can be logged if needed
    }
}

// ✅ Send a 200 OK response to Postmark
http_response_code(200);
echo 'Webhook received successfully';
?>