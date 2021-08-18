<?php
require_once("cls_database.php");
class clsloaisp{
	public $db;
	public $data;
	function clsloaisp(){
		$this->db=new clsdatabase();
		$this->data=array();
	}
	function hienthiloaisp(){
		$sql="select * from loaisanpham where trang_thai=0";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function themloaisp($tenloai,$thu_tu){
		$sql="INSERT INTO loaisanpham VALUE (NULL,?,?,0)";
		$data[]=$tenloai;
		$data[]=$thu_tu;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function sualoaisp($maloai,$tenloai,$thu_tu){
		$sql="UPDATE loaisanpham SET tenloai=?, thu_tu=? where maloai=? ";
		$data[]=$tenloai;
		$data[]=$thu_tu;
		$data[]=$maloai;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function xoaloaisp($maloai){
		$sql="UPDATE loaisanpham SET trang_thai=1 where maloai=?";
		$data[]=$maloai;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
}
?>