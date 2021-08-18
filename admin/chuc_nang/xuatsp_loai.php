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
    <th colspan="8"><a href="index.php?module=them_sp">thêm sản phẩm</a></th>
    </tr>
    <th>Mã SP</th>
    <th>Ảnh</th>
    <th>Tên</th>
	<th>Mã loại</th>
    <th>Giá</th>
    <th>Mô tả</th>
	<th>Ghi chú</th>
	<th colspan="2">Operations</th>
    </tr>
    <?php
	$vl = $_REQUEST['vl'];
	require("module/cls_sanpham.php");
	$sanpham=new clssanpham();
	$ketqua=$sanpham->hienthisanphamloai($vl);
	if($ketqua){
		$rows=$sanpham->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><img src="<?="$row[3]"?>"/></td>
            <td><?php echo $row[7]; ?></td>
			<td><?php echo $row[4]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[5]; ?></td>
			<td><?php echo $row[1]; ?></td>
            <td align="center"><a href="index.php?module=sua_sp&vl=<?=$row[0]?>"><img src="../image/b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="chuc_nang/xoa_sp.php?vl=<?=$row[0]?>"><img  src="../image/b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	?>
    </table>
    </div>
</div>

</center>