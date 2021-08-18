<?php
session_start();
include("../ketnoi.php");
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
	 <script type="text/javascript">
</script>
	 <style>
	 table
{
	width:80%;
	font-family:Tahoma, Geneva, sans-serif;
	font-weight:bolder;
	color:#999;
	margin-bottom:80px;
}
table a
{
	text-decoration:none;
	color:#00a2d1;
}
table,td,th
{
	border-collapse:collapse;
	border:solid #d0d0d0 1px;
	padding:20px;
}
table td input
{
	width:97%;
	height:35px;
	border:dashed #00a2d1 1px;
	padding-left:15px;
	font-family:Verdana, Geneva, sans-serif;
	box-shadow:0px 0px 0px rgba(1,0,0,0.2);
	outline:none;
}
table td input:focus
{
	box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
	outline:none;
}
table td button
{
	border:solid #f9f9f9 0px;
	box-shadow:1px 1px 1px rgba(1,0,0,0.2);
	outline:none;
	background:#00a2d1;
	padding:9px 15px 9px 15px;
	color:#f9f9f9;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bolder;
	border-radius:3px;
	width:49.5%;
}
table td button:active
{
	position:relative;
	top:1px;
}
table td a img .icon{
	width:
}
label{
	font-size:30px;
}
.nav li a {
    position: relative;
    display: block;
    padding: 10px 60px;
}

	 </style>
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
<?php 
		   $module="";
		   if(isset($_REQUEST["module"]))
		   $module=$_REQUEST["module"];
		   {
			   switch($module)
			   {
				   case"them_sp";
				   include("chuc_nang/themsp.php");
				   }
				   switch($module)
			   {
				   case"sua_sp";
				   include("chuc_nang/sua_sp.php");
				   }
				   switch($module)
			   {
				   case"xuatkh";
				   include("chuc_nang/xuatkh.php");
				   }
				  	switch($module)
			   {
				   case"";
				   include("chuc_nang/xuatsp.php");
				   }
					switch($module)
			   {
				   case"loaisp";
				   include("chuc_nang/xuatloai.php");
				   }
					switch($module)
			   {
				   case"xuatsp_loai";
				   include("chuc_nang/xuatsp_loai.php");
				   }	
					switch($module)
			   {
				   case"themsp_loai";
				   include("chuc_nang/themsp_loai.php");
				   }
				   switch($module)
				{
				   case"sua_loaisp";
				   include("chuc_nang/sualoai_sp.php");
				   }
					switch($module)
				{
				   case"them_loaisp";
				   include("chuc_nang/themloaisp.php");
				   }
					switch($module)
				{
				   case"hoadon";
				   include("chuc_nang/xuat_hd.php");
				   }
					switch($module)
				{
				   case"chitiet_hd";
				   include("chuc_nang/xuat_chitiet_hd.php");
				   }
				   switch($module)
				{
				   case"hienthi_hd";
				   include("chuc_nang/xuat_hd_chitiet.php");
				   }
				    switch($module)
				{
				   case"xem_hd";
				   include("chuc_nang/xem_hd.php");
				   }
					switch($module)
				{
				   case"hienthi_cthd";
				   include("chuc_nang/hienthi_cthd.php");
				   }
				   switch($module)
				{
				   case"thongke";
				   include("chuc_nang/allhoadon.php");
				   }
				   switch($module)
				   {
				   case"hoadon_xn";
				   include("chuc_nang/hd_xacnhan.php");
				   }
				   switch($module)
				   {
				   case"timkiem_hd";
				   include("chuc_nang/timkiem_hd.php");
				   }
				   switch($module)
				   {
				   case"sp_daban";
				   include("chuc_nang/sanpham_db.php");
				   }
				   switch($module)
				   {
				   case"baocao";
				   include("chuc_nang/baocao.php");
				   }
		   }
		   ?>   
</body>
<?php

?>
</html>