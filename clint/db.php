<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'balaji namkeen'; 

$conn = new mysqli($host, $username, $password, $database,4306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
