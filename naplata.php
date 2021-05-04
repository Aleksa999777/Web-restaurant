<?php
include("connect.php");
$id=$_GET["idkorpa"];
$sql="UPDATE korpe SET naplaceno='1' WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: naplaceno.php");
?>






