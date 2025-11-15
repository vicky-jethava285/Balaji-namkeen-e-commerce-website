<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
    /* ---------- Reset ---------- */
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html,
body {
  height: 100%;
  width: 100%;
font-family: vvvv, sans-serif;
 background-color: #f9f9f9;
}


    /* ---------- Navbar ---------- */
    .navbar {
      background: #343a40;
      color: #fff;
      padding: 30px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar h2 {
      font-size: 20px;
      font-weight: 600;
    }

    .nav-links {
      display: flex;
      gap: 20px;
      list-style: none;
    }

    .nav-links li {
      display: inline-block;
    }

    .nav-links li a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
      padding: 6px 12px;
      border-radius: 4px;
      transition: 0.3s;
      display: block;
    }

    .nav-links li a:hover,
    .nav-links li a.active {
      background: #ffc107;
      color: #000;
    }

    /* ---------- Hamburger (Mobile) ---------- */
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .menu-toggle span {
      background: #fff;
      height: 3px;
      width: 25px;
      margin: 4px 0;
      border-radius: 2px;
      transition: 0.3s;
    }

    @media (max-width: 768px) {
      .nav-links {
        position: absolute;
        top: 60px;
        left: -100%;
        flex-direction: column;
        background: #343a40;
        width: 100%;
        text-align: center;
        transition: 0.3s;
        padding: 15px 0;
      }

      .nav-links.active {
        left: 0;
      }

      .menu-toggle {
        display: flex;
      }

      .nav-links li {
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <h2>Admin Panel</h2>
    <ul class="nav-links" id="navLinks">
      <li><a href="dashboard.php" class="active">Dashboard</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="user_order.php">Orders</a></li>
      <li><a href="manage_users.php">Users</a></li>
      <li><a href="view_enquiries.php">Enquiries</a></li>
      <li><a href="view_admin.php">Admins</a></li>
      <li><a href="logout_confirm.php">Logout</a></li>
    </ul>
    <div class="menu-toggle" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <script>
    function toggleMenu() {
      document.getElementById("navLinks").classList.toggle("active");
    }
  </script>

</body>
</html>
