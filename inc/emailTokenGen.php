<?php 
	require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  // Test ID for now. Need to be auto assigned someone either via a web portal or someone clicking verify email. Or autogen once someone logs in for the first time
  $id = "788a9707aa9d7841f94b13da7aceee3445bcfe199ae2bcb21ebc55825b5c01e3";

  // Gets the email of the user who's id this is
  $sql_statement = "SELECT `email` FROM `user` WHERE `id` = '$id'";

  $user = $db_link->query($sql_statement) or die($db_link->error);
  $user_row = $user->fetch_assoc();

  // Assigns data to variables from DB
  $email = $user_row['email'];
  $currentDateTime = date("Y-m-d H:i:s", time());

  // Creates the token using the email and the current dateTime
  $hash =  $email . $currentDateTime;
	$newToken = hash('sha256', $hash);

	// Checks to see if the user has a current validity token generated
	$sql_statement = "SELECT `id` FROM `user_tokens` WHERE `id` = '$id'";
	$user = $db_link->query($sql_statement) or die($db_link->error);
  $user_row = $user->fetch_assoc();

  $checker = $user_row['id'];

  // If they do, it updates it with a new token and fresh expiry date
	if($checker != NULL) {
  	$sql_statement = "
      UPDATE `user_tokens` SET `emailToken`= '$newToken', `dateCreated`= '$currentDateTime' WHERE id = '$id'";

    $users = $db_link->query($sql_statement) or die($db_link->error);
  } else {
  	// If not then it inserts a new token to the DB
    $sql_statement = "
    	INSERT INTO user_tokens (id, emailToken, dateCreated) 
    	VALUES ('$id', '$newToken', '$currentDateTime')";

    $users = $db_link->query($sql_statement) or die($db_link->error);
  }
