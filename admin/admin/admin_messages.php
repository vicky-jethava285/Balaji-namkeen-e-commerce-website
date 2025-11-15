<?php
require_once('./includes/db.php');
session_start();



$result = mysqli_query($conn, "SELECT * FROM contact ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin - Contact Messages</title>
  <link rel="stylesheet" href="./includes/font.css">
<link rel="stylesheet" href="./css/contacts.css">
</head>

<body>
  <h1>Contact Messages</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Subject</th>
      <th>Message</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
          <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['full_name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['subject']) ?></td>
        <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>