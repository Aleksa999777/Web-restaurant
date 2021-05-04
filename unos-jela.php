<?php include("edit-head.php"); ?>
<style>
/*TELO*/
body{background:#f0f0fa;}
.telo{width:700px; min-height:300px; margin:10px; position:absolute; top:120px; left:260px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

/*NASLOV*/
.naslov{height:40px; line-height:40px; text-align:center; background:#333; color:#cdb27f; font-size:24px; font-family:geomanist;}

/*FORMA*/
form{width:100%; margin:auto; padding:10px; background:#bcbcbc;}
input[type="text"], input[type="number"]{width:100%; height:40px; font-size:18px; padding:0 0 0 10px; margin:5px;}
select{width:100%; height:40px; font-size:20px; margin:5px;}
textarea{width:100%; height:150px; font-size:18px; margin:5px;} 
input[type="file"]{width:100%; height:40px; font-size:18px; padding-left:10px; margin:5px;}
input[type="submit"]{width:100%; height:40px; font-size:22px; background:#333; border:1px solid #bebebb; font-family:geomanist; color:#cdb27f; transition:all 0.5s; margin:5px;}
input[type="submit"]:hover{cursor:pointer; background:#222; color:#fff; transition:all 0.5s;}

.custom-file-upload{min-width:120px; height:40px; line-height:40px; margin:5px; padding:0 5px; text-align:center; cursor:pointer; display:inline-block; background:#111; color:#fff;}
.custom-file-upload:hover{background:#333;}

@media only screen and (max-width: 480px) {
.telo{left:0; width:90%; margin:5%;}	
	
}

</style>

<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>
</div>
<!--MENI END-->

<!--TELO-->
<div class="telo">

<!--NASLOV-->
<div class="naslov">
FOOD INPUT
</div>
<!--NASLOV END-->

<!--FORMA-->
<form action="unos.php" method="post" enctype="multipart/form-data">
<input type="text" name="jelo" placeholder="MAIN COURSE">
<select name="tip">
<option value="maincourse">main course</option>
<option value="salads">salads</option>
<option value="addition">addition</option>
<option value="drink">drink</option>
</select>
<textarea name="opis"></textarea>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Upload Image
</label>
<input id="file-upload" name='slika' type="file" style="display:none;">

<script type="text/javascript">
$('#file-upload').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>
<input type="number" name="cena">
<input type="submit" value="INPUT">
</form>
<!--FORMA END-->

</div>
<!--TELO END-->


<?php include("edit-futer.php"); ?>