<!-- Get in Touch Panel -->
<section class="panelContainer midBg" id="here">
	<section class="contactContainer white">
		<section class="contactTitleContainer">
			<img class="lrgIcon" alt="Contact Form Icon" src="icons/email.svg" loading="lazy">
			<h2>Get in touch today!</h2>
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
        <button type="submit" id="formBtn" class="topBtns accentBlueBg">
          Send Message
        </button>
        <p id="result"></p>
      </form>
		</section>
	</section>
</section>