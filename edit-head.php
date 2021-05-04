<?php include("connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="icon" href="logo-n1.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KOLBERN RESTAURANT</title>
<style>
.nosi555{background:#fff; position:fixed; left:0; top:0; z-index:1; width:100%; font-family:geomanist; border-bottom:solid 1px #e5e5e5;}
.nosi555::after{clear:both; display:table; content:"";}
.admin{width:250px; height:70px; line-height:70px; float:left; color:#222; font-size:18px; padding-left:15px;}
.edit{width:calc(100% - 500px); height:70px; line-height:70px; float:left; color:#222; font-size:18px; text-align:center;}
.info{width:250px; height:70px; line-height:70px; float:left; font-size:18px; color:#222; padding-left:15px;}

/* BURGER */ 
.bur{width:40px; height:40px; position:absolute; top:7px; right:15px; cursor:pointer; display:none;}

@media only screen and (max-width: 480px) {
.nosi555{width:100%;}	
.admin{position:relative; width:100%; height:55px; line-height:55px; border-bottom:solid 1px #aaa;}
.edit{width:100%; height:40px; line-height:40px; border-bottom:solid 1px #aaa; display:none;}	
.info{width:100%; height:40px; line-height:40px; border-bottom:solid 1px #aaa; display:none;}		
.bur{display:block;}
}

</style>
</head>
<body>

<header class="nosi555">
<div class="admin">ADMINISTRATOR<img src="grafika/admin3.png" width="30" height="30" style="position:absolute; top:20px; left:160px;"></div>
<label for="meni"><img class="bur" src="grafika/burgerw.png"></label>
<div class="edit">EDIT MODE</div>
<div class="info">INFO BLOCK</div>

</header>
<!--HEAD END-->