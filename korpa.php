<?php 
$id=$_POST["id"];
$kolicina=$_POST["kolicina"];
$vrednost=$_COOKIE["jelo"]." ".$id."-".$kolicina;
setcookie("jelo", $vrednost, time() + (86400 * 3), "/");
header("Location: jelovnik.php");
?>
