<?php include("head.php"); ?>

<style>
@media only screen and (max-width: 480px) {


}

/*TABLET*/
@media only screen and (min-width: 481px) and (max-width: 1024px) {
	
}

</style>

<!--TELO-->
<?php 
echo $_COOKIE["jelo"];
$v=$_COOKIE["jelo"];
setcookie("jelo", $v, time() - 2000, "/");
?>
<!--TELO END-->

<?php include("futer.php"); ?>