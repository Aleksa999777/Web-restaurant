<?php include("connect.php"); 

$id=$_GET["id"];
$sql="SELECT * FROM jela WHERE id=$id";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
unlink ($red["slika"]);

$sql="DELETE FROM jela WHERE id=$id";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: proizvodi.php");
?>