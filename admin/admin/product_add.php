<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Space Grotesk', 'Segoe UI', Arial, sans-serif;
      background: linear-gradient(135deg, #f3da49 40%, #fffbe6 100%);
      min-height: 100vh;
    }
    .container {
      max-width: 500px;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.08);
      margin: 40px auto;
      padding: 32px 28px;
    }
    h2 {
      font-family: 'PlaywriteHU-VariableFont_wght', 'p', serif;
      color: #b71c1c;
      font-size: 2rem;
      text-align: center;
      margin-bottom: 28px;
      letter-spacing: 1px;
    }
    label {
      font-weight: 600;
      color: #222;
      margin-bottom: 6px;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #f3da49;
      box-shadow: none;
      font-size: 1rem;
      margin-bottom: 10px;
      transition: border-color 0.2s;
    }
    .form-control:focus {
      border-color: #b71c1c;
      box-shadow: 0 0 0 2px #f3da4933;
    }
    .btn-success {
      background: #f3da49;
      color: #222;
      font-weight: 700;
      border-radius: 8px;
      border: none;
      padding: 10px 0;
      width: 100%;
      font-size: 1.1rem;
      transition: background 0.2s;
    }
    .btn-success:hover {
      background: #b71c1c;
      color: #fff;
    }
    .form-group {
      margin-bottom: 18px;
    }
    @media (max-width: 600px) {
      .container {
        padding: 18px 8px;
      }
      h2 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>

<body>
  <?php include 'header.php' ?>
  <div class="container">
    <h2>Add Product</h2>
    <form method="POST" action="product_add.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" id="name" name="p_name" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" id="price" name="p_price" class="form-control" required />
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="p_desc" class="form-control" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" id="image" name="p_img" class="form-control" />
      </div>
      <button type="submit" name="add_product" class="btn btn-success">Add Product</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

require_once('./includes/db.php');
if (isset($_POST['add_product'])) {
  $name = $_POST['p_name'];
  $price = $_POST['p_price'];
  $description = $_POST['p_desc'];
  $image_name = $_FILES['p_img']['name'];
  $sql = "INSERT INTO `products`( `p_name`, `p_price`, `p_img`, `p_desc`) VALUES ('$name','$price','$image_name','$description')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>
      alert('Product added successfully!');
      window.location.href = 'products.php';
    </script>";
    exit();
  }
}
?>