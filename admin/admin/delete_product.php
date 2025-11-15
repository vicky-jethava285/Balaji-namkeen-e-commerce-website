<?php

require_once('./includes/db.php');

if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);

  // First fetch product image (if you want to delete the image file too)
  $imgQuery = "SELECT p_img FROM products WHERE product_id = $id";
  $imgResult = mysqli_query($conn, $imgQuery);
  $imgRow = mysqli_fetch_assoc($imgResult);

  if ($imgRow) {
    $imagePath = "all-product-img/" . $imgRow['p_img'];
    if (file_exists($imagePath)) {
      unlink($imagePath); // delete image from folder
    }
  }

  // Delete record from database
  $sql = "DELETE FROM products WHERE product_id = $id";
  if (mysqli_query($conn, $sql)) {
    $message = " Product deleted successfully...";
  } else {
    $message = "Error deleting product: " . mysqli_error($conn);
  }
} else {
  $message = " Invalid request!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Delete Product</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .box {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .success {
      color: green;
      font-weight: bold;
    }

    .error {
      color: red;
      font-weight: bold;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      background: #f7e014ff;
      color: white;
      padding: 10px 18px;
      border-radius: 5px;
      text-decoration: none;
    }

    a:hover {
      background: #0056b3;
      color: black;
    }
  </style>
</head>

<body>
  <div class="box">
    <h2><?php echo $message; ?></h2>
    <a href="products.php"> Back to Products</a>
  </div>
</body>

</html>