<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Join TDAC: Become a Support Worker and Make a Difference';
			$page_decription = 'Join TDAC as a support worker and help empower individuals with disabilities through inclusive, person-centered care. Make a lasting impact today!';
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
			
			<!-- Primary Panel -->
    	<section class="aboutContentContainer">
    		<section class="mobileTopImgContainer" id="careerSizing">
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
    				<h1 class="gothamBold">Become a Support Worker and Make a Difference</h1>
    				<p>Join TDAC as a support worker and make a meaningful impact on the lives of individuals with disabilities. Provide inclusive, person-centered care, build connections, and help participants achieve their goals. Be part of a supportive team that empowers others to grow, thrive, and create lasting memories.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentBlueBg" role="button" onclick="smoothScroll()">Get in touch!</button>
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
  							<p>At TDAC, we provide opportunities to advance your career through ongoing training, skill development, and mentorship. Join a team that values your growth and helps you achieve your professional goals while making a meaningful impact in the lives of others.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/teamwork.svg" alt="Teamwork Icon" class="whatToExpectIcon">
  							<h3>Outstanding culture</h3>
  							<p>Be part of an inclusive and supportive workplace that values collaboration, respect, and shared success. At TDAC, we foster a positive environment where every team member feels appreciated and empowered to contribute to our mission of making a difference.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/customer.svg" alt="Support Icon" class="whatToExpectIcon">
  							<h3>Engaging work</h3>
  							<p>Experience fulfilling and impactful work by supporting individuals with disabilities to achieve their goals and build independence. At TDAC, every day brings new opportunities to connect, inspire, and create lasting change in a rewarding and dynamic role.</p>
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
			<?php include ('inc/jshttps://thatdisabilityadventurecompany.com.au/contactJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>