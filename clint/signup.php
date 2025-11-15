<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // secure hashing
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hashing

    //   Checks if the email is already in the database.
    // $email is securely bound to the ? placeholder.
    // After executing the query, the result is stored in $result.
    $check = $conn->prepare("SELECT * FROM login_users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();
    
    // If rows > 0 → means the email already exists → duplicate registration is prevented.
    if ($result->num_rows > 0) {
        echo "Email already registered! <a href='sign_in.php'>Login here</a>";
    } else {
        $stmt = $conn->prepare("INSERT INTO  login_users (name, email, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $password, $phone);

        if ($stmt->execute()) {
            echo "Registration successful! <a href='sign_in.php'>Login here</a>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>







<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // secure hashing

    $check = $conn->prepare("SELECT * FROM login_users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();
    
    if ($result->num_rows > 0) {
        echo "Email already registered! <a href='sign_in.php'>Login here</a>";
    } else {
        $stmt = $conn->prepare("INSERT INTO  login_users (name, email, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $password, $phone);

        if ($stmt->execute()) {
            echo "Registration successful! <a href='sign_in.php'>Login here</a>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>