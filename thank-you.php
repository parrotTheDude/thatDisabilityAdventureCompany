<?php 
// Include the sendmail logic
require_once('inc/sendmail.php'); 

// Ensure variables are initialized to avoid undefined variable errors
$name = $name ?? 'Guest';
$email = $email ?? '';
$phone = $phone ?? 'N/A';
$message = $message ?? 'No message provided.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $page_title = 'Thank you for your enquiry!';
        $page_decription = 'Thanks for getting in contact! Get ready to explore our programs, services, and how we can support you or your loved ones!';
        $page_name = '/thank-you';
        include('inc/head.php');
    ?>
    <link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/thank-you" />
</head>

<body id="theTop">
    <!-- Header section includes the alert banner and navigation -->
    <header>
        <?php 
            $page_name = 'index';
            include('inc/header.php');
        ?>
    </header>

    <!-- Main area for all the information needed -->
    <main class="darkBg">
        <!-- Content menu for the mobile devices -->
        <?php include('inc/mobileNav.php'); ?>

        <!-- Get in Touch Panel -->
        <section class="panelContainer navCompensation midBg" id="here">
            <section class="contactContainer white">
                <section class="contactTitleContainer">
                    <img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg" loading="lazy">
                        <h1 id="contactTitle">Thanks for getting in touch, <?php echo htmlspecialchars($name); ?></h1>
                        <p>We will be in touch soon.</p>
                </section>

                <section class="contactFormContainer">
                        <section class="formContainer">
                            <p>Here are your message details:</p>
                            <br />
                            <p>Email: <?php echo htmlspecialchars($email); ?></p>
                            <p>Telephone: <?php echo htmlspecialchars($phone); ?></p>
                            <p>Message:<br /><?php echo nl2br(htmlspecialchars($message)); ?></p>
                        </section>
                    <section class="btnsContainer">
                        <div class="topBtns accentBlueBg" id="thanksBtn">
                            <a href="https://thatdisabilityadventurecompany.com.au/" class="linkBtn" id="blueTxt">Take me home!</a>
                        </div>
                    </section>
                </section>
            </section>
        </section>
    </main>

    <?php include('inc/footer.php'); ?>

    <!-- JS Section to make the mobile menu function and hide the rest of the content when it is active -->
    <script>
        <?php include('inc/js/coreJs.php'); ?>
        <?php include('inc/js/imageLoaderJs.php'); ?>
    </script>
</body>
</html>