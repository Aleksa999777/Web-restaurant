<?php include("edit-head.php"); ?>

<style>

.prikaz{width:800px; min-height:300px; position:absolute; top:120px; left:350px;}
.prikaz::after{clear:both; display:table; content:"";}

.prikaz img{display:block; width:400px; height:400px; object-fit:contain; float:left;}
.prikaz input[type="file"]{position:absolute; bottom:70px; left:0; display:block; width:200px; height:50px;}
.prikaz header{width:390px; min-height:40px; line-height:40px; font-size:20px; color:#630; float:left; position:absolute; top:0; background:#fff; z-index:0;}
.prikaz header input[type="text"]{width:100%; height:100%; font-size:24px; padding-left:5px; border:solid 1px #ccc; outline:none;}

.prikaz main{width:390px; height:300px; color:#520; white-space:pre-wrap; padding:15px; float:left;}
.prikaz textarea{width:100%; height:100%; font-size:20px; resize:none; padding-left:5px; border:solid 1px #ccc; outline:none;}

.prikaz footer{width:340px; height:40px; line-height:40px; text-align:left; padding-right:10px; color:#c30; background:#fff; font-size:24px; float:left; margin-left:13px;}
.prikaz footer input[type="text"]{width:50%; height:100%; font-size:18px; padding-left:5px; border:solid 1px #ccc; outline:none; margin:0 0 0 10px;}

.prikaz input[type="submit"]{display:block; width:100%; height:40px; background:#cdb27f; color:#333; float:left; text-align:center; margin-top:15px; border:none; font-size:22px; font-family:geomanist; cursor:pointer; letter-spacing:1px; transition:all 0.5s;}
.prikaz input[type="submit"]:hover{background:#333; color:#cdb27f; transition:all 0.5s;} 

.custom-file-upload{min-width:120px; height:40px; line-height:40px; margin:5px 5px 5px 15px; padding:0 5px; text-align:center; cursor:pointer; display:inline-block; background:#cdb27f; color:#fff; transition:all 0.5s;}
.custom-file-upload:hover{background:#333; color:#cdb27f; transition:all 0.5s;}

/*MOBILNI*/
@media only screen and (max-width: 480px) {
.prikaz{width:100%; left:0;}
.prikaz input[type="file"]{bottom:110px; left:15px;}
.prikaz textarea{height:80%;}
}
</style>
<!--MENI-->
<div class="meni">
<?php include("linkovi.php"); ?>	
</div>
<!--MENI END-->

<!--TELO-->
<?php
$id=$_GET["id"];
$sql="SELECT * FROM jela WHERE id=$id";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
?>
<!--NOSI-->
<div class="prikaz">
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$red["id"]?>">

<input type="hidden" name="slika2" value="<?=$red["slika"]?>">
<img src="<?=$red["slika"]?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Upload Image
</label>
<input id="file-upload" name="slika" type="file" style="display:none;">

<script type="text/javascript">
$('#file-upload').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<header><input type="text" name="jelo" value="<?=$red["jelo"]?>"></header>
<main><textarea name="opis" placeholder="Modify the ingredients of the dish"><?=$red["opis"]?></textarea></main>
<footer><span style="margin:0 0 0 10px;">Edit price</span><input type="text" name="cena" value="<?=$red["cena"]?>$" style="font-family:geomanist;"></footer>
<input type="submit" value="EDIT">
</form>
</div>
<!--NOSI END-->

<!--TELO END-->

<?php include("edit-futer.php"); ?>