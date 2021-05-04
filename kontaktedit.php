<?php include("edit-head.php");
$id=$_GET["id"];
$sql = "DELETE FROM kontakt WHERE id='$id'";
mysqli_query($conn,$sql);
?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:600px; min-height:100px; position:absolute; top:150px; left:260px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#bcbcbb;}
.telo header{width:100%; position:relative; margin:0 0 20px 0; overflow:hidden; background:#fff;}
.telo::header{clear:both; display:table; content:"";}
.telo header h2{width:600px; height:50px; text-align:center; padding:10px; border-bottom:solid 1px #ccc; margin:0;}
.telo header div{float:left; width:300px; height:40px; padding:10px; font-family:geomanist; font-size:18px; border-bottom:solid 1px #ccc;}
.telo header div a{text-decoration:none; width:120px; height:40px; line-height:40px; background:#f00000; color:#fff; text-align:center; font-size:16px; padding:5px;}

@media only screen and (max-width: 480px) {
.telo{width:100%; left:0;}
}
</style>
<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">
<?php
$sql="SELECT * FROM kontakt ORDER BY id DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<header>
<h2>Client contact</h2>
<div><?=$red["korisnik"]?></div>
<div style="text-align:right; padding:10px;"><?=$red["datum"]?></div>
<div><?=$red["detalji"]?></div>
<div style="text-align:right; padding:10px;"><?=$red["adresa"]?></div>
<div><?=$red["telefon"]?></div>
<div style="text-align:right; padding:10px;"><?=$red["email"]?></div>
<div style="text-align:right; border:none; height:50px; width:100%; padding:10px;"><a href="kontaktedit.php?id=<?=$red['id']?>">DELETE</a></div>
</header>

<?php } ?>
</div>
	
<?php include("edit-futer.php"); ?>