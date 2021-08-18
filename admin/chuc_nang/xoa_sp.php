<?php
require("module/cls_sanpham.php");
if(isset($_REQUEST["vl"])==true){
$id = $_REQUEST["vl"];
$sanpham = new clssanpham();
$ketqua = $sanpham->xoasanpham($id);
	if($ketqua==FALSE)
		die("<p>Lỗi xóa dũ liệu</p>");
	else{
		?>
		<script type="text/javascript">
		alert('Xóa sản phẩm thành công');
		window.location.href='../index.php';
		</script>
		<?php
	}
}
?>