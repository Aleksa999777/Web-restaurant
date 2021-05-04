<?php include("connect.php"); 
$jelo=$_POST["jelo"];
$tip=$_POST["tip"];
$opis=$_POST["opis"];
$cena=$_POST["cena"];
$slika="upload/".$_FILES["slika"]["name"];
move_uploaded_file($_FILES["slika"]["tmp_name"],$slika);


$sql="INSERT INTO jela (jelo, tip, opis, slika, cena) VALUES ('$jelo', '$tip', '$opis', '$slika', '$cena')";
mysqli_query($conn,$sql);
header("Location: proizvodi.php");
?>

