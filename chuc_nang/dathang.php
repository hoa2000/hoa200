<?php
session_start();
require('../ketnoi.php');
require('laygiasp.php');
$pdo_conn=KetnoiCSDL();
$ten=$_SESSION['ten'];
$dc=$_SESSION['dc'];
$sdt=$_SESSION['dt'];
$makh=$_SESSION['makh'];
$tien=$_SESSION['ttien'];
$strSQL = "INSERT INTO hoa_don(mahd,ma_kh,ten_kh,dia_chi,dien_thoai,ngay_dat,tong_tien,trang_thai) VALUES(NULL,?,?,?,?,now(),$tien,1)";
$pdo_stm = $pdo_conn->prepare($strSQL);
$pdo_stm->bindParam(1,$makh);
$pdo_stm->bindParam(2,$ten);
$pdo_stm->bindParam(3,$dc);
$pdo_stm->bindParam(4,$sdt);
$ketqua = $pdo_stm->execute();
if($ketqua==FALSE)
	die("<p> LỖI THÊM HÓA ĐƠN </p>");
//lấy mã hóa đơn tự động sinh từ lệnh insert trên
$mahd = $pdo_conn->lastInsertId();
//duyệt giỏ hàng và lưu các sản phẩm vào chi tiết hóa đơn gắn với mahd mới
$ok= TRUE;
foreach($_SESSION["cart1"] as $id=>$soluong)
{

	$giasp = layGiaSP($id);//kết nối csdl lấy giá của sản phẩm từ books
	$t=$soluong*$giasp;
	$strSQL = "INSERT INTO chitiet_hd VALUES(NULL,?,?,?,?,?)";
	$pdo_stm = $pdo_conn->prepare($strSQL);
	$pdo_stm->bindParam(1,$mahd);
	$pdo_stm->bindParam(2,$id);
	$pdo_stm->bindParam(3,$soluong);
	$pdo_stm->bindParam(4,$giasp);
	$pdo_stm->bindParam(5,$t);
	$ketqua = $pdo_stm->execute();
	if($ketqua==FALSE)
	{
		$ok = FALSE;
		die("<p> LỖI THÊM CHI TIẾT HÓA ĐƠN </p>");
	}
}
if($ok)
{
	?>
	<script>alert("Đặt hàng thành công, cảm ơn các bạn đã mua hàng");
	window.location.href='delete.php';
	</script>
	<?php
}
?>