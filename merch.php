<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Merchandise | That Disability Adventure Company';
			$page_decription = 'That Disability Adventure Company is passionate about creating inclusive and supportive opportunities for people living with disabilities. Through experience-based programs, we gently encourage participants to move outside their comfort zone. Our individual and group-based programs work to foster new friendships, develop new skills and make incredible memories together.';
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
			
			<!-- Merch Panel -->
    	<section class="mainMerchPanel">
    		<section class="mainMerchTextContainer">
    			<section class="mainMerchText">
	    			<h1>Merchandise</h1>
	    			<h3>Scroll down to see the best of TDAC</h3>
    			</section>
    		</section>
    	</section>
    	<section class="secondaryMerchPanel">
    		<section class="merchImgContainer">
    			<img class="merchImg" src="img/merch/merchPic2.webp" alt="Merch Pic">
    		</section>
    		<section class="merchImgContainer">
    			<img class="merchImg" src="img/merch/merchPic3.webp" alt="Merch Pic">
    		</section>
    	</section>

    	<?php include ('inc/contactForm.php');?>
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