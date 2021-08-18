<?php
session_start();
?>
<html>
<head>
<title>Login</title>
<style>
body{
}
.container{
	width:500px;
	height:333px;
	margin:0 auto;
}
form{
	margin:0;
	padding:0;
}
form .container{
	margin-top:50px;
	background:url(../image/b2.jpg) no-repeat;
}
form .container h2{
	text-align:center;
	padding-top:20px;
}
form .container .txt{
	padding-left:50px;
}
form .container .txt label{
	font-size:18px;
}
form .container .txt input{
	width:300px;
	height:30px;
}
form .container .but{
	padding-left:50px;
}
form .container .but input{
	width:200px;
	height:30px;
	color:#DC143C;
	background:#FFEBCD;
}
</style>
</head>
<body>
<form action=""method="POST">
<div class="container">
<div class="txt">
<h2>Đăng Nhập </h2>
<label>Tài Khoản:</label>
</br>
<input type='text' name="us"/>
</br>
</br>
<label>Mật Khẩu:</label>
</br>
<input type='password' name="matkhau"/>
</br>
</br>
</div>
</br>
</br>
<div class="but">
<input type='submit' name="submit"value='Đăng nhập'/>
<input type='submit' name="out"value='Đăng ký'/>
</div>
</div>
</form>
</body>
<?php
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="websitehoa";
$conn= new mysqli($dbServerName,$dbUserName,$dbPassword,$dbName);
if(isset ($_POST['submit'])&&$_POST['us']!=""&&$_POST['matkhau']!="")
{
	$uname=$_POST['us'];
	$pword=$_POST['matkhau'];
	$query="SELECT * FROM login WHERE username='".$uname."'AND password='".$pword."';";
	$rs= mysqli_query($conn,$query);
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_array($rs,MYSQLI_ASSOC);
		$_SESSION['uname']=$uname;
		$_SESSION['dt']=$row['sdt'];
		$_SESSION['dc']=$row['diachi'];
		$_SESSION['makh']=$row['id'];
		$_SESSION['mk']=$row['password'];
		$_SESSION['ten']=$row['hoten'];
		if($row['phanquyen']==2)
		{
		echo
		"<script>
		alert('Đăng nhập thành công');
		var src='../index.php';
		window.location.href=src;
		</script>";
		}else if($row['phanquyen']==1)
		{
			echo
		"<script>
		alert('Đăng nhập thành công quyền admin');
		var src='../admin/index.php';
		window.location.href=src;
		</script>";
		}
	}
	else
	{
	echo
		"<script>
		alert('Tài khoản hoặc mật khẩu không chính xác');
		</script>";
	}
}
if(isset ($_POST['out']))
{
	echo
		"<script>
		var src='registration.php';
		window.location.href=src;
		</script>";
}
?>
</html>