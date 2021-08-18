<?php
require("module/cls_loaisp.php");
if(isset($_REQUEST["vl"])==true){
$id = $_REQUEST["vl"];
$loaisp = new clsloaisp();
$ketqua = $loaisp->xoaloaisp($id);
	if($ketqua==FALSE)
		die("<p>Lỗi xóa dũ liệu</p>");
	else{
		?>
		<script type="text/javascript">
		alert('Xóa sản phẩm thành công');
		window.location.href='../index.php?module=loaisp';
		</script>
		<?php
	}
}
?>