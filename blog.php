<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Blog | TDAC Australia';
			$page_decription = 'A page to display all of our latest blogs!';
			$page_name = '/blog';
		  include ('inc/blogHead.php');
		?>
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
						<h2>Check out our latest blogs written by our team members.</h2>
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

				</section>
		</main>

		<?php include ('inc/footer.php');?>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/js/coreJs.php');?>
		</script>
	</body>
</html>