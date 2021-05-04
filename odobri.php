<?php
$server="mysql443.loopia.se";
$username="kasika@k56860";
$password="AleksaDragash12";
$dbname="kasika_tk";
$conn=mysqli_connect($server, $username, $password, $dbname);

$id=$_GET['id'];
$sql="UPDATE utisci SET odobreno='1' WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: utisciedit.php");
?>