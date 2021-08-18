<center>
<div id="header">
	<div id="content">
    <label> danh sách loại sản phẩm </label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="index.php?module=them_loaisp">thêm loại sản phẩm</a></th>
    </tr>
    <th>Mã loại</th>
    <th>Tên loại</th>
    <th>Thứ tự</th>
	<th colspan="4">Operations</th>
    </tr>
    <?php
	require("module/cls_loaisp.php");
	$loaisp=new clsloaisp();
	$ketqua=$loaisp->hienthiloaisp();
	if($ketqua){
		$rows=$loaisp->data;
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
            <td align="center"><a href="index.php?module=sua_loaisp&vl=<?=$row[0]?>"><img src="../image/b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="chuc_nang/xoaloai.php?vl=<?=$row[0]?>"><img  src="../image/b_drop.png" align="DELETE" /></a></td>
			<td align="center"><a href="index.php?module=xuatsp_loai&vl=<?=$row[0]?>">Xem Thêm</a></td>
			<td align="center"><a href="index.php?module=themsp_loai&vl=<?=$row[0]?>">Thêm Sản Phẩm</a></td>
            </tr>
        <?php
		}
	}
	?>
    </table>
    </div>
</div>

</center>