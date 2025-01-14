<!-- Get in Touch Panel -->
<section class="panelContainer midBg" id="here">
  <section class="contactContainer white">
    <section class="contactTitleContainer">
      <img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg" loading="lazy">
      <h2 id="contactTitle">Get in touch today!</h2>
    </section>

    <section class="contactFormContainer">
      <form action="thank-you" method="POST" id="form" class="formStyle">
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
        <div class="formMessage">
          <textarea rows="5" name="message" id="message" placeholder="Your Message" class="formMessage" required></textarea>
        </div>

        <!-- To be used if and when I upgrade the plan again -->
        <!-- <div class="h-captcha" data-sitekey="d31cc366-e12a-4ec0-89e0-e4e051de8d32"></div>
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script> -->

        <div class="formBtnContainer">
          <button type="submit" id="formBtn" name="submit" class="topBtns whiteBg">Send Message</button>
        </div>
      </form>
    </section>
  </section>
</section>