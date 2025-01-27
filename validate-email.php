<?php
require_once('inc/variables.php');
require_once('inc/db-connect.php');

// Connect to the database
db_connect();

$token = $_GET['tkn'] ?? ''; // Ensure token is retrieved safely
$tokenValid = false;
$tokenExpired = false;
$errorCheck = "Your email was successfully validated. Thanks!";
$currentDateTime = date("Y-m-d H:i:s");

try {
    // Prepare SQL statement to safely fetch token data
    $stmt = $db_link->prepare("
        SELECT ut.emailToken, ut.dateCreated, ut.tokenSpent, u.salt, u.email 
        FROM user_tokens ut
        JOIN user u ON ut.id = u.id
        WHERE ut.emailToken = ?
    ");
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $emailCheckRow = $result->fetch_assoc();
        $tokenSpent = $emailCheckRow['tokenSpent'];
        $email = $emailCheckRow['email'];
        $salt = $emailCheckRow['salt'];
        $dateTokenGen = $emailCheckRow['dateCreated'];

        // Recreate the hash to validate the token
        $hash = hash('sha256', $email . $salt);

        if ($tokenSpent == 0) {
            if (strtotime($currentDateTime) - strtotime($dateTokenGen) < 86400) {
                if ($hash === $token) {
                    $tokenValid = true;
                } else {
                    $errorCheck = "This token is invalid.";
                }
            } else {
                $tokenExpired = true;
                $errorCheck = "This link has expired. Please request a new one.";
            }
        } else {
            $errorCheck = "This token has already been used.";
        }
    } else {
        $errorCheck = "This token doesn't exist.";
    }

    // Update user and token status if valid and not expired
    if ($tokenValid && !$tokenExpired) {
        $db_link->begin_transaction(); // Start transaction

        // Update user email validation status
        $stmt = $db_link->prepare("
            UPDATE user SET email_valid = 1, last_updated = ? WHERE email = ?
        ");
        $stmt->bind_param('ss', $currentDateTime, $email);
        $stmt->execute();

        // Update token as spent
        $stmt = $db_link->prepare("
            UPDATE user_tokens SET tokenSpent = 1 WHERE emailToken = ?
        ");
        $stmt->bind_param('s', $token);
        $stmt->execute();

        $db_link->commit(); // Commit transaction
    }
} catch (Exception $e) {
    $db_link->rollback(); // Rollback transaction if an error occurs
    $errorCheck = "Something went wrong. Please try again later.";
} finally {
    // Safely close the statement and connection
    if (isset($stmt) && $stmt instanceof mysqli_stmt) {
        $stmt->close();
    }
    if (isset($db_link) && $db_link instanceof mysqli) {
        $db_link->close();
    }
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