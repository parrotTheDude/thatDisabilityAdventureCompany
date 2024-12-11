<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Inclusive and supportive experience aimed for all! | That Disability Adventure Company';
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
			<section class="videoContainer" id="videoToggle">
  			<video id="video" controls>
				  <source src="videos/tdacPromo.mp4" type="video/mp4" preload="none">
					Your browser does not support the video tag.
				</video>
				<button class="close" onclick="videoPlayer(this)">Close</button>
  		</section>

    	<section class="topContentContainer">
    		<section class="mobileTopImgContainer">
					<img 
					class="asyncImage mobileTopImg"
					src="img/index/crew-min.webp" 
					data-src="img/index/crew.webp" 
					alt="Crew Image">
    		</section>

    		<article class="topContent whiteBg">
    			<section class="topWritten">
    				<h1 class="gothamBold">Creating social connections through travel and adventure!</h1>
    				<h2 class="gothamBook">Disability Support in Victoria</h2>
    				<p><i>That Disability Adventure Company</i> is passionate about creating inclusive and supportive opportunities for people living with disabilities. Through experience-based programs, we gently encourage participants to move outside their comfort zone. Our individual and group-based programs work to foster new friendships, develop new skills and make incredible memories together.</p>
    				<section class="btnsContainer">
    					<button onclick="smoothScroll()" class="topBtns accentOrgBg" role="button" id="start">Get Started!</button>
    					<button class="topBtns accentBlueBg" role="button" onclick="videoPlayer(this)">Roll film!</button>
    				</section>
    			</section>

    			<section class="topImgContainer">
    				<img 
						class="asyncImage topImg"
						src="img/index/crew-min.webp" 
						data-src="img/index/crew.webp" 
						alt="Crew Image">
    			</section>
    		</article>
    	</section>

    	<!-- What we offer panel -->
    	<section class="panelContainer whiteBg" id="here">
    		<section class="topContent whiteBg">
    			<section class="floatContainer">
    				<section class="floatTitleContainer" id="end">
    					<img class="lrgIcon" alt="Connection Icon" src="icons/networking.svg" loading="lazy">
    					<h4>Socialise and explore</h4>
    					<h2>Our days include all types of events and experiences</h2>
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
    						<h2>Group Based Activities</h2>
    						<p>Amazing adventures that Create friendships, independence, and unforgettable experiences</p>
    					<button onclick="window.location.href='/tdac/group-activities.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    						<h2>Overnight Stays</h2>
    						<p>Offer participants a chance to explore, and create lasting memories in a safe, and enjoyable environments, while also working on Independent living skills.</p>
    					<button onclick="window.location.href='/tdac/overnight-stays.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    						<h2>Life Skills Program</h2>
    						<p>Helps you learn important everyday skills, like taking care of themselves and doing things on their own, so they can feeling confident and capable. </p>
    					<button onclick="window.location.href='/tdac/lifeskills.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    						<h2>1 on 1 Support</h2>
    						<p>Making sure you have a great time and can do the things you love, all while making sure everything is just right for you and helping you reach your own goals </p>
    					<button onclick="window.location.href='/tdac/one-to-one.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    						<h2>Join the Team</h2>
    						<p>There is no I in team. But it does include you!</p>
    					<button onclick="window.location.href='/tdac/join-us.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    						<img class="lrgIcon" alt="Merchandise Icon" src="icons/merchandise.svg" loading="lazy">
    						<h2>Merch!</h2>
    						<p>Look even more swagger with our t-shirts and hoodies!</p>
    					<button onclick="window.location.href='/tdac/merch.html';" class="topBtns accentOrgBg marginEdit" role="button">Learn more</button>
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
    				<h2>What our customers are saying...</h2>
    			</section>
    			<section class="floater" id="reviewFloater">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<p>I just FuCKING LOVE IT BRO</p>
    				<h4>Isaiah Abrahams</h4>
    			</section>
    			<section class="floater" id="reviewFloater2">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<p>The moment I started working in the support sector I knew. I KNEW. This was my calling in life</p>
    				<h4>Cody McCodison</h4>
    			</section>
    			<section class="floater" id="reviewFloater3">
    				<img class="reviewStars" alt="Fivestars"  src="icons/fiveStar.svg" loading="lazy">
    				<p>I just FuCKING LOVE IT BRO</p>
    				<h4>Isaiah Abrahams</h4>
    			</section>
    		</section>
    	</section>

    	<!-- Slideshow Panel -->
			<section class="slideshow-container">
			  <!-- Full-width images with number and caption text -->
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide1.webp" alt="Day out on the surf" loading="lazy">
			  </section>
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide2.webp" alt="Group around an armchair" loading="lazy">
			  </section>
			  <section class="mySlides fade">
			    <img src="img/index/slides/slide3.webp" alt="Snow day!" loading="lazy">
			  </section>
			</section>
			<?php include ('inc/contactForm.php');?>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/videoJs.php');?>
			<?php include ('inc/js/contactJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
			<?php include ('inc/js/slideshowJs.php');?>
		</script>
	</body>
</html>