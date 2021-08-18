<center style="padding-top:50px;">
<?php
$vl=$_REQUEST['vl'];
$conn= KetnoiCSDL();
$sql="select * from sanpham where masanpham='".$vl."'";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
while($row=$pdo_stm->fetch())
{
	$ten=$row['tensanpham'];
	$img=$row['hinh'];
	$t=$row['gia'];
	$mt=$row['mota'];
	$gchu=$row['ghichu'];
	$maloai=$row['maloai'];
	$sl=$row['soluong'];
}

?>
<div id="body">
<h3>Thêm sản phẩm</h3>
	<div id="content" style="padding-top:30px;">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="tensanpham" placeholder="tên sản phẩm" value="<?=$ten?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="hinh" placeholder="link" value="<?=$img?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="maloai"  placeholder="maloai"  value="<?=$maloai?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gia"  placeholder="đơn giá"  value="<?=$t?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="mota"   placeholder="mô tả" value="<?=$mt?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="ghichu"  placeholder="ghi chú"  value="<?=$gchu?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="soluong"  placeholder="số lượng" value="<?=$sl?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php
if(isset($_POST['btn-update'])){
	$ghichu = $_POST['ghichu'];
	$gia = $_POST['gia'];
	$hinh = $_POST['hinh'];
	$maloai=$_POST['maloai'];
	$mota=$_POST['mota'];
	$soluong=$_POST['soluong'];
	$ten=$_POST['tensanpham'];
require("module/cls_sanpham.php");
$sanpham = new clssanpham();
$ketqua = $sanpham->suasanpham($vl,$ten,$hinh,$maloai,$mota,$ghichu,$gia,$soluong);
if($ketqua==FALSE)
	die("<p>Lỗi thêm dũ liệu</p>");
else
{
	?>
	<script type="text/javascript">
		alert('Sửa sản phẩm mới thành công');
		window.location.href='index.php';
		</script>
		<?php
}
}
if(isset($_POST['btn-cancel'])){
	?>
	<script type="text/javascript">
		window.location.href='index.php';
		</script>
		<?php
}
?>
</center>