<?php
session_start();
$ma=$_GET['item'];
if($ma==0)
{
	unset($_SESSION['cart1']);
}
else
{
	unset($_SESSION['cart1'][$ma]);
}
header("location:../index.php?module=cart");
exit();
?>