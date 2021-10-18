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

}

?>