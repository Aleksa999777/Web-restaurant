<?php
include("connect.php");
$id=$_POST["id"];
$jelo=$_POST["jelo"];
$opis=$_POST["opis"];
$cena=$_POST["cena"];

if(!$_FILES["slika"]["name"]) {
	$slika=$_POST["slika2"];} else{
		unlink($_POST["slika2"]);

$slika="upload/". $_FILES["slika"]["name"];
move_uploaded_file($_FILES["slika"]["tmp_name"],$slika);}

$sql="UPDATE jela SET slika='$slika', jelo='$jelo', opis='$opis', cena='$cena' WHERE id='$id'";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: proizvodi.php?idm=$id");
?>