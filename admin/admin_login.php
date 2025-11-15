<?php
session_start();
require_once('./admin/includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['username'];

        echo "<script>alert('Welcome, ".$admin['username']."!'); window.location.href='./admin/dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password!'); window.location.href='admin_login.php';</script>";
    }
}
?>

<!-- <?php
if (isset($_GET['msg']) && $_GET['msg'] == 'logout') {
    echo "<script>alert('You have been logged out successfully!');</script>";
}
?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: linear-gradient(135deg, #def90eff, #f0eeabff); */
    background-image: url('./admin/all-product-img/pngtree-yellow.jpg');
    background-size: cover;
  }

  .login-box {
    background:transparent;
    padding: 40px 30px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    width: 350px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
  }

  .login-box h2 {
    margin-bottom: 25px;
    color: #000000ff;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .input-group {
    position: relative;
    margin-bottom: 25px;
  }

  .input-group input {
    width: 90%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 14px;
    transition: 0.3s;
  }

  .input-group label {
    position: absolute;
    left: 12px;
    top: 12px;
    color: #888;
    font-size: 14px;
    pointer-events: none;
    transition: 0.3s ease all;
  }

  .input-group input:focus,
  .input-group input:valid {
    border-color: #2a5298;
  }

  .input-group input:focus + label,
  .input-group input:valid + label {
    top: -8px;
    left: 10px;
    font-size: 12px;
    color: #2a5298;
    background: #fff;
    padding: 0 5px;
    border-radius: 4px;
  }

  button {
    width: 100%;
    padding: 12px;
    background: #2a5298;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
  }

  button:hover {
    background: #1e3c72;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>
</head>
<body>
  <div class="login-box">
  <h2>Admin Login</h2>
  <form method="POST">
    <div class="input-group">
      <input type="email" name="email" required>
      <label>Email Address</label>
    </div>
    <div class="input-group">
      <input type="password" name="password" required>
      <label>Password</label>
    </div>
    <button type="submit">Login</button>
  </form>
</div>
</body>
</html>
