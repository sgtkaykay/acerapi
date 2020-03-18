<?php
 class Acer{
	public $db;

	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}
	}

	public function get_acer(){
		$sql = "SELECT * FROM `tblLaptop`";
		$result = mysqli_query($this->db,$sql);
		while($r = mysqli_fetch_assoc($result)){
			$list[] = $r;
		}
		return $list;
	}

  public function get_acerone($id){
		$sql = "SELECT * FROM tblLaptop WHERE ID = '$id'";
		$result = mysqli_query($this->db,$sql);
		while($r = mysqli_fetch_assoc($result)){
			$list[] = $r;
		}
		return $list;
	}

  public function search_acer($search){
		$sql = "SELECT * FROM tblLaptop WHERE ID LIKE '%$search%'";
		$result = mysqli_query($this->db,$sql);
		while($r = mysqli_fetch_assoc($result)){
			$list[] = $r;
		}
		return $list;
	}

}
