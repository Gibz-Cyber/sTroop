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

		if($this->checkSessions()){
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
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not avail;able end form here
	}

	}


	public function adStatus(){

		if($this->checkSessions()){
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
		}else{
			//sessions not available start from here
			echo "404";
			//session not available end from here
		}

	}

	public function addAdmin(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

				$this->load->library("form_validation");

				$this->form_validation->set_rules("fname","first name","required|min_length[4]|max_length[30]");
				$this->form_validation->set_rules("lname","last name","required|min_length[4]|max_length[30]");
				$this->form_validation->set_rules("email","email","required|min_length[5]|max_length[50]|valid_email");
				$this->form_validation->set_rules("a_pwd","password","required|min_length[8]|max_length[30]");
				$this->form_validation->set_rules("a_rpwd","repeat password","required|min_length[8]|max_length[30]|matches[a_pwd]");

				if(!$this->form_validation->run()){
					//form validation error start form herte
					$array = array(
						"success"=>false,
						"fname"=>form_error("fname"),
						"lname"=>form_error("lname"),
						"email"=>form_error("email"),
						"a_pwd"=>form_error("a_pwd"),
						"a_rpwd"=>form_error("a_rpwd")
					);
					//form validation error end from here
				}else{
					//form validation success start from here
					$this->load->library("Filter");

					$fName = $this->filter->xssFilter($this->input->post("fname"));
					$lName = $this->filter->xssFilter($this->input->post("lname"));
					$email = $this->filter->xssFilter($this->input->post("email"));
					$pwd = md5("admin_email".$this->input->post("a_pwd"));

					$this->load->model("AdminDataProcessorModel");
					$this->load->library("UserType");

					$availability = $this->AdminDataProcessorModel->checkAdminEmail($email,$this->usertype->getAdmin());

					if($availability === false){
						//email vailable start form here
						$array = array(
							"success"=>true,
							"avail"=>false
						);
						//email available end form here
					}else{

						//email already not exists start from here
						$result = $this->AdminDataProcessorModel->addAdmin($fName,$lName,$email,$pwd,$this->usertype->getAdmin());

						if($result === false){
							//record added srror start from here
							$array = array(
								"success"=>true,
								"avail"=>true,
								"added"=>false
							);
							//record added error end from here
						}else{
							//record added success start from here
							$array = array(
								"success"=>true,
								"avail"=>true,
								"added"=>true
							);
							//record added success end from here
						}
						//email already not exists end from here

					}

					//form validation success end from here
				}

				echo json_encode($array);

				//request method post end from here
			}else{
				//request method not post start from here

				//request method not post end from here
			}
			//sessiosn available end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}

	public function changePassword(){

		if($this->checkSessions()){
			//sessions available start from here

			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

				$this->load->library("form_validation");

				$this->form_validation->set_rules("cpwd","current password","required|min_length[8]|max_length[30]");
				$this->form_validation->set_rules("npwd","new password","required|min_length[8]|max_length[30]");
				$this->form_validation->set_rules("rpwd","repeat password","required|min_length[8]|max_length[30]");

				if(!$this->form_validation->run()){
					//form validation error start from here
					$array = array(
						"success"=>false,
						"cpwd"=>form_error("cpwd"),
						"npwd"=>form_error("npwd"),
						"rpwd"=>form_error("rpwd")
					);
					//form validation error end from here
				}else{
					//form validation success start from here

					$cpwd = md5("admin_email".$this->input->post("cpwd"));
					$this->load->model("AdminDataProcessorModel");

					$checkPwd = $this->AdminDataProcessorModel->checkCurrentPwd($cpwd,$this->session->userdata("user_id"));

					if($checkPwd === false){
						//current pwd error start from here
						$array = array(
							"success"=>true,
							"current"=>false
						);
						//current pwd error end from here
					}else{
						//current pwd success start from heer
						$password = md5("admin_email".$this->input->post("npwd"));
						$result = $this->AdminDataProcessorModel->addNewAdmin($password,$this->session->userdata("user_id"));

						if($result === false){
							//update error start from here
							$array = array(
								"success"=>true,
								"current"=>true,
								"update"=>false
							);
							//update error end from here
						}else{
							//update success start from here
							$array = array(
								"success"=>true,
								"current"=>true,
								"update"=>true
							);
							//update success end from here
						}

						//current pwd success end from here
					}

					//form validation success end from here
				}

				echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request method ! post end from here
			}

			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end from here
		}

	}

}

?>