<?php
session_start();
include("ketnoi.php");
$pdo_conn= KetnoiCSDL();
?>

<html>
<head>
<title>shop hoa tươi</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost:81/login/style.css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="//bizweb.dktcdn.net/100/276/613/themes/614232/assets/owl.carousel.min.css?1594395009927" rel="stylesheet" type="text/css" />							
		<link href="//bizweb.dktcdn.net/100/276/613/themes/614232/assets/base.scss.css?1594395009927" rel="stylesheet" type="text/css" />		
		<link href="//bizweb.dktcdn.net/100/276/613/themes/614232/assets/style.scss.css?1594395009927" rel="stylesheet" type="text/css" />	
</head>
<body>
		<header>
<?php
include("include/top_header.php")
?>
<?php
include("include/header.php")
?>
<?php
include("include/menu.php")
?>
</header>
<slide>
<?php
include("include/slider.php")
?>
</slide>
<?php 
		   $module="";
		   if(isset($_REQUEST["module"]))
		   $module=$_REQUEST["module"];
		   {
			   switch($module)
			   {
				   case"gioithieu";
				   include("include/gioithieu.php");
				   }
				   switch($module)
			   {
				   case"product";
				   include("chuc_nang/product.php");
				   }
				   switch($module)
			   {
				   case"contact";
				   include("include/contact.php");
				   }
				  	switch($module)
			   {
				   case"";
				   include("chuc_nang/trangchu.php");
				   }
					switch($module)
			   {
				   case"product_1";
				   include("chuc_nang/product_1.php");
				   }
					switch($module)
			   {
				   case"detail";
				   include("chuc_nang/detail.php");
				   }	
					switch($module)
			   {
				   case"cart";
				   include("chuc_nang/gio_hang.php");
				   }
				   switch($module)
				{
				   case"search";
				   include("chuc_nang/tim_kiem.php");
				   }
					switch($module)
				{
				   case"chitiet_hd";
				   include("chuc_nang/chitiet_hd.php");
				   }				   
		   }
		   ?>   

<footer>

<?php
include("include/footer.php")
?>
	<div class="foo-coppyright">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</div>
</footer>
</body>
<?php

?>
</html>