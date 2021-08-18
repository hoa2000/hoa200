<?php
require("module/cls_hoadon.php");
if(isset($_REQUEST["vl"])==true){
$id = $_REQUEST["vl"];
$hoadon = new clshoadon();
$ketqua = $hoadon->xacnhanhoadon($id);
	if($ketqua==FALSE)
		die("<p>Lỗi dữ liệu</p>");
	else{
		?>
		<script type="text/javascript">
		alert('Xác nhận thành công');
		window.location.href='../index.php?module=hoadon';
		</script>
		<?php
	}
}
?>