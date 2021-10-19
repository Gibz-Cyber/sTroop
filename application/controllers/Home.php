<?php

class Home extends CI_Controller{	

public function index(){

	$this->load->view("index.php");

}

public function contactus(){
		$this->load->view("contactus");
}


public function aboutus(){
	$this->load->view("aboutus.html");
}

public function allAds(){

	$this->load->model("HomeModel");
	$this->load->library("AdStatus");
	$this->load->library("Filter");
	
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

}

?>