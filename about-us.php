<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'About Us | That Disability Adventure Company';
			$page_decription = 'That Disability Adventure Company is passionate about creating inclusive and supportive opportunities for people living with disabilities. Through experience-based programs, we gently encourage participants to move outside their comfort zone. Our individual and group-based programs work to foster new friendships, develop new skills and make incredible memories together.';
		  include ('inc/head.php');
		?>
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
			<?php include ('inc/mobileNav.php'); ?>
			
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
    				<h2 class="gothamBook" id="aboutSubTitle">Who are we?</h2>
    				<h1 class="gothamBold" id="aboutTitle">That Disability Adventure Company</h1>
    				<p><i>That Disability Adventure Company</i> is passionate about creating opportunities for people living with disabilities to lead fulfilling and exciting lives. We assist people living with Mild to Moderate disabilities aged between 12 to 45 years old through supported outings and Adventures. Feel free to contact us below</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentOrgBg" role="button">Meet the team!</button>
    				</section>
    			</section>
    		</article>
    	</section>

    	<!-- Team panel -->
    	<section class="panelContainer whiteBg">
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
    						<p>Loves long walks on the beach, getting Thai massages and not drinking when everyone else is having fun.</p>
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
    						<h2>Cody McCodison</h2>
    						<p>Loves life. Passionate about helping those who need it most.</p>
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
    						<h2>Unknown Man</h2>
    						<p>I have no idea who this man is. He just showed up one day on the photos album. Some say he has no birth certificate or passport. Perhaps one day we will know. For now. We accept him simply as Unknown Man</p>
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
    				<h2 class="gothamBook" id="aboutSubTitle"></h2>
    				<h1 class="gothamBold" id="aboutTitle">Are you ready for the experience of a life time?</h1>
    				<p><i>That Disability Adventure Company</i> is passionate about creating opportunities for people living with disabilities to lead fulfilling and exciting lives. We assist people living with Mild to Moderate disabilities aged between 12 to 45 years old through supported outings and Adventures. Feel free to contact us below</p>
    				<section class="btnsContainer" id="aboutBtn">
    					<button class="topBtns accentOrgBg" role="button" onclick="window.location.href='/tdac/services.html';">Learn more about our experiences</button>
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
			<?php include ('inc/js/contactJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
		</script>
	</body>
</html>