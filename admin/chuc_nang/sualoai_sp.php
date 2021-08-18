<center style="padding-top:50px;">
<?php
$vl=$_REQUEST['vl'];
$conn= KetnoiCSDL();
$sql="select * from loaisanpham where maloai='".$vl."'";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
while($row=$pdo_stm->fetch())
{
	$ten=$row['tenloai'];
	$thutu=$row['thu_tu'];
}

?>
<div id="body">
<h3>Sửa loại sản phẩm</h3>
	<div id="content" style="padding-top:30px;">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="tenloaisanpham" placeholder="tên loại sản phẩm" value="<?=$ten?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="thu_tu" placeholder="thứ tự" value="<?=$thutu?>" required /></td>
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
	$ten=$_POST['tenloaisanpham'];
	$thutu=$_POST['thu_tu'];
require("module/cls_loaisp.php");
$loaisp = new clsloaisp();
$ketqua = $loaisp->sualoaisp($vl,$ten,$thutu);
if($ketqua==FALSE)
	die("<p>Lỗi thêm dũ liệu</p>");
else
{
	?>
	<script type="text/javascript">
		alert('Sửa sản phẩm mới thành công');
		window.location.href='index.php?module=loaisp';
		</script>
		<?php
}
}
if(isset($_POST['btn-cancel'])){
	?>
	<script type="text/javascript">
		window.location.href='index.php?module=loaisp';
		</script>
		<?php
}
?>
</center>