<?php
ob_start();
include("connect.php");
$id=$_GET['id'];
$sql="UPDATE subscribe SET odobreno='1' WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: subscribeedit.php");
?>