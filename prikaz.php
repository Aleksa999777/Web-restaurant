<?php include("head.php"); ?>

<style>
body{background:#fff;}
.prikaz{width:1054px; min-height:300px; margin:40px auto; border:solid 1px #bebebb; overflow:hidden; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.prikaz::after{clear:both; display:table; content:"";}

.prikaz img{display:block; width:500px; height:360px; object-fit:cover; float:left; background:#fff; border-right:solid 1px #bebebb; background:#f1f1f1;}

.prikaz nav{width:548px; float:left; margin:0;}
.prikaz nav::after{clear:both; display:table; content:"";}	
.prikaz header{width:300px; min-height:50px; line-height:30px; font-size:30px; padding-left:5px; padding-top:10px; color:#222; float:left; border-bottom:solid 2px #222; font-family:geomanist; margin-left:5px;}
.prikaz footer{width:243px; min-height:50px; line-height:50px; text-align:right; padding-right:5px; color:#222; background:#fff; font-size:24px; float:left;}
.prikaz main{width:548px; height:300px; color:#263036; white-space:pre-wrap; padding:20px 20px 20px 10px; float:left; font-family:geomanist; font-size:24px;}

.prikaz form{width:300px; padding:2px 0; text-align:center; position:absolute; right:0;}
.prikaz select{width:100px; height:40px; font-size:18px; margin:6px 50px 0 0; padding-left:14px; outline:none; border:solid 1px #ccc;}
.prikaz input[type="submit"]{width:100px; height:40px; font-size:18px; background:#cdb27f; color:#222; border:none; position:absolute; right:12px; top:8px; transition:ease 0.5s; font-family:geomanist; outline:none;}
.prikaz input[type="submit"]:hover{color:#cdb27f; background:#222222; cursor:pointer; transition:ease 0.5s;}
.prikaz span{width:100%; background:#060; color:#fff; display:block; margin:5px 0;}

.nosiformu{width:1050px; height:60px; position:relative; background:#f1f1f1; border-top:solid 2px #222;}

/*MOBILNI*/
@media only screen and (max-width: 480px) {
.prikaz{width:100%; border:none;}
.prikaz img{width:90%; margin:5%; border:none;}
.prikaz nav{width:100%;}
.prikaz header{width:48%;}
.prikaz main{width:100%; min-height:10px;}
.prikaz footer{width:49%; padding-top:5px;}
.prikaz span{padding:0 10px 0 50px;}
.nosiformu{width:100%;}

}

/*TABLET*/
@media only screen and (min-width: 481px) and (max-width: 1024px) {
	
}

</style>

<!--TELO-->
<?php
$id=$_GET["id"];
$sql="SELECT * FROM jela WHERE id=$id";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
?>
<!--NOSI-->
<div class="prikaz">
<img src="<?=$red["slika"]?>">
<nav>
<header><?=$red["jelo"]?></header>
<footer style="font-family:geomanist;">Price: <?=$red["cena"]?><small>$ / 1.com</small></footer>
</nav>
<main <?=$pad?>><?=$red["opis"]?></main>

<div style="clear:both;"></div>

<div class="nosiformu">
<form action="korpa.php" method="post">
<input type="hidden" name="id" value="<?=$id?>">
<select name="kolicina">
<option value="1"><?php if($red["tip"]=="pice"){echo "1.com";} else{echo "1.com";} ?></option>
<option value="2"><?php if($red["tip"]=="pice"){echo "2.com";} else{echo "2.com";} ?></option>
<option value="3"><?php if($red["tip"]=="pice"){echo "3.com";} else{echo "3.com";} ?></option>
<option value="4"><?php if($red["tip"]=="pice"){echo "4.com";} else{echo "4.com";} ?></option>
<option value="5"><?php if($red["tip"]=="pice"){echo "5.com";} else{echo "5.com";} ?></option>
</select>
<input type="submit" value="ORDER">
</form>
</div>


</div>
<!--NOSI END-->

<!--TELO END-->

<?php include("futer.php"); ?>