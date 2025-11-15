<?php
session_start();
include 'db.php';
// This condition checks whether data has been sent to the page using the POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $stmt is a prepared statement object.
    
    // $conn → is the MySQLi connection object connected to the database.

    // prepare(...) → is the function to create a prepared statement.

    // Prepared statements are used to prevent SQL Injection and make queries fast & secure.

    $stmt = $conn->prepare("SELECT * FROM login_users WHERE email=?");
    // "s" → string
    // This function is used to bind the data that will come in place of the ? placeholder that was placed in the prepared statement.
    $stmt->bind_param("s", $email);

    // $stmt->execute(); → This is the final step to run the prepared statement on the database.
    $stmt->execute();
    // $stmt->get_result(); = Take the data of the SELECT query from the prepared statement and store it in the $result object, so that you can then read the rows using fetch_assoc().
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // verify password
        if ($password === $row['password']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }
}
?>