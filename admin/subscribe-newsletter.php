<?php
// Import database connection
require_once('../inc/variables.php');
require_once('../inc/db-connect.php');

db_connect();

// This handles the newsletter subscription box located in the footer. It is called as an AJAX element and returns a result depending on the outcome.


header("Content-Type: text/plain"); // Plain text response

// Debugging: Log and check the request method
error_log("Received Request Method: " . $_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid request. Expected POST, received: " . $_SERVER["REQUEST_METHOD"];
    exit;
}

// Retrieve and sanitize email
$email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

try {
    // Insert email into the database (Prevent duplicates)
    $stmt = $db_link->prepare("
        INSERT INTO email_subscriptions (email, is_subscribed, subscribed_at) 
        VALUES (?, TRUE, NOW()) 
        ON DUPLICATE KEY UPDATE is_subscribed = TRUE, subscribed_at = NOW()
    ");

    $stmt->bind_param('s', $email);
    $stmt->execute();

    echo "Subscribed successfully!";
} catch (Exception $e) {
    error_log("Error inserting email: " . $e->getMessage());
    echo "Error subscribing. Try again.";
} finally {
    $stmt->close();
    $db_link->close();
}
?>