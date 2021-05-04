<?php include("head.php"); ?>

<style>
/*NASLOV*/
body{background:#fff;}
.naslov{background:#fff;}

.naslov article{width:1000px; margin:30px auto; height:60px; line-height:60px; text-align:center; font-size:70px; color:#222; font-family:geomanist;}

.naslovjela{background:#fff;}
.naslovjela article{width:1000px; height:50px; line-height:50px; font-size:60px; color:#222; margin:24px auto 10px auto; padding-left:10px; font-family:geomanist; text-align:center;}

.telo{width:1300px; margin:auto;}
.telo::after{clear:both; display:table; content:"";}

.jela{width:1300px; min-height:100px; margin:20px auto; overflow:hidden; padding-top:10px; background:#fff;}
.jela::after{clear:both; display:table; content:"";}
.jela a{display:block; float:left; width:360px; height:500px; margin:10px 36px; text-decoration:none; position:relative; border:solid 1px #bebebb; overflow:hidden; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.jela img{width:360px; height:400px; object-fit:cover; padding:15px;}

.info10{width:100%; height:50px;}
.info10::after{clear:both; display:table; content:"";}
.info10 span{width:76%; height:50px; line-height:50px; text-align:left; padding-left:15px; font-size:22px; color:#a12921; font-family:geomanist; float:left; color:#222;} 
.info10 main{width:24%; height:50px; line-height:40px; font-size:20px; font-family:geomanist; float:left; color:#222; padding-right:30px;}
.info11{width:100%; height:50px;}
.info11::after{clear:both; display:table; content:"";}
.info11 aside{width:75%; height:50px; float:left; padding:5px 10px 0 15px; color:#777;}
.info11 footer{width:25%; height:50px; line-height:50px; float:left; background:#cdb27f; color:#333; font-size:20px; text-align:center; font-family:geomanist; transition:ease 0.5s;}
.info11 footer:hover{transition:ease 0.5s; background:#565554; color:#9f906b;}

.info12{width:100%; height:50px;}
.info12::after{clear:both; display:table; content:"";}
.info12 span{width:76%; height:50px; line-height:50px; text-align:left; padding-left:15px; font-size:22px; color:#a12921; font-family:geomanist; float:left; color:#222;} 
.info12 main{width:24%; height:50px; line-height:40px; font-size:20px; font-family:geomanist; float:left; color:#222; padding-right:30px;}

.info13{width:100%; height:50px;}
.info13::after{clear:both; display:table; content:"";}
.info13 aside{width:75%; height:50px; float:left; padding:5px 10px 0 15px; color:#777;}
.info13 footer{width:25%; height:50px; line-height:50px; float:left; background:#cdb27f; color:#333; font-size:20px; text-align:center; font-family:geomanist; transition:ease 0.5s;}
.info13 footer:hover{transition:ease 0.5s; background:#565554; color:#9f906b;}

.info14{width:100%; height:50px;}
.info14::after{clear:both; display:table; content:"";}
.info14 span{width:76%; height:50px; line-height:50px; text-align:left; padding-left:15px; font-size:22px; color:#a12921; font-family:geomanist; float:left; color:#222;} 
.info14 main{width:24%; height:50px; line-height:40px; font-size:20px; font-family:geomanist; float:left; color:#222; padding-right:30px;}

.info15{width:100%; height:50px;}
.info15::after{clear:both; display:table; content:"";}
.info15 aside{width:75%; height:50px; float:left; padding:5px 10px 0 15px; color:#777;}
.info15 footer{width:25%; height:50px; line-height:50px; float:left; background:#cdb27f; color:#333; font-size:20px; text-align:center; font-family:geomanist; transition:ease 0.5s;}
.info15 footer:hover{transition:ease 0.5s; background:#565554; color:#9f906b;}

/*KORPA*/
.korpa{width:1000px; margin:20px auto; padding:5px; text-align:right; border-bottom:solid 2px #222;}
.korpa main{display:inline-block; min-width:200px; min-height:100px;}
.korpa main::after{clear:both; display:table; content:"";}
.korpa aside{color:#222; height:40px; margin:0 10px; line-height:40px; background:#fff; padding-right:30px; font-size:24px;}
.korpa article{width:110px; height:110px; margin:5px; background:#cdb27f; float:left; font-size:28px; line-height:28px; color:#fff; text-align:center; position:relative; padding-top:15px;}
.korpa article a{display:block; width:110px; height:24px; line-height:24px; text-decoration:none; text-align:center; color:#fff; background:#263036; position:absolute; bottom:0; font-size:16px;}
.korpa figure{width:110px; height:110px; margin:5px; float:left; position:relative;}
.korpa img{width:100%; height:100%; object-fit:cover;}
.korpa figcaption{font-size:12px; position:absolute; bottom:0; left:0; margin:0; width:100%; padding:3px; background:rgba(20, 10, 20, 0.7); color:#fff; min-height:20px; text-align:left;}

/*LINKOVI*/
.linkovi{width:1000px; height:40px; line-height:40px; margin:10px auto 50px auto;}
.linkovi::after{clear:both; display:table; content:"";}
.linkovi header{width:31%; height:40px; line-height:40px; float:left; margin-right:2%; border:solid 1px #bebebb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.linkovi header a{color:#fff; display:block; text-decoration:none; font-size:24px; padding-left:20px; font-family:geomanist; color:#222;}
.linkovi main{width:31%; height:40px; line-height:40px; float:left; margin-right:2%; border:solid 1px #bebebb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.linkovi main a{color:#fff; display:block; text-decoration:none; font-size:24px; padding-left:20px; font-family:geomanist; color:#222;}
.linkovi footer{width:31%; height:40px; line-height:40px; float:left; background:none; border:solid 1px #bebebb; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.linkovi footer a{display:block; text-decoration:none; font-size:24px; padding-left:20px; font-family:geomanist; color:#222;}

/*MOBILNI*/
@media only screen and (max-width: 480px) {
.naslov article{width:100%; font-size:46px; height:40px; line-height:40px;}	
.naslovjela article{width:100%; font-size:40px; height:40px; line-height:40px; margin-bottom:30px;}
.telo{width:100%;}
.jela{width:100%;}
.jela a{width:90%; height:600px; margin:10px 5%; border:solid 1px #bebebb; overflow:hidden;}
.jela a img{width:100%; height:500px;}
/*KORPA*/
.korpa{width:100%; margin:20px auto; padding:3px;}
.korpa article{width:100px; height:100px; line-height:22px; font-size:23px; border-radius:20px;}
.korpa article a{width:100px; border-radius:20px;}
.korpa h1{text-align:left; padding-left:15px;}
.korpa figure{width:100px; height:100px;}
.info11 aside{padding:3px 10px 0 15px;}
.info13 aside{padding:1px 10px 0 15px;}
.info15 aside{padding:1px 10px 0 15px;}
.linkovi{width:100%; margin-bottom:140px;}
.linkovi header{width:90%; margin:10px 5% 0 5%;}
.linkovi main{width:90%; margin:10px 5% 0 5%;}
.linkovi footer{width:90%; margin:10px 5% 0 5%;}
}
</style>

<!--TELO-->

<!--NASLOV-->
<div class="naslov">
<article>
MENU
</article>

<!--KORPA-->
<?php
if(isset($_COOKIE["jelo"]) ){ ?>
<div class="korpa">
<aside style="font-family:geomanist;">For delivery</aside>
<main>
<?php
$niz=explode(" ", $_COOKIE["jelo"]);
$max=count($niz);
/*petlja for*/
for($x=1; $x<$max; $x++) {
	
/*jela koje vrtimo kroz for petlju*/
$jelo=explode("-", $niz[$x]);
$idm=$jelo[0];	
$sqlm="SELECT * FROM jela WHERE id=$idm";
$upitm=mysqli_query($conn,$sqlm);
$redm=mysqli_fetch_assoc($upitm);		
?>

<!--PRIKAZ KORPE-->
<figure>
<img src="<?=$redm["slika"]?>">
<figcaption><?=$redm["jelo"]?></figcaption>
</figure>

<?php
$ukupno[$x]=$redm["cena"]*$jelo[1];
 }	?>

<article>
<small style="color:#222;">In total</small><br>
<?php
echo array_sum($ukupno);
?> <small> $</small>
<a href="potvrdakorpe.php">Confirm</a>
</article>
</main>
</div>
<?php }	?>

<!--KORPA END-->
</div>
<!--NASLOV END-->

<!--LINKOVI-->
<div class="linkovi">
<header><a href="#jela">MAIN COURSE</a></header>
<main><a href="#salate">SALADS</a></main>
<footer><a href="#pica">DRINKS</a></footer>
</div>
<!--LINKOVI END-->

<!--JELA-->
<div class="naslovjela" id="jela">
<article>
MAIN COURSE
</article>
</div>

<div class="telo">

<div class="jela">
<?php
$sql="SELECT * FROM jela WHERE tip='maincourse' ";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { 
$id=$red['id'];
?>

<a href="prikaz.php?id=<?=$id?>">
<img src="<?=$red["slika"]?>">
<div class="info10">
<span><?=$red["jelo"]?></span>
<main>$<?=$red["cena"]?><small>/com</small></main>
</div>
<div class="info11">
<aside><?=$red["opis"]?></aside>
<footer>ORDER</footer>
</div>
</a>
<?php } ?>
</div>
<!--JELA END-->

<!--SALATE-->
<div class="naslovjela" id="salate">
<article style="color:#222;">
SALADS
</article>
</div>

<div class="jela">
<?php
$sql="SELECT * FROM jela WHERE tip='salads' ";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { 
$id=$red['id'];
?>

<a href="prikaz.php?id=<?=$id?>">
<img src="<?=$red["slika"]?>">
<div class="info12">
<span><?=$red["jelo"]?></span>
<main>$<?=$red["cena"]?><small>/com</small></main>
</div>

<div class="info13">
<aside><?=$red["opis"]?></aside>
<footer>ORDER</footer>
</div>
</a>
<?php } ?>
</div>
<!--SALATE END-->

<!--PICA-->
<div class="naslovjela" id="pica">
<article style="color:#222;">
DRINKS
</article>
</div>

<div class="jela">
<?php
$sql="SELECT * FROM jela WHERE tip='drink' ";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { 
$id=$red['id'];
?>

<a href="prikaz.php?id=<?=$id?>">
<img src="<?=$red["slika"]?>">
<div class="info14">
<span><?=$red["jelo"]?></span>
<main>$<?=$red["cena"]?><small>/com</small></main>
</div>
<div class="info15">
<aside><?=$red["opis"]?></aside>
<footer>ORDER</footer>
</div>
</a>
<?php } ?>
</div>
<!--PICA END-->

</div>
<!--TELO END-->

<?php include("futer.php"); ?>