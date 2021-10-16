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
	$this->load->view("allads");
}

}

?>