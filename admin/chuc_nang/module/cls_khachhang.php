<?php
require_once("cls_database.php");
class clskhachhang{
	public $db;
	public $data;
	function clskhachhang(){
		$this->db=new clsdatabase();
		$this->data=array();
	}
	function hienthikhachhang(){
		$sql="select * from login where phanquyen=2";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function xoakhachhang($ma){
		$sql="UPDATE login SET phanquyen=3 where id=?";
		$data[]=$ma;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
}
?>