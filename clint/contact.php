<?php include '../clint/navbar.php'; ?>   <!-- HEADER -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Balaji Wafer</title>
  <link rel="stylesheet" href="../css/contact-us.css">

</head>
<body>
  <div class="contact-container">
    <div class="contact-form">
      <h1>Contact Balaji Wafer</h1>
      <p>Let’s connect. Our representative will get back to you shortly.</p>
      <form action="save_contact.php" method="POST">
        <div class="form-group">
          <input type="text" name="full_name" placeholder="Full name" required>
          <input type="email" name="email" placeholder="Email address" required>
        </div>
        <div class="form-group">
          <input type="text" name="phone" placeholder="Phone (optional)">
          <input type="text" name="subject" placeholder="Subject" required>
        </div>
        <textarea name="message" placeholder="Your message" required></textarea>
        <p class="privacy-text">
          By sending you agree to our <a href="#">privacy policy</a>.
        </p>
        <button type="submit" class="btn">Send Message</button>
      </form>
      <p class="call-text">Prefer to call? <span>+91 98765 43210</span></p>
    </div>
    <div class="contact-info">
      <div class="company">
        <div class="logo"><img src="../assest/images.logo.png" alt=""></div>
        <div>
          <h2>Balaji Namkeen</h2>
          <p>Balaji Wafers Private Limited</p>
        </div>
      </div>
      <div class="info-item">
        <strong>Factory & HQ</strong>
        <p>Survey No.19, Vajdi (Vad), Kalawad Road, Lodhika, Rajkot - 360021, Gujarat (India).</p>
      </div>
      <div class="info-item">
        <strong>Phone</strong>
        <p>+91-281-2783755 / 56 <br>+91-7069014141</p>
      </div>
      <div class="info-item">
        <strong>Email</strong>
        <p>support@balajiwafer.example</p>
      </div>
      <div class="map">
        <img src="../assest/map1.png" alt="map">
      </div>
      <div class="social">
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
        <a href="index.php">Home</a>
      </div>
    </div>
  </div>
  <?php include '../clint/footer.php'; ?>   
</body>
</html>
