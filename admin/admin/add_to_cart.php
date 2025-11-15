<?php
session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
  $productId = $_POST['product_id'];
  $productName = $_POST['product_name'];
  $productPrice = $_POST['product_price'];

  if (!isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId] = [
      'name' => $productName,
      'price' => $productPrice,
      'quantity' => 1
    ];
  } else {
    $_SESSION['cart'][$productId]['quantity']++;
  }
  header("Location: {$_SERVER['PHP_SELF']}?added=1");
  exit;
}
?>