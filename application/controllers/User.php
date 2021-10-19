<?php

class User extends CI_Controller{


	public function checkSessions(){
		$this->load->library("session");
		if($this->session->userdata("user_id") != "" && $this->session->userdata("user_name") != "" && $this->session->userdata("user_verification")){
			return true;
		}else{
			return false;
		}
	}

	public function signOut(){

		$this->load->library("session");
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_name");
		$this->session->unset_userdata("user_verification");
		redirect(base_url());

	}

	public function postAd(){
		
		if($this->checkSessions()){
			$this->load->view("account/postad");
		}else{
			echo "404";
		}

	}

	public function account(){

		if($this->checkSessions()){
			$this->load->view("account/account");
		}else{
			echo "404";
		}

	}

	public function sell(){

		if($this->checkSessions()){
			$this->load->view("account/sell");
		}else{
			echo "404";
		}

	}

	public function buy(){

		if($this->checkSessions()){
			$this->load->view("account/buy");
		}else{
			echo "404";
		}

	}

	public function sellAdPosting(){

		if($this->checkSessions()){

			if(isset($_GET['adCategory'])){

			$this->load->library("Category");

			if($this->category->categorySelector($_GET['adCategory']) === false){
				echo "Please select correct ad category";
			}else{
				$data = $this->category->categorySelector($_GET['adCategory']);
				$this->load->view("account/sell/sell_item",$data);
			}

			}else{
				echo "please select you ad category";
			}

		}else{
			echo "404";
		}

	}


	public function buyAdPosting(){

		if($this->checkSessions()){
			//sessions available start from here
			if(isset($_GET['adCategory'])){
				//ad category available start from here
				$this->load->library("Category");

				if($this->category->categorySelector($_GET['adCategory']) === false){
					echo "invalid ad category";
				}else{
					$this->load->view("account/buy/buy_item");
				}
				//ad category available end form here
			}else{
				//ad category is not available start from here
				echo "category is not available";
				//ad category is not available end from here
			}
			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end from here
		}

	}

	public function pendingAds(){

		if($this->checkSessions()){
			//sessions available start form here
			$this->load->library("AdStatus");
			$this->load->model("UserModel");
			$data['adData'] = $this->UserModel->getAds($this->session->userdata("user_id"),$this->adstatus->getPending());
			$this->load->view("account/pending_ad",$data);
			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end from here
		}

	}


	public function activeAds(){

		if($this->checkSessions()){
			//sessions available start form here
			$this->load->library("AdStatus");
			$this->load->model("UserModel");
			$data['adData'] = $this->UserModel->getAds($this->session->userdata("user_id"),$this->adstatus->getActive());
			$this->load->view("account/active_ads",$data);
			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}


}

?>