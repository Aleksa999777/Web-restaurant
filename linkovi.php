<style>
.meni{position:fixed; top:70px; left:0; width:250px; height:1000px; background:#fff; z-index:1; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.meni a{width:100%; height:50px; line-height:50px; display:block; text-decoration:none; padding-left:15px; color:#222; background:#ffffff; font-weight:400; font-family:geomanist; position:relative;}
#prvi{width:100%; height:120px; background:#1e1d1d;}
#prvi img{padding:20px 10px 10px 10px;}


@media only screen and (max-width: 480px) {
.meni{width:calc(100% - 55px); top:55px; left:-360px; -webkit-transition:all 1s;}
#meni:checked + .meni{left:0; -webkit-transition:all 1s;}	
	
}

</style>
<input type="checkbox" id="meni" />
<div class="meni">
<a href="index.php" id="prvi" target="new"><img src="grafika/kolbern2.png" /></a>
<?php if($_SERVER['SCRIPT_NAME']=="/edit.php"){$bg1='style="color:#cdb27f;"';} ?>
<a href="edit.php" <?=$bg1?>><img src="grafika/home.png" style="position:absolute; top:15px; left:7px;" /><span style="position:absolute; display:block; top:2px; left:50px; font-family:geomanist;">HOME</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/unos-jela.php"){$bg2='style="color:#cdb27f;"';} ?>
<a href="unos-jela.php" <?=$bg2?>><img src="grafika/foodintake.png" style="position:absolute; top:15px; left:7px;" /><span style="position:absolute; display:block; top:0; left:50px;">FOOD INTAKE</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/proizvodi.php"){$bg3='style="color:#cdb27f;"';} ?>
<a href="proizvodi.php" <?=$bg3?>><img src="grafika/product.png" style="position:absolute; top:14px; left:8px;" /><span style="position:absolute; display:block; top:0; left:50px;">PRODUCTS</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/narudzbine.php"){$bg4='style="color:#cdb27f;"';} ?>
<a href="narudzbine.php" <?=$bg4?>><img src="grafika/order.png" style="position:absolute; top:15px; left:9px;" /><span style="position:absolute; display:block; top:0; left:50px;">ORDERS</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/isporuceno.php"){$bg5='style="color:#cdb27f;"';} ?>
<a href="isporuceno.php" <?=$bg5?>><img src="grafika/delivered2.png" style="position:absolute; top:16px; left:9px;" /><span style="position:absolute; display:block; top:0; left:50px;">DELIVERED</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/naplaceno.php"){$bg6='style="color:#cdb27f;"';} ?>
<a href="naplaceno.php" <?=$bg6?>><img src="grafika/dolar.png" style="position:absolute; top:14px; left:10px;" /><span style="position:absolute; display:block; top:0; left:50px;">PAID</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/kontaktedit.php"){$bg7='style="color:#cdb27f;"';} ?>
<a href="kontaktedit.php" <?=$bg7?>><img src="grafika/phone.png" style="position:absolute; top:14px; left:10px;" /><span style="position:absolute; display:block; top:0; left:50px;">CONTACTS</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/utisciedit.php"){$bg8='style="color:#cdb27f;"';} ?>
<a href="utisciedit.php" <?=$bg8?>><img src="grafika/happy.png" style="position:absolute; top:14px; left:10px;" /><span style="position:absolute; display:block; top:0; left:50px;">IMPRESSIONS</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/subscribeedit.php"){$bg9='style="color:#cdb27f;"';} ?>
<a href="subscribeedit.php" <?=$bg9?>><img src="grafika/sub.png" style="position:absolute; top:12px; left:10px;" /><span style="position:absolute; display:block; top:0; left:50px;">SUBSCRIBE</span></a>
</div>