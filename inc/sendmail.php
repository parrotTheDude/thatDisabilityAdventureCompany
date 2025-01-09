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

       $fromEmail = "hello@thatdisabilityadventurecompany.com.au";
       $toEmail = "hello@tdacvic.com";
       $subject = $name . " wants to get in contact.";
       $htmlBody = "<strong>Hello!</strong> My name is " . $name . ". <br /><br />Email: " . $email . "<br />Phone: " . $phone . "<br /><br />Message:<br />" . $message;
       $textBody = "Hello! My name is " . $name  . ".Email: " . $email . "Phone: " . $phone . "Message:" . $message;;
       $tag = "contact-form-enquiry";
       $trackOpens = false;
       $trackLinks = "None";
       $messageStream = "outbound"; 

       // Send an email to me about contact information
       $sendResult = $client->sendEmail(
         $fromEmail,
         $toEmail,
         $subject,
         $htmlBody,
         $textBody,
         $tag,
         $trackOpens,
         NULL, // Reply To
         NULL, // CC
         NULL, // BCC
         NULL, // Header array
         NULL, // Attachment array
         $trackLinks,
         NULL, // Metadata array
         $messageStream
       );
       $status = true;
     }
   } else {
     $status = false;
   }