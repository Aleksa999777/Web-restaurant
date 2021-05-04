<?php
$id=$_GET['id'];
$niz=explode(" ", $_COOKIE["jelo"]);
array_splice($niz, $id, 1);
$niz2=implode(" ", $niz);
setcookie("jelo", $niz2, time() + (86400 * 3), "/");
header("Location: potvrdakorpe.php");
?>



