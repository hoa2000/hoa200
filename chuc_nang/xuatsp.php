<?php
session_start();
?>
<?php
$dbServerName="localhost";
$dbUserName="root";
$dbPassWord="";
$dbName="websitehoa";
$conn =new mysqli($dbServerName,$dbUserName,$dbPassWord,$dbName);
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM sanpham WHERE masanpham=".$_GET['delete_id'];
	mysqli_query($conn, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
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
function edt_id(id)
{
	if(confirm('Sure to edit ?'))
	{
		window.location.href='suasp.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Sure to Delete ?'))
	{
		window.location.href='xuatsp.php?delete_id='+id;
	}
}
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
    padding: 10px 83px;
}

	 </style>
</head>
<body>
<header>
	<div class="topBar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs top-content">
					<span>Chào mừng bạn đến với flowers!</span>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-content">
					<div class="log">
						<?php
if(isset($_SESSION["uname"])==""){
	echo"
	<a class='ww text-color' href='Registration.php' title='Đăng ký'>Đăng ký</a>
						<a class='text-color' href='login.php'  title='Đăng nhập'>Đăng nhập</a>";
}
else{
echo"
<a class='ww text-color' href='suatk.php'>".$_SESSION['uname']."</a>
<a class='text-color' href='logout.php'>đăng xuất</a>";}
?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-main">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="logo">
				
				<a href="xuatsp.php" class="logo-wrapper ">					
					<img src="//bizweb.dktcdn.net/100/276/613/themes/614232/assets/logo.png?1594395009927" alt="logo ">					
				</a>
				
			</div>
		</div>

		<div class="top-search hidden-lg hidden-sm hidden-md">
			<div class="header_searchs">
				<form class="input-group search-bar" action="/search" method="get" role="search">
					<input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off" required>
					<span class="input-group-btn">
						<button class="btn btn-search" type="submit">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</span>
				</form>
			</div>
		</div>
	</div>
	<nav class="menu-header hidden-sm hidden-xs">
	<div class="container">
		<ul  class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="xuatsp.php" title="Sản phẩm">
					Sản phẩm
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="xuatkh.php" title="Khách hàng">
					Khách hàng
				</a>
			</li>
			<li class="nav-item">
				<a href="xuatloaisp.php" class="nav-link" title="Sản phẩm">
					Loại sản phẩm <i class="fa fa-caret-down" data-toggle="dropdown"></i>
				</a>
				<ul class="dropdown-menu">	
					<?php
				$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="websitehoa";
$conn= new mysqli($dbServerName,$dbUsername,$dbPassWord,$dbName);
$query="select * from loaisanpham ";
$rs=mysqli_query($conn,$query);
$ten=array();
if(mysqli_num_rows($rs)>0)
{
	$i=0;
	$count=0;
	while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC))
	{
		$maloai[$i]=$row['maloai'];
		$tenloai[$i]=$row['tenloai'];
		$i++;
		$count++;
	}
	for($i=0;$i<$count;$i++)
{
	echo"
	<li>
	<li class='nav-item-lv2'>
						<a class='nav-link' href='xuatloai.php?vl=".$maloai[$i].".php' title='".$tenloai[$i]."'>
							<span>".$tenloai[$i]."</span>
						</a>
					</li>
</li>
	";
}
}
					?>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="xuathd.php" title="hóa đơn">
					Hóa đơn
				</a>
			</li>
		</ul>
	</div>
</nav>
</header>
<center>
<div id="header">
	<div id="content">
    <label> danh sách sản phẩm </label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="themsp.php">thêm sản phẩm</a></th>
    </tr>
    <th>Mã SP</th>
    <th>Ảnh</th>
    <th>Tên</th>
	<th>Mã loại</th>
    <th>Giá</th>
    <th>Mô tả</th>
	<th>Ghi chú</th>
	<th>Số lượng</th>
	<th colspan="2">Operations</th>
    </tr>
    <?php
	$pdo_conn=KetnoiCSDL();
	$strSQL = "SELECT * from chitiet_hd where ma_kh= ".$_SESSION['makh'].";";
	$pdo_stm=$pdo_conn->prepare($strSQL);
	$ketqua=$pdo_stm->execute();
	$n=$pdo_stm->rowCount();
	if($ketqua==FALSE)
		die("<h3>Lỗi truy vấn</h3>");
        $rows=$pdo_stm->fetchAll();
		if($n>0)
		{
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><img src="<?="$row[3]"?>"/></td>
            <td><?php echo $row[7]; ?></td>
			<td><?php echo $row[4]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[5]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[6]; ?></td>
            <td align="center"><a href="javascript:edt_id('<?php echo $id; ?>')"><img src="../image/b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $id; ?>')"><img  src="../image/b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="8">No Data Found !</td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>