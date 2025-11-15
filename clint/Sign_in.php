<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login / Sign Up - balaji wafer</title>
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" href="https://fontawesome.com/icons/backward?f=classic&s=light">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <a href="index.php" class="BT"><i class="fa-solid fa-backward"></i></a>
  
  <div class="auth-container">
    <div class="auth-image">
      <img src="../assest/crunchex.png" alt="" />
    </div>

    <div class="auth-form">
      <div class="toggle-buttons">
        <button id="showLogin" class="active">Login</button>
        <button id="showSignup">Sign Up</button>
      </div>

      <form id="loginForm" class="form active" method="POST" action="login.php">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>

      <form id="signupForm" class="form" method="POST" action="signup.php">
        <h2>Sign Up</h2>
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="tel" name="phone" placeholder="Phone Number" required />
        <button type="submit">Register</button>

    
      </form>
    </div>
  </div>

  <script src="../js/login.js"></script>
</body>

</html>