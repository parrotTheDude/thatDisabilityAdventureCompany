<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Get in Touch with TDAC';
			$page_decription = 'Have questions or want to learn more about TDAC? Contact us today to explore our programs, services, and how we can support you or your loved ones!';
			$page_name = '/contact';
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

			<section class="topContact">
				<img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg">
				<h1>Join the TDAC Community</h1>
				<p>Check out our FAQ panel underneath the contact form below.</p>
			</section>

    	<!-- Get in Touch Panel -->
			<section class="panelContainer midBg" id="here">
				<section class="contactContainer white">
					<section class="contactTitleContainer">
						<h2 id="contactTitle">Get in touch today!</h2>
						<br />
					</section>

					<section class="contactFormContainer">
			      <form action="thank-you" method="POST" id="form" class="formStyle">
			      	<input type="text" name="honeypot" id="honeypot" style="display: none;" autocomplete="off">
			        <div class="inputContainer">
			          <input type="text" name="name" id="first_name" placeholder="Firstname*" required class="formInput"/>
			        </div>
			        <div class="inputContainer">
			          <input type="text" name="last_name" id="last_name" placeholder="Lastname*" required class="formInput">
			        </div>
			        <div class="inputContainer">
			          <input type="email" name="email" id="email" placeholder="your@email.com*" required class="formInput" />
			        </div>
			        <div class="inputContainer">
			          <input type="number" name="phone" id="phone" title="Australian number must be 10 digits long. Format like this example: 0456654456" placeholder="0456 654 654" required class="formInput" />
			        </div>
			        <div class="inputContainer">
			          <select name="age" id="age" class="formInput" required placeholder="Age Range">
			            <option value="18-22">18-22</option>
			            <option value="23-30">23-30</option>
			            <option value="31-39">31-39</option>
			            <option value="40-45">40-45</option>
			          </select>
			        </div>
			        <div class="inputContainer">
			          <select name="location" id="location" class="formInput" required placeholder="location">
			            <option value="Melbourne">Melbourne</option>
			            <option value="Gippsland">Gippsland</option>
			            <option value="Mornington Peninsula">Mornington Peninsula</option>
			          </select>
			        </div>
			        <div class="formMessage">
			          <textarea rows="5" name="message" id="message" placeholder="Your Message" class="formMessage" required></textarea>
			        </div>
			        <div class="radioCheck">
			        	<label>Preferred Contact Method:</label><br>
    						<input type="radio" name="preferred_contact" value="email" checked> Email
    						<input type="radio" name="preferred_contact" value="phone"> Phone
			        </div>
			        <div class="formBtnContainer">
			          <button type="submit" id="formBtn" name="submit" class="topBtns whiteBg">Send Message</button>
			        </div>
			      </form>
			    </section>
				</section>
			</section>

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