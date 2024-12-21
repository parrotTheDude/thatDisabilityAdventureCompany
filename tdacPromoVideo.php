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
		<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/tdacPromoVideo" />

		<!-- Title and Description tags -->
		<title>Promo Video for That Disability Adventure Company</title>
		<meta name="description" content="Watch the TDAC promo to see how our inclusive programs empower individuals with disabilities to grow, connect, and create lasting memories." />

		<meta property="og:title" content="Inclusive NDIS Adventures & Disability Programs | TDAC Australia" />
		<meta property="og:locale" content="en" />
		<meta property="og:description" content="Empowering individuals with disabilities in Melbourne and Gippsland through tailored programs, fostering skills, friendships, and unforgettable adventures." />
		<meta property="og:site_name" content="That Disability Adventure Company" />
		<meta property="og:url" content="https://thatdisabilityadventurecompany.com.au/" />
		<meta property="og:image" content="https://thatdisabilityadventurecompany.com.au/img/merch/merchPic4.webp" />
		<meta property="og:type" content="website" />

		<meta name="ahrefs-site-verification" content="29ed00ef87140d2c7762f181473c1d417200feb2d956e5db6a1699253c6ebb45">

		<script type="application/ld+json">
	    {
	      "@context": "https://schema.org",
	      "@type": "VideoObject",
	      "name": "Who is That Disability Adventure Company?",
	      "description": "That Disability Adventure Company (TDAC) is committed to empowering individuals with disabilities through inclusive, experience-based programs designed to inspire growth and foster connections. Our offerings include group activities, overnight stays, and life skills development, all tailored to align with NDIS goals. Based in Melbourne, Gippsland and the mornington peninsula, TDAC provides a supportive environment where participants can build confidence, enhance independence, and create lasting memories while achieving personal goals.",
	      "thumbnailUrl": [
	        "https://thatdisabilityadventurecompany.com.au/img/merch/merchPic4.webp",
	       ],
	      "uploadDate": "2024-12-16T08:00:00+08:00",
	      "duration": "PT1M54S",
	      "contentUrl": "https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4",
	      "embedUrl": "https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4",
	      "interactionStatistic": {
	        "@type": "InteractionCounter",
	        "interactionType": { "@type": "WatchAction" },
	        "userInteractionCount": 5647018
	      }
	    }
	    </script>
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

			<section class="videoH1">
				<h1>TDAC Promotional Video</h1>
			</section>

			<section class="videoPlayer">
				<iframe src="https://thatdisabilityadventurecompany.com.au/videos/tdacPromo.mp4" class="iFrameClass" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
					<video id="video" controls>
				  <source src="videos/tdacPromo.mp4" type="video/mp4" preload="none">
					Your browser does not support the video tag.
				</video>
				</iframe>
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