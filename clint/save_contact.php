<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(full_name, email, phone, subject, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";
            
    if (mysqli_query($conn, $sql)) {
        echo 
        "<script>
            alert('Message sent successfully!'); 
            window.location='contact.php';
        </script>";
    } else {
        echo 
        "<script>
             alert('Error: Could not send message');
             window.location='contact.php';
         </script>";
    }
}
?>