<?php
// Import database connection
require_once('inc/variables.php');
require_once('inc/db-connect.php');

db_connect();

header("Content-Type: text/plain");

// Debugging: Check if email is received
if (!isset($_GET['email']) || empty($_GET['email'])) {
    echo "Error: No email received.\n";
    header("Location: /?subscription=error&reason=no_email");
    exit;
}

// Get and sanitize email
$email = filter_var(trim($_GET['email']), FILTER_SANITIZE_EMAIL);
echo "Received email: " . $email . "\n";

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: Invalid email format.\n";
    header("Location: /?subscription=error&reason=invalid_email");
    exit;
}

try {
    // Insert email into the database (Prevent duplicates)
    $stmt = $db_link->prepare("
        INSERT INTO email_subscriptions (email, is_subscribed, subscribed_at) 
        VALUES (?, TRUE, NOW()) 
        ON DUPLICATE KEY UPDATE is_subscribed = TRUE, subscribed_at = NOW()
    ");

    if (!$stmt) {
        echo "Error preparing statement: " . $db_link->error . "\n";
        header("Location: /?subscription=error&reason=db_prepare_fail");
        exit;
    }

    $stmt->bind_param('s', $email);
    
    if (!$stmt->execute()) {
        echo "Error executing statement: " . $stmt->error . "\n";
        header("Location: /?subscription=error&reason=db_execute_fail");
        exit;
    }

    echo "Subscription successful!\n";
    header("Location: /?subscription=success");
    exit;
} catch (Exception $e) {
    error_log("Error inserting email: " . $e->getMessage());
    echo "Error: Exception occurred.\n";
    header("Location: /?subscription=error&reason=exception");
    exit;
} finally {
    if (isset($stmt)) {
        $stmt->close();
    }
    $db_link->close();
}
?>