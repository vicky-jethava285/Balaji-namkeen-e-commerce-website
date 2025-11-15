<?php
// include db.php 
 include 'db.php'; 

// field name in the enquiry form 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$message = $_POST['message'];

  // insert enquries in database 
$sql = "INSERT INTO enquiry_form (name, email, phone, product, message)
        VALUES ('$name', '$email', '$phone', '$product', '$message')";
      
// true if the quiry is connected to a sql database       
 if ($conn->query($sql) === TRUE) {
    //  check connection true 
    echo "<script>
    alert('Thank you, " . $name . "! We have received your enquiry for \"" . $product . "\".');

    window.location.href='index.php';
   

</script>";
 // after the enquiry is done,go to the index.php page


} else {
    echo "Error: " . $conn->error;
    // show connection errors 
}

$conn->close(); 
// close connection 
?>
