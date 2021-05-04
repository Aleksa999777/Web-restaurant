<?php include("head.php"); ?>

<style>
.nosi{width:100%; height:500px; background:url(slike/steak2.jpg); background-position:center; background-size:cover; background-repeat:no-repeat; position:relative;}
.telo{width:1100px; height:650px; position:absolute; top:50px; left:calc(50% - 550px);}
.telo::after{clear:both; display:table; content:"";}
.telo article{width:700px; height:500px; float:left;}
.telo article h1{color:#fff; font-size:64px; font-family:geomanist; text-align:center; margin-bottom:10px;}
.order{display:block; text-decoration:none; text-align:center; width:190px; height:60px; line-height:55px; font-size:18px; background:none; border-radius:50px; border:solid 3px #cdb27f; transition:all 1s; color:#fff; margin:20px 0 0 calc(50% - 95px); font-family:geomanist;}
.order:hover{background:#cdb27f; color:#222;}

.telo header{width:396px; height:550px; float:left;}
.telo header h1{font-size:24px; text-align:center; white-space:pre-wrap; color:#fff; font-family:geomanist;}
.telo header p{text-align:center; color:#fff; white-space:pre-wrap; font-size:18px; line-height:25px; border-top:dotted 2px #84bdaa; border-bottom:dotted 2px #84bdaa; width:40%; margin-left:calc(50% - 20%); padding:10px; font-family:geomanist;}
.telo header small{display:block; white-space:pre-wrap; text-align:center; color:#fff; font-weight:600; font-family:geomanist;}
.telo header a{display:block; text-decoration:none; text-align:center;}

.contact{width:1000px; height:140px; margin:auto;}
.contact p{text-align:center; font-size:28px; font-weight:500; font-family:geomanist; color:#263036;}
.order2{display:block; text-decoration:none; color:#222; text-align:center; font-size:18px; border-radius:50px; border:solid 3px #cdb27f; width:380px; margin:auto; height:60px; line-height:60px; transition:all 1s; font-family:geomanist;}
.order2:hover{background:#cdb27f; transition:all 1s;}

@media only screen and (max-width: 480px) {
.nosi{height:580px;}	
.telo{width:90%; margin:4%; top:5px; min-height:100px; left:1%;}	
.telo article{width:100%; height:200px;}
.telo article h1{margin:2px 0 0 0;}
.order{margin:35px 0 0 calc(50% - 95px);}
.telo header{width:100%; min-height:100px;}
.contact{width:100%; margin:20px auto 30px auto;}
.contact p{margin-top:0;}	
}
</style>
<!-- TELO -->
<div class="nosi">

<div class="telo">

<article>
<h1>CATERING</h1>
<a href="jelovnik.php" class="order">ORDER ONLINE</a>
</article>

<header>
<h1>DELICIOUS
MADE-FROM-SCRATCH
FOOD LIKE</h1>
<p>wraps
box lunches
breakfast buffet
salads</p>
<small>
(perfect for meetings,
showers, holidays, and
pretty much any meal
you don’t want to be
responsible for)
</small>
<a href="jelovnik.php"></a>
</header>
</div>

</div>

<div class="contact">
<p>NEED HELP PLANNING YOUR NEXT EVENT?</p>
<a href="kontakt.php" class="order2">CONTACT THE CATERING TEAM</a>
</div>

<?php include("futer.php"); ?>