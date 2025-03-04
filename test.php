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
   					<p id="formMessage" class="contactTitleContainer mt-4 text-gray-600 hidden"></p>
					</section>

					<section class="contactFormContainer">
			      <form id="contactForm" method="POST" action="https://accounts.thatdisabilityadventurecompany.com.au/contact" class="formStyle">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="honeypot" id="honeypot" style="display: none;" autocomplete="off">
<div class="honeypot-container">
    <label for="user_comment">Leave this field blank:</label>
    <input type="text" name="user_comment" id="user_comment">
</div>

   <div class="inputContainer">
    <input type="text" name="name" id="first_name" placeholder="Firstname*" required class="formInput"
    oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1).toLowerCase();">
    <p id="first_name_error" class="text-red-500 text-sm hidden"></p>
</div>

<div class="inputContainer">
    <input type="text" name="last_name" id="last_name" placeholder="Lastname*" required class="formInput"
    oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1).toLowerCase();">
    <p id="last_name_error" class="text-red-500 text-sm hidden"></p>
</div>

<div class="inputContainer">
    <input type="email" name="email" id="email" placeholder="your@email.com*" required class="formInput">
    <p id="email_error" class="text-red-500 text-sm hidden"></p>
</div>

<div class="inputContainer">
    <input type="text" name="phone" id="phone" pattern="^0[0-9]{9}$"
        title="Australian number must be 10 digits long. Format: 0456654456"
        placeholder="0456 654 654" required class="formInput">
    <p id="phone_error" class="text-red-500 text-sm hidden"></p>
</div>
    <div class="inputContainer">
        <select name="age" id="age" class="formInput" required>
            <option value="18-22">18-22</option>
            <option value="23-30">23-30</option>
            <option value="31-39">31-39</option>
            <option value="40-45">40-45</option>
        </select>
    </div>
    <div class="inputContainer">
        <select name="location" id="location" class="formInput" required>
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
        <button type="submit" id="formBtn" name="submit" class="topBtns whiteBg">
    <span id="formBtnText">Send Message</span>
    <span id="formLoader" class="hidden animate-spin border-2 border-white border-t-transparent rounded-full w-4 h-4"></span>
</button>
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
			
			document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let honeypot = document.getElementById("honeypot").value;
    let userComment = document.getElementById("user_comment").value;

    if (honeypot !== "" || userComment !== "") {
        console.warn("Spam detected - blocking submission.");
        document.getElementById("formMessage").textContent = "Spam detected. Submission blocked.";
        document.getElementById("formMessage").classList.remove("hidden", "text-green-600");
        document.getElementById("formMessage").classList.add("text-red-600");
        return;
    }

    let isValid = true;

    // Clear previous errors
    document.querySelectorAll(".text-red-500").forEach(el => el.classList.add("hidden"));

    let firstName = document.getElementById("first_name");
    let lastName = document.getElementById("last_name");
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");

    if (firstName.value.trim() === "") {
        document.getElementById("first_name_error").textContent = "First name is required.";
        document.getElementById("first_name_error").classList.remove("hidden");
        isValid = false;
    }

    if (lastName.value.trim() === "") {
        document.getElementById("last_name_error").textContent = "Last name is required.";
        document.getElementById("last_name_error").classList.remove("hidden");
        isValid = false;
    }

    if (!email.value.includes("@") || !email.value.includes(".")) {
        document.getElementById("email_error").textContent = "Enter a valid email.";
        document.getElementById("email_error").classList.remove("hidden");
        isValid = false;
    }

    if (phone.value.length !== 10) {
        document.getElementById("phone_error").textContent = "Phone must be 10 digits.";
        document.getElementById("phone_error").classList.remove("hidden");
        isValid = false;
    }

    if (!isValid) return;

    let formBtn = document.getElementById("formBtn");
    let formBtnText = document.getElementById("formBtnText");
    let formLoader = document.getElementById("formLoader");

    formBtn.disabled = true;
    formBtnText.textContent = "Sending...";
    formLoader.classList.remove("hidden");

    let formData = new FormData(this);
    formData.append('_token', document.querySelector('input[name="_token"]').value);
    let formMessage = document.getElementById("formMessage");

    -fetch("https://accounts.thatdisabilityadventurecompany.com.au/contact", {
        method: "POST",
        headers: { "X-Requested-With": "XMLHttpRequest" },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        formMessage.textContent = data.message;
        formMessage.classList.remove("hidden");
        formMessage.classList.add(data.success ? "text-green-600" : "text-red-600");
    })
    .catch(error => {
        formMessage.textContent = "Something went wrong. Please try again.";
        formMessage.classList.remove("hidden");
        formMessage.classList.add("text-red-600");
    })
    .finally(() => {
        formBtn.disabled = false;
        formBtnText.textContent = "Send Message";
        formLoader.classList.add("hidden");
    });
});
		</script>
	</body>
</html>