<?php
require_once("cls_database.php");
class clshoadon{
	public $db;
	public $data;
	function clshoadon(){
		$this->db=new clsdatabase();
		$this->data=array();
	}
	function hienthihoadon($tt){
		$sql="select * from hoa_don where trang_thai=?";
		$data[]=$tt;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function hienthihoadontheokh($makh){
		$sql="select * from hoa_don where ma_kh=?";
		$data[]=$makh;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function xacnhanhoadon($ma){
		$sql="UPDATE hoa_don SET trang_thai=2 where mahd=?";
		$data[]=$ma;
		$ketqua=$this->db->thucthi($sql,$data);
		return $ketqua;
	}
	function hienthict($mahd){
		$sql="select * from hoa_don where mahd=$mahd";
		$data[]=$mahd;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function hienthiallhoadon(){
		$sql="select * from hoa_don";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function timkiemhd($tu,$den){
		$sql="SELECT * FROM `hoa_don` WHERE ngay_dat BETWEEN '$tu' and '$den'";
		$data[]=$tu;
		$data[]=$den;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function thongkehd($tu,$den){
		$sql="SELECT COUNT(*) FROM hoa_don where ngay_dat BETWEEN '$tu' and '$den'";
		$data[]=$tu;
		$data[]=$den;
		$ketqua=$this->db->thucthi($sql,$data);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	function baocaohd(){
		$sql="SELECT COUNT(*) FROM hoa_don";
		$ketqua=$this->db->thucthi($sql);
		$this->data=NULL;
		if($ketqua=true)
			$this->data=$this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
}
?>