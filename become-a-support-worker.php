<?php require_once('inc/variables.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $page_title = 'Join Our Team | TDAC Australia';
      $page_decription = 'Ready to make a difference? Apply now to become a support worker with TDAC and help empower people with disabilities across Victoria.';
      $page_name = '/become-a-support-worker';
      include ('inc/head.php');
    ?>

    <link rel="canonical" href="https://thatdisabilityadventurecompany.com.au/support-worker" />
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>
  </head>
  <body id="theTop">
    <header>
      <?php include ('inc/header.php'); ?>
    </header>

    <main class="darkBg">
      <?php include ('inc/mobileNav.php'); ?>

      <section class="topContact">
        <img class="lrgIcon" alt="Support Worker Icon" src="icons/team.svg">
        <h1>Become a Support Worker with TDAC</h1>
        <p>Join our passionate team and support people with disabilities to thrive through adventure and connection.</p>
      </section>

      <section class="panelContainer midBg">
        <section class="contactContainer white">
          <section class="contactTitleContainer">
            <h2 id="contactTitle">Apply Now</h2>
            <p>Fill out the form below and we’ll be in touch soon.</p>
          </section>

          <section class="contactFormContainer">
            <form method="POST" id="supportWorkerForm" class="formStyle" enctype="multipart/form-data" novalidate>
              <input type="text" name="honeypot" style="display: none;">

              <div class="inputContainer">
                <input type="text" name="name" placeholder="Full Name*" required class="formInput" />
              </div>

              <div class="inputContainer">
                <input type="email" name="email" placeholder="Email Address*" required class="formInput" />
              </div>

              <div class="inputContainer">
                <input type="text" name="phone" placeholder="Phone Number*" required class="formInput" />
              </div>

              <div class="inputContainer">
                <input type="text" name="location" placeholder="Your Location*" required class="formInput" />
              </div>

              <div class="formItem">
                <label for="experience_rating">How would you rate your experience supporting people with a disability?*</label>
                <select name="experience_rating" id="experience_rating" class="formInput" required>
                  <option value="">Please select</option>
                  <option value="None">None</option>
                  <option value="Beginner">Less than a year</option>
                  <option value="Moderate">1 - 2 years</option>
                  <option value="Extensive">More than 2 years</option>
                </select>
              </div>

              <div class="formItem">
                <label class="formLabel">Upload Resume (PDF only):</label>
                <input type="file" name="resume" accept=".pdf" required class="formInput" />
              </div>

              <div class="formMessage">
                <textarea name="message" rows="6" placeholder="Tell us a bit about yourself and why you want to join TDAC*" class="formMessage" required></textarea>
              </div>

              <div class="formBtnContainer">
                <button type="submit" id="formBtn" class="topBtns whiteBg">Send Message</button>
              </div>
            </form>

            <div id="formMessage" style="margin-top: 1rem; font-weight: bold;"></div>

            <script>
              const form = document.getElementById('supportWorkerForm');
              const messageBox = document.getElementById('formMessage');
              const formBtn = document.getElementById('formBtn');

              // Auto-capitalize name field
              document.querySelector('input[name="name"]').addEventListener('blur', function () {
                this.value = this.value
                  .toLowerCase()
                  .split(' ')
                  .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                  .join(' ');
              });

              // Resume size limit (5MB)
              document.querySelector('input[name="resume"]').addEventListener('change', function () {
                if (this.files[0].size > 5 * 1024 * 1024) {
                  alert("Resume must be under 5MB.");
                  this.value = "";
                }
              });

              form.addEventListener('submit', function (event) {
                event.preventDefault();
                messageBox.textContent = 'Sending...';
                formBtn.disabled = true;

                grecaptcha.ready(function () {
                  grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', { action: 'submit' }).then(function (token) {
                    const formData = new FormData(form);
                    formData.append('g-recaptcha-response', token);

                    fetch('inc/send-support-application.php', {
                      method: 'POST',
                      body: formData
                    })
                      .then(res => res.json())
                      .then(data => {
                        if (data.success) {
                          messageBox.innerHTML = '<span style="color:green">✅ Application sent! We’ll be in touch soon.</span>';
                          form.reset();
                        } else {
                          messageBox.innerHTML = '<span style="color:red">❌ ' + (data.message || 'Something went wrong.') + '</span>';
                        }
                        formBtn.disabled = false;
                      })
                      .catch(() => {
                        messageBox.innerHTML = '<span style="color:red">❌ Network error.</span>';
                        formBtn.disabled = false;
                      });
                  });
                });
              });
            </script>
          </section>
        </section>
      </section>
    </main>

    <?php include ('inc/footer.php'); ?>

    <script>
      <?php include ('inc/js/coreJs.php'); ?>
    </script>
  </body>
</html>