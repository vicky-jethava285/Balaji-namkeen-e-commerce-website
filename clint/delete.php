<?php
include "db.php";
session_start();

// check login
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first!'); window.location.href='Sign_in.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];    

if (isset($_GET['id'])) {
    $pro_id = $_GET['id'];

    $sql = "DELETE FROM `addcart` WHERE `product_id` = '$pro_id' ";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Product removed from cart!'); window.location.href='cart.php';</script>";
    } else {
        echo "<script>alert('Failed to delete product!'); window.location.href='cart.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request!'); window.location.href='cart.php';</script>";
}
?>