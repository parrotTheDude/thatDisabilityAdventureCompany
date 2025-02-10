<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Important Links -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="https://thatdisabilityadventurecompany.com.au/">

		<!-- Links for style sheets -->
		<link rel="stylesheet" href="/style.css">

			<!--Add favorites icons-->   
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="apple-touch-icon" href="icons/appleTouch.webp"/>
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/promo-video" />

		<!-- Title and Description tags -->
		<title>Join the Adventure | TDAC Australia</title>
		<meta name="description" content="Watch the TDAC promo video to see how our inclusive programs empower individuals with disabilities to grow, connect, and create lasting memories." />

		<meta property="og:title" content="Join the Adventure | That Disability Adventure Company" />
		<meta property="og:locale" content="en" />
		<meta property="og:description" content="Watch the TDAC promo video to see how our inclusive programs empower individuals with disabilities to grow, connect, and create lasting memories." />
		<meta property="og:site_name" content="Join the Adventure | That Disability Adventure Company" />
		<meta property="og:url" content="https://thatdisabilityadventurecompany.com.au/promo-video" />
		<meta property="og:image" content="https://thatdisabilityadventurecompany.com.au/img/merch/merchPic4.webp" />
		<meta property="og:video" content="https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4" />
		<meta property="og:type" content="video.other" />

		<script type="application/ld+json">
	    {
	      "@context": "https://schema.org",
	      "@type": "VideoObject",
	      "name": "Join the Adventure | That Disability Adventure Company",
	      "description": "Watch the TDAC promo video to see how our inclusive programs empower individuals with disabilities to grow, connect, and create lasting memories.",
	      "thumbnailUrl": [
	        "https://thatdisabilityadventurecompany.com.au/img/merch/merchPic4.webp"
	       ],
	      "uploadDate": "2025-01-05T09:00:00+10:00",
	      "duration": "PT4M5S",
	      "contentUrl": "https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4",
	      "embedUrl": "https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4",
	      "interactionStatistic": {
	        "@type": "InteractionCounter",
	        "interactionType": { "@type": "WatchAction" },
	        "userInteractionCount": 1
	      }
	    }
	    </script>
	</head>

	<body id="theTop">
		<!-- Header section includes the alert banner and navigation -->
		<header>
			<?php 
			  include ('inc/header.php');
		  ?>
		</header>

		<!-- Main area for all the information needed -->
		<main class="darkBg">
			<!-- Content menu for the mobile devices -->
			<?php include ('inc/mobileNav.php');?>

			<section class="videoH1 navCompensation">
				<h1>Join the Adventure</h1>
				<p>Watch our introductory video to see what we're all about!</p>
			</section>

			<section class="videoPlayer">
				<iframe src="https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4" class="iFrameClass" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
					<video id="video" controls autoplay preload="none" poster="img/index/groupPic.webp">>
				  <source src="videos/tdacPromo.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
				</iframe>
			</section>
    	
    	<?php include ('inc/contactForm.php');?>
    	<?php include ('inc/faq.php'); ?>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
			<?php include ('inc/js/imageLoaderJs.php');?>
			<?php include ('inc/js/faqJs.php');?>
		</script>
	</body>
</html>