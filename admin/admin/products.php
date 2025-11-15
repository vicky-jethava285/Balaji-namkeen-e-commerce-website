<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Manage Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- ✅ Mobile scaling -->
  <link rel="stylesheet" href="./css/products.css">

</head>

<body>
  <?php include 'header.php' ?>
  <div class="container">
    <h1>Product Management</h1>
    <a class="add-btn" href="product_add.php">+ Add Product</a>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once('./includes/db.php');
          $sql = "SELECT * FROM `products`";
          $result = mysqli_query($conn, $sql);
          $display_id = 1; // Start display ID from 1
          while ($row = $result->fetch_assoc()) {
            $proname = $row["p_name"];
            $proprice = $row["p_price"];
            $prodesc = $row["p_desc"];
            $proimg = $row["p_img"];
            $proid = $row["product_id"];
            echo "
            <tr>
              <td data-label='ID'>$display_id</td>
              <td data-label='Image'><img src='all-product-img/$proimg' width='70'></td>
              <td data-label='Name'>$proname</td>
              <td data-label='Price'>₹$proprice</td>
              <td data-label='Stock'>$prodesc</td>
              <td data-label='Actions' class='actions'>
                <a class='edit' href='product_edit.php?id=$proid'>Edit</a>
                <a class='delete' href='delete_product.php?delete=$proid'
                  onclick=\"return confirm('Delete this product?')\">Delete</a>
              </td>
            </tr>
          ";
            $display_id++; // Increment display ID
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>