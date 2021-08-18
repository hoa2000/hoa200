<product-feature>
<div class="container">
        <h3>
            Sản Phẩm
        </h3>
        <ul>
<?php
$conn= KetnoiCSDL();
$sql="select * from sanpham where trang_thai=0";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
if($pdo_stm->rowCount()<=0)
{
	die("<h3> Không có sản phẩm nào</h3>");
}
if($pdo_stm->rowCount() > 0)
{
$rows = $pdo_stm->fetchAll();
foreach($rows as $row)
{
	$ma[$i]=$row['masanpham'];
	$anh[$i]=$row['hinh'];
	$ten[$i]=$row['tensanpham'];
	$gia[$i]=$row['gia'];
	?>
	<li>
<a href='index.php?module=detail&vl=<?=$row['masanpham']?>'>
<img src='<?=$row['hinh']?>'/>
<h4><?=$row['tensanpham']?></h4>
<p><?=number_format($row['gia'],0.3)?>VNĐ</p>
</a>
</li>
<?php
}
}
?>
        </ul>
    </div>
	</product-feature>