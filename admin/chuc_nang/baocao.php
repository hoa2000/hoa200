<center>
<div id="header">
<div style="text-align:right;margin:20px 200px 0 0;">
<form method="post">
  Từ ngày: <input type="date" id="tu_ngay" name="tu_ngay" required>
  </br>
  </br>
  Đến ngày: <input type="date" id="den_ngay" name="den_ngay" required>
  </br>
  </br>
  <input type="submit" name="btn-timkiem" value="Tìm kiếm">
</form>
</div>
	<div id="content">
	<?php
	if(isset($_REQUEST['tu'])&& isset($_REQUEST['den'])){
		$tu=$_REQUEST['tu'];
		$den=$_REQUEST['den'];
		?>
		<label> Báo cáo từ ngày: <?=$tu?> đến ngày: <?=$den?></label>
		<?php
	}
	else{
		?>
    <label> Báo cáo </label>
	<?php
	}
	?>
    </div>
	<?php
if(isset($_POST['btn-timkiem'])){
	$tu=$_POST['tu_ngay'];
	$den=$_POST['den_ngay'];?>
	<script type="text/javascript">
		window.location.href='index.php?module=baocao&tu=<?=$tu?>&den=<?=$den?>';
		</script>
		<?php
}
?>
</div>
    <?php
	$t=0;
	$lg=0;
	require("module/cls_sanpham.php");
	$sanpham=new clssanpham();
	if(isset($_REQUEST['tu'])&& isset($_REQUEST['den'])){
		$tu=$_REQUEST['tu'];
		$den=$_REQUEST['den'];
		$ketqua=$sanpham->sp_ban($tu,$den);
	}
	else{
		$ketqua=$sanpham->sp_banall();
	}
	if($ketqua){
		$rows=$sanpham->data;
		foreach($rows as $row)
		{
		$t+=$row[8]*$row[3];
		$lg+=$row[3];
		}
	}
	$hd=0;
	require("module/cls_hoadon.php");
	$hoadon=new clshoadon();
	if(isset($_REQUEST['tu'])&& isset($_REQUEST['den'])){
		$tu=$_REQUEST['tu'];
		$den=$_REQUEST['den'];
		$ketqua=$hoadon->thongkehd($tu,$den);
	}
	else{
		$ketqua=$hoadon->baocaohd();
	}
	if($ketqua){
		$rows=$hoadon->data;
		foreach($rows as $row)
		{
		$hd=$row[0];
		}
	}
	?>
	<div style="width:400px;  margin:20px 0 0 0; border:1px solid red;">
	<h3 style="color: #ee0000">Doanh thu: <?=number_format($t,0.3)?>VNĐ</h3>
	<h3 style="color: #3333cc">Số lượng sản phẩm đã bán: <?=$lg?></h3>
	<h3 style="color: #007700">Số hóa đơn: <?=$hd?></h3>
	</div>
    </div>
</div>

</center>