<?php include("head.php"); ?>

<style>
/*KONTAKT*/
body{background:#fff;}
.kontakt{width:1100px; min-height:380px; margin:20px auto;}
.kontakt::after{clear:both; display:table; content:"";}
.kontakt article{width:400px; min-height:300px; float:left;}

/*FORMA*/
.kontakt header{width:560px; min-height:300px; float:left; margin:0 20px 0 80px;}
.kontakt label{font-size:20px; padding-top:20px; display:block; color:#333;}
.kontakt form{width:100%;}
.kontakt [type="text"], .kontakt [type="email"] {width:100%; height:40px; caret-color:#222; font-size:18px; padding-left:10px; display:block; margin:20px auto; font-family:geomanist; outline:none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border:none;}

.kontakt textarea{width:100%; height:150px; resize:none; caret-color:#222; font-size:18px; margin:10px 0 10px 0; padding:7px 0 0 10px; font-family:geomanist; letter-spacing:1px; outline:none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border:none;}

.kontakt [type="submit"]{width:18%; height:30px; color:#222; font-size:18px; transition:all 0.5s; background:#cdb27f; cursor:pointer; border:none; text-align:center; font-family:geomanist; outline:none;}
.kontakt [type="submit"]:hover{color:#cdb27f; background:#333333; transition:all 0.5s;}
::placeholder{padding-left:10px;}

.kontakt table{width:100%; border-bottom:solid 1px #cdb27f; margin-bottom:40px;}
.red1{color:#333333; padding-left:10px; font-family:geomanist;}
.red2{width:150px; border-left:solid 2px #222; padding-left:10px; font-family:geomanist; color:#cdb27f;}
.red3{padding:10px; font-family:geomanist;}
@media only screen and (max-width: 480px) {
.kontakt{width:100%; min-height:350px;}
.kontakt header{width:90%; margin:5%;}
.kontakt article{width:90%; margin:5%;}
.kontakt table{width:100%;}
.kontakt input[type="text"]{border:solid 1px #ccc;}
.kontakt input[type="email"]{border:solid 1px #ccc;}
.kontakt textarea{border:solid 1px #ccc;}
.kontakt [type="submit"]{font-size:16px; width:20%;}
.red1{width:150px; font-size:18px;}
.red2{font-size:18px;}	
.red3{font-size:18px;}
}

</style>

<!--KONTAKT-->
<div class="kontakt">

<article>
<h1 style="font-family:geomanist; padding-left:10px;">IMPRESSIONS</h1>
<?php
$sql="SELECT * FROM utisci WHERE odobreno='1' ORDER BY datum DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<table cellpadding="2">
<tr>
<td class="red1"><?=$red["ime"]?></td>
<td class="red2"><?=$red["datum"]?></td>
</tr>

<tr>
<td class="red3" colspan="2"><?=$red["komentar"]?></td>
</tr>

</table>

<?php } ?>
</article>

<header>
<form action="utisciunos.php" method="post" enctype="multipart/form-data">
<input type="text" name="ime" placeholder="Name and Surname" required>
<input type="email" name="email" placeholder="Email" required>
<textarea name="komentar" placeholder="Write a message.." required></textarea>
<input type="submit" value="SEND">
</form>
</header>
</div>
<!--KONTAKT END-->

<?php include("futer.php"); ?>