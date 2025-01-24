<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Important Links -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="https://thatdisabilityadventurecompany.com.au/">

		<!-- Links for style sheets -->
		<link rel="stylesheet" href="/style-big.css">

		<!-- Title and Description tags -->
		<title>TEST PAGE</title>
		<meta name="description" content="Testing page" />
		<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/" />
		<meta name="theme-color" content="#233036"/>
	</head>

	<body id="theTop">
		<!-- Header section includes the alert banner and navigation -->
		<header>
			<!-- Nav section including logo -->
			<nav id="myNav">
				<!-- Logo container -->
				<section class="logoContainer">
					<a href="https://thatdisabilityadventurecompany.com.au/">
						<img  class="logo" alt="TDAC Logo" src="icons/whiteLogo.webp">
					</a>
				</section>

				<!-- Navigation Menu -->
				<section class="mobile">
					<?php include ('inc/desktopNav.php'); ?>

					<!-- Mobile burger menu -->
			  	<section class='mobileNav' onclick="menuSwitch(this)">
			  		<div class="container">
						  <div class="bar1"></div>
						  <div class="bar2"></div>
						  <div class="bar3"></div>
						</div>
			  	</section>

			  </section>
			</nav>
		</header>

		<!-- Main area for all the information needed -->
		<main class="darkBg">
			<!-- Content menu for the mobile devices -->
			<?php include ('inc/mobileNav.php');?>
			
			<!-- Primary Panel -->
    	<section class="topContentContainer">
    		<section class="landingHero">
    			<section class="landingHeroText">
    				<h1 class="landingTitles">Inclusive Disability Support Services for All Abilities</h1>
    				<h2 class="landingTitles">Based in Victoria</h2>
    				<section class="btnsContainer" id="btnIndex">
    					<div class="topBtns accentBlueBg indexVideo"><a href="https://thatdisabilityadventurecompany.com.au/promo-video" class="linkBtn" id="whiteTxt">Watch our video!</a></div>
    				</section>
    			</section>
    		</section>
    	</section>

    	<section class="whoAreWeContainer">
    		<img class="lrgIcon" alt="One on One Icon" src="icons/friends.svg" loading="lazy">
    		<h2>Who are we?</h2>
    		<p>We provides inclusive day programs and overnight stays for people with disabilities.</p>
    		<p>If you're looking for fun things to do in the city, NDIS assistance with daily life or 
