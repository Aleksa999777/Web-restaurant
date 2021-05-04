<?php
include("edit-head.php");
if($_GET['id']){
$id=$_GET["id"];
$sql="SELECT * FROM jela WHERE id=$id";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
unlink ($red["slika"]);

$sql="DELETE FROM jela WHERE id=$id";
mysqli_query($conn,$sql);}
?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:690px; min-height:100px; margin:80px 0 30px 260px; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.nosi{width:100%; min-height:100px; border-bottom:solid 1px #bebebb;}
.nosi::after{clear:both; display:table; content:"";}
.red1, .red2, .red3, .red4, .red5, .red6, .red7{float:left; font-family:geomanist; height:105px;}
.red1{width:120px; padding:10px 0 10px 5px; overflow:hidden;}
.red1 img{width:100%; height:100%; object-fit:contain;}
.red2{width:100px; padding:40px 0 0 0; word-wrap:break-word; text-align:center;}
.red3{width:100px; padding:40px 0 0 0; text-align:center;}
.red4{width:150px;padding:40px 0 0 0; text-align:center;}
.red5{width:50px; padding:40px 0 0 0; text-align:center;}
.red6, .red7{width:80px; padding:30px 0 0 10px;}
.red6 a{background:#f00; color:#fff;}
.red7 a{background:#444; color:#cdb27f; transition:all 0.5s;}
.red7 a:hover{background:#333; transition:all 0.5s; color:#f1f1f1;}

.telo a{text-decoration:none; display:block; font-size:14px; border-radius:50%; width:45px; height:45px; line-height:45px; text-align:center; margin:2px;}


@media only screen and (max-width: 480px) {
.telo{width:100%; left:0; margin:0;}	
.red2{font-size:12px;}
.red3{font-size:12px;}
.red5{font-size:12px;}
.red6{padding:0; padding-top:15px;}
.red7{padding:0; padding-top:15px;}
}
</style>

<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">
<h1 style="font-family:geomanist; margin:0; padding:8px; border-bottom:solid 1px #ccc;" align="center">View Products</h1>
<?php
$sql="SELECT * FROM jela ORDER BY id DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>
<!--NOSI-->
<div class="nosi">
<div class="red1"><img src="<?=$red["slika"]?>" height="80"></div>
<div class="red2"><?=$red["jelo"]?></div>
<div class="red3"><?=$red["tip"]?></div>
<div class="red4"><?=$red["opis"]?></div>
<div class="red5"><small>$</small><?=$red["cena"]?></div>
<div class="red6"><a href="#pitanje<?=$red["id"]?>">DELETE</a>
<div id="pitanje<?=$red['id']?>">
<span style="text-align:center;">Are you sure you want to delete the product?</span>
<a class="delete" href="#" style="position:absolute; left:50px; bottom:50px;">NO</a>
<a class="delete" style="position:absolute; right:50px; bottom:50px;" href="proizvodi.php?id=<?=$red['id']?>">YES</a>
</div>

</div>
<div class="red7"><a href="izmeni.php?id=<?=$red["id"]?>">EDIT</a></div>
</div>
<style>
#pitanje<?=$red['id']?>{display:none;}
#pitanje<?=$red['id']?>:target{position:fixed; left:calc(50% - 120px); top:calc(50% - 170px); width:300px; height:200px; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); z-index:3; display:block;}
#pitanje<?=$red['id']?> span{display:block; width:200px; position:absolute; left:calc(50% - 100px); top:30px;}
</style>
<!--NOSI END-->
<?php } ?>
</div>
<!--TELO END-->

<!--NOSI END-->
</div>
<!--TELO END-->
<?php include("edit-futer.php"); ?>