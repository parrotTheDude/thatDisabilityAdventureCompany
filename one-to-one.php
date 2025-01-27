<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'One to One Support | TDAC Australia';
			$page_decription = 'Personalized one-to-one support tailored to your needs, helping build confidence, independence, and achieve your goals';
			$page_name = '/one-to-one';
		  include ('inc/head.php');
		?>

	<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/one-to-one" />
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
    	<section class="aboutContentContainer navCompensation">
    		<section class="mobileTopImgContainer" id="aboutSizing">
    			<img 
					class="mobileTopImg"
					src="img/index/oneOnOne.webp"
		  		alt="Outing at the F1">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
						class="topImg"
						src="img/index/oneOnOne.webp"
		  			alt="Outing at the F1">
    			</section>
    			<section class="topWritten">
    				<h1 class="gothamBold" id="aboutSubTitle">One-to-One Support</h1>
    				<p>Our one-to-one support services are designed to meet your unique needs. We focus on building independence, confidence, and practical skills, while empowering you to achieve your personal goals. With tailored guidance, we provide the care and attention you need to thrive every step of the way.</p>
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
    					<h2 class="accentBlue">Our NDIS One-to-One Support services are designed to provide personalized care tailored to your unique needs and goals.</h2>
	    				<p class="paraBigger">Whether you’re building independence, working through personal challenges, or developing practical skills, our one-to-one support offers focused guidance in a safe and empowering environment.</p>

							<p class="paraBigger">Our dedicated support team works closely with you and your network to address barriers, build confidence, and create a plan to help you thrive.</p>
    				</section>
    			</section>
    			<section class="rightPanel white">
    				<p class="blockTitle paraBigger accentBlue">This could include:</p>
    				<ul class="block">
    					<li>Personalized guidance to achieve your individual goals</li>
    					<li>Support with daily living tasks and building independence</li>
    					<li>Emotional support to navigate personal challenges</li>
    					<li>Assistance in developing social and communication skills</li>
    					<li>Empowering your support network to provide holistic care</li>
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