<?php
$tk="";
		   if(isset($_REQUEST["tk"]))
		   $tk=$_REQUEST["tk"];
?>
<product-feature>
<div class="container">
        <h3>
            Kết quả tìm kiếm cho "<?=$tk?>"
        </h3>
        <ul>
<?php
$conn= KetnoiCSDL();
$sql="select * from sanpham where (tensanpham like'%$tk%') and trang_thai=0";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
if($pdo_stm->rowCount()<=0)
{
	die("<h3> Không tìm thấy sản phẩm</h3>");
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
	echo"
	<li>
<a href='index.php?module=detail&vl=".$row['masanpham']."'>
<img src='".$row['hinh']."'/>
<h4>".$row['tensanpham']."</h4>
<p>$".$row['gia']."</p>
</a>
</li>
	";
}
}
?>
        </ul>
    </div>
	</product-feature>