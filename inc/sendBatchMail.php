<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;

  $postmarkToken = POSTMARK_TOKEN;
  $emailsSent = false;

  // THIS WORKS BUT NEEDS TO BE FUNCTIONAL. FOR NOW JUST SENDS EMAILS TO PREDEFINED LIST.

  $client = new PostmarkClient($postmarkToken);
  $batchEmail = array("accounts@bowermandigital.com", "bowerman.jacob@gmail.com", "hello@jbowerman.com");
  $templateId = 38711879;
  $fromEmail = FROM_EMAIL;
  $tag = "batch-email-test";
  $trackOpens = false;
  $trackLinks = "None";
  $messageStream = "broadcast"; 

  $name = "Jake";

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
          ["name" => $name],
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

  


