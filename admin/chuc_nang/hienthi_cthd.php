<center>
<div id="header">
	<div id="content">
    <label> Chi tiết Hóa đơn </label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <th>Mã chi tiết hóa đơn</th>
    <th>Mã hóa đơn</th>
    <th>Mã sản phẩm</th>
	<th>Số lượng</th>
    <th>Đơn Giá</th>
	<th>Tổng tiền</th>
	<th colspan="2">Operations</th>
    </tr>
    <?php
	$tong=0;
	$id=$_REQUEST['vl'];
	require("module/cls_chitiet_hd.php");
	$chitiet=new clschitiet();
	$ketqua=$chitiet->hienthitheomahd($id);
	if($ketqua){
		$rows=$chitiet->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
            <td><?php echo number_format($row[4],0.3); ?> VNĐ</td>
			<td><?php echo number_format($row[5],0.3); ?> VNĐ</td>
            <td align="center"><a href="index.php?module=hienthi_hd&vl=<?=$row[1]?>">Xem hóa đơn</a></td>
            </tr>
        <?php
		$tong+=$row[5];
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