<?php
include("connect.php");
$id=$_GET["idkorpa"];
$sql="DELETE FROM korpe WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: proizvodi.php");
?>






