<?php
session_start();
$ma=$_GET['item'];
$sol=$_GET['sl'];
if(isset($_SESSION['cart1'][$ma]))
{
	$sl=$_SESSION['cart1'][$ma]+$sol;
}
else
{
	$sl=$sol;
}
$_SESSION['cart1'][$ma]=$sl;
header("location:../index.php");
exit();
?>
