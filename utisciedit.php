<?php
include("edit-head.php"); 
if($_GET['id']){
$id=$_GET['id'];
$sql="DELETE FROM utisci WHERE id='$id'";
mysqli_query($conn,$sql);}
?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:600px; min-height:300px; position:absolute; top:150px; left:260px;}
.impressions{position:absolute; top:65px; color:#222; font-family:geomanist; left:470px;}
.telo header{width:600px; margin:0 0 30px 0; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.telo header::after{clear:both; display:table; content:"";}
.telo header div{float:left; width:300px; height:40px; padding:10px; font-size:18px; font-family:geomanist; background:#fff; border-bottom:solid 1px #ccc;}
.telo header div a{font-size:18px; color:#222; font-family:geomanist; text-decoration:none;}
.telo header div a:hover{text-decoration:underline;}

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
<h1 class="impressions">IMPRESSIONS</h1>
<div class="telo">
<?php
$sql="SELECT * FROM utisci ORDER BY datum DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) 

{ ?>
<?php if($red["odobreno"]==0) {$mid=$red['id'];} else{} ?>
<header>
<div><?=$red["ime"]?></div>
<div style="text-align:right; padding-right:10px;"><?=$red["datum"]?></div>
<div style="width:600px; word-wrap:break-word;"><?=$red["komentar"]?></div>
<div><a href="odobri.php?id=<?=$red['id']?>">APPROVE</a></div>
<div style="text-align:right; border:none; padding-right:10px;"><a href="utisciedit.php?id=<?=$red['id']?>">DELETE</a></div>
</header>

<?php } ?>
</div>
	
<?php include("edit-futer.php"); ?>