<?php

class AdminDataProcessor extends CI_Controller{

	public function login(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			//rtequest method post end from here
			$this->load->library("form_validation");

			$this->form_validation->set_rules("email","email","required|min_length[5]|max_length[100]");
			$this->form_validation->set_rules("pwd","password","required|min_length[8]|max_length[30]");

			if(!$this->form_validation->run()){
				//form validation error start from here
				$array = array(
					"success"=>false,
					"email"=>form_error("email"),
					"pwd"=>form_error("pwd")
				);
				//form validation error end from herte
			}else{
				//form validation success start from here
				$this->load->library("Filter");
				$this->load->model("AdminDataProcessorModel");
				$this->load->library("UserType");

				$email = $this->filter->xssFilter($this->input->post("email"));
				$pwd = md5("admin_email".$this->input->post("pwd"));

				$result = $this->AdminDataProcessorModel->login($email,$pwd,$this->usertype->getAdmin());

				if($result === false){
					//login error start from here
					$array = array(
						"success"=>true,
						"login"=>false
					);
					//login error end from here
				}else{
					//login success start from here
					$this->load->library("session");
					$this->session->set_userdata("user_id",$result->user_id);
					$this->session->set_userdata("user_name",$result->first_name);
					$this->session->set_userdata("login",true);

					$array = array(
						"success"=>true,
						"login"=>true
					);
					//login success end from here
				}
				//form validation success end from here
			}

			echo json_encode($array);

			//request method post start from here
		}else{
			//request method is not post start from here
			echo "404";
			//request method not post end form here
		}

	}

	public function checkSessions(){

		$this->load->library("session");

		if($this->session->userdata("user_id") != "" && $this->session->userdata("user_name") != "" && $this->session->userdata("login")){
			return true;
		}else{
			return false;
		}

	}


	public function userStatus(){

	//	if($this->checkSessions()){
			//sessions available start from here

			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

				$this->load->library("form_validation");
				$this->form_validation->set_rules("userId","place","required");
				$this->form_validation->set_rules("type","type","required");

				if(!$this->form_validation->run()){
					//form validation error start form here
					$array = array(
						"success"=>false,
						"userId"=>form_error("userId"),
						"type"=>form_error("type")
					);
					//form validation error end from here
				}else{
					//form validation success start from here

					$this->load->library("Filter");

					$userId = $this->filter->xssFilter($this->input->post("userId"));
					$type = $this->filter->xssFilter($this->input->post("type"));

					$this->load->model("AdminDataProcessorModel");

					$update = $this->AdminDataProcessorModel->userStatus($userId,$type);

					if($update === false){
						//update error start from here
						$array = array(
							"success"=>true,
							"update"=>false
						);
						//update error end from here
					}else{
						//uypadte success start from here
						$array = array(
							"success"=>true,
							"update"=>true
						);
						//update  success end form here
					}

					//form validation success end from here
				}

				echo json_encode($array);

				//request method post end from here
			}else{
				//request method post start from here
				echo "404";
				//request method post end from here
			}

			//sessions available end form here
		//}else{
			//sessions not available start from here
		//	echo "404";
			//sessions not avail;able end form here
	//}

	}


	public function adStatus(){

	//	if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

				$this->load->library("form_validation");

				$this->form_validation->set_rules("type","type","required");
				$this->form_validation->set_rules("id","id","required");

				if(!$this->form_validation->run()){
					//validation error start from here
					$array = array(
						"success"=>false
					);
					//validation error end from here
				}else{
					//validation success start from here
					$this->load->library("AdStatus");
					$this->load->library("Filter");
					$this->load->model("AdminDataProcessorModel");

					if($this->input->post("type") == 1){
						$adStatus = $this->adstatus->getActive();
					}else{
						$adStatus = $this->adstatus->getDelete();
					}

					$adId = $this->filter->xssFilter($this->input->post("id"));

					$update = $this->AdminDataProcessorModel->adStatus($adId,$adStatus);

					if($update === false){
						//update error start from here
						$array = array(
							"success"=>true,
							"update"=>false
						);
						//update error end from here
					}else{
						//update success start from here
						$array = array(
							"success"=>true,
							"update"=>true
						);
						//update success end from here
					}
					//validation success end from here
				}

				echo json_encode($array);

				//request method post end from here
			}else{
				//REQUEST method !~ post start from here
				echo '404';
				//request method ! post end fropm here
			}
			//sessions available end form here
	//	}else{
			//sessions not available start from here
	//		echo "404";
			//session not available end from here
	//	}

	}

}

?>