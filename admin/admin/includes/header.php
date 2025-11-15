<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
    }
    .sidebar {
      width: 220px;
      background-color: #2c3e50;
      height: 100vh;
      color: white;
      padding-top: 20px;
      position: fixed;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
      border-bottom: 1px solid #34495e;
    }
    .sidebar a:hover {
      background-color: #1abc9c;
    }
    .main-content {
      margin-left: 220px;
      padding: 20px;
      flex: 1;
      background: #f4f4f4;
      min-height: 100vh;
    }
    .logout {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: white;
      text-decoration: none;
      background-color: red;
      font-size: 14px;
      border-radius: 20px;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h2>Admin Panel</h2>
  <a href="../dashboard.php">Dashboard</a>
  <a href="../products.php">Products</a>
  <a href="../orders.php">Orders</a>
  <a href="../users.php">Users</a>
  <a href="../reports.php">Reports</a>
  <a href="../settings.php">Settings</a>
  <a class="logout" href="/admin/admin_login.php">Logout</a>
</div>


