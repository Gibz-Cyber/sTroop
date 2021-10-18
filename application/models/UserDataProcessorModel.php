<?php

class UserDataProcessorModel extends CI_Model{

	/*
		user

	+------------+------------+-----------+-------------+---------------+---------------+---------------+------------+
	| user_id    | first_name | last_name | user_email  | user_password | user_type     | user_status   | last_login |
	|------------|------------|-----------|-------------|---------------|---------------|---------------|------------|
	|			 |			  |			  |				|				|				|				|			 |
	|			 |			  |			  |				|				|				|				|			 |
	+------------+------------+-----------+-------------+---------------+---------------+---------------+------------+

		user_number

	+------------------+------------+-----------+-------------+
	| user_id          | phone_1    | phone_2   | phone_3     |
	|------------------|------------|-----------|-------------|
	| fk user(user_id) |            |			|			  |
	|                  |  			|			|			  |
	+------------------+------------+-----------+-------------+


		ad
							+---------+													+-------------+
							| ad_type |													|  ad_status  |
	+---------+----------------+---------------+-------------+-----------+--------+-------------+-----------------+
    |  ad_id  | user_id        | main_category |sub_category | district  | title  | description | posted_timestamp|
    |---------|----------------|---------------|-------------|-----------|--------|-------------|-----------------|
    |         |fk user(user_id)|			   |             |           |        |             |                 |
    |         |                |               |             |           |        |             |                 |
    +---------+----------------+---------------+-------------+-----------+--------+-------------+-----------------+


    pricing

    +-----------------+-----------+---------------+
    |	ad_id         | price     | nego_status   |
    |-----------------|-----------|---------------|
    | fk ad(ad_id)	  |			  |				  |
    +-----------------+-----------+---------------+

    ad_image

    +-------------+-----------+----------+----------+---------+-----------+
    | ad_id       | image_1   | image_2  | image_3  | image_4 | image_5   |
    |-------------|-----------|----------|----------|---------|-----------|
	|fk ad(ad_id) |			  |			 |			|		  |			  |
	|			  |			  |			 |			|		  |			  |
	+-------------+-----------+----------+----------+---------+-----------+

	*/

	public function checkOldPassword($userId,$currentPwd){

		$this->load->database();
		$sql = "SELECT user_id FROM user WHERE user_id = ? AND user_password = ?;";
		$query = $this->db->query($sql,array($userId,$currentPwd));
		$this->db->close();

		if($query->num_rows() != 1){
			return false;
		}else{
			return true;
		}

	}

	public function updatePassword($userId,$pass){

		$this->load->database();
		$sql = "UPDATE user SET user_password = ? WHERE user_id = ?;";
		$this->db->query($sql,array($pass,$userId));
		$affect = $this->db->affected_rows();
		$this->db->close();
		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function updateName($userId,$name){

		$this->load->database();
		$sql = "UPDATE user SET first_name = ? WHERE user_id = ?;";
		$this->db->query($sql,array($name,$userId));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function getNumbers($userId){

		$this->load->database();
		$sql = "SELECT phone_1,phone_2,phone_3 FROM user_number WHERE user_id = ?;";
		$query = $this->db->query($sql,array($userId));
		$this->db->close();

		if($query->num_rows() != 1){
			return false;
		}else{
			return $query->row();
		}

	}

	public function insertNumbers($userId,$number){

		$this->load->database();
		$sql = "INSERT INTO user_number(user_id,phone_1,phone_2,phone_3) VALUES (?,?,?,?);";
		$this->db->query($sql,array($userId,$number,"NULL","NULL"));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function updateNumbers($userId,$placeHolder,$number){

		$this->load->database();

		if($placeHolder == 1){
			$sql = "UPDATE user_number SET phone_1 = ? WHERE user_id = ?;";
		}else if($placeHolder == 2){
			$sql = "UPDATE user_number SET phone_2 = ? WHERE user_id = ?;";
		}else{
			$sql = "UPDATE user_number SET phone_3 = ? WHERE user_id = ?;";
		}

		$this->db->query($sql,array($number,$userId));
		$affect = $this->db->affected_rows();
		$this->db->close();

		if($affect != 1){
			return false;
		}else{
			return true;
		}

	}

	public function buyAdPosting($userId,$mainCategory,$subCategory,$dist,$title,$desc,$price,$img,$type,$adStatus){

		$this->load->database();
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO ad(user_id,ad_type,main_category,sub_category,district,title,description,ad_status,posted_timestamp) VALUES(?,?,?,?,?,?,?,?,?)";
		$this->db->query($sql,array($userId,$type,$mainCategory,$subCategory,$dist,$title,$desc,$adStatus,$date));
		$affect = $this->db->affected_rows();

		if($affect != 1){
			return false;
		}else{
			$lastId = $this->db->insert_id();
			$sql = "INSERT INTO ad_image(ad_id,image_1,image_2,image_3,image_4,image_5) VALUES (?,?,?,?,?,?);";
			$this->db->query($sql,array($lastId,$img,"NULL","NULL","NULL","NULL"));

			$sql = "INSERT INTO pricing(ad_id,price,nego_status) VALUES (?,?,?);";
			$this->db->query($sql,array($lastId,$price,"NULL"));
			$this->db->close();

			return true;

		}

	}

	public function sellPosting($userId,$type,$mainCategory,$subCategory,$dist,$title,$desc,$price,$nego,$adStatus,$img1,$img2,$img3,$img4,$img5){

		$this->load->database();
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO ad(user_id,ad_type,main_category,sub_category,district,title,description,ad_status,posted_timestamp) VALUES(?,?,?,?,?,?,?,?,?);";
		$this->db->query($sql,array($userId,$type,$mainCategory,$subCategory,$dist,$title,$desc,$adStatus,$date));
		$affect = $this->db->affected_rows();

		if($affect != 1){
			return false;
		}else{

			$lastId = $this->db->insert_id();
			$sql = "INSERT INTO ad_image(ad_id,image_1,image_2,image_3,image_4,image_5) VALUES (?,?,?,?,?,?);";
			$this->db->query($sql,array($lastId,$img1,$img2,$img3,$img4,$img5));

			$sql = "INSERT INTO pricing(ad_id,price,nego_status) VALUES (?,?,?);";
			$this->db->query($sql,array($lastId,$price,$nego));
			$this->db->close();
		}

	}

}

?>