<?php
include("connect.php");

$ime=$_POST["ime"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];

$sql="INSERT INTO utisci (ime, email, komentar) VALUES ('$ime', '$email', '$komentar')";

mysqli_query($conn,$sql);
header("Location: index.php"); 
?>