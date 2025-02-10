<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'About | TDAC Australia';
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
    	<section class="aboutContentContainer navCompensation">
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
    				<h1 class="gothamBold" id="aboutTitle">Who are TDAC?</h1>
    				<p>That Disability Adventure Company, also know as TDAC, is a small group of young adults looking to make a difference in the lifes of those with disabilities.</p>
    				<p>We aim to create a safe and supporting enviroment while running our wide range of fun activities.</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentBlueBg" role="button" onclick="theTeam()">Tell me more!</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<section class="fullWidth midBg white">
    		<section class="textLayer">
    			<h2>Why are we different?</h2>
    			<p>With the average age of our support workers being 25, we believe having a young team of dedicated support workers is what sets us apart from other disability agencies.</p>
    			<p>Our focus is fun. We want everyone who comes on board with us to have the best time and come away from every adventure feeling more confident in themselves and their abilities.</p>
    		</section>
    	</section>

    	<section class="fullWidth whiteBg">
    		<section class="textLayer">
	    		<img src="img/merch/merchPic2.webp">
	    	</section>
    	</section>

    	<section class="fullWidth midBg white">
    		<section class="textLayer">
	    		<h2>What kind of programs do we offer?</h2>
	    		<p>Our programs range from one off activities and events to recurring weekly activities to help participants build up life skills through repetition.</p>
	    		<p>We offer <a class="inlineLink" href="https://thatdisabilityadventurecompany.com.au/group-activities">group activites</a>, <a class="inlineLink" href="https://thatdisabilityadventurecompany.com.au/one-to-one">individual one to one support</a>, <a class="inlineLink" href="https://thatdisabilityadventurecompany.com.au/lifeskills">life skill workshops</a> and <a class="inlineLink" href="https://thatdisabilityadventurecompany.com.au/overnight-stays">overnight stays</a> as part of the range. To explore more on each activity click on any of them or use the naivigation panel.</p>
	    	</section>
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
    						<h2>Cody Plant</h2>
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
    						<h2>Daniel Burke</h2>
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
    					<div id="buttonFixAbout" class="topBtns accentBlueBg marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/group-activities" class="linkBtn" id="specialB">See our group activities!</a></div>
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