<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - View Enquiries</title>
  <link rel="stylesheet" href="./css/enquiries.css">
</head>
<body>
 <?php include 'header.php' ?>
  <div class="container">
    <h1>Enquiry Submissions</h1>

<?php 
// include dp.php 
require_once('./includes/db.php');  

// Handle delete request
// isset()check whether a variable is set
if (isset($_GET['delete_id'])) {
  $delete_id = intval($_GET['delete_id']);
  $conn->query("DELETE FROM enquiry_form WHERE id = $delete_id");
  echo "<script>
    alert('Enquiry deleted successfully!');
    window.location.href = 'view_enquiries.php';
  </script>";
  exit();
}

// to show data from database in table 
$sql = "SELECT * FROM enquiry_form";

$result = $conn->query($sql);

// the $result->num_rows property shows how many rows(rows=record in the database)have been returned from the result.
if ($result->num_rows > 0) { 
  // if rows is greater than o(meaning data is found)
  echo "<table>";
  echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Product</th>
    <th>Message</th>
    <th>Action</th>
  </tr>";

  $display_id = 1; // Start from 1

  // while -> while(fetch_assoc())-->is used to retrieve all rows thorugh a loop 

  // fecth_assoc()-->extracts one row at a time and returns it in associative array
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$display_id."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['product']."</td>
            <td>".$row['message']."</td>
            <td>
              <a href='view_enquiries.php?delete_id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete this enquiry?');\" class='btn btn-danger btn-sm' id='btn'>Delete</a>
            </td>
          </tr>";
    $display_id++; // Increment for next row
  }
  echo "</table>";
} else {
  echo "<p>No enquiries found.</p>";
}
$conn->close(); 
// connection close
?>
  </div>
</body>
</html>
