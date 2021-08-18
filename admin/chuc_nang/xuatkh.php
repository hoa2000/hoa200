<center>
<div id="header">
	<div id="content">
    <label> danh sách sản phẩm </label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    </tr>
    <th>Mã Khách Hàng</th>
    <th>Tài Khoản</th>
    <th>Mật Khẩu</th>
	<th>Tên</th>
    <th>Địa chỉ</th>
    <th>Số Điện Thoại</th>
	<th colspan="2">Operations</th>
    </tr>
    <?php
	require("module/cls_khachhang.php");
	$khachhang=new clskhachhang();
	$ketqua=$khachhang->hienthikhachhang();
	if($ketqua){
		$rows=$khachhang->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[0]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td align="center"><a href="index.php?module=xem_hd&vl=<?=$row[1]?>">Xem thêm</a></td>
            <td align="center"><a href="chuc_nang/xoa_kh.php?vl=<?=$row[1]?>"><img  src="../image/b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	?>
    </table>
    </div>
</div>

</center>