<?php
require("../ketnoi.php");
$pdo_conn= KetnoiCSDL();
$tk="";
if(isset($_REQUEST["taikhoan"]))
	 $tk = $_REQUEST["taikhoan"];
	if($tk!=""){
		$sql = "SELECT * FROM login WHERE username = '$tk'";
		$pdo_stm = $pdo_conn->query($sql);//thực hiện lệnh sql trả về PDOStatement
		if($pdo_stm==NULL)
			die("<H3>LỖI SQL</H3>");
		$n =$pdo_stm->rowCount();//lấy số bản ghi kết quả
		if($n>=1 && isset($_POST['dangky'])==false)
		{
			echo"Tên tài khoản đã có người dùng";
		}
		elseif(isset($_POST['dangky']) && $n==0){
			$sdt=$_REQUEST["sdt"];
			$hoten=$_REQUEST["hoten"];
			$diachi=$_REQUEST["diachi"];
			$tk=$_REQUEST["taikhoan"];
			$mk=$_REQUEST["matkhau"];
			$sql1 = "INSERT INTO login(id,username,password,hoten,diachi,sdt,phanquyen) VALUES(NULL,?,?,?,?,?,2)";
			$pdo_stm = $pdo_conn->prepare($sql1);
			$pdo_stm->bindParam(1,$tk);
			$pdo_stm->bindParam(2,$mk);
			$pdo_stm->bindParam(3,$hoten);
			$pdo_stm->bindParam(4,$diachi);
			$pdo_stm->bindParam(5,$sdt);
			$ketqua1 = $pdo_stm->execute();
			if($ketqua1==false)
				echo "<h3> LỖI THÊM DỮ LIỆU </h3>";
			else
				header('location:login.php');
		}
		elseif(isset($_POST['dangky'])){
			echo"<script>alert('Tên tài khoản đã có người đăng ký');
			window.location.href='registration.php';
			</script>";
		}
	}
	else{
		echo"";
	}
?>