<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Get in Touch with TDAC';
			$page_decription = 'Have questions or want to learn more about TDAC? Contact us today to explore our programs, services, and how we can support you or your loved ones!';
		  include ('inc/head.php');
		?>

	<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/contact" />
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

    	<!-- Get in Touch Panel -->
			<section class="panelContainer midBg" id="here">
				<section class="contactContainer white">
					<section class="contactTitleContainer">
						<img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg" loading="lazy">
						<h1 id="contactTitle">Get in touch today!</h1>
					</section>

					<section class="contactFormContainer">
						<form action="https://api.web3forms.com/submit" method="POST" id="form" class="needs-validation formStyle" novalidate>
			        <input type="hidden" name="access_key" value="573ef4c2-6842-46ff-afd6-1f62f672030f" />
			        <input type="hidden" name="subject" value="TDAC Web Enquiry" />
			        <input type="checkbox" name="botcheck" id="" style="display: none;" />
			      	<div class="inputContainer">
			          <input type="text" name="name" id="first_name" placeholder="Firstname*" required class="formInput"/>
			          <div class="empty-feedback invalid-feedback">
			            Please provide your first name.
			          </div>
			        </div>
			        <div class="inputContainer">
			          <input type="text" name="last_name" id="lname" placeholder="Lastname*" required class="formInput">
			          <div class="empty-feedback invalid-feedback">
			            Please provide your last name.
			          </div>
			        </div>
			        <div class="inputContainer">
			          <input type="email" name="email" id="email" placeholder="your@email.com*" required class="formInput" />
			          <div class="empty-feedback">
			            Please provide your email address.
			          </div>
			          <div class="invalid-feedback">
			            Please provide a valid email address.
			          </div>
			        </div>
			        <div class="inputContainer">
			          <input type="text" name="phone" id="phone" placeholder="+61 456 789 123*" required class="formInput" />
			          <div class="empty-feedback invalid-feedback">
			            Please provide your phone number.
			          </div>
			        </div>
			        <div class="formMessage">
			          <textarea rows="5" name="message" id="message" placeholder="Your Message" class="formMessage" required></textarea>
			        </div>
			        <button type="submit" id="formBtn" class="topBtns whiteBg">
			          Send Message
			        </button>
			        <p id="result"></p>
			      </form>
					</section>
				</section>
			</section>
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