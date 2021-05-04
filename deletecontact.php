<?php
include("connect.php");
$id=$_GET["id"];

$sql = "DELETE FROM kontakt WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: kontaktedit.php");	
?>