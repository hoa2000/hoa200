	<nav class="menu-header hidden-sm hidden-xs">
	<div class="container">
		<ul  class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php" title="Trang chủ">
					Trang chủ
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?module=gioithieu" title="Giới thiệu">
					Giới thiệu
				</a>
			</li>
			<li class="nav-item">
				<a href="index.php?module=product" class="nav-link" title="Sản phẩm">
					 Sản phẩm <i class="fa fa-caret-down" data-toggle="dropdown"></i>
				</a>
				<ul class="dropdown-menu">	
				<?php
$conn= KetnoiCSDL();
$sql="select * from loaisanpham";
$pdo_stm = $conn->query($sql);
if($pdo_stm==NULL)
{
	die("<h3>lỗi SQL</h3>");
}
$i=0;
while($row=$pdo_stm->fetch())
{
	$maloai[$i]=$row['maloai'];
	$tenloai[$i]=$row['tenloai'];
	$i++;
}
for($i=0;$i<5;$i++)
{
	echo"
	<li>
	<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=product_1&vl=".$maloai[$i]."' title='".$tenloai[$i]."'>
							<span>".$tenloai[$i]."</span>
						</a>
					</li>
</li>
	";
}
					?>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?module=product_1&vl=4000" title="Quà tặng">
					Quà tặng
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?module=product_1&vl=2000" title="Hoa sinh nhật">
					Hoa sinh nhật
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?module=product_1&vl=3000" title="Hoa khai trương">
					Hoa khai trương
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" title="Chính sách bán hàng">
					Chính sách bán hàng
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" title="Blog chia sẻ">
					Blog chia sẻ
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" title="Liên hệ">
					Liên hệ
				</a>
			</li>
		</ul>
	</div>
</nav>