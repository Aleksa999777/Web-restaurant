<?php
include("head.php"); 
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    } else{
$sql = "INSERT INTO subscribe (email) VALUES ('$email')";
mysqli_query($conn,$sql);}
header("Location: index.php?poruka=Thank you for subscribe!");
?>