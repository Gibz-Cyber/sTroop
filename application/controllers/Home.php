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
				

				if(isset($_GET['admin'])){
					$data['adData'] = $this->HomeModel->getAdData($this->adstatus->getPending(),$_GET['ad']);
				}else{
					$data['adData'] = $this->HomeModel->getAdData($this->adstatus->getActive(),$_GET['ad']);
				}

				$this->load->view("adView",$data);

			}else{
				echo "403 fobidden";
			}

		}else{
			echo "access denied";
		}


	}

	public function contactEmail(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			//access mode post start from here

			$this->load->library("form_validation");
			$this->form_validation->set_rules("f-name","first name","required");
			$this->form_validation->set_rules("l-name","last name","required");
			$this->form_validation->set_rules("email","email","required");
			$this->form_validation->set_rules("message","message","required|max_length[800]");

			if(!$this->form_validation->run()){
				//form validation error start from here
				$array = array(
					"success"=>false,
					"f_name"=>form_error("f-name"),
					"l_name"=>form_error("l-name"),
					"email"=>form_error("email"),
					"message"=>form_error("message")
				);
				//form validation error end from here
			}else{
				//form validation success start from here
				
				//mail send code start from here

				//email send start from here
			     /*	
			     	$from = "from address";
			        
			        $config['protocol'] = "smtp";
			        $config['smtp_host'] = "mail server ";
			        $config['smtp_port'] = ""port;
			        $config['smtp_timeout'] = "60";
			        $config['smtp_user'] = "domain.com";
			        $config['smtp_pass'] = "smtp pass";
			        $config['charset'] = "utf-8";
			        $config['newline'] = "\r\n";
			        $config['mailtype'] = "html";
			        $config['validation']= true;
			        
			        $this->email->initialize($config);
			        $this->email->set_mailtype("html");
			        $this->email->from($from,"supplytroop");
			        $this->email->to($to,"{$this->input->post("f-name")}");
			        $this->email->subject("mail subject");
			        $this->email->message($this->input->post("message"));
			        $mail_send = $this->email->send(); */

			        $mail_send = true;

			        if($mail_send){

			        	$array = array(
			        		"success"=>true,
			        		"mail"=>true
			        	);

			        }

				//mail send code end from here

				//form valodation success end from here
			}

			echo json_encode($array);

			//access mode post end from here
		}else{
			//access method ! post
			echo "404";
			//access mode ! post end from here
		}

	}

}

?>