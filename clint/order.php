<?php
// filepath: d:\xampp\htdocs\Namkeen\clint\order.php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please login first!'); window.location.href='Sign_in.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid request!'); window.location.href='product.php';</script>";
    exit();
}

$pro_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE product_id='$pro_id'";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "<script>alert('Product not found!'); window.location.href='product.php';</script>";
    exit();
}

// Handle order submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $phone   = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $quantity = intval($_POST['quantity']);

    $insert = "INSERT INTO orders (user_id, product_id, name, phone, address, quantity) VALUES ('$user_id', '$pro_id', '$name', '$phone', '$address', '$quantity')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Order placed successfully!'); window.location.href='product.php';</script>";
        exit();
    } else {
        echo "<script>alert('Order failed. Try again!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Product - Balaji Namkeen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Space Grotesk', Arial, sans-serif;
            background: linear-gradient(135deg, #fffbe6 60%, #f3da49 100%);
            margin: 0;
            padding: 0;
        }
        .order-container {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.08);
            padding: 32px 24px;
        }
        .order-container h2 {
            text-align: center;
            color: #b71c1c;
            margin-bottom: 24px;
            font-size: 2rem;
            font-family: 'PlaywriteHU-VariableFont_wght', serif;
        }
        .product-info {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 24px;
        }
        .product-info img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #f3da49;
            background: #fffbe6;
        }
        .product-details {
            flex: 1;
        }
        .product-details .name {
            font-weight: bold;
            color: #b71c1c;
            font-size: 1.1rem;
        }
        .product-details .price {
            color: #222;
            font-size: 1rem;
            margin-top: 4px;
        }
        .product-details .desc {
            color: #555;
            font-size: 0.98rem;
            margin-top: 6px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        label {
            font-weight: 600;
            color: #222;
            margin-bottom: 4px;
        }
        input, textarea {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #f3da49;
            font-size: 1rem;
            transition: border-color 0.2s;
        }
        input:focus, textarea:focus {
            border-color: #b71c1c;
            outline: none;
        }
        button {
            background: #f3da49;
            color: #222;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            padding: 12px 0;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
            margin-top: 8px;
        }
        button:hover {
            background: #b71c1c;
            color: #fff;
        }
        @media (max-width: 600px) {
            .order-container {
                padding: 12px 4px;
                border-radius: 10px;
            }
            .product-info img {
                width: 50px;
                height: 50px;
            }
            .order-container h2 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <?php include '../clint/navbar.php'; ?>
    <div class="order-container">
        <h2>Order Product</h2>
        <div class="product-info">
            <img src="../admin/admin/all-product-img/<?php echo htmlspecialchars($product['p_img']); ?>" alt="<?php echo htmlspecialchars($product['p_name']); ?>">
            <div class="product-details">
                <div class="name"><?php echo htmlspecialchars($product['p_name']); ?></div>
                <div class="price">₹<?php echo htmlspecialchars($product['p_price']); ?></div>
                <div class="desc"><?php echo htmlspecialchars($product['p_desc']); ?></div>
            </div>
        </div>
        <form method="post">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" required>

            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" required pattern="[0-9]{10,12}">

            <label for="address">Address</label>
            <textarea name="address" id="address" rows="3" required></textarea>

            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" min="1" value="1" required>

            <button type="submit">Place Order</button>
        </form>
    </div>
    <?php include '../clint/footer.php'; ?>
</body>
</html>