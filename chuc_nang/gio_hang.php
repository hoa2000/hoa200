<feature>
    <div class="container">
	<div class='thongt'>
	<?php
	$pdo_conn=KetnoiCSDL();
	$strSQL = "SELECT * from login where id= ".$_SESSION['makh'].";";
	$pdo_stm=$pdo_conn->prepare($strSQL);
	$ketqua=$pdo_stm->execute();
if($ketqua==FALSE)
	die("<h3>Lỗi truy vấn</h3>");

while($row=$pdo_stm->fetch())
{
	$ten=$row['hoten'];
	$uname=$row['username'];
	$dt=$row['sdt'];
	$dc=$row['diachi'];
}
echo "
	<span>Thông tin tài khoản</span>
	<p>Họ tên: ".$ten." </p>
	<p>Tên tài khoản: ".$uname." </p>
	<p>Số điện thoại: ".$dt."</p>
	<p>Địa chỉ: ".$dc."</p>
	<form method='post' action='chuc_nang/suatk.php'>
	<input class='sua' type='submit' name='sua' value='sửa thông tin tài khoản'/>
	</form>"
	?>
	
	</div>
	<h2>Thông tin sản phẩm</h2>
	<div class='hang'>
	<?php
$count=0;
if(isset($_SESSION['cart1']))
{
	$count= count($_SESSION['cart1']);
}
if($count==0)
{
echo"<p id='trong'>Giỏ hàng trống!</p>";
}
else
{
?>
	<form action="chuc_nang/uptadecart.php" method="post">
	<ul>
<?php
foreach($_SESSION['cart1'] as $id=>$sl)
{
	$item[]=$id;
}
$str=implode(",",$item);
$pdo_conn=KetnoiCSDL();
$strSQL = "select * from sanpham where masanpham in ($str)";
$pdo_stm=$pdo_conn->prepare($strSQL);
$ketqua=$pdo_stm->execute();
if($ketqua==FALSE)
	die("<h3>Lỗi truy vấn</h3>");
$total=0;

$rows=$pdo_stm->fetchAll();
foreach($rows as $row)
{
	$tt=0;
	$ma=$row['masanpham'];
	$ten=$row['tensanpham'];
	$img=$row['hinh'];
	$t=$row['gia'];
	$tt=$_SESSION['cart1'][$ma]*$t;
	$total+=$_SESSION['cart1'][$ma]*$t;
?>
	<li>
	<a href='#'>
	<img src='<?=$img?>'/>
	<h4><?=$ten?></h4>
	</a>
	<input class='soluong' type='text' value='<?=$_SESSION['cart1'][$ma]?>' name='sl[<?=$ma?>]'/>
	<p>Đơn giá: <?=number_format($t,0.3)?>VND</p>
	<p>Tổng tiền: <?=number_format($tt,0.3)?>VNĐ</p>
<div class='butt1'>	
	<a href='chuc_nang/delete.php?item=<?=$ma?>'> Xóa </a>
	</div>	
			<?php
}
$_SESSION['ttien']=$total;
?>
</li>
	</ul>
	<div class="money">
	<div class="money1">
	<p>Tổng tiền: <?=number_format($total,0.3)?>VNĐ</p>
	<p>Giảm giá: 0 VNĐ</p>
	<p>Thành Tiền: <?=number_format($total,0.3)?>VNĐ</p>
	<div class="dat_hang">
	<a href="chuc_nang/dathang.php">Đặt hàng</a>
	</div>
	</div>
	</div>
	<div>
	<input class='butt' type='submit' name='update' value='Cập nhật giỏ hàng'/>
	<div class="home">
	<a href="./index.php">Tiếp tục mua hàng</a>
	</div>
	</div>
	</form>
<?php
}
?>
	</div>
	<h2>Thông tin đơn hàng đã đặt</h2>
	<div class='hang'>
	<table align="center">
    <tr>
    </tr>
    <th>Mã Hóa đơn</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
	<th>Điện thoại</th>
    <th>Giá</th>
    <th>Ngày đặt</th>
	<th>Operations</th>
    </tr>
    <?php
	$pdo_conn=KetnoiCSDL();
	$strSQL = "SELECT * from hoa_don where ma_kh= ".$_SESSION['makh'].";";
	$pdo_stm=$pdo_conn->prepare($strSQL);
	$ketqua=$pdo_stm->execute();
	$n=$pdo_stm->rowCount();
	if($ketqua==FALSE)
		die("<h3>Lỗi truy vấn</h3>");
        $rows=$pdo_stm->fetchAll();
		if($n>0)
		{
		foreach($rows as $row)
		{
		?>
            <tr>
            <td><?php echo $row[0]; ?></td>
             <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td align="center"><a href="index.php?module=chitiet_hd&vl=<?=$row[0]?>">Xem thêm</a></td>
            </tr>
        <?php
		}
		}
		else
		{
			?>
			<tr>
			<td colspan="8">No Data Found !</td>
			</tr>
			<?php
		}
	?>
    </table>
	</div>
    </div>
</feature>