<?php
require("module/cls_khachhang.php");
if(isset($_REQUEST["vl"])==true){
$id = $_REQUEST["vl"];
$khachhang = new clskhachhang();
$ketqua = $khachhang->xoakhachhang($id);
	if($ketqua==FALSE)
		die("<p>Lỗi xóa dũ liệu</p>");
	else{
		?>
		<script type="text/javascript">
		alert('Xóa khách hàng thành công');
		window.location.href='../index.php?module=xuatkh';
		</script>
		<?php
	}
}
?>