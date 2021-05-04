<style>
@charset "utf-8";
html{font-family:Arial, Helvetica, sans-serif; font-size:100%; scroll-behavior:smooth;}
body{margin:0; padding:0; font-size:16px;}
*{box-sizing:border-box;
-moz-box-sizing:border-box;
-o-box-sizing:border-box;
-webkit-box-sizing-border-box;}

.container{width:500px; min-height:200px; background:#f1f1f1; border-radius:10px; margin:auto; padding:10px;}

input[type="text"], select, textarea{width:100%; border:solid 1px #ccc; border-radius:10px; padding:12px; resize:vertical;}

input[type="text"]:focus{background:#ddd;}

label{display:block; padding:12px 12px 12px 0;}

.col-25{float:left; width:25%; margin-top:6px;}
.col-75{float:left; width:75%; margin-top:6px;}

.row::after{clear:both; display:table; content:"";}

input[type="submit"]{float:right; background:#050; border:none; color:white; padding:12px; margin-top:6px; border-radius:20px;}
input[type="submit"]:hover{background:#0f0; color:#222;}

@media only screen and (max-width: 480px) {

.row{width:90%; margin:5%;}

}


</style>

<h2>Responsive Form</h2>

<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
<form action="unos.php" method="post">

<div class="row">

<div class="col-25">
<label for="fname">First Name</label>
</div>

<div class="col-75">
<input type="text" id="fname" name="firstname" placeholder="Your name..">
</div>

</div>

<div class="row">

<div class="col-25">
<label for="lname">Last Name</label>
</div>

<div class="col-75">
<input type="text" id="lname" name="lastname" placeholder="Your last name..">
</div>

</div>

<div class="row">
<div class="col-25">
<label for="country">Country</label>
</div>

<div class="col-75">
<select id="country" name="country">
<option value="australia">Australia</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
</select>
</div>
</div>

<div class="row">

<div class="col-25">
<label for="subject">Subject</label>
</div>

<div class="col-75">
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;"></textarea>
</div>

</div>

<div class="row">
<input type="submit" value="Submit">
</div>
</form>
</div>