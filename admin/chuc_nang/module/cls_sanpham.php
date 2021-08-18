<?php
require_once("cls_database.php");
class clssanpham{
	public $db;
	public $data;
	function clssanpham(){
		$this->db=new clsdatabase();
		$this->data=array();
	}
	function hienthisanpham(){
		$sql="select * from sanpham where trang_thai=0";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function themsanpham($ten,$hinh,$maloai,$mota,$ghichu,$gia,$soluong){
		$sql="INSERT INTO sanpham VALUE (NULL,?,?,?,?,?,?,?,0)";
		$data[]=$ghichu;
		$data[]=$gia;
		$data[]=$hinh;
		$data[]=$maloai;
		$data[]=$mota;
		$data[]=$soluong;
		$data[]=$ten;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function suasanpham($ma,$ten,$hinh,$maloai,$mota,$ghichu,$gia,$soluong){
		$sql="UPDATE sanpham SET ghichu=?, gia=?, hinh=?, maloai=?, mota=?, soluong=?, tensanpham=? where masanpham=? ";
		$data[]=$ghichu;
		$data[]=$gia;
		$data[]=$hinh;
		$data[]=$maloai;
		$data[]=$mota;
		$data[]=$soluong;
		$data[]=$ten;
		$data[]=$ma;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function xoasanpham($ma){
		$sql="UPDATE sanpham SET trang_thai=1 where masanpham=?";
		$data[]=$ma;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function hienthisanphamloai($ma){
		$sql="select * from sanpham where maloai=? and trang_thai=0";
		$data[]=$ma;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function sp_ban($tu,$den){
		$sql="SELECT * FROM chitiet_hd as ct, sanpham as sp, hoa_don as hd WHERE ct.masanpham=sp.masanpham and ct.ma_hd=hd.mahd AND hd.ngay_dat BETWEEN '$tu' AND '$den'";
		$data[]=$tu;
		$data[]=$den;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function sp_banall(){
		$sql="SELECT * FROM chitiet_hd as ct, sanpham as sp, hoa_don as hd WHERE ct.masanpham=sp.masanpham and ct.ma_hd=hd.mahd";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
}
?>