<?php 
	//include ('inc/sendBatchMail.php');
	include ('inc/emailTokenGen.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'test';
			$page_decription = 'testing area';
			$page_name = '/test';
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
						<h1 id="contactTitle">Email Token: <?php echo $newToken ?></h1>
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