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
    <label> danh sách tất cả Hóa đơn </label>
    </div>
</div>
<?php
if(isset($_POST['btn-timkiem'])){
	$tu=$_POST['tu_ngay'];
	$den=$_POST['den_ngay'];?>
	<script type="text/javascript">
		window.location.href='index.php?module=timkiem_hd&tu=<?=$tu?>&den=<?=$den?>';
		</script>
		<?php
}
?>
<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="9"><a href="index.php?module=chitiet_hd">Xem all chi tiết hóa đơn</a></th>
    </tr>
    <th>Mã hóa đơn</th>
    <th>Mã khách hàng</th>
    <th>Tên khách hàng</th>
	<th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Ngày đặt</th>
	<th>Tổng tiền</th>
	<th colspan="2">Operations</th>
    </tr>
    <?php
	$tong=0;
	require("module/cls_hoadon.php");
	$hoadon=new clshoadon();
	$ketqua=$hoadon->hienthiallhoadon();
	if($ketqua){
		$rows=$hoadon->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
			<td><?php echo number_format($row[6],0.3); ?> VNĐ</td>
            <td align="center"><a href="index.php?module=hienthi_cthd&vl=<?=$row[0]?>">Xem chi tiết hóa đơn</a></td>
            </tr>
        <?php
		$tong+=$row[6];
		}
	}
	?>
	<tr>
	<th colspan="9">Tổng Tiền: <?= number_format($tong,0.3); ?> VNĐ</th>
	</tr>
    </table>
    </div>
</div>

</center>