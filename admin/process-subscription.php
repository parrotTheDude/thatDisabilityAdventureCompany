<?php
// Import database connection
require_once('../inc/variables.php');
require_once('../inc/db-connect.php');

db_connect();

// This page is called by subscribe.php. It takes the email to be subscribed and checks if it is already in the db. If not then it is added, otherwise it's subscription timestamp is updated. The page then passes the user to the index with an alert describing what happened.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /subscribe.php?error=invalid_email");
        exit();
    }

    try {
        // ✅ Check if email exists
        $stmt = $db_link->prepare("SELECT email FROM email_subscriptions WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            // ✅ Email exists → Update subscription status
            $stmt->close();
            $updateStmt = $db_link->prepare("UPDATE email_subscriptions SET is_subscribed = 1, unsubscribed_at = NULL WHERE email = ?");
            $updateStmt->bind_param("s", $email);
            if ($updateStmt->execute()) {
                $updateStmt->close();
                header("Location: /?subscription=success");
                exit();
            } else {
                $updateStmt->close();
                header("Location: /subscribe?error=db_error");
                exit();
            }
        } else {
            // ✅ Email does not exist → Insert new subscription record
            $stmt->close();
            $insertStmt = $db_link->prepare("INSERT INTO email_subscriptions (email, is_subscribed, unsubscribed_at) VALUES (?, 1, NULL)");
            $insertStmt->bind_param("s", $email);
            if ($insertStmt->execute()) {
                $insertStmt->close();
                header("Location: /?subscription=success");
                exit();
            } else {
                $insertStmt->close();
                header("Location: /subscribe?error=db_error");
                exit();
            }
        }
    } catch (Exception $e) {
        header("Location: /subscribe?error=db_exception");
        exit();
    }
} else {
    header("Location: /subscribe");
    exit();
}
?>