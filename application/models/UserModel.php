<?php

class UserModel extends CI_Model{

	public function getAds($userId,$adStatus){

		$this->load->database();
		$sql = "SELECT ad.ad_id,title,image_1,ad_type,DATE(posted_timestamp) AS posted_date FROM ad INNER JOIN ad_image ON ad.ad_id = ad_image.ad_id WHERE user_id = ? AND ad_status = ? ORDER BY posted_timestamp DESC;";
		$query = $this->db->query($sql,array($userId,$adStatus));
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

}

?>