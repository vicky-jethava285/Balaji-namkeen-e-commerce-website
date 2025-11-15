<?php
include 'db.php';

$sql = "SELECT id, name, email, phone, created_at FROM users ";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Registered At</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No users found</td></tr>";
}
echo "</table>";
?>
