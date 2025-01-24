<?php
// Import dependencies
require_once('./vendor/autoload.php');
require_once('inc/variables.php');
require_once('inc/db-connect.php');

db_connect();

use Postmark\PostmarkClient;

// Set default values for variables
$name = "John Doe";
$email = "random@email.com";
$phone = "0456123123";
$message = "No message sent";

try {
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Clean and sanitize form inputs
        $name = ucwords(strtolower(trim($_POST['name'])));
        $l_name = ucwords(strtolower(trim($_POST['last_name'])));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
        $message = htmlspecialchars(trim($_POST['message']));
        $dateCreated = date("Y-m-d H:i:s");
        $lastUpdated = $dateCreated;
        $hash = $name . $dateCreated;
        $id = hash('sha256', $hash);
        $emailValid = 0;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }

        // Check if the user exists in the database
        $stmt = $db_link->prepare("SELECT email FROM user WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Update the last updated timestamp for existing user
            $stmt = $db_link->prepare("UPDATE user SET last_updated = ? WHERE email = ?");
            $stmt->bind_param('ss', $lastUpdated, $email);
        } else {
            // Insert a new user record
            $stmt = $db_link->prepare("
                INSERT INTO user (id, first_name, last_name, email, email_valid, phone, date_created, last_updated) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->bind_param('ssssisss', $id, $name, $l_name, $email, $emailValid, $phone, $dateCreated, $lastUpdated);
        }

        if (!$stmt->execute()) {
            throw new Exception("Database operation failed: " . $stmt->error);
        }

        // Send emails using Postmark
        $client = new PostmarkClient(POSTMARK_TOKEN);

        // Email to the user
        $client->sendEmailWithTemplate(
            FROM_EMAIL,
            $email,
            38711879, // Template ID
            ["name" => $name],
            true,
            "contact-form-receipt",
            true
        );

        // Email to the company
        $client->sendEmailWithTemplate(
            FROM_EMAIL,
            TO_EMAIL,
            38713021, // Template ID
            [
                "name" => $name,
                "email" => $email,
                "telephone" => $phone,
                "message" => $message
            ],
            true,
            "contact-form-enquiry",
            false
        );

    }
} catch (Exception $e) {
    // Log the error and show a user-friendly message
    error_log("Error: " . $e->getMessage());
} finally {
    // Close the database connection
    $db_link->close();
}
?>