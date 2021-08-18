<?php
class clsdatabase
{
	public $conn=NULL;
	public $pdo_stm=NULL;
	function clsdatabase(){
		try{
			$this->conn=new PDO("mysql:host=localhost;dbname=websitehoa","root","");
			$this->conn->exec("SET NAME UTF8");
		}
		catch(PDOException $ex){
			echo"<h3>".$ex->getMessage()."</h3>";
			die("<h3>Lỗi Kết Nối SQL</h3>");
		}
	}
	function thucthi($sql,$data=NULL){
		$this->pdo_stm=$this->conn->prepare($sql);
		$ketqua=FALSE;
		if($data!=NULL)
			$ketqua=$this->pdo_stm->execute($data);
		else
			$ketqua=$this->pdo_stm->execute();
		return $ketqua;
	}
}
?>