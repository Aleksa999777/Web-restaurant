<?php include("head.php"); ?>

<style>
/*BANNER*/
.banner{width:100%; height:600px; background:url(slike/banner.jpg); background-size:cover; background-repeat:no-repeat; background-position:center; position:relative; margin:0 auto;}
.banner h1{margin:0 auto; text-align:center; color:#fff; font-size:100px; white-space:pre-wrap; font-family:geomanist; width:1000px; height:330px; line-height:120px; letter-spacing:4px; padding-top:100px;}
.link{width:1000px; height:100px; margin:30px auto;}
.link a{display:block; margin:15px auto; width:200px; height:50px; line-height:20px; font-size:24px; font-weight:bold; font-family:geomanist; color:#8d7a5c; background:#fff; text-decoration:none; text-align:center; padding-top:15px; letter-spacing:2px; transition:ease 0.5s;}
.link a:hover{transition:ease 0.5s; background:#222222; color:#8d7a5c;}
/*BANNER*/

/*PORUKA*/
.poruka{width:1000px; height:50px; line-height:50px; margin:20px auto 0; font-size:36px; color:#B09C11;}
/*PORUKA*/

/*SADRZAJ*/
.sadrzaj{width:1000px; height:220px; margin:10px auto;}
.sadrzaj::after{clear:both; display:table; content:"";}
.sadrzaj figure{width:300px; height:240px; margin:10px; display:block; float:left;}
.sadrzaj img{height:100%; width:100%; object-fit:cover;}
.sadrzaj article{width:600px; height:100px; float:left; font-size:24px; color:#93780D; margin:20px;}
/*SADRZAJ*/

/*JELO*/
.jello{width:1000px; margin:40px auto 70px auto;}
.jello a{display:block; width:200px; height:50px; line-height:50px; text-align:center; text-decoration:none; color:#fff; letter-spacing:2px; font-weight:bold; font-size:14px; font-family:geomanist; margin:auto; background:#8d7a5c; transition:ease-in 0.5s;}
.jello a:hover{background:#565554; color:#aa9b71; transition:ease-in 0.5s;} 
/*JELO*/

/* PARALAX */
.paralax{width:100%; height:650px; margin:10px 0; background:url(slike/steakrare.jpg); background-position:bottom; background-repeat:no-repeat; background-size:cover; background-attachment:fixed; padding:150px 0 0 0;}
.paralax article{text-align:center; font-family:pisani; font-size:130px; color:#fff; text-shadow:3px 3px #000; padding-top:100px;}
/* PARALAX */

/* BURGER BANNER */
.burger-banner{width:1200px; height:210px; margin:30px auto;}
.burger-banner img{display:block; width:250px; height:200px; text-align:center; margin:auto;}
.burgers{text-align:center; font-size:80px; color:#222222; font-family:geomanist; margin:5px auto;}
/* BURGER BANNER */

/* THREE BURGERS */
.three-burgers{width:1300px; margin:30px auto;}
.three-burgers::after{clear:both; display:table; content:"";}
.nosiburger{display:block; float:left; width:390px; height:500px; margin:24px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.three-burgers img{display:block; width:100%; height:400px;} 
.info1{width:100%; height:50px;}
.info1::after{clear:both; display:table; content:"";}
.info1 aside{width:80%; height:50px; line-height:50px; float:left; color:#222; font-size:24px; font-family:geomanist; padding-left:14px;}
.info1 main{width:20%; height:50px; line-height:50px; float:left; color:#8d7a5c; text-align:right; padding-right:15px; font-size:18px; font-family:geomanist; font-weight:bold;}

.info2{width:100%; height:50px;}
.info2 aside{width:100%; height:50px; line-height:50px; color:#777; font-size:18px; padding-left:14px; font-family:geomanist;}

.info3{width:100%; height:50px;}
.info3::after{clear:both; display:table; content:"";}
.info3 aside{width:80%; height:50px; line-height:50px; float:left; color:#222; font-size:24px; font-family:geomanist; padding-left:14px;}
.info3 main{width:20%; height:50px; line-height:50px; float:left; color:#8d7a5c; text-align:right; padding-right:15px; font-size:18px; font-family:geomanist; font-weight:bold;}

.info4{width:100%; height:50px;}
.info4 aside{width:100%; height:50px; line-height:50px; color:#777; font-size:18px; padding-left:14px; font-family:geomanist;}

.info5{width:100%; height:50px;}
.info5::after{clear:both; display:table; content:"";}
.info5 aside{width:80%; height:50px; line-height:50px; float:left; color:#222; font-size:24px; font-family:geomanist; padding-left:14px;}
.info5 main{width:20%; height:50px; line-height:50px; float:left; color:#8d7a5c; text-align:right; padding-right:15px; font-size:18px; font-family:geomanist; font-weight:bold;}

.info6{width:100%; height:50px;}
.info6 aside{width:100%; height:50px; line-height:50px; color:#777; font-size:18px; padding-left:14px; font-family:geomanist;}
/* THREE BURGERS */

/* KOMENTARI */
.komentari{width:1000px; margin:10px auto 30px auto; font-family:geomanist;}
.komentari::after{clear:both; display:table; content:"";} 
.komentari img{width:400px; height:300px; object-fit:cover; float:left; margin:0 50px 0 0; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.komentari header{width:548px; min-height:100px; float:left;}
.komentari table{width:100%; border-bottom:solid 2px #cdb27f; margin:0 0 5px 0;}
.komentari td{padding:3px;}
.nas1{width:1000px; height:32px; line-height:32px; text-align:center; font-family:geomanist; margin:30px auto 40px auto; font-size:36px; border-radius:16px; color:#333;}
/* KOMENTARI */

/* poruka */
.poruka{position:fixed; top:calc(50% - 100px); left:calc(50% - 140px); width:280px; height:200px; border-radius:15px; background:#111; opacity:0; z-index:5; font-size:32px; font-weight:bold; color:#fff; text-align:center; padding:30px; animation:pera 5s; animation-iteration-count:1;}

@keyframes pera{
0%{opacity:0;}
10%{opacity:0.9;}
70%{opacity:0.9;}
100%{opacity:0;}
}

/*MOBILNI*/
@media only screen and (max-width: 480px) {
.banner{width:100%; height:450px;}
.banner img{width:100%; height:100%;}
.banner h1{font-size:40px; width:100%; height:250px; line-height:60px; letter-spacing:2px;}
.link{width:100%;}
.link a{padding-top:18px;}
.poruka{width:100%; height:30px; line-height:30px; margin:20px auto 0; font-size:22px; color:#B09C11; padding-left:30px;}
.sadrzaj{width:100%; height:300px;}
.sadrzaj img{width:90%; margin:5%; object-fit:fill;}
.sadrzaj article{width:90%; font-size:18px; color:#93780D;}
.jello{margin:40px auto 40px auto; width:100%;}
.jello a{width:40%; margin:0 30%;}
.paralax{width:100%; height:500px; margin:5% 0; min-height:300px; background-attachment:scroll;}
.paralax article{font-size:6em; width:90%; margin:auto; padding-top:1px;}
.burger-banner{width:100%; height:200px;}
.burger-banner img{width:200px; height:200px;}
.burgers{text-align:center; font-size:55px; margin:15px auto; color:#333333; font-family:geomanist; margin:5px auto;}
.three-burgers{width:100%; margin:50px auto;}
.nosiburger{width:90%; margin:5%;}
.komentari{width:90%;}
.komentari img{width:100%; margin:0 0 30px 0;}
.komentari header{width:100%;}
.nas1{width:90%; margin:15% auto;}
}

/*TABLET*/
@media only screen and (min-width: 481px) and (max-width: 1024px) {
.banner{width:100%;}
.banner li{width:100%; padding-left:20px; top:80px; position:relative;}
.banner a{width:160px; height:200px; margin:110px 12px;}
.banner span{font-size:20px;}
.poruka{width:100%; padding-left:20px;}	
.sadrzaj{width:100%;}
.sadrzaj figure{width:250px; height:180px;}	
.sadrzaj img{height:100%; width:100%; object-fit:cover; display:block; float:left;}
.sadrzaj article{width:450px; height:120px; position:absolute; top:730px; left:260px;}
.jello a{width:100%;}}
</style>
<?php
if($_GET['poruka']){echo '<div class="poruka">'.$_GET["poruka"].'</div>';}
?>
<!--BANNER-->
<div class="banner">
<h1>BEST BURGER IN 
SAN FRANCISCO</h1>
<div class="link"><a href="jelovnik.php">SHOW MENU</a></div>
</div>
<!--BANNER END-->

<!--PRIKAZ KOMENTARA-->
<div class="nas1">Your comment on our food</div>

<div class="komentari">
<img src="slike/steak2.jpg">
<a href="utisci.php">
<header>
<?php
$sql="SELECT * FROM utisci ORDER BY datum DESC LIMIT 3";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) {
?>
<table>
<tr>
<td><div style="height:24px; font-size:18px; color:#1a1a1a;"><?=$red["ime"]?></div></td>
<td align="right"><div style="color:#cdb27f;"><?=$red["datum"]?></div></td>
</tr>
<tr>
<td colspan="2"><div style="color:#a1a1a1; font-size:18px; height:64px; overflow:hidden;"><?=$red["komentar"]?></div></td>
</tr>
</table>

<?php } ?>
</header>
</a>
</div>
<!--PRIKAZ KOMENTARA END-->

<!--PARALAX-->
<div class="paralax">
<article>Online Restaurant</article>
</div>
<!--PARALAX END-->

<!-- BURGERS BANNER -->
<div class="burger-banner">
<img src="grafika/menu-burger.png">
</div>
<!-- BURGERS BANNER -->

<!-- NASLOV BURGERS -->
<h1 class="burgers">BURGERS</h1>
<!-- NASLOV BURGERS -->

<!-- THREE BURGERS -->
<div class="three-burgers">
<header class="nosiburger">
<a href="jelovnik.php">
<img src="slike/menu-burger1.jpg">
</a>
<div class="info1">
<aside>Big Papa Burger</aside>
<main>$24</main>
</div>

<div class="info2">
<aside>Meat, salad, cucumbers, onions</aside>
</div>
</header>

<header class="nosiburger">
<a href="jelovnik.php">
<img src="slike/menu-burger2.jpg">
</a>
<div class="info3">
<aside>Mamasita Burger</aside>
<main>$20</main>
</div>

<div class="info4">
<aside>Meat, salad, cucumbers, onions</aside>
</div>
</header>

<header class="nosiburger">
<a href="jelovnik.php">
<img src="slike/menu-burger3.jpg">
</a>
<div class="info5">
<aside>Hot Chicken Burger</aside>
<main>$22</main>
</div>

<div class="info6">
<aside>Meat, salad, cucumbers, onions</aside>
</div>
</header>

</div>
<!-- THREE BURGERS -->

<!--LINK ZA JELOVNIK-->
<div class="jello">
<a href="jelovnik.php">SHOW OUR MENU</a>
</div>
<!--LINK ZA JELOVNIK END-->

<!--NASLOV MAPA-->
<div style="height:40px; line-height:40px; text-align:center; font-size:24px; background:#333333; color:#fff; font-family:geomanist;">See where we are on Google Map</div>

<!--GOOGLE MAP-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9729.677897513593!2d-122.43043987103029!3d37.75586278911507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2srs!4v1582196809292!5m2!1sen!2srs" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<!--GOOGLE MAP END-->

<!--DIV KOJI RAZDVAJA MAPU OD FUTERA-->
<div style="height:10px;">
</div>

<?php include("futer.php"); ?>