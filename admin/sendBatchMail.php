<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  // This will be my batch email handler. It is functional. Just needs to be connected to the db to get specific contact lists depending on the newsletter. Currently it is set to only email the newsletter

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;

  $postmarkToken = POSTMARK_TOKEN;
  $emailsSent = false;

  $client = new PostmarkClient($postmarkToken);
  $batchEmail = array(
    "bowerman.jacob@gmail.com"
);
  $templateId = 38858643;
  $fromEmail = FROM_EMAIL;
  $tag = "jan-25-newsletter";
  $trackOpens = true;
  $trackLinks = "None";
  $messageStream = "broadcast"; 

  $url = "https://thatdisabilityadventurecompany.com.au";

  for ($i = 0; $i < sizeof($batchEmail); $i++) {
    try {
      // Sends the emails to the contact and the company
      if (filter_var($batchEmail[$i], FILTER_VALIDATE_EMAIL)) {
        $toEmail = $batchEmail[$i];

        // Send an email to client to confirm:
        $sendResult = $client->sendEmailWithTemplate(
          $fromEmail,
          $toEmail,
          $templateId,
          [ "email" => $toEmail,
            "product_url" => $url],
          true, // Inline CSS
          $tag, // Tag
          $trackOpens, // Track opens
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          $trackLinks, // Track links
          NULL, // Metadata array
          $messageStream // Message stream
        );
      } 
    } catch (Exception $e) {
      echo $batchEmail[$i] . " wasn't sent";
    }
  }
  $emailsSent = true;

  


