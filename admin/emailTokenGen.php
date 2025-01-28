<?php
require_once('inc/variables.php');
require_once('inc/db-connect.php');

db_connect();

// Function to generate random digits
function random_digits($length) {
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= random_int(0, 9);
    }
    return $result;
}

try {
    // Dynamically fetch or assign the user ID securely
    $id = "19103f8ef5c9c1c888dc775b35a45cbbebce996b5c95048203f54791b2c81a47";

    // Prepare a query to fetch the user's email
    $stmt = $db_link->prepare("SELECT email FROM user WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new Exception("User not found.");
    }

    $user_row = $result->fetch_assoc();
    $email = $user_row['email'];
    $currentDateTime = date("Y-m-d H:i:s");
    $salt = random_digits(19);

    // Generate a new token
    $hash = $email . $salt;
    $newToken = hash('sha256', $hash);

    // Check if a token already exists for the user
    $stmt = $db_link->prepare("SELECT id FROM user_tokens WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the existing token
        $stmt = $db_link->prepare("
            UPDATE user_tokens 
            SET emailToken = ?, dateCreated = ?, tokenSpent = 0, salt = ? 
            WHERE id = ?
        ");
        $stmt->bind_param('ssss', $newToken, $currentDateTime, $salt, $id);
    } else {
        // Insert a new token
        $stmt = $db_link->prepare("
            INSERT INTO user_tokens (id, emailToken, dateCreated, tokenSpent, salt) 
            VALUES (?, ?, ?, 0, ?)
        ");
        $stmt->bind_param('ssss', $id, $newToken, $currentDateTime, $salt);
    }

    $stmt->execute();
    echo "Token generated successfully.";
} catch (Exception $e) {
    // Handle exceptions and log errors securely
    error_log($e->getMessage());
    echo "An error occurred. Please try again later.";
} finally {
    // Close the statement and database connection
    if (isset($stmt)) {
        $stmt->close();
    }
    $db_link->close();
}