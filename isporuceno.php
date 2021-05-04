<?php include("edit-head.php"); ?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:780px; min-height:300px; margin:10px; position:absolute; top:120px; left:260px;}

/* NARUDZBINA */
.narudzbina{width:780px; margin:0 0 30px 0; background:#fff; overflow:hidden; position:relative; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.narudzbina::after{clear:both; display:table; content:"";}
.narudzbina article{float:left; width:250px; height:90px; margin:4px; background:#777; position:relative;}
.narudzbina img{width:120px; height:90px; object-fit:cover;}
.narudzbina aside{position:absolute; width:130px; height:60px; line-height:20px; text-align:left; padding-left:10px; padding-top:13px; left:120px; top:0; background:#eee; font-size:20px; font-family:geomanist;}
.narudzbina span{display:block; position:absolute; width:130px; height:30px; line-height:30px; text-align:center; left:120px; bottom:0; font-size:18px; color:#fff; background:#f7b11b;}

/* KUPAC */
.kupac{width:100%; min-height:180px; font-size:18px; color:#222; margin-top:15px; float:left; background:#fff; position:relative;}
.kupac h2{padding:0 10px 5px 10px; margin:0 auto; text-align:center; color:#222; font-family:geomanist; border-bottom:solid 1px #ddd; width:95%;}

.korisnik{position:absolute; left:2px; top:45px; min-width:160px; min-height:30px; background:#fff; color:#333; padding:5px 5px 5px 25px; text-align:left; font-family:geomanist;}
.korisnik span{width:15px; height:7px; background:#5cb85c; display:block; position:absolute; top:13px; left:3px; border-radius:50px;}

.adresa{position:absolute; left:2px; top:75px; min-width:180px; min-height:30px; background:#fff; font-family:geomanist; color:#333; padding:5px 5px 5px 25px; text-align:left;}
.adresa span{width:15px; height:7px; background:#ff8306; display:block; position:absolute; top:13px; left:3px; border-radius:50px;}

.telefon{position:absolute; left:2px; top:105px; min-width:160px; height:30px; text-align:left; padding:5px 5px 5px 25px; background:#fff; font-family:geomanist; color:#222;}
.telefon span{width:15px; height:7px; background:#ffb8bf; display:block; position:absolute; top:13px; left:3px; border-radius:50px;}

.detalji{position:absolute; left:220px; top:45px; width:500px; min-height:30px; font-size:13px; background:#fff; color:#222; font-family:geomanist; padding:8px 5px 5px 25px; word-wrap:break-word;} 
.detalji span{width:15px; height:7px; background:#d9534f; display:block; position:absolute; top:13px; left:3px; border-radius:50px;}

.ukupno{position:absolute; left:220px; top:85px; width:220px; height:30px; line-height:30px; text-align:left; padding:0 5px 5px 25px; background:#fff; font-family:geomanist; color:#333; }
.ukupno span{width:15px; height:7px; background:#000000; display:block; position:absolute; top:13px; left:3px; border-radius:50px;}

.obrisi{position:absolute; right:10px; top:10px;}
.obrisi img{width:100%; height:100%;}

.isporuci{position:absolute; left:220px; top:120px; display:block; width:220px; height:30px; line-height:30px; text-align:center; background:#f7b11b; color:#fff; font-size:16px; font-family:geomanist; text-decoration:none; border-radius:30px;}

</style>

<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">

<?php
$sql="SELECT * FROM korpe WHERE isporuka='1' AND naplaceno='0' ";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) {
?>

<!--NARUDZBINA-->
<div class="narudzbina">
<h1 style="font-family:geomanist; letter-spacing:1px; padding:10px; margin:10px 20px 20px 20px; text-align:center; border-bottom:solid 1px #ddd;">DELIVERED</h1>
<?php for($x=1; $x<21; $x++) { 
if($red["jelo".$x]==0){}
else{
$idjelo=$red["jelo".$x];
$sql2="SELECT * FROM jela WHERE id='$idjelo' ";
$upit2=mysqli_query($conn,$sql2);
$redj=mysqli_fetch_assoc($upit2);
?>
<article>
<img src="<?=$redj["slika"]?>" width="100">
<aside><?=$redj["jelo"]?></aside>
<?php
if($redj["tip"]=="pice") {$sm=' com';}
else {$sm='com';}
?>
<span><?=$red["kolicina".$x]?><small><?=$sm?></small></span>
</article> 
<?php } } ?>
<!--KUPAC-->
<div class="kupac">
<h2>Customer information</h2>
<div class="korisnik"><span></span><?=$red["korisnik"]?></div>
<div class="adresa"><span></span><?=$red["adresa"]?></div>
<div class="telefon"><span></span><?=$red["telefon"]?></div>
<div class="detalji"><span></span><?=$red["detalji"]?></div>
<div class="ukupno"><span></span><small>$</small><?=$red["ukupno"]?></div>
<a href="naplata.php?idkorpa=<?=$red['id']?>" class="isporuci">PAID</a>
</div>
<!--KUPAC END-->
<a href="obrisi.php?idkorpa=<?=$red['id']?>" class="obrisi" title="Delete delivery!"><img src="grafika/delete2.png"></a>
</div>

<?php } ?>
<!--TELO END-->
</div>

<?php include("edit-futer.php"); ?>