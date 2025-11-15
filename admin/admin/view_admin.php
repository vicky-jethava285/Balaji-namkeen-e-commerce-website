<?php
require_once('./includes/db.php');

$sql = "SELECT * FROM admin_login";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Accounts</title>
    <link rel="stylesheet" href="./css/admin.css">
  
</head>
<body>
 <?php include 'header.php' ?>
 <div class="container">
<h1>Admin Login Data</h1>

<?php
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
           
              <th>Email</th>
              <th>Password</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                
                <td>".$row["email"]."</td>
                <td>".$row["password"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No admin accounts found.</p>";
}

$conn->close();
?>
</div>
</body>
</html>
