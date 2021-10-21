<?php 

include 'routes.php';
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

$insert = "INSERT INTO  usuarios(email, password, name) VALUES('$email','$password', '$name') ";

if ($conn->query($insert) == TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert . "<br>" . $conn->error;
  }
  
  $conn->close();




?>
