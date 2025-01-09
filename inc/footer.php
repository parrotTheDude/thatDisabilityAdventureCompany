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
			<li><a href="https://thatdisabilityadventurecompany.com.au/sitemap.xml" target="_blank">Sitemap</a></li>
		</menu>
		<menu class="footerNav">
			<li><a href="https://thatdisabilityadventurecompany.com.au/one-to-one">One to One</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/register">Become a participant</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/careers">Join our team!</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/disability-day-programs">Blog</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/contact">Contact Us</a></li>
			<li><a href="https://thatdisabilityadventurecompany.com.au/privacy">Privacy Policy</a></li>

		</menu>
	</section>

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

<script type="text/javascript">
	const form = document.getElementById('form');
	form.addEventListener('submit', function(e) {
    const hCaptcha = form.querySelector('textarea[name=h-captcha-response]').value;

    if (!hCaptcha) {
        e.preventDefault();
        alert("Please fill out captcha field")
        return
    }
	});
</script>

<?php include ('inc/analytics.php');?>

