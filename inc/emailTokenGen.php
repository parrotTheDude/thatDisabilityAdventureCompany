<?php 
	require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();
    function random_digits($length) {
      $result = '';

      for ($i = 0; $i < $length; $i++) {
          $result .= random_int(0, 9);
      }

      return $result;
  }

  // Test ID for now. Need to be auto assigned someone either via a web portal or someone clicking verify email. Or autogen once someone logs in for the first time
  $id = "19103f8ef5c9c1c888dc775b35a45cbbebce996b5c95048203f54791b2c81a47";

  // Gets the email of the user who's id this is
  $sql_statement = "SELECT `email` FROM `user` WHERE `id` = '$id'";

  $user = $db_link->query($sql_statement) or die($db_link->error);
  $user_row = $user->fetch_assoc();

  // Assigns data to variables from DB
  $email = $user_row['email'];
  $currentDateTime = date("Y-m-d H:i:s", time());
  $salt = random_digits(19);

  // Creates the token using the email and the current dateTime
  $hash =  $email . $salt;
	$newToken = hash('sha256', $hash);

	// Checks to see if the user has a current validity token generated
	$sql_statement = "SELECT `id` FROM `user_tokens` WHERE `id` = '$id'";
	$user = $db_link->query($sql_statement) or die($db_link->error);
  $user_row = $user->fetch_assoc();

  $checker = $user_row['id'];

  // If they do, it updates it with a new token and fresh expiry date
	if($checker != NULL) {
  	$sql_statement = "
      UPDATE `user_tokens` SET `emailToken`= '$newToken', `dateCreated`= '$currentDateTime', `tokenSpent` = 0, `salt` = '$salt' WHERE id = '$id'";

    $users = $db_link->query($sql_statement) or die($db_link->error);
  } else {
  	// If not then it inserts a new token to the DB
    $sql_statement = "
    	INSERT INTO user_tokens (id, emailToken, dateCreated, tokenSpent, salt) 
    	VALUES ('$id', '$newToken', '$currentDateTime', 0, '$salt')";

    $users = $db_link->query($sql_statement) or die($db_link->error);
  }
