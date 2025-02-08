<footer class="darkBg white">
	<section class="footLogoCon">
		<img class="footerLogo" alt="TDAC White Logo" src="icons/whiteLogo.webp" loading="lazy">
	</section>

	<section class="footerNavContainer">
		<menu class="footerNav">
			<li><a href="https://thatdisabilityadventurecompany.com.au/" class="accentOrg">Home</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/about-us">About Us</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/group-activities">Group Activites</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/overnight-stays">Overnight Stays</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/lifeskills">Lifeskills</a></li>
		</menu>
		<menu class="footerNav">
			<li><a href="https://thatdisabilityadventurecompany.com.au/one-to-one">One to One</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/contact">Contact Us</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/privacy">Privacy Policy</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/blog">Blog</a></li>
		</menu>
	</section>

	<!-- Newsletter Subscription Box in Footer -->
	<div id="newsletter-container">
	  <form id="newsletter-form">
	  	<label>Subscribe to our newsletter</label>
	    <input type="email" id="newsletter-email" name="email" placeholder="Enter your email" required>
	    <button type="submit">Subscribe</button>
	  </form>
	  <p id="newsletter-message"></p>
	</div>

	<section class="socialIcons">
		<a href="https://www.instagram.com/thatdisabilityadventurecompany/" target="_blank"><img class="icon" alt="Instagram Icon" src="icons/insta.svg" loading="lazy"></a>
		<span class="gap"></span>
		<img src="icons/up.svg" alt="Up Arrow" class="icon" onclick="toTheTop()" loading="lazy">
		<span class="gap"></span>
		<a href="https://www.facebook.com/ThatDisabilityAdventureCompany/" target="_blank"><img class="icon" alt="Facebook Icon" src="icons/facebook.svg" loading="lazy"></a>
	</section>

	<section class="rights">
		<p><i>That Disability Adventure Company</i> acknowledges Aboriginal and Torres Strait Islander peoples as the First Peoples of Australia. We pay respect to them, their cultural and spiritual heritage, and to Elders past, present, and emerging. We acknowledge the ongoing impact of intergenerational trauma that has occurred since colonisation and commit to truth-telling as we walk alongside them toward reconciliation.</p>
		<p><i>That Disability Adventure Company</i> welcomes people from all cultures, faiths, backgrounds, and experiences, and celebrates all identities, genders, sexes, orientations and abilities. We embrace diverse voices in our decision-making to ensure we deliver inclusive services.</p>
		<img src="icons/australia.svg" alt="Australian Flag" class="flags" loading="lazy">
		<img src="icons/aborigin.svg" alt="Aboriginal Flag" class="flags" loading="lazy">
	</section>

	<section class="lastWord">
		<?php
			echo "<p class='cc'>Copyright &copy; " . date('Y') . " thatdisabilityadventurecompany.com.au</p>";
		?>
		<aside class="bottomContainer">
			<a target="_blank" href="https://www.bowermandigital.com/">
				<p class="footerNote">Built, designed and optimised by Bowerman Digital</p>
			</a>
		</aside>
	</section>
</footer>

<!-- 100% privacy-first analytics -->
<script data-collect-dnt="true" async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
<noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif?collect-dnt=true" alt="" referrerpolicy="no-referrer-when-downgrade"/></noscript>

<script>
document.getElementById("newsletter-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    var email = document.getElementById("newsletter-email").value;
    var messageBox = document.getElementById("newsletter-message");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "https://thatdisabilityadventurecompany.com.au/admin/subscribe-newsletter", true); // Use HTTPS
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log("AJAX Response:", xhr.responseText); // Debugging log
            console.log("AJAX Status:", xhr.status);

            if (xhr.status === 200) {
                messageBox.innerHTML = xhr.responseText;
                messageBox.style.color = "green";
                document.getElementById("newsletter-form").reset(); // Clear input field
            } else {
                messageBox.innerHTML = "Error subscribing. Try again.";
                messageBox.style.color = "red";
            }
        }
    };
    xhr.send("email=" + encodeURIComponent(email));
});
</script>

