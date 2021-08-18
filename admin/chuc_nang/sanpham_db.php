<center>
<div id="header">
<div style="text-align:right;margin:20px 200px 0 0;">
<form method="post">
  Từ ngày: <input type="date" id="tu_ngay" name="tu_ngay" required>
  </br>
  </br>
  Đến ngày: <input type="date" id="den_ngay" name="den_ngay" required>
  </br>
  </br>
  <input type="submit" name="btn-timkiem" value="Tìm kiếm">
</form>
</div>
	<div id="content">
    <label> Danh sách sản phẩm đã bán </label>
    </div>
</div>
<?php
if(isset($_POST['btn-timkiem'])){
	$tu=$_POST['tu_ngay'];
	$den=$_POST['den_ngay'];?>
	<script type="text/javascript">
		window.location.href='index.php?module=sp_daban&tu=<?=$tu?>&den=<?=$den?>';
		</script>
		<?php
}
?>
<div id="body">
	<div id="content">
    <table align="center">
	<tr>
    <th>Mã SP</th>
    <th>Ảnh</th>
    <th>Tên</th>
	<th>Mã hóa đơn</th>
    <th>Giá</th>
    <th>Mô tả</th>
	<th>Ghi chú</th>
	<th>Số lượng</th>
	<th>Tổng</th>
    </tr>
    <?php
	$t=0;
	require("module/cls_sanpham.php");
	$sanpham=new clssanpham();
	if(isset($_REQUEST['tu'])&& isset($_REQUEST['den'])){
		$tu=$_REQUEST['tu'];
		$den=$_REQUEST['den'];
		$ketqua=$sanpham->sp_ban($tu,$den);
	}
	else{
		$ketqua=$sanpham->sp_banall();
	}
	if($ketqua){
		$rows=$sanpham->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[2]; ?></td>
            <td><img src="<?="$row[9]"?>"/></td>
            <td><?php echo $row[13]; ?></td>
			<td><?php echo $row[15]; ?></td>
            <td><?php echo number_format($row[8],0.3); ?> VNĐ</td>
            <td><?php echo $row[11]; ?></td>
			<td><?php echo $row[7]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?=number_format($row[8]*$row[3],0.3)?>VNĐ</td>
            </tr>
        <?php
		$t+=$row[8]*$row[3];
		}
	}
	?>
	<tr><th colspan="9">Tổng tiền:<?=number_format($t,0.3)?>VNĐ</th></tr>
    </table>
    </div>
</div>

</center>