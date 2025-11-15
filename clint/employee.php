<?php
// filepath: d:\xampp\htdocs\Namkeen\clint\employee.php
// include 'header.php'; // Include header before anything else
include '../clint/db.php';

// Handle delete
if (isset($_GET['delete'])) {
  $del_id = intval($_GET['delete']);
  mysqli_query($conn, "DELETE FROM employees WHERE id='$del_id'");
  echo "<script>alert('Employee removed!'); window.location.href='employee.php';</script>";
  exit();
}

// Handle add
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $desc = mysqli_real_escape_string($conn, $_POST['description']);
  mysqli_query($conn, "INSERT INTO employees (employee_id, name, description) VALUES ('$employee_id', '$name', '$desc')");
  echo "<script>alert('Employee added!'); window.location.href='employee.php';</script>";
  exit();
}

// Fetch all employees
$result = mysqli_query($conn, "SELECT * FROM employees ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Space Grotesk', Arial, sans-serif;
      background: #fffbe6;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.08);
      padding: 32px 24px;
    }
    h1 {
      text-align: center;
      color: #b71c1c;
      margin-bottom: 24px;
      font-size: 2rem;
      font-family: 'PlaywriteHU-VariableFont_wght', serif;
    }
    form {
      display: flex;
      gap: 18px;
      flex-wrap: wrap;
      margin-bottom: 28px;
      align-items: flex-end;
      justify-content: center;
    }
    input, textarea {
      padding: 8px;
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
      padding: 10px 18px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.2s, color 0.2s;
    }
    button:hover {
      background: #b71c1c;
      color: #fff;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 18px;
    }
    th, td {
      padding: 12px 10px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #F3DA49;
      color: #222;
      font-size: 1rem;
      text-transform: uppercase;
    }
    tr:hover {
      background: #fffbe6;
    }
    .delete-btn {
      background: #f44336;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 6px 14px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.2s;
    }
    .delete-btn:hover {
      background: #b71c1c;
    }
    @media (max-width: 600px) {
      .container {
        padding: 12px 4px;
        border-radius: 10px;
      }
      th, td {
        font-size: 0.9rem;
        padding: 6px 2px;
      }
      form {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Employee Management</h1>
    <form method="post">
      <input type="text" name="employee_id" placeholder="Employee ID" required>
      <input type="text" name="name" placeholder="Name" required>
      <textarea name="description" placeholder="Description" rows="1"></textarea>
      <button type="submit">Add Employee</button>
    </form>
    <table>
      <tr>
        <th>ID</th>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Remove</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= htmlspecialchars($row['employee_id']) ?></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['description']) ?></td>
          <td>
            <a href="employee.php?delete=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Delete this employee?');">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</body>
</html>