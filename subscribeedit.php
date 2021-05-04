<?php include("edit-head.php"); 
if($_GET['id']){
$id=$_GET['id'];
$sql="DELETE FROM subscribe WHERE id='$id' ";
mysqli_query($conn,$sql);}
?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.naslov{color:#222; font-family:geomanist; letter-spacing:1px; position:absolute; top:65px; left:500px;}
.telo{width:600px; position:absolute; top:150px; left:260px;}
.nosac{width:600px; min-height:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff; margin:0 0 20px 0;}
.nosac::after{clear:both; display:table; content:"";}
.nosac div{float:left; width:300px; height:40px; padding:15px;}
.nosac div a{text-decoration:none; color:#f00;}

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
<h1 class="naslov">SUBSCRIBE</h1>
<div class="telo">


<?php
$sql="SELECT * FROM subscribe ORDER BY datum DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>
<div class="nosac">
<div><?=$red["email"]?></div>
<div style="text-align:right; padding-right:10px;"><?=$red["datum"]?></div>

<?php
if($red["odobreno"]==0) {$mid=$red['id']; echo '
<div><a style="font-family:geomanist; color:#333; text-decoration:none; letter-spacing:1px;" href="odobrisubscribe.php?id='.$mid.'">APPROVE</a></div>';} else{}
?>

<div style="text-align:right; padding-right:10px;"><a style="text-align:right; padding-right:10px;" href="subscribeedit.php?id=<?=$red['id']?>">DELETE</a></div>

</div>

<?php } ?>

</div>

	
<?php include("edit-futer.php"); ?>