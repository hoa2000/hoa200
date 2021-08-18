<?php
session_start();
if(isset($_POST['update']))
{
	foreach($_POST['sl'] as $ma=>$sl)
	{
		if(($sl==0) and (is_numeric($sl)))
		{
			unset($_SESSION['cart1'][$ma]);
		}
		elseif(($sl>0) and (is_numeric($sl)))
		{
			$_SESSION['cart1'][$ma]=$sl;
		}
	}
}
header("location:../index.php?module=cart");
?>