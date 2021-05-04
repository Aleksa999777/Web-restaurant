<?php include("edit-head.php"); ?>
<style>
/*NOSI*/
.nosi{width:1000px; min-height:500px; border:solid 1px #f00; margin:auto;}
.nosi::after{clear:both; display:table; content:"";}

/*MENI*/
.meni{width:180px; float:left; border:solid 1px #0f0; margin-top:10px;}
.meni a{height:50px; line-height:50px; padding-left:10px; font-size:20px; display:block; text-decoration:none; color:#fff; background:#070; margin:2px 0 0 0;}
.meni a:hover{background:#007;}

/*TELO*/
.telo{float:left; width:780px; min-height:300px; margin:10px;}

/* NARUDZBINA */
.narudzbina{width:780px; margin:0 0 30px 0; background:#999; overflow:hidden; border-radius:10px;}
.narudzbina::after{clear:both; display:table; content:"";}
.narudzbina article{float:left; width:250px; height:90px; margin:5px; background:#777; position:relative;}
.narudzbina img{width:120px; height:90px; object-fit:cover; border:solid 1px #f90;}
.narudzbina aside{position:absolute; width:130px; height:60px; line-height:20px; text-align:center; left:120px; top:0; background:#eee; font-size:18px;}
.narudzbina span{display:block; position:absolute; width:130px; height:30px; line-height:30px; text-align:center; left:120px; bottom:0; font-size:18px; color:#fff; background:#050;}

/* KUPAC */
.kupac{width:100%; height:50px; font-size:18px; color:#222; margin-top:15px; float:left; background:#eee; position:relative;}
.korisnik{position:absolute; right:635px; top:0; width:145px; min-height:50px; line-height:30px; font-size:16px; background:#050; color:#fff; padding-left:5px;}
.adresa{position:absolute; right:490px; top:0; width:145px; min-height:50px; line-height:30px; font-size:16px; background:#222; color:#fff;}
.telefon{position:absolute; right:370px; top:0; width:120px; height:50px; line-height:30px; text-align:left; padding-left:5px; background:#050; color:#fff;}
.detalji{position:absolute; right:250px; top:0; width:120px; min-height:50px; font-size:14px; background:#222;}
.ukupno{position:absolute; right:160px; top:0; width:90px; height:50px; line-height:50px; text-align:left; padding-left:5px; background:#050; color:#fff;}
.obrisi{position:absolute; right:90px; top:0; width:70px; height:50px; line-height:50px; text-align:center; text-decoration:none; color:#222; background:#a31919; display:block; font-size:15px; font-weight:bold;}
.obrisi:hover{background:#890000; color:#fff;}
.isporuci{position:absolute; right:0; top:0; display:block; width:90px; height:50px; line-height:50px; text-align:center; text-decoration:none; background:#222; color:#fff; font-size:14px; font-weight:bold;}
.isporuci:hover{background:#383838;}

</style>

<!--NOSI-->
<div class="nosi">

<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">
<h1 align="center">Ko nas je kontaktirao?</h1>

<?php
$sql="SELECT * FROM kontakt ORDER BY datum DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<table width="760" style="border-bottom:solid 2px #555; margin:0 0 10px 0;">

<tr>
<td bgcolor="#FFFF66" colspan="2"><?=$red["korisnik"]?></td><td width="150"><?=$red["datum"]?></td>
</tr>

<tr>
<td colspan="3"><?=$red["detalji"]?></td>
</tr>

<tr bgcolor="#3399FF">
<td><?=$red["adresa"]?></td><td><?=$red["email"]?></td><td><?=$red["telefon"]?></td>
</tr>
</table>

<?php } ?>

<?php include("edit-futer.php"); ?>