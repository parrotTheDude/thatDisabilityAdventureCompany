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

    // Honeypot spam trap
    if (!empty($_POST['honeypot']) || !empty($_POST['user_comment'])) {
        throw new Exception('Bot detected.');
    }

    // Sanitize input
    $name = ucwords(strtolower(trim($_POST['name'] ?? '')));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone'] ?? '');
    $location = trim($_POST['location'] ?? 'Unknown');
    $rating = trim($_POST['experience_rating'] ?? 'Unspecified');
    $message = nl2br(htmlspecialchars(trim($_POST['message'] ?? '')));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address.');
    }
    if (empty($name) || empty($message)) {
        throw new Exception('Please complete all required fields.');
    }

    // Resume file validation
    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
        throw new Exception('Resume upload failed.');
    }

    $resume = $_FILES['resume'];
    $resumeExt = strtolower(pathinfo($resume['name'], PATHINFO_EXTENSION));

    if ($resumeExt !== 'pdf') {
        throw new Exception('Resume must be a PDF file.');
    }

    $maxFileSize = 5 * 1024 * 1024; // 5MB
    if ($resume['size'] > $maxFileSize) {
        throw new Exception('Resume file is too large. Max 5MB.');
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $resume['tmp_name']);
    finfo_close($finfo);

    if ($mimeType !== 'application/pdf') {
        throw new Exception('Resume file type not allowed.');
    }

    $resumeContents = file_get_contents($resume['tmp_name']);
    $encodedResume = base64_encode($resumeContents);

    // Log submission
    $logMsg = date('Y-m-d H:i:s') . " | $name <$email> | $phone | $location | $rating\n";
    file_put_contents(__DIR__ . '/support-submissions.log', $logMsg, FILE_APPEND);

    // Postmark client
    $client = new PostmarkClient(POSTMARK_TOKEN);

    // Confirmation to applicant
    $client->sendEmailWithTemplate(
        FROM_EMAIL,
        $email,
        38711879,
        ["name" => $name],
        true,
        "support-worker-confirmation",
        true
    );

    // Team notification
		$htmlBody = nl2br(<<<EOT
		New application received:

		Name: $name
		Email: $email
		Phone: $phone
		Location: $location
		Experience Rating: $rating

		Message:
		$message
		EOT);

    $client->sendEmail(
        FROM_EMAIL,
        TO_EMAIL,
        "New Support Worker Application from $name",
        $htmlBody,
        strip_tags($htmlBody),
    		'support-worker-application',
        false,
        $email, // ReplyTo
        null,
        null,
        null,
        [[
            'Name' => $resume['name'],
            'Content' => $encodedResume,
            'ContentType' => 'application/pdf'
        ]]
    );

    $response['success'] = true;

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
    error_log("Support form error: " . $e->getMessage());
}

echo json_encode($response);