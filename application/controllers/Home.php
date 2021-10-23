<?php

class Home extends CI_Controller{

public function checkSessions(){
		$this->load->library("session");
		if($this->session->userdata("user_id") != "" && $this->session->userdata("user_name") != "" && $this->session->userdata("user_verification")){
			return true;
		}else{
			return false;
		}
	}	

public function index(){

	if($this->checkSessions()){
		$data['sess'] = true;
	}else{
		$data['sess'] = false;
	}

	$this->load->view("index.php",$data);

}

public function contactus(){
		$this->load->view("contactus");
}


public function aboutus(){
	$this->load->view("aboutus.html");
}

public function faq(){
	$this->load->view("faq.html");
}

public function sellfast(){
	$this->load->view("helpnsupport.html");
}

public function safetypolicy(){
	$this->load->view("staysafe.html");
}

public function privacypolicy(){
	$this->load->view("privacypolicy.html");
}

public function terms(){
	$this->load->view("terms.html");
}

public function allAds(){

	$this->load->model("HomeModel");
	$this->load->library("AdStatus");
	$this->load->library("Filter");

	if($this->checkSessions()){
		$data['sess'] = true;
	}else{
		$data['sess'] = false;
	}
	
	if(isset($_GET['main'])){
		
		$main = $this->filter->xssFilter($_GET['main']);
		$data['adData'] = $this->HomeModel->adsByMainCategory($this->adstatus->getActive(),$main);
		$this->load->view("allads",$data);

	}else if(isset($_GET['dist'])){
		
		$dist = $this->filter->xssFilter($_GET['dist']);
		$data['adData'] = $this->HomeModel->getAdsByDistrict($dist,$this->adstatus->getActive());
		$this->load->view("allads",$data);

	}else if(isset($_GET['query'])){

		$search = $this->filter->xssFilter($_GET['query']);
		$data['adData'] = $this->HomeModel->search($this->adstatus->getActive(),$search);
		$this->load->view("allads",$data);

	}else{
		$data['adData'] = $this->HomeModel->getAllAds($this->adstatus->getActive());
		$this->load->view("allads",$data);
	}

}

	public function adView(){

		if(isset($_GET['ad'])){

			if(is_numeric($_GET['ad'])){

				$this->load->model("HomeModel");
				$this->load->library("AdStatus");
				$data['adData'] = $this->HomeModel->getAdData($this->adstatus->getActive(),$_GET['ad']);

				$this->load->view("adView",$data);

			}else{
				echo "403 fobidden";
			}

		}else{
			echo "access denied";
		}


	}

}

?>