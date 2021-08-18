<product-feature>
<div class="container">
        <h3>
           chi tiết hóa đơn
        </h3>
       <div id="content">
    <table align="center">
    <tr>
    </tr>
    <th>Mã SP</th>
    <th>Ảnh</th>
    <th>Tên</th>
	<th>Mã loại</th>
    <th>Đơn giá</th>
    <th>Mô tả</th>
	<th>Ghi chú</th>
	<th>Số lượng</th>
    </tr>
    <?php
	$vl=$_REQUEST['vl'];
	$pdo_conn=KetnoiCSDL();
	$strSQL = "SELECT sp.masanpham, sp.ghichu, sp.gia, sp.hinh, sp.maloai, sp.mota, sp.tensanpham, ct.so_luong FROM sanpham SP INNER JOIN chitiet_hd CT on SP.masanpham = CT.masanpham where CT.ma_hd= ".$vl.";";
	$pdo_stm=$pdo_conn->prepare($strSQL);
	$ketqua=$pdo_stm->execute();
	if($ketqua==FALSE)
		die("<h3>Lỗi truy vấn</h3>");
        $rows=$pdo_stm->fetchAll();
		foreach($rows as $row)
		{
			
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><img src="<?="$row[3]"?>"/></td>
            <td><?php echo $row[6]; ?></td>
			<td><?php echo $row[4]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[5]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[7]; ?></td>
            </tr>
        <?php
		}
	?>
    </table>
    </div>
    </div>
	</product-feature>