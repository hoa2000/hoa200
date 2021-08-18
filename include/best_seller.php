<div class="container"> 
<h3>hoa tươi</h3>
<ul>
<?php
$conn= KetnoiCSDL();
$sql="select * from sanpham where maloai='1000'";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
$i=0;
while($row=$pdo_stm->fetch())
{
	$ma[$i]=$row['masanpham'];
	$anh[$i]=$row['hinh'];
	$ten[$i]=$row['tensanpham'];
	$gia[$i]=$row['gia'];
	$i++;
}
for($i=0;$i<4;$i++)
{
	?>
<li>
<a href='index.php?module=detail&vl=<?=$ma[$i]?>'>
<img src='<?=$anh[$i]?>'/>
<h4><?=$ten[$i]?></h4>
<p><?=number_format($gia[$i],0.3)?>VNĐ</p>
</a> 
</li>
<?php
   $_SESSION["masp"]=$ma[$i];
}

?>

</ul>
</div>