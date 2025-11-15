<?php
// filepath: d:\xampp\htdocs\Namkeen\admin\orders.php
require_once('./includes/db.php');// Adjust path if needed
session_start();

// Optional: Add admin authentication here

$sql = "SELECT o.*, p.p_name, p.p_img, p.p_price, u.name 
        FROM orders o
        JOIN products p ON o.product_id = p.product_id
        JOIN users u ON o.user_id = u.id
        ORDER BY o.order_date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order List - Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Space Grotesk', Arial, sans-serif;
      background: #fffbe6;
      margin: 0;
      padding: 0;
    }
    .order-table-container {
      max-width: 1200px;
      margin: 40px auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.08);
      padding: 32px 24px;
    }
    h2 {
      text-align: center;
      color: #b71c1c;
      margin-bottom: 24px;
      font-size: 2rem;
      font-family: 'PlaywriteHU-VariableFont_wght', serif;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 18px;
    }
    th, td {
      padding: 12px 10px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #F3DA49;
      color: #222;
      font-size: 1rem;
      text-transform: uppercase;
    }
    tr:hover {
      background: #fffbe6;
    }
    .pro-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
      border: 1px solid #f3da49;
      background: #fffbe6;
    }
    @media (max-width: 700px) {
      .order-table-container {
        padding: 8px 2px;
      }
      th, td {
        font-size: 0.9rem;
        padding: 6px 2px;
      }
      .pro-img {
        width: 36px;
        height: 36px;
      }
    }
  </style>
</head>
<body>
  <div class="order-table-container">
    <h2>All Orders</h2>
    <table>
      <tr>
        <th>Order ID</th>
        <th>User</th>
        <th>Product</th>
        <th>Image</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$row['order_id']}</td>
          <td>{$row['username']}</td>
          <td>{$row['p_name']}</td>
          <td><img src='../admin/all-product-img/{$row['p_img']}' class='pro-img' alt='{$row['p_name']}'></td>
          <td>₹{$row['p_price']}</td>
          <td>{$row['quantity']}</td>
          <td>{$row['name']}</td>
          <td>{$row['phone']}</td>
          <td>{$row['address']}</td>
          <td>{$row['order_date']}</td>
        </tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>