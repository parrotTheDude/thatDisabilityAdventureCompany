<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Page Not Found | TDAC Adventures';
			$page_decription = 'Oops! The page you’re looking for doesn’t exist. Explore our programs or head back to the homepage to discover more about TDAC.';
			$page_name = '/404';
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

			<section class="lostContainer">
				<img src="icons/lost.svg" class="lostIcon">
				<h1>Oh no!</h1>
				<h2>Oops! The page you’re looking for doesn’t exist.</h2>
				<h3>Explore our programs or head back to the homepage to discover more about TDAC.</h3>
				<div id="buttonFix404" class="topBtns whiteBg marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/" class="linkBtn">Take me home!</a></div>
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