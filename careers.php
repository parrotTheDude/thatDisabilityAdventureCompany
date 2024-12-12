<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Careers | That Disability Adventure Company';
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
    		<section class="mobileTopImgContainer" id="aboutSizing">
    			<img 
					class="mobileTopImg"
					src="img/merch/merchPic2.webp"
					alt="Happy friends">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
						class="topImg"
						src="img/merch/merchPic2.webp"
						alt="Happy friends">
    			</section>
    			<section class="topWritten" id="joinChange">
    				<h1 class="gothamBold" id="aboutSubTitle">Become a support worker!</h1>
    				<p>TDAC group-based activities and social outings are vibrant adventures that bring together people. Imagine a world of fun, laughter, and shared experiences, where everyone belongs.Our outings are like mini-expeditions designed to create memorable moments, build life skills and lasting friendships. Whether it's a day trip to an exciting place you haven't been to before, a hike through a picturesque park, or a thrilling activity that will get your heart racing, each activity is carefully chosen to provide an enriching and enjoyable experience.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentOrgBg" role="button" onclick="smoothScroll()">Get in touch!</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- What to expect Panel -->
    	<section class="panelContainer whiteBg">
    		<section class="topContent whiteBg">
    			<section class="whatToExpect">
  					<h2 class="accentBlue">What do we offer?</h2>
  					<section class="whatToExpectIconsContainer">
  						<section class="whatToExpectIcons">
  							<img src="icons/startup.svg" alt="Goal Icon" class="whatToExpectIcon">
  							<h3>Career growth</h3>
  							<p>We strive to continually develop our teams and ensure appropriate training opportunities are available to all staff.</p>
								<p>We foster a culture of learning and mentoring and will support you throughout your entire professional journey.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/teamwork.svg" alt="Teamwork Icon" class="whatToExpectIcon">
  							<h3>Outstanding culture</h3>
  							<p>We take our work seriously, but we make sure we’re having fun too.</p>

								<p>At TDAC, we have a strong focus on health and wellness. We offer a range of regular activities to encourage networking and promote staff wellbeing.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/customer.svg" alt="Support Icon" class="whatToExpectIcon">
  							<h3>Engaging work</h3>
  							<p>A career with that disability adventure company offers you rewarding experiences and the opportunity to work with a range of clients across a range of service offerings.</p>
  						</section>
  					</section>
  					<button class="topBtns accentBlueBg" role="button" onclick="smoothScroll()">Join the team</button>
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