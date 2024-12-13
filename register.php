<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Register | That Disability Adventure Company';
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
    				<h1 class="gothamBold">Register to become a participant</h1>
    				<p>TDAC group-based activities and social outings are vibrant adventures that bring together people. Imagine a world of fun, laughter, and shared experiences, where everyone belongs.Our outings are like mini-expeditions designed to create memorable moments, build life skills and lasting friendships. Whether it's a day trip to an exciting place you haven't been to before, a hike through a picturesque park, or a thrilling activity that will get your heart racing, each activity is carefully chosen to provide an enriching and enjoyable experience.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentOrgBg" role="button" onclick="smoothScroll()">Register Now</button>
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