<?php include("edit-head.php"); 
if($_GET['id']){
$id=$_GET['id'];
$sql="DELETE FROM subscribe WHERE id='$id' ";
mysqli_query($conn,$sql);}
?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:700px; min-height:300px; position:absolute; top:120px; left:350px;}
table{border-bottom:solid 2px #333; margin-bottom:60px; margin-left:50px; margin-right:50px;}
.red1{color:#333; font-family:geomanist; background:#cdb27f; padding-left:10px;}
.red2{width:150px; border-left:solid 2px #333; background:#cdb27f; color:#333; font-family:geomanist; padding-left:10px;}
.red5 a{text-decoration:none; font-size:18px; color:#f00000; font-family:geomanist;}

@media only screen and (max-width: 480px) {
.telo{width:100%; left:0;}
table{width:90%; margin:5%;}
.red1, .red2, .red3{font-size:18px;}


}
</style>

<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">
<h1 style="color:#333; font-family:geomanist; letter-spacing:1px;" align="center">SUBSCRIBE</h1>

<div class="narudzbina">
<?php
$sql="SELECT * FROM subscribe ORDER BY datum DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>


<table width="600" cellpadding="2">
<tr>
<td class="red1"><?=$red["email"]?></td>
<td class="red2"><?=$red["datum"]?></td>
</tr>
<tr>
<td align="right">
<?php
if($red["odobreno"]==0) {$mid=$red['id']; echo '
<a style="font-family:geomanist; color:#333; text-decoration:none; letter-spacing:1px;" href="odobrisubscribe.php?id='.$mid.'">APPROVE</a>';} else{}
?>
</td><td class="red5" align="right"><a href="subscribeedit.php?id=<?=$red['id']?>">DELETE</a></td>
</tr>

</table>

<?php } ?>
</div>
</div>
	
<?php include("edit-futer.php"); ?>