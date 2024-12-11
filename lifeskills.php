<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Life Skills | That Disability Adventure Company';
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
					src="img/index/life.webp"
		  		alt="iFly Group Picture">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
						class="topImg"
						src="img/index/life.webp"
		  			alt="iFly Group Picture">
    			</section>
    			<section class="topWritten">
    				<h1 class="gothamBold" id="aboutSubTitle">Life Skills</h1>
    				<p>TDAC group-based activities and social outings are vibrant adventures that bring together people. Imagine a world of fun, laughter, and shared experiences, where everyone belongs.Our outings are like mini-expeditions designed to create memorable moments, build life skills and lasting friendships. Whether it's a day trip to an exciting place you haven't been to before, a hike through a picturesque park, or a thrilling activity that will get your heart racing, each activity is carefully chosen to provide an enriching and enjoyable experience.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentOrgBg" role="button" onclick="smoothScroll()">Register Now</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- Basic Info panel -->
    	<section class="panelContainer darkBg">
    		<section class="topContent darkBg accessChange">
    			<section class="leftPanel white">
    				<section class="leftTextContainer">
    					<h2 class="accentBlue">Our NDIS group based activity services are one of our most popular programs.</h2>
	    				<p class="paraBigger">Whether you’re facing personal challenges, relationship difficulties, navigating a life transition or managing concerns related to your mental health or disability, counselling or psychological therapy can be very beneficial.</p>

							<p class="paraBigger">Your psychologist or counsellor will work with you and others in your support network to break down barriers and develop skills to help you address challenges and reach your goals.</p>
    				</section>
    			</section>
    			<section class="rightPanel white">
    				<p class="blockTitle paraBigger accentBlue">This could include:</p>
    				<ul class="block">
    					<li>Improving your social skills</li>
    					<li>Building skills to manage your emotions</li>
    					<li>Enhancing your capacity to participate in community activities</li>
    					<li>Improving your independence</li>
    					<li>Empowering your support network</li>
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
  							<p>We will support you to access all the health & wellbeing services you need to live your best life.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/target.svg" alt="Goal Icon" class="whatToExpectIcon">
  							<h3>Goal-focused</h3>
  							<p>Our services are focused on empowering you to achieve your goals.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/teamwork.svg" alt="Teamwork Icon" class="whatToExpectIcon">
  							<h3>Safe & friendly environment</h3>
  							<p>Our centres are warm and inviting. Our friendly workers provide respectful and inclusive services.</p>
  						</section>
  						<section class="whatToExpectIcons">
  							<img src="icons/customer.svg" alt="Support Icon" class="whatToExpectIcon">
  							<h3>Wrap-around support</h3>
  							<p>Our multi-disciplinary and experienced team work together to support your care.</p>
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
							When you make contact with us, we will discuss your needs and how we can best support your wellbeing. A service agreement will be developed and agreed upon.</li>
    					<li><span class="orange">Meeting your clinician</span><br>	
							Next, you will meet with your psychologist or counsellor and plan how you will work together to achieve the goals listed on your NDIS plan.</li>
							<li><span class="orange">Putting your plan into action</span><br>	
							You will work through your plan with your psychologist or counsellor. Together, you will continuously check how you are tracking with your goals, discussing your next steps and how we can support you further.</li>
    				</ul>
    			</section>
    			<section class="accessPanel">
    				<p class="blockTitle paraBigger accentBlue">How to get started</p>
    				<p class="paraBigger">If you are registered with the NDIS and have a plan that includes funds for the support category ‘Improved Daily Living Skills’, your counselling or psychological therapy services may be funded by the NDIS.</p>
    				<p class="paraBigger">To get started, you can:</p>
    				<ul class="block">
    					<li>Fill out our easy <span class="orange">online referal form</span></li>
    					<li>Call us on <a class="topLinks changeLink" href="tel:+61356105115">0356 105 115</a></li>
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
			<?php include ('inc/js/contactJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>