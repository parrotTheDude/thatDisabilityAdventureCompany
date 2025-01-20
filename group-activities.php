<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Group-Based Activities | TDAC Australia';
			$page_decription = 'Join TDAC’s group-based activities for inclusive, fun, and supportive programs that build skills, foster friendships, and create lasting memories.';
			$page_name = '/group-activities';
		  include ('inc/head.php');
		?>

	<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/group-activities" />
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
    		<section class="mobileTopImgContainer" id="aboutSizing">
    			<img 
					class="mobileTopImg"
					src="img/index/groupPic.webp"
					alt="Day out in the forest">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
						class="topImg"
						src="img/index/groupPic.webp"
						alt="Day out in the forest">
    			</section>
    			<section class="topWritten">
    				<h1 class="gothamBold" id="aboutSubTitle">Explore Our Group-Based Activities</h1>
    				<p>TDAC’s group-based activities offer a supportive space for individuals with disabilities to connect, grow, and thrive. Our programs focus on building confidence, developing skills, and fostering friendships through shared adventures and experiences in a safe, inclusive environment. Join the fun today!</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentBlueBg" role="button" onclick="smoothScroll()">Register Now</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- Basic Info panel -->
    	<section class="panelContainer darkBg">
    		<section class="topContent darkBg accessChange">
    			<section class="leftPanel white">
    				<section class="leftTextContainer">
    					<h2 class="accentBlue">Our NDIS Group-Based Activity services are one of our most popular programs.</h2>
	    				<p class="paraBigger">Whether you’re looking to build social connections, enhance your skills, or enjoy new experiences, our group-based activities provide a supportive and inclusive space for individuals with disabilities to thrive.</p>

							<p class="paraBigger">Our experienced team works closely with participants to foster friendships, boost confidence, and encourage personal growth. Through fun, engaging activities, we help break down barriers, build independence, and create lasting memories in a welcoming, person-centred environment.</p>
    				</section>
    			</section>
    			<section class="rightPanel white">
    				<p class="blockTitle paraBigger accentBlue">This could include:</p>
    				<ul class="block">
    					<li>Develop social, communication, and practical skills in a supportive group environment.</li>
    					<li>Build meaningful friendships and connections through inclusive activities.</li>
    					<li>Enjoy fun community outings and accessible adventures at local attractions.</li>
    					<li>Engage in creative, recreational, and team-building activities.</li>
    					<li>Receive NDIS-aligned support to achieve personal goals and build confidence.</li>
    				</ul>
    			</section>
    		</section>
    	</section>

    	<!-- What to expect Panel -->
    	<section class="panelContainer whiteBg">
    		<section class="topContent whiteBg">
    			<section class="whatToExpect">
  					<h2 class="accentBlue">What to expect</h2>
  					<section class="whatToExpectIconsContainer">
  						<section class="whatToExpectIcons">
  							<img src="icons/tour-guide.svg" alt="Guided by you Icon" class="whatToExpectIcon">
  							<h3>Guided by you</h3>
  							<p>Our programs are tailored to your needs, empowering you to achieve your personal goals and thrive.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/target.svg" alt="Goal Icon" class="whatToExpectIcon">
  							<h3>Goal-focused</h3>
  							<p>We focus on helping you build skills, confidence, and independence to reach your full potential.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/teamwork.svg" alt="Teamwork Icon" class="whatToExpectIcon">
  							<h3>Safe & friendly environment</h3>
  							<p>Experience care and support in a welcoming, inclusive space where you feel safe and valued.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/customer.svg" alt="Support Icon" class="whatToExpectIcon">
  							<h3>Wrap-around support</h3>
  							<p>Our team works with you and your network to provide seamless, holistic support for your journey.</p>
  						</section>
  					</section>
  					<button class="topBtns accentBlueBg" role="button" onclick="smoothScroll()">Register Now</button>
    			</section>
    		</section>
    	</section>

    	<!-- How to access panel -->
    	<section class="panelContainer darkBg">
    		<section class="topContent darkBg flexWrap">
    			<section class="panelTitle accentBlue">
    				<h2>Accessing this service</h2>
    			</section>
    			<section class="accessPanel">
    				<p class="blockTitle paraBigger accentBlue">What to expect</p>
    				<ul class="block">
    					<li><span class="orange">Understanding your needs</span><br>	
							When you reach out to us, we’ll take the time to understand your needs and explore how we can best support your well-being. Together, we’ll develop and agree on a personalized service agreement.</li>
    					<li><span class="orange">Meeting your clinician</span><br>	
							You’ll then meet with your support worker to create a collaborative plan focused on achieving the goals outlined in your NDIS plan.</li>
							<li><span class="orange">Putting your plan into action</span><br>	
							Work closely with your support worker to implement your plan. Together, you’ll track progress, review your goals, and discuss the next steps to ensure you continue to receive the best possible support.</li>
    				</ul>
    			</section>
    			<section class="accessPanel">
    				<p class="blockTitle paraBigger accentBlue">How to get started</p>
    				<p class="paraBigger">If you’re registered with the NDIS and your plan includes funding for the support category ‘Improved Daily Living Skills,’ your counselling or psychological therapy services may be covered by the NDIS.</p>
    				<p class="paraBigger">Getting started is easy! You can:</p>
    				<ul class="block">
    					<li>Fill out our easy <span class="orange" onclick="smoothScroll()">online referral form</span></li>
    					<li>Call us on <a class="topLinks changeLink" href="tel:1800319581">1800 319 581</a></li>
    					<li>Email us @ <a class="topLinks changeLink" href="mailto:hello@tdacvic.com?subject=Website Enquire">hello@tdacvic.com</a></li>
    				</ul>
    			</section>
    		</section>
    	</section>

    	<?php include ('inc/contactForm.php');?>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>