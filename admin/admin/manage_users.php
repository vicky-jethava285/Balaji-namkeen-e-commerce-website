<?php
// Include database connection
require_once('./includes/db.php');

// Delete User if "delete" parameter is set
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $sql = "DELETE FROM users WHERE id=$delete_id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('User deleted successfully!'); window.location='manage_users.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Fetch all users
$result = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Users</title>
  <link rel="stylesheet" href="./css/user.css">
  
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
<h1> User Management</h1>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td>{$row['name']}</td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['address'] ?></td>
      <td>
        <a class="delete-btn" href="manage_users.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
