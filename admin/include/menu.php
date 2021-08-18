	<nav class="menu-header hidden-sm hidden-xs">
	<div class="container">
		<ul  class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php?module=" title="Sản phẩm">
					Sản phẩm
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?module=xuatkh" title="Khách hàng">
					Khách hàng
				</a>
			</li>
			<li class="nav-item">
				<a href="index.php?module=loaisp" class="nav-link" title="Sản phẩm">
					Loại sản phẩm <i class="fa fa-caret-down" data-toggle="dropdown"></i>
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
						<a class='nav-link' href='index.php?module=xuatsp_loai&vl=".$maloai[$i]."' title='".$tenloai[$i]."'>
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
				<a class="nav-link" href="index.php?module=hoadon&vl=1" title="hóa đơn">
					Hóa đơn
				</a>
			</li>
			<li class="nav-item">
				<a href="index.php?module=thongke" class="nav-link" title="Thống kê - Báo cáo">
					Thống kê <i class="fa fa-caret-down" data-toggle="dropdown"></i>
				</a>
				<ul class="dropdown-menu">	
	<li>
					<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=hoadon&vl=1' title='Hóa đơn chưa xác nhận'>
							<span>Hóa đơn chưa xác nhận</span>
						</a>
					</li>
					<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=hoadon&vl=2' title='Hóa đơn đã xác nhận'>
							<span>Hóa đơn đã xác nhận</span>
						</a>
					</li>
					<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=thongke' title='doanh thu'>
							<span>Doanh thu</span>
						</a>
					</li>
					<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=sp_daban' title='Sản phẩm đã bán'>
							<span>Sản phẩm đã bán</span>
						</a>
					</li>
					<li class='nav-item-lv2'>
						<a class='nav-link' href='index.php?module=baocao' title='Báo cáo'>
							<span>Báo cáo</span>
						</a>
					</li>
</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>