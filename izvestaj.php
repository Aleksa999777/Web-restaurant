<?php
include("head.php"); ?>

<style>
body{background:#fff;}
.prikaz{width:800px; min-height:300px; margin:40px auto 40px auto;}
.prikaz::after{clear:both; display:table; content:"";}
.telo{width:1000px; margin:20px auto; padding:10px;}
.telo img{width:110px; height:110px; object-fit:cover; margin:5px; border:solid 1px #ccc;}
/*MOBILNI*/
@media only screen and (max-width: 480px) {
.prikaz{width:100%;}
.telo{width:90%; margin:5%;}
}
</style>
<!--TELO-->
<div class="telo">
<h1 style="font-family:geomanist; color:#222; text-align:center; letter-spacing:1px;">Your today order!</h1>
<?php
if(!isset($_COOKIE["idizvestaj"])) {header("Location: index.php");} else {
$id=$_COOKIE['idizvestaj'];
$sql="SELECT * FROM korpe WHERE idizvestaj=$id";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit); 
echo '<h1 style="color:#cdb27f; font-family:geomanist;">Total: '.$red['ukupno'].'$</h1>';
for($x=1; $x<21; $x++) {

if($red["jelo".$x]=="0"){} else {
$id=$red["jelo".$x];	
$sql="SELECT * FROM jela WHERE id=$id";	
$upit=mysqli_query($conn,$sql);
${"red".$x}=mysqli_fetch_assoc($upit);

echo '<img src="'.${"red".$x}["slika"].'">';
}}} 
?>
</div>

<?php include("futer.php"); ?>