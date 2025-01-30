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