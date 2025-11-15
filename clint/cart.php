<?php
include "db.php";
session_start();
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  if (isset($_GET["id"])) {
    $pro_id = $_GET["id"];
    $sql = "SELECT * FROM `products` where `product_id`='$pro_id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $pro_nm = $row["p_name"];
      $pro_price = $row["p_price"];
      $pro_desc = $row["p_desc"];
      $pro_img = $row["p_img"];
    }

    $insert = "INSERT INTO `addcart`(`product_id`, `user_id`) VALUES ('$pro_id','$user_id')";

    $result1 = mysqli_query($conn, $insert);
    if ($result1) {
      echo "<script>alert('cart add sucessfully..');</script>";
    } else {
      echo "<script>alert('cart not add..');</script>";
    }
  } else {
  }
} else {
  echo "<script>alert('first login please..');
  window.open('http://localhost/namkeen/clint/Sign_in.php','_parent');</script>";
}



if (!isset($_SESSION['user_id'])) {
  echo "<div class='msg error'>Please login first!</div>";
  exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add to Cart Animation</title>
  <STYLE>
    /* ===== General Layout ===== */
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #fdfbfb, #ebedee);
      margin: 0;
      padding: 0;
    }

    /* Header */
    .head {
      background: #090101ff;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .cart-icon {
      background: #fff;
      color: #ff9800;
      padding: 6px 15px;
      border-radius: 25px;
      font-weight: bold;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.15);
    }


    .product-card {

      background: #fff;
      width: 250px;
      padding: 15px;
      border-radius: 18px;
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      overflow: hidden;
      position: relative;
    }

    /* Hover effect */
    .product-card:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25);
    }

    .product-table {
      width: 90%;
      margin: 30px auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      background: #fff;
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .product-table th,
    .product-table td {
      padding: 12px 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .product-table th {
      background: #F3DA49;
      color: black;
      font-size: 16px;
      text-transform: uppercase;
    }

    .product-table tr:hover {
      background: #f9f9f9;
      transition: 0.3s;
    }

    .pro-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }

    /* Button */
    /* Common button */
    /* Action Buttons */
    .btn {
      display: inline-block;
      padding: 8px 14px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      margin: 2px;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }

    /* Order Button */
    .order {
      background: #4CAF50;
      /* Green */
      color: white;
      box-shadow: 0px 4px 10px rgba(76, 175, 80, 0.3);
    }

    .order:hover {
      background: #43a047;
      transform: translateY(-2px);
      box-shadow: 0px 6px 14px rgba(76, 175, 80, 0.4);
    }

    /* Delete Button */
    .delete-btn {
      background: #f44336;
      /* Red */
      color: white;
      box-shadow: 0px 4px 10px rgba(244, 67, 54, 0.3);
    }

    .delete-btn:hover {
      background: #d32f2f;
      transform: translateY(-2px);
      box-shadow: 0px 6px 14px rgba(244, 67, 54, 0.4);
    }
  </STYLE>
</head>

<body>
  <?php include '../clint/navbar.php' ?>
  <header class="head">
    <h1>My Store 🛒</h1>
    <div class="cart-icon">🛒 Cart <span id="cart-count">0</span></div>
  </header>
  <table class="product-table">
    <tr>
      <th>Image</th>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    <?php

    $sql = "SELECT * FROM addcart where user_id=$user_id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $products_id = $row['product_id'];
      $select = "SELECT * FROM `products` WHERE product_id=$products_id";
      $sel_result = mysqli_query($conn, $select);
      while ($row = mysqli_fetch_assoc($sel_result)) {
        $pro_id = $row["product_id"];
        $pro_nm = $row["p_name"];
        $pro_price = $row["p_price"];
        $pro_desc = $row["p_desc"];
        $pro_img = $row["p_img"];

        echo "
                      <tr>
                        <td><img src='../admin/admin/all-product-img/$pro_img' alt='$pro_nm' class='pro-img'></td>
                        <td>$pro_nm</td>
                        <td>Namkeen</td>
                        <td>₹$pro_price</td>
                        <td><a class='btn order' href='order.php?id=$pro_id'>order</a>
                        <a class='btn delete-btn' href='delete.php?id=$pro_id' onclick='return confirm('Are you sure you want to delete this product?');'>Delete</a></td> 
              </td>

                    ";
      }

    }


    ?>
  </table>

  </div>



  <script>
    let cartCount = 0;

    const buttons = document.querySelectorAll(".add-to-cart");
    const cartDisplay = document.getElementById("cart-count");

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        cartCount++;
        cartDisplay.textContent = cartCount;

        // Add animation
        button.classList.add("clicked");

        setTimeout(() => {
          button.classList.remove("clicked");
        }, 200);
      });
    });


    document.querySelectorAll('.remove-btn').forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        this.parentElement.remove(); // Removes the product card
      });
    });


  </script>
</body>

</html>