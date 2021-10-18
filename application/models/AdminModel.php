<?php

class AdminModel extends CI_Model{

	public function getUserCount($userType){

		$this->load->database();
		$sql = "SELECT user_id FROM user WHERE user_type = ?;";
		$query = $this->db->query($sql,array($userType));
		$this->db->close();
		return $query->num_rows();

	}

	public function getAds($adStatus){

		$this->load->database();
		$sql = "SELECT ad_id FROM ad WHERE ad_status = ?;";
		$query = $this->db->query($sql,array($adStatus));
		$this->db->close();
		return $query->num_rows();

	}

	public function getClients(){

		$this->load->database();
		$sql = "SELECT user_id,first_name,user_email,user_status FROM user;";
		$query = $this->db->query($sql);
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

}

?>