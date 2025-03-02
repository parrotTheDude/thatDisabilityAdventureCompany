<?php

if (!empty($_POST['honeypot']) || !empty($_POST['user_comment'])) {
    // Bot detected, ignore the submission
    exit();
}

// Import dependencies
require_once('./vendor/autoload.php');
require_once('inc/variables.php');
require_once('inc/db-connect.php');

db_connect();

use Postmark\PostmarkClient;

try {
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Clean and sanitize form inputs
        $name = ucwords(strtolower(trim($_POST['name'])));
        $l_name = ucwords(strtolower(trim($_POST['last_name'])));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $phone = preg_replace("/[^0-9]/", '', $_POST['phone']); // Strip non-numeric characters
        $message = htmlspecialchars(trim($_POST['message']));

        // Validate and set default values for age and location
        $valid_age_ranges = ['18-22', '23-30', '31-39', '40-45'];
        $valid_locations = ['Melbourne', 'Gippsland', 'Mornington Peninsula'];
        $valid_contact_methods = ['email', 'phone']; // Ensuring valid values

        $age_range = (isset($_POST['age']) && in_array($_POST['age'], $valid_age_ranges)) ? $_POST['age'] : '18-22';
        $location = (isset($_POST['location']) && in_array($_POST['location'], $valid_locations)) ? $_POST['location'] : 'Melbourne';

        // Check for preferred contact method from the radio buttons (default: email)
        $preferred_contact = (isset($_POST['preferred_contact']) && in_array($_POST['preferred_contact'], $valid_contact_methods))
            ? $_POST['preferred_contact'] 
            : 'email';

        $dateCreated = date("Y-m-d H:i:s");

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format.");
        }

        // Insert a new contact form submission (Tracking Multiple Entries)
        $stmt = $db_link->prepare("
            INSERT INTO contact_form_submissions (first_name, last_name, email, phone, created_at, age_range, location, preferred_contact, message) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $stmt->bind_param('sssssssss', $name, $l_name, $email, $phone, $dateCreated, $age_range, $location, $preferred_contact, $message);

        if (!$stmt->execute()) {
            throw new Exception("Database operation failed: " . $stmt->error);
        }

        // Send emails using Postmark
        $client = new PostmarkClient(POSTMARK_TOKEN);

        // Email to the user (confirmation)
        $client->sendEmailWithTemplate(
            FROM_EMAIL,
            $email,
            38711879, // Template ID
            ["name" => $name],
            true,
            "contact-form-receipt",
            true
        );

        // Email to the company (contact form submission)
        $client->sendEmailWithTemplate(
            FROM_EMAIL,
            TO_EMAIL,
            38713021, // Template ID
            [
                "name" => $name,
                "email" => $email,
                "telephone" => $phone,
                "message" => $message,
                "age_range" => $age_range,
                "location" => $location,
                "preferred_contact" => $preferred_contact
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