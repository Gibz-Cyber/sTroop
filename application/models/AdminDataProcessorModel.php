<?php

class AdminDataProcessorModel extends CI_Model{

	public function login($email,$pwd,$userType){

		$this->load->database();
		$sql = "SELECT user_id, first_name FROM user WHERE user_email = ? AND user_password = ? AND user_type = ?;";
		$query = $this->db->query($sql,array($email,$pwd,$userType));
		$this->db->close();

		if($query->num_rows() != 1){
			return false;
		}else{
			return $query->row();
		}

	}

	public function userStatus($userId,$type){

		$this->load->database();
		$sql = "UPDATE user SET user_status = ? WHERE user_id = ?;";
		$this->db->query($sql,array($type,$userId));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function adStatus($adId,$adStatus){

		$this->load->database();
		$sql = "UPDATE ad SET ad_status = ? WHERE ad_id = ?;";
		$this->db->query($sql,array($adStatus,$adId));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function checkAdminEmail($email,$userType){

		$this->load->database();
		$sql = "SELECT user_id FROM user WHERE user_email = ? AND user_type = ?;";
		$query = $this->db->query($sql,array($email,$userType));
		$this->db->close();

		if($query->num_rows() >= 1){
			return false;
		}else{
			return true;
		}

	}

	public function addAdmin($fname,$lname,$email,$pwd,$userType){

		$this->load->database();
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO user(first_name,last_name,user_email,user_password,user_type,user_status,last_login) VALUES(?,?,?,?,?,?,?);";
		$this->db->query($sql,array($fname,$lname,$email,$pwd,$userType,1,$date));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect == 1){
			return true;
		}else{
			return false;
		}

	}

	public function checkCurrentPwd($pwd,$userId){

		$this->load->database();
		$sql = "SELECT first_name FROM user WHERE user_id = ? AND user_password = ?;";
		$query = $this->db->query($sql,array($userId,$pwd));
		$this->db->close();

		if($query->num_rows() != 1){
			return false;
		}else{
			return true;
		}

	}

	public function addNewAdmin($password,$userId){

		$this->load->database();
		$sql = "UPDATE user SET user_password = ? WHERE user_id = ?;";
		$this->db->query($sql,array($password,$userId));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

}

?>