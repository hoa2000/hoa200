<center style="padding-top:50px;">
<div id="body">
<h3>Thêm sản phẩm</h3>
	<div id="content" style="padding-top:30px;">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="tenloaisp" placeholder="tên loại sản phẩm" value="" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="thutu" placeholder="Thứ tự" value="" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button>
	<button type="submit" name="btn-close"><strong>close</strong></button>
	</td>
    </tr>
    </table>
    </form>
    </div>
</div>
<?php
if(isset($_POST['btn-save'])){
	$ten=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
require("module/cls_loaisp.php");
//tạo đối tượng của lớp clsSanpham
$loaisp = new clsloaisp();
//thêm sách
$ketqua = $loaisp->themloaisp($ten,$thutu);
if($ketqua==FALSE)
	die("<p>Lỗi thêm dũ liệu</p>");
else
{
	?>
	<script type="text/javascript">
		alert('Thêm sản phẩm mới thành công');
		window.location.href='index.php?module=loaisp';
		</script>
		<?php
}
}
?>
</center>