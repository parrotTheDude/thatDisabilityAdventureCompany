<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;

  $name = "John Doe";
  $email = "random@email.com";
  $phone = "0456123123";
  $message = "No message sent";

  // Need to work more on thid. Check DB contains email already or not? 

  if(isset($_POST['submit'])) {
    $name = ucwords(strtolower($_POST['name']));
    $l_name = ucwords(strtolower($_POST['last_name']));
    $email = str_replace(' ', '', strtolower($_POST['email']));
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $message = $_POST['message'];
    $dateCreated = date("Y-m-d H:i:s", time());
    $lastUpdated = date("Y-m-d H:i:s", time());
    $hash = $name . $dateCreated;
    $id = hash('sha256', $hash);
    $emailValid = 0;

    $sql_statement = "
    INSERT INTO user (id, first_name, last_name, email, email_valid, phone, date_created, last_updated) 
    VALUE ('$id', '$name', '$l_name', '$email', '$emailValid', '$phone', '$dateCreated', '$lastUpdated')";

    $users = $db_link->query($sql_statement) or die($db_link->error);

    $postmarkToken = POSTMARK_TOKEN;

     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $client = new PostmarkClient($postmarkToken);

       $templateId = 38711879;
       $fromEmail = "hello@thatdisabilityadventurecompany.com.au";
       $toEmail = $email;
       $tag = "contact-form-receipt";
       $trackOpens = true;
       $trackLinks = "None";
       $messageStream = "outbound"; 

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
          NULL, // Track links
          NULL, // Metadata array
          NULL // Message stream
        );

      $templateId = 38713021;
      $toEmail = "hello@tdacvic.com";
      $tag = "contact-form-enquiry";
      $trackOpens = false;

      // Send an email to client to confirm:
        $sendResult = $client->sendEmailWithTemplate(
          $fromEmail,
          $toEmail,
          $templateId,
          ["name" => $name,
          "email" => $email,
          "telephone" => $phone,
          "message" => $message],
          true, // Inline CSS
          $tag, // Tag
          $trackOpens, // Track opens
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          NULL, // Track links
          NULL, // Metadata array
          NULL // Message stream
        );
       $status = true;
     }
   } else {
     $status = false;
   }