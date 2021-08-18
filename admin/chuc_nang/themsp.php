<center style="padding-top:50px;">
<div id="body">
<h3>Thêm sản phẩm</h3>
	<div id="content" style="padding-top:30px;">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="tensanpham" placeholder="tên sản phẩm" value="" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="hinh" placeholder="link" value="" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="maloai"  placeholder="maloai"  value="" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gia"  placeholder="đơn giá"  value="" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="mota"   placeholder="mô tả" value="" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="ghichu"  placeholder="ghi chú"  value="" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="soluong"  placeholder="số lượng" value="" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php
if(isset($_POST['btn-save'])){
	$ghichu = $_POST['ghichu'];
	$gia = $_POST['gia'];
	$hinh = $_POST['hinh'];
	$maloai=$_POST['maloai'];
	$mota=$_POST['mota'];
	$soluong=$_POST['soluong'];
	$ten=$_POST['tensanpham'];
require("module/cls_sanpham.php");
//tạo đối tượng của lớp clsSanpham
$sanpham = new clssanpham();
//thêm sách
$ketqua = $sanpham->themsanpham($ten,$hinh,$maloai,$mota,$ghichu,$gia,$soluong);
if($ketqua==FALSE)
	die("<p>Lỗi thêm dũ liệu</p>");
else
{
	?>
	<script type="text/javascript">
		alert('Thêm sản phẩm mới thành công');
		window.location.href='index.php';
		</script>
		<?php
}
}
?>
</center>