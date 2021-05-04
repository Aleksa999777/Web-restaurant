<?php include("head.php"); ?>

<style>
body{background:#f0f0fa;}
.nosisve{width:1200px; margin:auto;}
.nosisve::after{clear:both; display:table; content:"";}
h1{padding-left:10px; color:#263036; text-align:center;}
.potvrdikorpa{width:800px; min-height:250px; margin:10px auto 40px 200px; float:left; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.potvrdikorpa img{width:100px; height:110px; object-fit:cover;}

/* TABELA */
.red2{font-size:20px; padding-left:10px; color:#3b444a;}
.red6{padding-left:5px; font-size:18px;}

.brisanje{display:block; width:18%; height:40px; line-height:40px; text-align:center; text-decoration:none; background:#cdb27f; color:#fff; margin:10px 0 10px 10px; border-radius:20px; transition:all 0.5s;}
.brisanje:hover{background:#333333; color:#cdb27f; transition:all 0.5s;}

.forma6{width:800px; min-height:300px; float:left; margin:20px auto 40px 200px; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.forma6 form{width:100%; padding:10px;}
.forma6 label{color:#3b444a; font-size:24px;}
.forma6 input[type="text"],.forma6 input[type="email"]{width:100%; height:40px; line-height:40px; font-size:18px; border:solid 1px #bebebb; padding-left:5px; outline:none;}
.forma6 textarea{width:100%; height:200px; font-size:18px; border:solid 1px #bebebb; padding-left:5px; resize:none; outline:none;}
.forma6 input[type="submit"]{width:100%; height:40px; line-height:40px; border:none; font-size:18px; background:#cdb27f; letter-spacing:2px; color:#fff; cursor:pointer; margin-top:10px; border-radius:20px; transition:ease 0.5s;}
.forma6 input[type="submit"]:hover{background:#333333; transition:ease 0.5s; color:#cdb27f;}
/*MOBILNI*/
@media only screen and (max-width: 480px) {
.nosisve{width:100%;}
.potvrdikorpa{width:90%; margin:5%;}
.forma6{width:90%; margin:5%;}
.brisanje{width:45%;}
.red6{font-size:18px; margin:0; padding:0; width:20%;}
}
</style>

<!--TELO-->

<!--KORPA-->
<div class="nosisve">
<?php
if(isset($_COOKIE["jelo"])){ ?>

<div class="potvrdikorpa">
<h1>FOR DELIVERY</h1>
    
<?php
$niz=explode(" ", $_COOKIE["jelo"]);
$max=count($niz); 
?>

<table width="100%" cellspacing="2">

<?php
/*petlja for*/
for($x=1; $x<$max; $x++) {
	
/*jela koja vrtimo kroz for petlju*/
$jelo=explode("-", $niz[$x]);
$idm=$jelo[0];	
$sqlm="SELECT * FROM jela WHERE id=$idm";
$upitm=mysqli_query($conn,$sqlm);
$redm=mysqli_fetch_assoc($upitm);		
?>

<!--PRIKAZ KORPE-->
<tr>
<td width="100" height="100" rowspan="2" style=" border:solid 1px #ccc;"><img src="<?=$redm["slika"]?>"></td>
<td valign="top" class="red2"><?=$redm["jelo"]?></td>
<td valign="top" class="red3"><?php echo $jelo[1];
    
if($redm["tip"]=="pice"){echo "<small> com</small>";}
else{echo "<small>.com</small>";} ?></td>
<td width="60" rowspan="2" align="center" valign="bottom"><a href="delete2.php?id=<?=$x?>"><img src="grafika/kanta.png" style="width:30px; height:30px; background:none;"></a></td>
</tr>
<tr>
<td align="right" style="font-size:18px; font-family:geomanist;">Price</td>
<td align="left" class="red6"><small style="font-size:18px; padding:0 3px 0 0;">$</small><?=$redm["cena"]*$jelo[1]?></td>
</tr>

<tr bgcolor="#99c"><td colspan="4"></td></tr>
<?php
$ukupno[$x]=$redm["cena"]*$jelo[1];
 } ?>

<tr>
<td style="font-size:22px; font-weight:bold; color:#ff0000; padding:10px; position:relative; font-family:geomanist;" colspan="4">IN TOTAL
<span style="position:absolute; right:10px;">
<?php 
echo array_sum($ukupno);
$sve=array_sum($ukupno);
?><small style="font-size:18px;">$</small>
</span>
</td>
</tr>
</table>
<a class="brisanje" href="korpadelete.php">DELETE DELIVERY</a>
</div>
<!--POTVRDAKORPE END-->
<?php }	?>
<!--KORPA END-->

<!--FORMA-->
<div class="forma6">
<h1>DELIVERY DETAILS</h1>
<form method="post" action="potvrdanarudzbe.php">
<input type="hidden" name="max" value="<?=$max?>">
<input type="hidden" name="sve" value="<?=$sve?>">
<?php
for($x=1; $x<$max; $x++) {
$jelo=explode("-", $niz[$x]);
?>

<input type="hidden" name="jelo<?=$x?>" value="<?=$jelo[0]?>">
<input type="hidden" name="kolicina<?=$x?>" value="<?=$jelo[1]?>">

<?php } ?>

<label>Name and Surname<span style="color:#f00;">*</span></label><br>
<input type="text" name="ime" required><br><br>
<label>Telephone<span style="color:#f00;">*</span></label><br>
<input type="text" name="telefon" required><br><br>
<label>E-mail</label><br>
<input type="email" name="email"><br><br>
<label>Address<span style="color:#f00;">*</span></label><br>
<input type="text" name="adresa" required><br><br>
<label>Order notes..</label>
<textarea name="komentar"></textarea>
<input type="submit" value="CONFIRM">
</form>
<!--FORMA END-->
</div>
<!--TELO END-->
</div>
<!--NOSISVE END-->
<?php include("futer.php"); ?>