<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'About TDAC: Inclusive Adventures and Support Programs';
			$page_decription = 'Learn about TDAC’s mission to provide inclusive adventures and supportive programs, empowering individuals with disabilities to thrive and connect.';
			$page_name = '/about-us';
		  include ('inc/head.php');
		?>

	<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/about-us" />
	</head>

	<body id="theTop">
		<!-- Header section includes the alert banner and navigation -->
		<header>
			<header>
			<?php 
			  $page_name = 'about';
			  include ('inc/header.php');
		  ?>
		</header>
		</header>

		<!-- Main area for all the information needed -->
		<main class="darkBg">
			<!-- Content menu for the mobile devices -->
			<?php include ('inc/mobileNav.php');?>
			
			<!-- Primary Panel -->
    	<section class="aboutContentContainer">
    		<section class="mobileTopImgContainer" id="aboutSizing">
    			<img 
					class="asyncImage mobileTopImg"
					src="img/about/aboutUs-min.webp" 
					data-src="img/about/aboutUs.webp" 
					alt="TDAC T-shirt model">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
					class="asyncImage topImg"
					src="img/about/aboutUs-min.webp" 
					data-src="img/about/aboutUs.webp" 
					alt="TDAC T-shirt model">
    			</section>
    			<section class="topWritten">
    				<h1 class="gothamBold" id="aboutTitle">That Disability Adventure Company</h1>
    				<p>Who are we? <i>That Disability Adventure Company</i> is a passionate provider of inclusive, experience-based programs for individuals with disabilities. We focus on building confidence, fostering meaningful connections, and helping participants develop essential life skills. Based in Melbourne and Gippsland, our services are aligned with NDIS goals and tailored to support personal growth and independence. At TDAC, we believe in creating opportunities that inspire, empower, and leave lasting memories.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentBlueBg" role="button" onclick="theTeam()">Meet the team!</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- Team panel -->
    	<section class="panelContainer whiteBg" id="team">
    		<section class="topContent whiteBg">
    			<section class="floatContainer">
    				<section class="floatTitleContainer">
    					<img class="lrgIcon" src="icons/team.svg" alt="Team Icon" loading="lazy">
    					<h2>The team!</h2>
    				</section>
    				<section class="floater">
    					<section>
    						<img 
								class="floatImg"
								src="img/about/isaiah.webp" 
								alt="Isaiah"
								loading="lazy">
    					</section>
    					<section class="floatText">
    						<h2>Isaiah Abrahams</h2>
    						<!-- <p>Loves long walks on the beach, getting Thai massages and not drinking when everyone else is having fun.</p> -->
    					</section>
    				</section>
    				
    				<section class="floater">
    					<section>
    						<img 
								class="floatImg"
								src="img/about/cody.webp" 
								alt="Cody"
								loading="lazy">
    					</section>
    					<section class="floatText">
    						<h2>Cody Waters</h2>
    						<!-- <p>Loves life. Passionate about helping those who need it most.</p> -->
    					</section>
    				</section>

    				<section class="floater">
    					<section>
    						<img 
								class="floatImg"
								src="img/about/unknown.webp" 
								alt="Unknown Man"
								loading="lazy">
    					</section>
    					<section class="floatText">
    						<h2>Dan Stevens</h2>
    						<!-- <p>I have no idea who this man is. He just showed up one day on the photos album. Some say he has no birth certificate or passport. Perhaps one day we will know. For now. We accept him simply as Unknown Man</p> -->
    					</section>
    				</section>
    			</section>
    		</section>
    	</section>

    	<!-- Activities Panel -->
    	<section class="aboutContentContainer">
    		<section class="mobileTopImgContainer">
    				<img 
							class="mobileTopImg"
							src="img/about/snow.webp" 
							alt="Snow trip with TDAC"
							loading="lazy">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="aboutImgContainer">
    				<img 
							class="topImg"
							src="img/about/snow.webp" 
							alt="Snow trip with TDAC"
							loading="lazy">
    			</section>
    			<section class="topWritten">
    				<h2 class="gothamBook" id="aboutSubTitle">Are you ready for the experience of a life time?</h2>
    				<p>Explore exciting events designed for individuals with disabilities! From group adventures to skill-building workshops, our events offer inclusive opportunities to connect, grow, and create lasting memories. Check out our upcoming events and join the fun today!</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<div id="buttonFix" class="topBtns accentBlueBg marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/group-activities" class="linkBtn" id="specialB">See our group activities!</a></div>
    				</section>
    			</section>
    		</article>
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