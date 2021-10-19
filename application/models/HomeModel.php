<?php

class HomeModel extends CI_Model{

	public function getAllAds($adStatus){

		$this->load->database();
		$sql = "SELECT ad.ad_id,title,price,DATE(posted_timestamp) AS posted_date,image_1 FROM ad INNER JOIN pricing ON ad.ad_id = pricing.ad_id INNER JOIN ad_image ON ad.ad_id = ad_image.ad_id WHERE ad.ad_status = ? ORDER BY posted_timestamp DESC;";
		$query = $this->db->query($sql,array($adStatus));
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

	public function getAdsByDistrict($district,$adStatus){

		$this->load->database();
		$sql = "SELECT ad.ad_id,title,price,DATE(posted_timestamp) AS posted_date,image_1 FROM ad INNER JOIN pricing ON ad.ad_id = pricing.ad_id INNER JOIN ad_image ON ad.ad_id = ad_image.ad_id WHERE ad.ad_status = ? AND district = ? ORDER BY posted_timestamp DESC;";
		$query = $this->db->query($sql,array($adStatus,$district));
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

	public function adsByMainCategory($adStatus,$mainCategory){

		$this->load->database();
		$sql = "SELECT ad.ad_id,title,price,DATE(posted_timestamp) AS posted_date,image_1 FROM ad INNER JOIN pricing ON ad.ad_id = pricing.ad_id INNER JOIN ad_image ON ad.ad_id = ad_image.ad_id WHERE ad.ad_status = ? AND main_category = ? ORDER BY posted_timestamp DESC;";
		$query = $this->db->query($sql,array($adStatus,$mainCategory));
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

	public function search($adStatus,$key){

		$this->load->database();
		$sql = "SELECT ad.ad_id,title,price,DATE(posted_timestamp) AS posted_date,image_1 FROM ad INNER JOIN pricing ON ad.ad_id = pricing.ad_id INNER JOIN ad_image ON ad.ad_id = ad_image.ad_id WHERE ad.ad_status = ? AND ( title LIKE '%{$key}%' OR description LIKE '%{$key}%' ) ORDER BY posted_timestamp DESC;";
		$query = $this->db->query($sql,array($adStatus));
		$this->db->close();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

}

?>