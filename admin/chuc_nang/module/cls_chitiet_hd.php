<?php
require_once("cls_database.php");
class clschitiet{
	public $db;
	public $data;
	function clschitiet(){
		$this->db=new clsdatabase();
		$this->data=array();
	}
	function hienchitiet_hd(){
		$sql="select * from chitiet_hd";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function hienthitheomahd($mahd){
		$sql="select * from chitiet_hd where ma_hd=?";
		$data[]=$mahd;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
}
?>