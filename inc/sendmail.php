<?php

require_once('variables.php');
require_once('../vendor/autoload.php');

use Postmark\PostmarkClient;

header('Content-Type: application/json');

$response = ['success' => false];

try {
    // Validate reCAPTCHA
    if (!isset($_POST['g-recaptcha-response'])) {
        throw new Exception('Missing reCAPTCHA token.');
    }

    $recaptcha_response = $_POST['g-recaptcha-response'];
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . RECAPTCHA_SECRET . '&response=' . $recaptcha_response);
    $captcha = json_decode($verify);

    if (!$captcha->success || $captcha->score < 0.5) {
        throw new Exception('reCAPTCHA verification failed.');
    }

    // Spam traps
    if (!empty($_POST['honeypot']) || !empty($_POST['user_comment'])) {
        throw new Exception('Bot detected.');
    }

    // Sanitize input
    $name = ucwords(strtolower(trim($_POST['name'] ?? '')));
    $l_name = ucwords(strtolower(trim($_POST['last_name'] ?? '')));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone'] ?? '');
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $age = $_POST['age'] ?? 'Unknown';
    $location = $_POST['location'] ?? 'Unknown';
    $preferred = $_POST['preferred_contact'] ?? 'email';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address.');
    }

    // Blocklist (optional)
    $blocked = ['tjangamarra.vincent@gmail.com', 'seorankingtech@gmail.com'];
    if (in_array(strtolower($email), $blocked)) {
        throw new Exception("Email blocked.");
    }

    // Send using Postmark
    $client = new PostmarkClient(POSTMARK_TOKEN);

    $client->sendEmailWithTemplate(
        FROM_EMAIL,
        $email,
        38711879,
        ["name" => $name],
        true,
        "contact-form-receipt",
        true
    );

    $client->sendEmailWithTemplate(
        FROM_EMAIL,
        TO_EMAIL,
        38713021,
        [
            "name" => $name,
            "email" => $email,
            "telephone" => $phone,
            "message" => $message,
            "age_range" => $age,
            "location" => $location,
            "preferred_contact" => $preferred
        ],
        true,
        "contact-form-enquiry",
        false
    );

    $response['success'] = true;
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    error_log("Contact form error: " . $e->getMessage());
}

echo json_encode($response);