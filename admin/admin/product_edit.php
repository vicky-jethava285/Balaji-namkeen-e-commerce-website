<?php
require_once('./includes/db.php');

// Step 1: Get Product ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die(" Invalid Product ID");
}

$id = intval($_GET['id']);

// Step 2: Fetch product details
$sql = "SELECT * FROM products WHERE product_id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die(" Product not found....");
}

$product = mysqli_fetch_assoc($result);

// Step 3: Update product if form submitted
if (isset($_POST['update'])) {
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $desc =  $_POST['p_desc'];

    // If new image uploaded
    if (!empty($_FILES['p_img']['name'])) {
        $imgName = time() . "_" . basename($_FILES["p_img"]["name"]);
        $targetDir = "all-product-img/" . $imgName;

        if (move_uploaded_file($_FILES["p_img"]["tmp_name"], $targetDir)) {
            // Delete old image
            $oldImgPath = "all-product-img/" . $product['p_img'];
            if (file_exists($oldImgPath)) {
                unlink($oldImgPath);
            }
            $updateImg = ", p_img='$imgName'";
        } else {
            $updateImg = "";
        }
    } else {
        $updateImg = "";
    }

    // Update query
    $updateSql = "UPDATE products SET p_name='$name', p_price='$price', p_desc='$desc' $updateImg WHERE product_id=$id";
    if (mysqli_query($conn, $updateSql)) {
        $msg = "Product updated successfully!";
        // Refresh product details
        $result = mysqli_query($conn, "SELECT * FROM products WHERE product_id = $id");
        $product = mysqli_fetch_assoc($result);
    } else {
        $msg = " Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
  <style>
     @font-face {
      font-family: vvvv;
      src: url(../fonts/Space_Grotesk/SpaceGrotesk-VariableFont_wght.ttf);
    }
    body {
      font-family: vvvv;
      background: #f0f0f0;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }
    .edit-box {
      background: #fff;
      padding: 20px 30px;
      border-radius: 15px;
      width: 400px;
      box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color:yellow;
     /* background-color:blue;   */
  }
    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
    }
    input, textarea {
      width: 95%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    img {
      display: block;
      margin: 10px auto;
      max-width: 100px;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: green;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: darkgreen;
    }
    .msg {
      text-align: center;
      margin-bottom: 15px;
      font-weight: bold;
      color: darkblue;
    }
    a {
      display: block;
      margin-top: 15px;
      text-align: center;
      text-decoration: none;
      background: #007bff;
      color: white;
      padding: 10px;
      border-radius: 5px;
    }
    a:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <div class="edit-box">
    <h2>Edit Product</h2>

    <?php if (!empty($msg)) echo "<p class='msg'>$msg</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
      <label>Product Name</label>
      <input type="text" name="p_name" value="<?php echo $product['p_name']; ?>" required>

      <label>Price</label>
      <input type="number" step="0.01" name="p_price" value="<?php echo $product['p_price']; ?>" required>

      <label>Description</label>
      <textarea name="p_desc" rows="4" required><?php echo $product['p_desc']; ?></textarea>

      <label>Current Image</label>
      <img src="all-product-img/<?php echo $product['p_img']; ?>" alt="Product Image">

      <label>Upload New Image (optional)</label>
      <input type="file" name="p_img">

      <button type="submit" name="update">Update Product</button>
    </form>

    <a href="products.php">⬅ Back to Products</a>
  </div>

</body>
</html>
