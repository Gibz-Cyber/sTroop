<?php

class UserIdentification extends CI_Controller{

	public function login(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$this->load->library('form_validation');

			//form validation start from here
			$this->form_validation->set_rules("login_email","email","required|max_length[50]|min_length[5]|valid_email");
			$this->form_validation->set_rules("login_password","password","required|max_length[30]|min_length[8]");
			//form validatiopn end from here

			if(!$this->form_validation->run()){

				//form validation error start from here
				$array = array(
					"success"=>false,
					"email"=>form_error("login_email"),
					"pwd"=>form_error("login_password")
				);
				//form validation error end from here

			}else{

				//form validation success start from here

				$this->load->library("Filter");
				$email = $this->filter->xssFilter($this->input->post("login_email"));
				$pwd = sha1($this->filter->xssFilter($this->input->post("login_password")));

				$this->load->library("UserType"); // load user type library
				$this->load->model("UserIdentificationModel"); //load UserIdentification model

				$userData = $this->UserIdentificationModel->checkUser($email,$pwd,$this->usertype->getUser());

				if( $userData === false){
					//user not registered for supplu troop start from here
					$array = array(
						"success"=>true,
						"user"=>false
					);
					//user not register for supplytroop end from here
				}else{

					//user register for supplytroop stasrt from here

					if($userData->user_status != 1){

						//user account is banned start from here
						$array = array(
							"success"=>true,
							"user"=>true,
							"ban"=>true
						);
						//user account is banned end from here

					}else{

						//active user account start from here

						$this->load->library("session");
       					$this->session->set_userdata("user_id",$userData->user_id);
       					$this->session->set_userdata("user_name",$userData->first_name);
       					$this->session->set_userdata("user_verification",true);
       					$this->session->set_flashdata("welcome_message","Welcome ".$userData->first_name." !");

       					$array = array(
       						"success"=>true,
       						"user"=>true,
       						"ban"=>false,
       						"login"=>true
       					);

						//active user account end from here

					}

					//user register for supplutroop end from here

				}


				//form validation success end from here

			}

			echo json_encode($array);

		}else{
			echo "404";
		}

	}


	public function signUp(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$this->load->library("form_validation");

			//form validation start from here
			$this->form_validation->set_rules("signup_first_name","First name","required|min_length[4]|max_length[20]");
			$this->form_validation->set_rules("signup_second_name","Second name","required|min_length[4]|max_length[20]");
			$this->form_validation->set_rules("signup_email","Email","required|valid_email|min_length[5]|max_length[50]");
			$this->form_validation->set_rules("signup_password","password","required|min_length[8]|max_length[30]");
			$this->form_validation->set_rules("signup_confirm_pass","Confirm password","required|matches[signup_password]");
			//form validation end from here

			if(!$this->form_validation->run()){
				//form validation error start from here

				$array = array(
					"success"=>false,
					"first_name"=>form_error("signup_first_name"),
					"second_name"=>form_error("signup_second_name"),
					"email"=>form_error("signup_email"),
					"pass"=>form_error("signup_password"),
					"confirm_pass"=>form_error("signup_confirm_pass")
				);

				//form validation error end from here
			}else{
				//form validation success start from here

				$this->load->library("Filter"); //load filter library for prevent from xss attacks
				
				$this->load->model("UserIdentificationModel"); //load user identification model

				if($this->UserIdentificationModel->checkEmail($this->filter->xssFilter($this->input->post("signup_email"))) === false){
					//user already signup start from here
					$array = array(
						"success"=>true,
						"user"=>false
					);
					//user already sign up end from here
				}else{
					//new user credentials start from here
					$this->load->library("UserType");
					$email = $this->filter->xssFilter($this->input->post("signup_email"));
					$firstName = $this->filter->xssFilter($this->input->post("signup_first_name"));
					$lastName = $this->filter->xssFilter($this->input->post("signup_second_name"));
					$password = sha1($this->filter->xssFilter($this->input->post("signup_password")));
					date_default_timezone_set("Asia/Colombo");
					$date = date("Y-m-d H:i:s");

					$resgisterUser = $this->UserIdentificationModel->registerUser($firstName,$lastName,$email,$password,$this->usertype->getUser(),1,$date);

					if($resgisterUser === false){
						//user registration error start from here
						$array = array(
							"success"=>true,
							"user"=>true,
							"register"=>false
						);
						//user registration error end from here
					}else{
						//user registration success start from here
						$array = array(
							"success"=>true,
							"user"=>true,
							"register"=>true
						);
						//user registration success end from here
					}

					//new user credentials end from here
				}

				//form validation success end from here
			}

			echo json_encode($array);


		}else{
			echo "404";
		}

	}

}

?>