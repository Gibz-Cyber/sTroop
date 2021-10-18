<?php

class Admin extends CI_Controller{

	public function login(){

		$this->load->view("admin/a-login.html");

	}


	public function checkSessions(){

		$this->load->library("session");

		if($this->session->userdata("user_id") != "" && $this->session->userdata("user_name") != "" && $this->session->userdata("login")){
			return true;
		}else{
			return false;
		}

	}


	public function signOut(){

		$this->load->library("session");
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("login");
		redirect(base_url('/index.php/admin/login'));

	}


	public function dashboard(){

		//if($this->checkSessions()){
			//sessions available end from here
			$this->load->model("AdminModel");
			$this->load->library("UserType");
			$this->load->library("AdStatus");

			$data['user'] = $this->AdminModel->getUserCount($this->usertype->getUser());
			$data['admin'] = $this->AdminModel->getUserCount($this->usertype->getAdmin());
			$data['activeAds'] = $this->AdminModel->getAds($this->adstatus->getActive());
			$data['pendingAds'] = $this->AdminModel->getAds($this->adstatus->getPending());
			
			$this->load->view("admin/account/dashboard",$data);
			//sessions available end from here
		//}else{
			//sessions not available start from here
		//	echo "404";
			//sessions not available end form here
		//}

	}


	public function clients(){

	//	if($this->checkSessions()){

		$this->load->model("AdminModel");
		$data['result'] = $this->AdminModel->getClients();
		$this->load->view("admin/account/clients",$data);

	//	}else{
			//sessions nor available staret from here
	//		echo "404";
			//sessions not avaiulable end form here
	//	}

	}

	public function account(){

		//if($this->checkSessions()){
			//sessios available start from here
			$this->load->view("admin/account/account");
			//sessions available end from here
		//}else{
			//sessions not available start from here
		//	echo "404";
			//sessions not available end from here
		//}

	}


}

?>