<product-feature>
<div class="container">
        <h3>
           sản phẩm
        </h3>
        <ul>
<?php
			$vl="";
		   if(isset($_REQUEST["vl"]))
		   $vl=$_REQUEST["vl"];
$conn= KetnoiCSDL();
$sql="select * from sanpham where maloai=".$vl." and trang_thai=0";
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