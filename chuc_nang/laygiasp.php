<?php
function layGiaSP($id)
{
	$pdo_conn = KetnoiCSDL();
	$sql = "SELECT gia FROM sanpham WHERE masanpham=$id";
	$pdo_stm = $pdo_conn->prepare($sql);
	$ketqua = $pdo_stm->execute();
	if($ketqua==FALSE)
		return 0;
	else
	{
		$row = $pdo_stm->fetch();
		return $row["gia"];
	}
}
?>