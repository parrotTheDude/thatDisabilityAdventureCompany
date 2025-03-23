<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Blog | TDAC Australia';
			$page_decription = 'A page to display all of our latest blogs!';
			$page_name = '/blog';
		  include ('inc/blogHead.php');
		?>
		<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/blog" />
	</head>

	<body id="theTop">
		<!-- Header section includes the alert banner and navigation -->
		<header>
			<?php 
			  include ('inc/header.php');
		  ?>
		</header>

		<!-- Main area for all the information needed -->
		<main>
			<!-- Content menu for the mobile devices -->
			<?php include ('inc/mobileNav.php');?>

			<article>
				<section class="articleTitleContainer">
					<section class="textContainerSmaller">
						<h1 class="articleTitle">Our Blogs</h1>
						<p>Welcome to the TDAC Blog! Here, we share stories, insights, and updates about our programs and the incredible journeys of our participants. Dive in to learn more about our community and the adventures we embark on together.</p>
					</section>
				</section>

				<div class="progressbarHead">
				  <div class="progress-container">
				    <div class="progress-bar" id="myBar"></div>
				  </div>
				</div>

				<!-- Displays all the panels -->
				<section class="blogDisplayPanel">
					
				<!-- Blog Panel -->
				<section class="blogPanel">
					<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/arcades">
						<section class="blogImgContainer">
							<img src="img/index/leMans.webp" alt="Arcades">
						</section>
						<section class="blogText">
							<h2>Top Arcades in Melbourne & Why They’re Perfect for Everyone</h2>
							<section class="blogDetails">
								<p>Explore Melbourne's best arcades and why they're great for everyone — including those with disabilities. Discover inclusive fun for all!</p>
							</section>
							<p><b>Read more...</b></p>
						</section>
					</a>
				</section>

				<section class="blogPanel">
					<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/ndis-autism">
						<section class="blogImgContainer">
							<img src="img/blog/assistance2.webp" alt="Autism NDIS">
						</section>
						<section class="blogText">
							<h2>Autism and the NDIS</h2>
							<section class="blogDetails">
								<p>Autism is one of the most common disabilities supported by the NDIS. The scheme recognises that autism exists on a spectrum, meaning that individuals with autism may require varying levels of support.</p>
							</section>
							<p><b>Read more...</b></p>
						</section>
					</a>
				</section>

				<section class="blogPanel">
					<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/assistance-with-daily-life-ndis">
						<section class="blogImgContainer">
							<img src="img/blog/assistance1.webp" alt="Assistance with daily life">
						</section>
						<section class="blogText">
							<h2>NDIS Assistance with Daily Life</h2>
							<section class="blogDetails">
								<p>Supporting Independent Living through One-to-One Support</p>
							</section>
							<p><b>Read more...</b></p>
						</section>
					</a>
				</section>

				<section class="blogDisplayPanel">
					<!-- Blog Panel -->
					<section class="blogPanel">
						<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/disability-support-services">
							<section class="blogImgContainer">
								<img src="img/merch/merchPic2.webp" alt="Disability Support Services">
							</section>
							<section class="blogText">
								<h2>Group-based activities</h2>
								<section class="blogDetails">
									<p>Creating confidence and a sense of belonging for those with mild to moderate disabilities</p>
								</section>
								<p><b>Read more...</b></p>
							</section>
						</a>
					</section>

					<section class="blogPanel">
						<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/disability-day-programs">
							<section class="blogImgContainer">
								<img src="img/merch/merchPic4.webp" alt="Disability Day Programs">
							</section>
							<section class="blogText">
								<h2>Disability Day Programs</h2>
								<section class="blogDetails">
									<p>For individuals with disabilities, finding meaningful ways to connect, grow, and thrive is essential. Disability day programs help people grow, make friends, and feel included in their community.</p>
								</section>
								<p><b>Read more...</b></p>
							</section>
						</a>
					</section>

					<section class="blogPanel">
						<a class="blogLink" href="https://thatdisabilityadventurecompany.com.au/blog/day-programs-for-adults-with-disabilities-in-mornington-peninsula">
							<section class="blogImgContainer">
								<img src="img/merch/merchPic3.webp" alt="Day Programs for Adults with Disabilities in Mornington Peninsula">
							</section>
							<section class="blogText">
								<h2>Day Programs for Adults with Disabilities in Mornington Peninsula</h2>
								<section class="blogDetails">
									<p>We provide engaging, inclusive, and life-enriching day programs for adults with disabilities in the Mornington Peninsula.</p>
								</section>
								<p><b>Read more...</b></p>
							</section>
						</a>
					</section>

				</section>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
		</script>
	</body>
</html>