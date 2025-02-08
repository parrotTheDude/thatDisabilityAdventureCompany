<?php
require_once('../vendor/autoload.php'); // Load Postmark PHP SDK
require_once('../inc/variables.php');

use Postmark\PostmarkClient;

// Postmark API Token
$client = new PostmarkClient(POSTMARK_TOKEN);

// Admin email for notifications
$fromEmail = FROM_EMAIL;
$toEmail = ADMIN_EMAIL;

// Read JSON payload
$requestBody = file_get_contents("php://input");
$data = json_decode($requestBody, true);

// Log webhook data for debugging
file_put_contents('postmark_webhook.log', json_encode($data, JSON_PRETTY_PRINT), FILE_APPEND);

// Process webhook events
if (isset($data['RecordType'])) {
    switch ($data['RecordType']) {
        case 'SubscriptionChange':
            $subject = "TDAC: Subscription Change";
            $htmlBody = "<strong>Subscription change detected:</strong><br><pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
            $textBody = "Subscription change detected:\n\n" . json_encode($data, JSON_PRETTY_PRINT);
            break;

        case 'SpamComplaint':
            $subject = "TDAC: Spam Complaint";
            $htmlBody = "<strong>Spam complaint received from:</strong> " . $data['Email'] . "<br><pre>" . json_encode($data, JSON_PRETTY_PRINT) . "</pre>";
            $textBody = "Spam complaint received from: " . $data['Email'] . "\n\nEvent Details:\n" . json_encode($data, JSON_PRETTY_PRINT);
            break;

        default:
            error_log("Unhandled event: " . $data['RecordType']);
            http_response_code(200);
            exit('Unhandled event.');
    }

    // Send email notification via Postmark
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
}

// Send a 200 OK response to Postmark
http_response_code(200);
echo 'Webhook received successfully';
?>