independent living help, we're the guys for you!</p>
    	</section>

    	<section class="howDoWeWorkContainer">
    		<section class="howContainer">
    			<img src="img/index/friends.webp" alt="Friends hanging together">
    		</section>
    		<section class="howContainer" id="howText">
    			<h2>How do we work?</h2>
    			<p>Based out of Melbourne, Gippsland and the Mornington Peninsula, we run our programs all over the region.</p>
    			<p>So how does it work?</p>
    			<p>Usually our programs are based on a specific venue such as Le Mans, Gippy Groovers or the AFL.</p>
    			<p>When you sign up to an activity, we will arrange transport to pick you up and drop you back where you started. If this isn’t possible for any reason, a pick up location is arranged at the most convenient spot for you.</p>
    			<section class="btnsContainer" id="howBtn">
  					<div class="topBtns accentBlueBg howBtn"><a href="https://thatdisabilityadventurecompany.com.au/promo-video" class="linkBtn" id="linkHow">Watch our video!</a></div>
  				</section>
    		</section>
    	</section>

    	<section class="howDoWeWorkContainer" id="oppositeColours">
    		<section class="howContainer" id="howText">
    			<h2>Are we right for you?</h2>
    			<p>We pride ourselves on being an inclusive disability service for all disabilities. </p>
    			<p>Our programs are for people with mild to moderate disabilities, aged between 18 and 45.</p>
    			<p>We believe our programs are some of the best activities for young adults looking to try out new things while being supported by our excellent team.</p>
    			<section class="btnsContainer" id="rightBtn">
  					<div class="topBtns accentBlueBg"><a href="https://thatdisabilityadventurecompany.com.au/promo-video" class="linkBtn" id="whiteTxt">Do something else!</a></div>
  				</section>
    		</section>
    		<section class="howContainer">
    			<img src="img/index/kicks.webp" alt="Football with TDAC">
    		</section>
    	</section>

    	<section class="eventContainer"></section>


    	<!-- What we offer panel -->
    	<section class="panelContainer whiteBg" id="here">
    		<section class="topContent whiteBg">
    			<section class="floatContainer">
    				<section class="floatTitleContainer" id="end">
    					<img class="lrgIcon" alt="Connection Icon" src="icons/networking.svg" loading="lazy">
    					<h2>Our Programs: Empowering Adventures & Supportive Services</h2>
    				</section>
    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/groupPic.webp"
		  					alt="Day out in the forest"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    						<img class="lrgIcon" alt="Group Icon" src="icons/group.svg" loading="lazy">
    						<h3>Group Based Activities</h3>
    						<p>Join our group-based activities to build skills, foster friendships, and enjoy inclusive adventures in a supportive environment across Melbourne and Gippsland.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/group-activities" class="linkBtn">Group Activities</a></div>
    					</section>
    				</section>
    				
    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/overnight.webp"
		  					alt="Games Night"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    						<img class="lrgIcon" alt="Overnight Icon" src="icons/half-moon.svg" loading="lazy">
    						<h3>Overnight Stays</h3>
    						<p>Our overnight stays provide a safe, supportive space for individuals with disabilities to build independence, make friends, and enjoy unique, memorable experiences.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/overnight-stays" class="linkBtn">Overnight Stays</a></div>
    					</section>
    				</section>

    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/life.webp"
		  					alt="iFly Group Picture"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    						<img class="lrgIcon" alt="Life Skills Icon" src="icons/skill.svg" loading="lazy">
    						<h3>Life Skills Program</h3>
    						<p>Discover life skills programs that empower individuals with disabilities to build independence, develop practical abilities, and gain confidence for everyday living.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/lifeskills" class="linkBtn">Life Skills</a></div>
    					</section>

    				</section>
    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/oneOnOne.webp"
		  					alt="Outing at the F1"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    						<img class="lrgIcon" alt="One on One Icon" src="icons/friends.svg" loading="lazy">
    						<h3>1 on 1 Support</h3>
    						<p>Experience one-on-one support tailored to individual needs, helping people with disabilities achieve their goals, build independence, and live life to the fullest.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/one-to-one" class="linkBtn">One to One</a></div>
    					</section>
    				</section>

    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/dinner.webp"
		  					alt="Dinner with people"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    						<img class="lrgIcon" alt="Join the Team Icon" src="icons/collaboration.svg" loading="lazy">
    						<h3>Register as a Participant</h3>
    						<p>Register to become a participant and access tailored programs designed to empower individuals with disabilities. Join us to build skills, foster friendships, and create lasting memories in a supportive environment.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/register" class="linkBtn">Register</a></div>
    					</section>
    				</section>

    				<section class="floater">
    					<section>
    						<img 
		  					class="floatImg"
		  					src="img/index/stock.webp"
		  					alt="Marvel Day Out"
		  					loading="lazy">
    					</section>
    					<section class="floatText">
    					<img src="icons/startup.svg" alt="Goal Icon" class="lrgIcon" loading="lazy">
    						<h3>Become a support worker</h3>
    						<p>Join our team as a support worker and make a difference in the lives of individuals with disabilities. Provide tailored support, foster connections, and help participants achieve their goals in a rewarding role.</p>
    					<div class="topBtns whiteBgspec marginEdit"><a href="https://thatdisabilityadventurecompany.com.au/careers" class="linkBtn">Join Us</a></div>
    					</section>
    				</section>
    			</section>
    		</section>
    	</section>

    	<!-- Reviews Panel -->
    	<section class="panelContainer whiteBg">
    		<section class="reviewContainer">
    			<section class="floatTitleContainer accentBlue" id="black">
    				<img class="lrgIcon" alt="Review Icon" src="icons/review.svg" loading="lazy">
    				<h2>What Our Participants Are Saying</h2>
    			</section>
    			<section class="floater" id="reviewFloater">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<h3 class="reviewTitle">Tina Ricardo</h3>
    				<p>TDAC has a team of wonderful carers providing invaluable services and incredible opportunities, especially for young males. Isaiah and Cody are not only highly competent and friendly but also truly inspiring leaders, guiding a motivated team of dedicated male carers. I highly recommend their exceptional care and outstanding service.</p>
    			</section>
    			<section class="floater" id="reviewFloater2">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<h3 class="reviewTitle">Lee nooy</h3>
    				<p>I highly recommend That Disability Adventure Company. My son Todd and I have had the pleasure of knowing Cody and Isaiah for several years. Together, they’ve built an environment rooted in mutual respect, fun, and exciting adventures for everyone. Their commitment to delivering a high standard of care and fostering trust is truly commendable.</p>
    			</section>
    			<section class="floater" id="reviewFloater3">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<h3 class="reviewTitle">Tanya Stephens</h3>
    				<p>Isaiah, Cody, and their team are fantastic, providing exceptional disability services for my client over the past several months. The entire crew at That Disability Adventure Company is experienced, professional, and deeply committed to delivering person-centred care. Their dedication to mentoring and supporting clients sets them apart as true leaders in the field.</p>
    			</section>
    		</section>
    	</section>

    	<!-- Slideshow Panel -->
			<section class="slideshow-container">
			  <!-- Full-width images with number and caption text -->
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide1.webp" alt="Day out on the surf">
			  </section>
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide2.webp" alt="Group around an armchair">
			  </section>
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide3.webp" alt="Snow day!">
			  </section>
			</section>
			<?php include ('inc/contactForm.php');?>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
			<?php include ('inc/js/slideshowJs.php');?>
			const nav = document.getElementById('mynav');
window.onscroll = function () { 
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};
		</script>
	</body>
</html>