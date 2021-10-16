<?php

class UserIdentificationModel extends CI_Model{


	/*
		+---------+-----------+-----------+------------+---------------+-----------+-------------+------------+
	    | user_id |first_name | last_name | user_email | user_password | user_type | user_status | last_login |
	    |---------|-----------|-----------|------------|---------------|-----------|-------------|------------|
	    |---------|-----------|-----------|------------|---------------|-----------|-------------|------------|
	*/

	public function checkEmail($email){

		$this->load->database();
		$sql = "SELECT user_id FROM user WHERE user_email = ?;";
		$query = $this->db->query($sql,array($email));
		$this->db->close();
		if($query->num_rows() == 0){
			return true;
		}else{
			return false;
		}

	}

	public function registerUser($fName,$lName,$email,$pass,$userType,$status,$date){

		$this->load->database();
		$sql = "INSERT INTO user(first_name,last_name,user_email,user_password,user_type,user_status,last_login) VALUES (?,?,?,?,?,?,?);";
		$this->db->query($sql,array($fName,$lName,$email,$pass,$userType,$status,$date));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}


	}

	public function checkUser($email,$pass,$userType){

		$this->load->database();
		$sql = "SELECT user_id, first_name,user_status FROM user WHERE user_email = ? AND user_password = ? AND user_type = ?;";
		$query = $this->db->query($sql,array($email,$pass,$userType));
		$this->db->close();

		if($query->num_rows() != 1){
			return false;
		}else{
			return $query->row();
		}

	}

}

?>