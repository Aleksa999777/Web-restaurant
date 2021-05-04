<?php
session_start(); 
include("connect.php");

if(!isset($_COOKIE["saglasnost"])) {
echo '<div style="width:100%; min-height:50px; background:rgba(0,0,0,0.7); position:fixed; bottom:0; left:0; z-index:5; color:#fff;">
<p style="padding:10px; margin:0 0 5px 0; width:80%; font-family:geomanist;" align="left">Do you agree with the use of cookies?</p>
<a style="width:100px; color:#fff; font-size:20px; border:solid 2px #cdb27f; text-align:center; text-decoration:none; display:block; float:left; margin:0 0 5px 10px; font-family:geomanist;" href="'.$_SERVER['PHP_SELF'].'?odluka=da">Agree</a>
<a style="width:100px; color:#fff; font-size:20px; border:solid 2px #cdb27f; text-align:center; text-decoration:none; display:block; float:left; margin:0 0 5px 10px; font-family:geomanist;" href="'.$_SERVER['PHP_SELF'].'?odluka=ne">Disagree</a>
</div>';

if(empty($_GET["odluka"])) {} else {

if($_GET["odluka"]=="da") {setcookie("saglasnost","da",time() + (86400 * 24 * 30),"/"); echo '<meta http-equiv="refresh" content="0; url="'.$_SERVER["PHP_SELF"].'">';}
if($_GET["odluka"]=="ne") {setcookie("saglasnost","ne",time() + (86400 * 24 * 30),"/"); echo '<meta http-equiv="refresh" content="0; url="'.$_SERVER["PHP_SELF"].'">';}
}}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/a0eaab46fe.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
<link rel="icon" href="logo-n1.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KOLBERN RESTAURANT</title>
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">&#9650;</button>
<!--TOP-->
<div class="top">
<article>
<label>Order and pick up at: &#9990; 646-993-1125</label>
<span>Delivery over $10</span>
<img src="grafika/moto.png">
</article>
</div>
<!--TOP END-->

<!--HEAD-->
<div class="head">
<article>
<figure>
<a href="index.php"><img src="grafika/kolbern2.png"></a>
</figure>
<!--BURG-->
<input type="checkbox" id="burg">
<div class="burg">
<label for="burg">
<div></div>
<div></div>
<div></div>
</label>
</div>
<!--BURG END-->
<nav>
<a style="color:#8d7a5c;" href="index.php">HOME</a>
<a href="about.php">ABOUT</a>
<a href="jelovnik.php">MENU</a>
<a href="utisci.php">IMPRESSIONS</a>
<a href="kontakt.php">CONTACT</a>
<a href="onama.php">LOCATIONS</a>
<a href="catering.php">CATERING</a>
</nav>
</article>
</div>

<?php
$icon='<a href="izvestaj.php" title="See what you ordered!" class="izvestaj"><img src="grafika/paket.png"></a>';

$korpa='<a href="vasakorpa.php" title="See your basket!" class="izvestaj"><img src="grafika/korpa3.png"></a>';

if(isset($_COOKIE["idizvestaj"])) {echo $icon;}
if(isset($_COOKIE["jelo"])) {echo $korpa;}

?>


<!--HEAD END-->