<?php include("head.php"); ?>

<style>
/*NASLOV*/
body{background:#fff;}
.naslov{background:#fff;}

.naslov h1{width:1000px; margin:20px auto; height:60px; line-height:60px; text-align:center; font-size:48px; color:#222; font-family:geomanist;}

.naslovjela{background:#fff;}
.naslovjela article{width:1000px; height:50px; line-height:50px; font-size:36px; color:#222; margin:24px auto 10px auto; padding-left:10px; border-bottom:solid 3px #222;}

.jela{width:1000px; min-height:300px; margin:auto; overflow:hidden; padding-top:10px;}
.jela::after{clear:both; display:table; content:"";}

.jela a{display:block; float:left; width:228px; height:300px; margin:10px 10px; text-decoration:none; position:relative; overflow:hidden;}
.jela img{width:100%; height:225px; object-fit:cover;}
.jela span{position:absolute; bottom:40px; left:0; width:100%; min-height:30px; line-height:30px; text-align:center; font-size:18px; color:#fff; background:rgb(120, 50, 10);} 
.jela main{width:50%; height:40px; line-height:40px; position:absolute; bottom:0; left:0; background:#360; color:#fff; font-size:18px; text-align:center; overflow:hidden;}
.jela footer{width:50%; height:40px; line-height:40px; position:absolute; bottom:0; right:0; background:#C30; color:#fff; font-size:18px; text-align:center; overflow:hidden;}
.jela footer:hover{background:#3c2; color:#222;}

/*KORPA*/
.korpa{width:1000px; margin:20px auto; padding:5px; text-align:right;}
.korpa main{display:inline-block; min-width:200px; min-height:100px;}
.korpa main::after{clear:both; display:table; content:"";}
.korpa aside{color:#cdb27f; height:40px; margin:0 10px; line-height:40px; background:#fff; padding-right:30px; font-size:24px;}
.korpa article{width:110px; height:110px; margin:5px; background:#444; float:left; font-size:28px; line-height:28px; color:#fff; text-align:center; position:relative; padding-top:15px;}
.korpa article a{display:block; width:110px; height:24px; line-height:24px; text-decoration:none; text-align:center; color:#fff; background:#cdb27f; position:absolute; bottom:0; font-size:16px; transition:all 0.5s;}
.korpa a:hover{color:#222; transition:all 0.5s;}
.korpa figure{width:110px; height:110px; margin:5px; float:left; position:relative;}
.korpa img{width:100%; height:100%; object-fit:cover;}
.korpa figcaption{font-size:12px; position:absolute; bottom:0; left:0; margin:0; width:100%; padding:3px; background:rgba(20, 10, 20, 0.7); color:#fff; min-height:20px; text-align:left;}

/*LINKOVI*/
.linkovi{width:1000px; height:40px; line-height:40px; margin:10px auto 50px auto;}
.linkovi::after{clear:both; display:table; content:"";}
.linkovi header{width:31%; height:40px; line-height:40px; float:left; margin-right:2%; border:solid 2px #080; border-radius:20px; background:#060;}
.linkovi header:hover{background:#080; border:none;}
.linkovi header a{color:#fff; display:block; text-decoration:none; font-size:24px; padding-left:20px;}
.linkovi header a:hover{color:#fff;}
.linkovi main{width:31%; height:40px; line-height:40px; float:left; margin-right:2%; border:solid 2px #E67122; background:#E67122; border-radius:20px;}
.linkovi main:hover{background:#e87f38; border:none;}
.linkovi main a{color:#fff; display:block; text-decoration:none; font-size:24px; padding-left:20px;}
.linkovi main a:hover{color:#fff;}
.linkovi footer{width:31%; height:40px; line-height:40px; float:left; border:solid 2px #060; background:#060; border-radius:20px;}
.linkovi footer:hover{background:#080; border:none;}
.linkovi footer a{color:#fff; display:block; text-decoration:none; font-size:24px; padding-left:20px;}
.linkovi footer a:hover{color:#fff;}

.dolar{position:absolute; bottom:37px; left:22px;}

/*MOBILNI*/
@media only screen and (max-width: 480px) {
.naslov h1{width:100%; font-size:36px; height:40px; line-height:40px;}	
.naslovjela article{width:100%; font-size:18px; height:40px; line-height:40px; margin-bottom:30px;}
.jela{width:100%; background:#000;}
.jela a{width:44%; height:240px; margin:10px 3%; border:solid 2px #fff; border-radius:10px; overflow:hidden; background:#222;}
.jela img{height:130px; object-fit:fill;}
.jela span{bottom:80px; left:0; background:rgb(120, 50, 10);}
.jela main{bottom:40px; left:0; width:100%; background:#360;}
.jela footer{bottom:0; left:0; width:100%; background:#C30; color:#fff;}


/*KORPA*/
.korpa{width:100%; margin:20px auto; padding:3px;}
.korpa article{width:100px; height:100px; line-height:22px;}
.korpa article a{width:100px;}
.korpa h1{text-align:left; padding-left:15px;}
.korpa figure{width:100px; height:100px;}
.dolar{bottom:40px; left:22px;}
.intotal{position:absolute; bottom:68px; left:22px;}
.linkovi{width:100%; margin-bottom:140px;}
.linkovi header{width:90%; margin:10px 5% 0 5%;}
.linkovi main{width:90%; margin:10px 5% 0 5%;}
.linkovi footer{width:90%; margin:10px 5% 0 5%;}
}
</style>

<!--TELO-->

<!--NASLOV-->
<div class="naslov">
<h1>
Your basket
</h1>

<!--KORPA-->

<?php
if(isset($_COOKIE["jelo"]) ){ ?>
<div class="korpa">
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

<article style="position:relative;">
<small class="intotal">In total</small><br>
<small class="dolar">$</small>
<?php
echo array_sum($ukupno);
?> 
<a href="potvrdakorpe.php">Confirm</a>
</article>
</main>
</div>
<?php }	?>

<!--KORPA END-->
</div>
<!--NASLOV END-->

<!--TELO END-->

<?php include("futer.php"); ?>