<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Page Not Found | TDAC Adventures';
			$page_decription = 'Oops! The page you’re looking for doesn’t exist. Explore our programs or head back to the homepage to discover more about TDAC.';
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
			<?php include ('inc/mobileNav.php'); ?>

			<section class="lostContainer">
				<img src="icons/lost.svg" class="lostIcon">
				<h1>Oh no!</h1>
				<h2>Oops! The page you’re looking for doesn’t exist. Explore our programs or head back to the homepage to discover more about TDAC.</h2>
				<button onclick="window.location.href='/';" class="topBtns accentOrgBg marginEdit" role="button">Take me home!</button>
			</section>

		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/contactJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>