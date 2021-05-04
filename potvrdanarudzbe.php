<?php
ob_start();
include("connect.php");
$max=$_POST["max"];
for($x=1; $x<$max; $x++) {
	
${"jelo".$x}=$_POST["jelo".$x];
${"kolicina".$x}=$_POST["kolicina".$x];
}

$korisnik=$_POST["ime"];
$telefon=$_POST["telefon"];
$email=$_POST["email"];
$adresa=$_POST["adresa"];
$detalji=$_POST["komentar"];
$ukupno=$_POST["sve"];

$idi=rand(000000000,999999999);

$sql="INSERT INTO korpe (idizvestaj, jelo1, kolicina1, jelo2, kolicina2, jelo3, kolicina3, jelo4, kolicina4, jelo5, kolicina5, jelo6, kolicina6, jelo7, kolicina7, jelo8, kolicina8, jelo9, kolicina9, jelo10, kolicina10, jelo11, kolicina11, jelo12, kolicina12, jelo13, kolicina13, jelo14, kolicina14, jelo15, kolicina15, jelo16, kolicina16, jelo17, kolicina17, jelo18, kolicina18, jelo19, kolicina19, jelo20, kolicina20, detalji, korisnik, adresa, telefon, email, ukupno) VALUES ('$idi', '$jelo1', '$kolicina1', '$jelo2', '$kolicina2', '$jelo3', '$kolicina3', '$jelo4', '$kolicina4', '$jelo5', '$kolicina5', '$jelo6', '$kolicina6', '$jelo7', '$kolicina7', '$jelo8', '$kolicina8', '$jelo9', '$kolicina9', '$jelo10', '$kolicina10', '$jelo11', '$kolicina11', '$jelo12', '$kolicina12', '$jelo13', '$kolicina13', '$jelo14', '$kolicina14', '$jelo15', '$kolicina15', '$jelo16', '$kolicina16', '$jelo17', '$kolicina17', '$jelo18', '$kolicina18', '$jelo19', '$kolicina19', '$jelo20', '$kolicina20', '$detalji', '$korisnik', '$adresa', '$telefon', '$email', '$ukupno')";

mysqli_query($conn,$sql);
setcookie("jelo", "", time() - 1000, "/");

setcookie("idizvestaj", $idi, time() + 60*5, "/");
header("Location: izvestaj.php");

?>