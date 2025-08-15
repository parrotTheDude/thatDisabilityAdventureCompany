<?php require_once('inc/variables.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$page_title = 'Contact Us | TDAC Australia';
			$page_decription = 'Have questions or want to learn more about TDAC? Contact us today to explore our programs, services, and how we can support you or your loved ones!';
			$page_name = '/contact';
		  include ('inc/head.php');
		?>

	<link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/contact" />
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>
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
			  <p>Have questions or want to connect? Fill out the form below or browse our FAQs.</p>

			  <!-- CTA: Support Worker Subsection -->
			  <div class="supportWorkerCTA" style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid rgba(255,255,255,0.2);">
			    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">Are you a Support Worker?</h3>
			    <p style="font-size: 1rem; margin-bottom: 1.5rem; max-width: 600px; margin-left: auto; margin-right: auto;">
			      Submit your application with your resume today.
			    </p>
			    <section class="btnsContainer" id="applyBtn">
	  					<div class="topBtns accentBlueBg howBtn"><a href="https://thatdisabilityadventurecompany.com.au/become-a-support-worker" class="linkBtn" id="linkHow">Apply Now!</a></div>
	  			</section>
			  </div>
			</section>

    	<!-- Get in Touch Panel -->
			<section class="panelContainer midBg" id="here">
				<section class="contactContainer white">
					<section class="contactTitleContainer">
						<h2 id="contactTitle">Get in touch today!</h2>
						<br />
					</section>

					<section class="contactFormContainer">
			      <!-- ✅ Contact Form -->
						<form method="POST" id="contactForm" class="formStyle" novalidate>
						  <!-- Honeypots -->
						  <input type="text" name="honeypot" id="honeypot" style="display: none;" autocomplete="off">
						  <div class="honeypot-container">
						    <label for="user_comment">Leave this field blank:</label>
						    <input type="text" name="user_comment" id="user_comment">
						  </div>

						  <div class="inputContainer">
						    <input type="text" name="name" id="first_name" placeholder="Firstname*" required class="formInput" />
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
						    <select name="age" id="age" class="formInput" required>
						      <option value="">Age Range</option>
						      <option value="18-22">18-22</option>
						      <option value="23-30">23-30</option>
						      <option value="31-39">31-39</option>
						      <option value="40-45">40-45</option>
						    </select>
						  </div>

						  <div class="inputContainer">
						    <select name="location" id="location" class="formInput" required>
						      <option value="">Location</option>
						      <option value="Melbourne">Melbourne</option>
						      <option value="Gippsland">Gippsland</option>
						      <option value="Mornington Peninsula">Mornington Peninsula</option>
						    </select>
						  </div>

						  <div class="formMessage">
						    <textarea rows="5" name="message" id="message" placeholder="Your Message" class="formMessage" required></textarea>
						  </div>

						  <div class="formBtnContainer">
						    <button type="submit" id="formBtn" class="topBtns whiteBg">Send Message</button>
						  </div>
						</form>

						<div id="formMessage" style="margin-top: 1rem;"></div>

						<script>
						const form = document.getElementById('contactForm');
						const messageBox = document.getElementById('formMessage');

						form.addEventListener('submit', function (event) {
						  event.preventDefault();
						  messageBox.textContent = 'Sending...';

						  grecaptcha.ready(function () {
						    grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', { action: 'submit' }).then(function (token) {
						      const formData = new FormData(form);
						      formData.append('g-recaptcha-response', token);

						      fetch('inc/sendmail.php', {
						        method: 'POST',
						        body: formData
						      })
						      .then(res => res.json())
						      .then(data => {
						        if (data.success) {
						          messageBox.textContent = '✅ Message sent!';
						          form.reset();
						        } else {
						          messageBox.textContent = '❌ ' + (data.message || 'Something went wrong.');
						        }
						      })
						      .catch(() => {
						        messageBox.textContent = '❌ Network error.';
						      });
						    });
						  });
						});
						</script>
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