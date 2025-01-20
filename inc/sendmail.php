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
  $dbInserted = false;
  $emailsSent = false;

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

    $postmarkToken = POSTMARK_TOKEN;


    // Checks to see if the person getting in contact has emailed before. If not then stores their data in the database 
    try {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql_statement = "SELECT `email` FROM `user` WHERE `email` = '$email'";

        $emailCheck = $db_link->query($sql_statement) or die($db_link->error);

        if(mysqli_num_rows($emailCheck)) {
          $sql_statement = "
          UPDATE `user` SET `last_updated`= '$lastUpdated' WHERE email = '$email'";

          $users = $db_link->query($sql_statement) or die($db_link->error);
        } else {
          $sql_statement = "
          INSERT INTO user (id, first_name, last_name, email, email_valid, phone, date_created, last_updated) 
          VALUE ('$id', '$name', '$l_name', '$email', '$emailValid', '$phone', '$dateCreated', '$lastUpdated')";

          $users = $db_link->query($sql_statement) or die($db_link->error);
        }
      }
      $dbInserted = true;
    } catch (Exception $e) {
      $dbInserted = false;
    }
    

    try {
      // Sends the emails to the contact and the company
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $client = new PostmarkClient($postmarkToken);

        $templateId = 38711879;
        $fromEmail = FROM_EMAIL;
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
          $trackLinks, // Track links
          NULL, // Metadata array
          $messageStream // Message stream
        );

        $templateId = 38713021;
        $toEmail = TO_EMAIL;
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
          $trackLinks, // Track links
          NULL, // Metadata array
          $messageStream // Message stream
        );

        $emailsSent = true;
        }
      } catch (Exception $e) {
      $emailsSent = false;
    }
    }
    