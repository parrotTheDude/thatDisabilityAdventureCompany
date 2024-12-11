<?php include ('inc/alertBanner.php'); ?>

<!-- Nav section including logo -->
<nav>
	<!-- Logo container -->
	<section class="logoContainer">
		<img  class="logo" alt="TDAC Logo" src="icons/logo.webp">
	</section>

	<!-- Navigation Menu -->
	<section class="mobile">
		<?php include ('inc/desktopNav.php'); ?>

		<!-- Mobile burger menu -->
  	<section class='mobileNav' onclick="menuSwitch(this)">
  		<div class="container">
			  <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
			</div>
  	</section>

  </section>
</nav>