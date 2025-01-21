<?php 
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  

 	// Sets variables for the token passed from the email link
  $token = $_GET['tkn'];
  // Check variables
	$tokenValid = false;
	$tokenExpired = false;
	// Updates the error message accordingly
	$errorCheck = "Your email was sucessfully validated. Thanks!";
	// Gets the current dateTime
	$currentDateTime = date("Y-m-d H:i:s", time());

	try {
		// Selects the userToken data from the db where the token matches
		$sql_statement = "
			SELECT `emailToken`, `dateCreated`, `tokenSpent`, `salt`, `email` 
			FROM `user_tokens` 
			JOIN user ON user_tokens.id = user.id
			WHERE `emailToken` = '$token'";

  	$validEmailCheck = $db_link->query($sql_statement) or die($db_link->error);

	  $emailCheck_row = $validEmailCheck->fetch_assoc();

	  // Assigns the db data to variables
	  $tokenSpent = $emailCheck_row['tokenSpent'];
	  // Recreates the hash to validate the token
	  $email = $emailCheck_row['email'];
	  $salt = $emailCheck_row['salt'];
	  $dateTokenGen = $emailCheck_row['dateCreated'];
  	$hash =  $email . $salt;
		$checkToken = hash('sha256', $hash);

		// Checks if the email value exists
	  if(mysqli_num_rows($validEmailCheck)) {
	  	if ($tokenSpent == 0) {
	  		// Checks if the token was created within the last 24 hours
		  	if(strtotime($currentDateTime) - strtotime($dateTokenGen) < 86400) {
		  		// If the token matches the token gen then it is granted
		  		if ($checkToken == $token) {
		  			$tokenValid = true;
		  		} else {
		  			$tokenValid = false;
		  			$errorCheck = "This token has expired.";
		  		}
		  	} else {
		  		// If it is over 24hrs then the token is deemed expired
		  		$tokenExpired = true;
		  		$errorCheck = "This link has expired. Please request a new link from the team.";
		  	}
	  	} else {
	  		$tokenValid = false;
	  		$errorCheck = "This token as already been used";
	  	}
	  }	else {
	  	$tokenValid = false;
	  	$errorCheck = "This token doesn't exist";
	  }

	  // Double bool to make sure the token is valid and witin expiry. Then updates the email to be valid and the last updated along with it
	  if ($tokenValid == true && $tokenExpired == false) {
	  	$sql_statement = "
      UPDATE `user` SET `email_valid`= 1, `last_updated`= '$currentDateTime' WHERE id = '$id'";

      // DONT ID VARIABLE. NEED OT FIX THIS!!!!


      $users = $db_link->query($sql_statement) or die($db_link->error);
      $sql_statement = "
      UPDATE `user_tokens` SET `tokenSpent`= 1 WHERE id = '$id'";
      $users = $db_link->query($sql_statement) or die($db_link->error);
	  }
	} catch (Exception $e) {
		$errorCheck = "Something went wrong";
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Email Validator | TDAC Australia';
			$page_decription = 'Page to validate your email';
			$page_name = '/validate-email';
		  include ('inc/head.php');
		?>
	</head>

	<body id="theTop">
		<!-- Header section includes the alert banner and navigation -->
		<header>
			<?php 
			  $page_name = 'index';
			  include ('inc/header.php');
		  ?>
		</header>

		<!-- Main area for all the information needed -->
		<main class="darkBg">
			<!-- Content menu for the mobile devices -->
			<?php include ('inc/mobileNav.php');?>

    	<!-- Get in Touch Panel -->
			<section class="panelContainer midBg" id="here">
				<section class="contactContainer white">
					<section class="contactTitleContainer">
						<img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg" loading="lazy">
						<h1 id="contactTitle"><?php echo $errorCheck; ?></h1>
					</section>
			      <section class="btnsContainer">
    					<div class="topBtns accentBlueBg" id="thanksBtn"><a href="https://thatdisabilityadventurecompany.com.au/" class="linkBtn" id="blueTxt">Take me home!</a></div>
    				</section>
					</section>
				</section>
			</section>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>