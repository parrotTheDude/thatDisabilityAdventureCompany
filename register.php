<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Join TDAC: Empowering Adventures for Participants';
			$page_decription = 'Register as a participant at TDAC to access inclusive programs designed to build skills, foster friendships, and create lasting memories.';
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
			
			<!-- Primary Panel -->
    	<section class="aboutContentContainer">
    		<section class="mobileTopImgContainer" id="careerSizing">
    			<img 
					class="mobileTopImg"
					src="img/merch/merchPic4.webp"
					alt="Happy friends">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
						class="topImg"
						src="img/merch/merchPic4.webp"
						alt="Happy friends">
    			</section>
    			<section class="topWritten" id="joinChange">
    				<h1 class="gothamBold">Empowering Adventures for Participants</h1>
    				<p>Become a participant at TDAC and unlock opportunities for growth, connection, and adventure. Our inclusive programs, tailored to your unique needs, help build skills, foster friendships, and create lasting memories. With NDIS-aligned support, we’re here to help you thrive and achieve your goals.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentBlueBg" role="button" onclick="smoothScroll()">Register Now</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- What to expect Panel -->
    	<section class="panelContainer whiteBg">
    		<section class="topContent whiteBg">
    			<section class="whatToExpect">
  					<h2 class="accentBlue">How to get in touch!</h2>
  					<section class="whatToExpectIconsContainer">
  						<section class="whatToExpectIcons">
  							<img src="icons/send.svg" alt="Goal Icon" class="whatToExpectIcon">
  							<h3>Write to us</h3>
  							<button class="topBtns accentBlueBg" id="specialBtn" role="button" onclick="smoothScroll()">Register Now</button>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/call.svg" alt="Teamwork Icon" class="whatToExpectIcon">
  							<h3>Call us</h3>
  							<section class="topBtns accentBlueBg registerBtn">
  								<a class="topLinks" href="tel:+61356105115">0356 105 115</a>
  							</section>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/write.svg" alt="Support Icon" class="whatToExpectIcon">
  							<h3>Email us</h3>
  							<section class="topBtns accentBlueBg registerBtn">
  								<a class="topLinks" href="mailto:hello@tdacvic.com?subject=Website Enquire">hello@tdacvic.com</a>
  							</section>
  						</section>
  					</section>
  					
    			</section>
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