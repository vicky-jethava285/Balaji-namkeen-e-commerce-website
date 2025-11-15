<?php

session_start();
include 'db.php';
// --- Fetch Data (Default: All Staff) ---
$searchResult = [];
$sql = "SELECT * FROM staff"; // default query

if (isset($_POST['search'])) {
  $keyword = $_POST['keyword'];
  $sql = "SELECT * FROM staff 
          WHERE staff_id LIKE '%$keyword%' 
             OR name LIKE '%$keyword%' 
             OR mobile LIKE '%$keyword%' 
             OR city_code LIKE '%$keyword%'";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $searchResult[] = $row;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Staff</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f7;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }
    .container {
      width: 900px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    form {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    input[type="text"] {
      padding: 10px;
      width: 70%;
      border: 1px solid #ccc;
      border-radius: 6px 0 0 6px;
      outline: none;
    }
    button {
      padding: 10px 20px;
      border: none;
      background: #007bff;
      color: white;
      border-radius: 0 6px 6px 0;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background: #007bff;
      color: white;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
    .no-data {
      text-align: center;
      color: red;
      font-weight: bold;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Company Staff Records</h2>

    <!-- Search Form -->
    <form method="POST" action="">
      <input type="text" name="keyword" placeholder="Search by ID, Name, Mobile, or City">
      <button type="submit" name="search">Search</button>
    </form>

    <!-- Table Data -->
    <?php if (!empty($searchResult)): ?>
      <table>
        <tr>
          <th>ID</th>
          <th>Staff ID</th>
          <th>Name</th>
          <th>Mobile</th>
          <th>City Code</th>
        </tr>
        <?php foreach ($searchResult as $row): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['staff_id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td><?php echo $row['city_code']; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    <?php else: ?>
      <p class="no-data">No staff records found!</p>
    <?php endif; ?>
  </div>
</body>
</html>
