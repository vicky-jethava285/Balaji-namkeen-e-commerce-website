<?php
include 'db.php';
$search = '';
if (isset($_GET['search'])) {
  $search = trim($_GET['search']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/product.css" />
  <style>
    .search-bar {
      max-width: 400px;
      margin: 30px auto 18px auto;
      display: flex;
      gap: 8px;
    }
    .search-bar input[type="text"] {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #f3da49;
      font-size: 16px;
    }
    .search-bar button {
      padding: 10px 22px;
      border-radius: 8px;
      border: none;
      background: #f3da49;
      color: #222;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.2s;
    }
    .search-bar button:hover {
      background: #49b203ff;
      color: #fff;
    }
  </style>
</head>
<body>
  <?php include '../clint/navbar.php' ?>

  <!-- Hero Banner -->
  <div class="p_n">
    <img src="../assest/brand.jpg" alt="products image">
  </div>

  <!-- Search Bar -->
  <form class="search-bar" method="get" action="">
    <input type="text" name="search" placeholder="Search products..." value="<?php echo htmlspecialchars($search); ?>">
    <button type="submit">Search</button>
  </form>

  <!-- Products Section -->
  <section class="products">
    <div class="product-grid">
      <?php
      $sql = "SELECT * FROM `products`";
      if ($search != '') {
        $search_safe = mysqli_real_escape_string($conn, $search);
        $sql .= " WHERE p_name LIKE '%$search_safe%' OR p_desc LIKE '%$search_safe%' OR p_img LIKE '%$search_safe%'";
      }
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $pro_id = $row["product_id"];
          $pro_nm = $row["p_name"];
          $pro_price = $row["p_price"];
          $pro_desc = $row["p_desc"];
          $pro_img = $row["p_img"];
          echo "
            <div class='product-card'>
              <img src='../admin/admin/all-product-img/$pro_img' alt='$pro_nm' />
              <div class='title'>$pro_nm</div>
              <div class='price'>₹$pro_price</div>
              <div class='desc'>$pro_desc</div>
              <a class='btn' href='cart.php?id=$pro_id'>Add to Cart</a>
            </div>
          ";
        }
      } else {
        echo "<p style='grid-column: 1/-1; text-align:center; color:#b71c1c; font-weight:600;'>No products found.</p>";
      }
      ?>
    </div>
  </section>

  <?php include '../clint/footer.php' ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="../js/product.js"></script>
</body>
</html>