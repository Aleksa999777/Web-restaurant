<?php include("head.php"); ?>

<style>
body{background:#fff;}
.kontakt{width:1000px; min-height:230px; margin:50px auto 10px auto;}
.kontakt h1{font-family:geomanist; text-align:center; color:#333;}
.kontakt p{text-align:center; font-size:18px; word-spacing:2px; font-family:geomanist;} 
.kontakt article{color:#cdb27f; text-align:center; height:30px; line-height:30px; font-size:80px; font-family:geomanist; padding-top:20px;}

.forma{width:1000px; min-height:300px; margin:10px auto 40px auto;}
.forma form{width:500px; margin:auto;}
.forma aside{width:47%; height:45px; margin:1%; display:inline-block; position:relative; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
input[type="text"]{width:100%; height:45px; font-size:18px; padding-left:10px; font-family:geomanist; outline:none; border:none;}
.forma main{width:100%; height:150px; margin:10px 0 2px auto; position:relative;}
.forma input[type="submit"]{width:150px; height:60px; line-height:30px; border:solid 4px #cdb27f; font-size:20px; color:#222; border-radius:50px; cursor:pointer; background:none; text-align:center; margin-top:20px; margin-left:calc(50% - 75px); transition:all 1s; font-family:geomanist; letter-spacing:1px; outline:none;}
.forma input[type="submit"]:hover{background:#cdb27f; color:#fff; transition:all 1s;}
.forma span{position:absolute; top:12px; right:10px; color:#f00;}
.crta{width:600px; margin:20px auto;}
.crta hr{height:2px; background:#efede0; border:none;}

.adresa{width:810px; min-height:250px; margin:10px auto 10px auto;}
.adresa::after{clear:both; display:table; content:"";}
.adresa article{width:400px; height:220px; float:left;}
.adresa article h1{color:#222; letter-spacing:2px; font-family:geomanist; font-size:28px; font-weight:900; padding-left:10px;}
.adresa article p{white-space:pre-wrap; font-size:22px; padding-left:10px; color:#222; font-family:geomanist;}

.adresa header{width:400px; height:220px; float:left;}
.adresa header p{font-size:22px; white-space:pre-wrap; color:#222; padding-left:50px; font-family:geomanist;}

@media only screen and (max-width: 480px) {
.kontakt{width:90%; margin:5%; min-height:230px;}
.kontakt article{line-height:70px; font-size:40px; padding-top:0;}
.forma{width:90%; margin:1% 5% 5% 5%;}
.forma form{width:100%;}
.kontakt aside{width:98%; margin:2% 1%;}
.forma input[type="submit"]{line-height:60px;}
.forma input[type="text"]{width:100%; display:block; float:left;}
.crta{width:100%;}
.adresa{width:100%;}
.adresa article{width:100%; height:170px;}
.adresa article h1{text-align:center;}
.adresa article p{text-align:center; white-space:pre-line;}
.adresa header{width:100%; height:170px;}
.adresa header p{text-align:center; padding-left:4px;}
}

</style>

<div class="kontakt">
<h1>HI THERE! HOW CAN WE HELP?</h1>
<p>Just leave us a message, and we'll get in touch shortly.Thanks so much!</p>
<article>The Kolbern Team</article>
</div>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["korisnik"])){$greskakorisnik = "Required field";}	
else{$korisnik = $_POST["korisnik"];
if(!preg_match("/^[0-9a-zA-Z_ČĆŠŽčćšžĐđ ]{2,30}$/", $korisnik))
{$greskakorisnik = "Only letters and numbers are allowed!";}}

if(empty($_POST["adresa"])){$greskaadresa = "Required field";}	
else{$adresa = $_POST["adresa"];
if(!preg_match("/^[0-9a-zA-Z_ČĆŠŽčćšžĐđ ]{2,30}$/", $adresa))
{$greskaadresa = "Only letters and numbers are allowed!";}}

if(empty($_POST["email"])){$greskaemail = "Required field";}	
else{$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$greskaemail = "Error email";}}

if(empty($_POST["telefon"])){$greskatelefon = "Required field";}	
else{$telefon = $_POST["telefon"];
if(!preg_match("/^[0-9+\-\/\(\) ]{4,30}$/", $telefon))
{$greskatelefon = "Only letters and numbers are allowed!";}}

if(empty($_POST["detalji"])){$greskadetalji = "Required field";}	
else{$detalji = $_POST["detalji"];
if(!preg_match("/^[0-9a-zA-Z_ČĆŠŽčćšžĐđ ]{9,2000}$/", $detalji))
{$greskadetalji = "Only letters and numbers are allowed!";}}

if(empty($greskakorisnik) and empty($greskaadresa) and empty($greskaemail)  and empty($greskatelefon)  and empty($greskadetalji)){
	
$sql = "INSERT INTO kontakt (korisnik, adresa, email, telefon, detalji) VALUES ('$korisnik', '$adresa', '$email', '$telefon', '$detalji')";	
mysqli_query($conn,$sql);
echo '<meta http-equiv="refresh" content="0; url=index.php?poruka=You have successfully contacted us!">';
} else {$poruka2 = "Fill form correctly";}
}
if($poruka2){echo '<h2 align="center" style="color:#f00;">'.$poruka2.'</h2>';}
?>

<div class="forma">
<form action="kontakt.php" method="post">

<aside>
<input type="text" name="korisnik" placeholder="First name" value="<?=$korisnik?>">
<span><?=$greskakorisnik?></span>
</aside>

<aside>
<input type="text" name="adresa" placeholder="Address" value="<?=$adresa?>">
<span><?=$greskaadresa?></span>
</aside>

<aside>
<input style="width:98%; height:45px; font-size:18px; padding-left:10px; border:none; outline:none; font-family:geomanist;" type="text" name="email" placeholder="Email" value="<?=$email?>">
<span><?=$greskaemail?></span>
</aside>

<aside>
<input style="width:98%; height:45px; font-size:18px; padding-left:10px; border:none;" type="text" name="telefon" value="<?=$telefon?>" placeholder="Phone number">
<span><?=$greskatelefon?></span>
</aside>

<main>
<textarea name="detalji" style="width:99%; height:150px; margin:10px 0 2px auto; resize:none; font-size:18px; padding:10px; border:none; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); font-family:geomanist; outline:none;" placeholder="How can we help you today?"><?=$detalji?></textarea>
<span><?=$greskadetalji?></span>
</main>

<input type="submit" value="SUBMIT">
</form>
</div>

<div class="crta"><hr></div>

<div class="adresa">

<article>
<h1>SUNNY STREET CAFE</h1>
<p>274 Marconi Boulevard, Suite 260
           Columbus, OH 43215-2363</p>
</article>

<header>
<p>info@healthyfood.devphase.io

614.396.5030(office)

614.396.5035(fax)
</p>
</header>

</div>


<div style="height:30px; margin:2px 0 2px 0; background:#263036;"></div>

<!--GOOGLE MAP-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12612.183874018805!2d-122.4401552778303!3d37.78896246575148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2srs!4v1582215903816!5m2!1sen!2srs" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<!--GOOGLE MAP END-->

<?php include("futer.php"); ?>