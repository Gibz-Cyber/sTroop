<?php

class UserDataProcessor extends CI_Controller{

	public function checkSessions(){
		$this->load->library("session");
		if($this->session->userdata("user_id") != "" && $this->session->userdata("user_name") != "" && $this->session->userdata("user_verification")){
			return true;
		}else{
			return false;
		}
	}

	public function changePassword(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){

			$this->load->library("form_validation");

			$this->form_validation->set_rules("cpwd","Current password","required|min_length[8]|max_length[30]");
			$this->form_validation->set_rules("npwd","New password","required|min_length[8]|max_length[30]");
			$this->form_validation->set_rules("rpwd","Repeat password","required|min_length[8]|max_length[30]|matches[npwd]");

			if(!$this->form_validation->run()){
				//form validation error start form here
				$array = array(
					"success"=>false,
					"cpwd"=>form_error("cpwd"),
					"npwd"=>form_error("npwd"),
					"rpwd"=>form_error("rpwd")
				);
				//form validation error end from here
			}else{
				//form validation success start from here
				$this->load->library("Filter");
				$cpwd = sha1($this->filter->xssFilter($this->input->post("cpwd")));

				$this->load->model("UserDataProcessorModel"); //load userdataprocessormodel

				$oldPasswordResponse = $this->UserDataProcessorModel->checkOldPassword($this->session->userdata("user_id"),$cpwd);

				if($oldPasswordResponse === false){
					//old password mismatch start from here
					$array = array(
						"success"=>true,
						"old"=>false
					);
					//old password mismatch end from here
				}else{
					//old password match start from here
					$npwd = sha1($this->filter->xssFilter($this->input->post("npwd")));
					$update = $this->UserDataProcessorModel->updatePassword($this->session->userdata("user_id"),$npwd);

					if($update === false){
						//update error start from here
						$array = array(
							"success"=>true,
							"old"=>true,
							"update"=>false
						);
						//update error end from here
					}else{
						//update success start from here
						$array = array(
							"success"=>true,
							"old"=>true,
							"update"=>true
						);
						//update success end from here
					}
					//old password match end from here
				}
				//form validation success end from here
			}

			echo json_encode($array);

		}else{
			echo "404";
		}
			//sessions available end from here
		}else{
			//sessions not avilable start from here
			echo "404";
			//sessions not available end from here
		}

	}


	public function changeName(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

				$this->load->library("form_validation");

				$this->form_validation->set_rules("name","name","required|min_length[4]|max_length[20]");

				if(!$this->form_validation->run()){
					//form validation error start from here
					$array = array(
						"success"=>false,
						"name"=>form_error("name")
					);
					//form validation error end from here
				}else{
					//form validation success start from here
					$this->load->library("Filter");
					$this->load->model("UserDataProcessorModel");

					$update = $this->UserDataProcessorModel->updateName($this->session->userdata("user_id"),$this->filter->xssFilter($this->input->post("name")));

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
						$this->session->set_userdata("user_name",$this->filter->xssFilter($this->input->post("name")));
						//update success end from here
					}
					//form validation success end form here
				}

				echo json_encode($array);

				//request method post end from here
			}else{
				//request method !post start from here
				echo "404";
				//request method !post end from here
			}
			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end from here
		}

	}


	public function loadPhoneNumbers(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here
				$this->load->model("UserDataProcessorModel");
				$data['phoneNumber'] = $this->UserDataProcessorModel->getNumbers($this->session->userdata("user_id"));
				$this->load->view("account/partial/phone_numbers",$data);
				//request method post end from here
			}else{
				//request method not post start from here
				echo "post error";
				//request method not post end from here
			}
			//sessions avaialble end from here
		}else{
			//sessios not available start from here
			echo "404";
			//sessions not available end form here
		}

	}

	public function editNumber(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//SERVER REQ METHOD POST START FROM HERE
				$this->load->library("form_validation");

				$this->form_validation->set_rules("number","number ".$this->input->post("placeHolder"),"required|numeric|min_length[10]|max_length[10]");
				$this->form_validation->set_rules("placeHolder","placeHolder","required|min_length[1]|max_length[1]");

				if(!$this->form_validation->run()){
					//form validation error start form here
					$array = array(
						"success"=>false,
						"number"=>form_error("number"),
						"placeHolder"=>form_error("placeHolder")
					);
					//form validation error end from here
				}else{
					//form validation success start from here
					$this->load->library("Filter");
					$number = $this->filter->xssFilter($this->input->post("number"));
					$placeHolder = $this->filter->xssFilter($this->input->post("placeHolder"));

					$this->load->model("UserDataProcessorModel");

					$availability = $this->UserDataProcessorModel->getNumbers($this->session->userdata("user_id"));

					if($availability === false){
						//usser mobile numbers empty start from here
						if($placeHolder != 1){
							//placeholder is not main start from here
							$array = array(
								"success"=>true,
								"placeHolder"=>false
							);
							//placeholder is not main end from here
						}else{
							//placeholder is 1 start from here
							$insert = $this->UserDataProcessorModel->insertNumbers($this->session->userdata("user_id"),$number);

							if($insert === false){
								//1st number added error start from here
								$array = array(
									"success"=>true,
									"placeHolder"=>true,
									"insert"=>false
								);
								//1st number added error end form here
							}else{
								//1st number added success startr from here
								$array = array(
									"success"=>true,
									"placeHolder"=>true,
									"insert"=>true
								);
								//1st number added success end from here
							}

							//placfeholder isd 1 end form here
						}
						//user mobile numbers empty end from here
					}else{
						//user mobile numbers avaialbale start from here

						$update = $this->UserDataProcessorModel->updateNumbers($this->session->userdata("user_id"),$placeHolder,$number);

						if($update === false){
							//number update error start form here
							$array = array(
								"success"=>true,
								"placeHolder"=>true,
								"insert"=>false
							);
							//number update error end from here
						}else{
							//number update success start form here
							$array = array(
								"success"=>true,
								"placeHolder"=>true,
								"insert"=>true
							);
							//number update success end from here
						}

						//user mobile numbers available end from here
					}
					//form validation success end form here
				}

				echo json_encode($array);

				//SERVER REQ METHOD POST END FROM HERE
			}else{
				//SERVER REQ METHOD IS ! POST START FROM HERE
				echo "404";
				//SERVER REQ METHOD IS ! POST END FROM HERE
			}
			//sessions available end from here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}

	public function buyPosting(){

		if($this->checkSessions()){
			//sessions available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//REQUEST METHOD POST START FROM HERE
				$this->load->library("form_validation");

				$this->form_validation->set_rules("cases","category","required");
				$this->form_validation->set_rules("district","district","required");
				$this->form_validation->set_rules("title","title","required|max_length[25]");
				$this->form_validation->set_rules("description","description","required|max_length[800]");
				$this->form_validation->set_rules("price","price","required");
				$this->form_validation->set_rules("category","category","required");

				if(!$this->form_validation->run()){
					//form validation error start from here
					$array = array(
						"success"=>false,
						"cases"=>form_error("cases"),
						"district"=>form_error("district"),
						"title"=>form_error("title"),
						"description"=>form_error("description"),
						"price"=>form_error("price"),
						"category"=>form_error("category")
					);
					//form validation error end from here
				}else{
					//form validation success start from here

					$this->load->library("Filter");

					$subCat = $this->filter->xssFilter($this->input->post("cases"));
					$mainCat = $this->filter->xssFilter($this->input->post("category"));
					$district = $this->filter->xssFilter($this->input->post("district"));
					$title = $this->filter->xssFilter($this->input->post("title"));
					$desc = $this->filter->xssFilter($this->input->post("description"));
					$price = $this->filter->xssFilter($this->input->post("price"));

					$this->load->library("Category");
					$this->load->library("AdStatus");

					$this->load->model("UserDataProcessorModel");

					$buyImg = base_url('/ad_images/buy/no-prev.jpeg');

					$res = $this->UserDataProcessorModel->buyAdPosting($this->session->userdata("user_id"),$mainCat,$subCat,$district,$title,$desc,$price,$buyImg,$this->category->getBuy(),$this->adstatus->getPending());

					if($res === false){
						//ad record error start from here
						$array = array(
							"success"=>true,
							"ad"=>false
						);
						//ad record error end form here
					}else{
						//ad record success start from here
						$array = array(
							"success"=>true,
							"ad"=>true
						);
						//ad record success end form here
					}

					//form validation success end from here
				}

				echo json_encode($array);

				//REQUEST METHOD POST END FROM HERE
			}else{
				//REQUEST METHOD IS NOT POST START FORM HERE
				echo "404";
				//REQUEST METHOD IS NOT POST END FORM HERE
			}
			//sessions available end form here
		}else{
			//sesssions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}


	public function uploadImages(){

		if($this->checkSessions()){
			//sessions available start from here

			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here
				 // Upload folder location***
				    $config['upload_path'] = './public/upload/';

				    // Allowed file type***
				    $config['allowed_types'] = 'jpg|jpeg|png|pdf';

				    // Max size, i will set 2MB***
				    $config['max_size'] = '2024';

				    $config['max_width'] = '1024';
				    $config['max_height'] = '768';

				    // load upload library***            
				    $this->load->library('upload', $config);

				    // do_upload is the method, to send the particular image and file on that 
				       // particular 
				       // location that is detail in $config['upload_path']. 
				       // In bracks will set name upload, here you need to set input name attribute 
				       // value.***

				    if($this->upload->do_upload('upload')) {
				       $data = $this->upload->data();
				       $post['upload'] = $data['file_name'];
				    } else {
				      $error = array('error' => $this->upload->display_errors());
				    }
				//request method post end form here
			}else{
				//request method not post start from here
				echo "404";
				//request method not post end form here
			}

			//sessions available end form here
		}else{
			//sessions not available start form here
			echo "404";
			//sessions not available end form here
		}

	}


	public function uploadMainImage(){

		if($this->checkSessions()){
			//sessions not available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

						$config['image_library'] = 'gd2';
						$original_path = './ad_images/sell_original/';
						$resized_path = './ad_images/sell_resized/';
						//$resized_path = './uploads/activity_images/resized';
						//$thumbs_path = './uploads/activity_images/thumb';
						$this->load->library('image_lib', $config);

		        		$config = array(
		            		'allowed_types' => 'jpg|jpeg|png', //only accept these file types
		            		'max_size' => 5140, //5MB max
		            		'upload_path' => $original_path,//upload directory  
		            		'file_name'=>uniqid("main_image_",true)."_".$this->session->userdata('user_id')."_".$_FILES["main_image"]['name']  
		        		);
		        		$this->load->library('upload', $config);
		        		if(!$this->upload->do_upload("main_image")){
		          			$array = array(
		          				"success"=>false
		          			);
		        		}else{
		        			//image uploadinf success start from here

		        			$image_data = $this->upload->data(); //upload the image
		        		$image1 = $image_data['file_name'];

		        		//your desired config for the resize() function
		        		$config = array(
		            		'source_image' => $image_data['full_path'], //path to the uploaded image
		           		 'new_image' => $resized_path,
		            		'maintain_ratio' => true,
		            		'quality'=>"65%",
		            		'width' => 350,
		            		'height' => 350,
		        		);
		        		$this->image_lib->initialize($config);
		        		$this->image_lib->resize();

		        		// for the Thumbnail image
		       		/* $config = array(
		            		'source_image' => $image_data['full_path'],
		            		'new_image' => $thumbs_path,
		            		'maintain_ratio' => true,
		            		'width' => 36,
		            		'height' => 36
		        		);
		        		//here is the second thumbnail, notice the call for the initialize() function again
		        		$this->image_lib->initialize($config);

		        		$this->image_lib->resize();*/
		        		$this->image_lib->clear();
		        		if($this->image_lib->display_errors()){
		          		$array = array(
		          			"success"=>true,
		          			"upload"=>false,
		          			"error"=>$this->image_lib->display_errors()
		          		);
		         		//$this->image_lib->display_errors();
		        		}else{
		         		$array = array(
		          			"success"=>true,
		          			"upload"=>true,
		          			"file"=>$image1
		          		);
		       		 }

        			//image uploading success end from here
        		}
        		echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request mthod ! post end from here
			}
			//sessions not avilable end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}


	public function uploadsubImage1(){

		if($this->checkSessions()){
			//sessions not available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

						$config['image_library'] = 'gd2';
						$original_path = './ad_images/sell_original/';
						$resized_path = './ad_images/sell_resized/';
						//$resized_path = './uploads/activity_images/resized';
						//$thumbs_path = './uploads/activity_images/thumb';
						$this->load->library('image_lib', $config);

		        		$config = array(
		            		'allowed_types' => 'jpg|jpeg|png|gif', //only accept these file types
		            		'max_size' => 5140, //5MB max
		            		'upload_path' => $original_path,//upload directory  
		            		'file_name'=>uniqid("sub_image_1_",true)."_".$this->session->userdata('user_id')."_".$_FILES["sub_image_1"]['name']  
		        		);
		        		$this->load->library('upload', $config);
		        		if(!$this->upload->do_upload("sub_image_1")){
		          			$array = array(
		          				"success"=>false
		          			);
		        		}else{
		        			//image uploadinf success start from here

		        			$image_data = $this->upload->data(); //upload the image
		        		$image1 = $image_data['file_name'];

		        		//your desired config for the resize() function
		        		$config = array(
		            		'source_image' => $image_data['full_path'], //path to the uploaded image
		           		 'new_image' => $resized_path,
		            		'maintain_ratio' => true,
		            		'quality'=>"65%",
		            		'width' => 350,
		            		'height' => 350,
		        		);
		        		$this->image_lib->initialize($config);
		        		$this->image_lib->resize();

		        		// for the Thumbnail image
		       		/* $config = array(
		            		'source_image' => $image_data['full_path'],
		            		'new_image' => $thumbs_path,
		            		'maintain_ratio' => true,
		            		'width' => 36,
		            		'height' => 36
		        		);
		        		//here is the second thumbnail, notice the call for the initialize() function again
		        		$this->image_lib->initialize($config);

		        		$this->image_lib->resize();*/
		        		$this->image_lib->clear();
		        		if($this->image_lib->display_errors()){
		          		$array = array(
		          			"success"=>true,
		          			"upload"=>false,
		          			"error"=>$this->image_lib->display_errors()
		          		);
		         		//$this->image_lib->display_errors();
		        		}else{
		         		$array = array(
		          			"success"=>true,
		          			"upload"=>true,
		          			"file"=>$image1
		          		);
		       		 }

        			//image uploading success end from here
        		}
        		echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request mthod ! post end from here
			}
			//sessions not avilable end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}


	public function uploadsubImage2(){

		if($this->checkSessions()){
			//sessions not available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

						$config['image_library'] = 'gd2';
						$original_path = './ad_images/sell_original/';
						$resized_path = './ad_images/sell_resized/';
						//$resized_path = './uploads/activity_images/resized';
						//$thumbs_path = './uploads/activity_images/thumb';
						$this->load->library('image_lib', $config);

		        		$config = array(
		            		'allowed_types' => 'jpg|jpeg|png|gif', //only accept these file types
		            		'max_size' => 5140, //5MB max
		            		'upload_path' => $original_path,//upload directory  
		            		'file_name'=>uniqid("sub_image_2_",true)."_".$this->session->userdata('user_id')."_".$_FILES["sub_image_2"]['name']  
		        		);
		        		$this->load->library('upload', $config);
		        		if(!$this->upload->do_upload("sub_image_2")){
		          			$array = array(
		          				"success"=>false
		          			);
		        		}else{
		        			//image uploadinf success start from here

		        			$image_data = $this->upload->data(); //upload the image
		        		$image1 = $image_data['file_name'];

		        		//your desired config for the resize() function
		        		$config = array(
		            		'source_image' => $image_data['full_path'], //path to the uploaded image
		           		 'new_image' => $resized_path,
		            		'maintain_ratio' => true,
		            		'quality'=>"65%",
		            		'width' => 350,
		            		'height' => 350,
		        		);
		        		$this->image_lib->initialize($config);
		        		$this->image_lib->resize();

		        		// for the Thumbnail image
		       		/* $config = array(
		            		'source_image' => $image_data['full_path'],
		            		'new_image' => $thumbs_path,
		            		'maintain_ratio' => true,
		            		'width' => 36,
		            		'height' => 36
		        		);
		        		//here is the second thumbnail, notice the call for the initialize() function again
		        		$this->image_lib->initialize($config);

		        		$this->image_lib->resize();*/
		        		$this->image_lib->clear();
		        		if($this->image_lib->display_errors()){
		          		$array = array(
		          			"success"=>true,
		          			"upload"=>false,
		          			"error"=>$this->image_lib->display_errors()
		          		);
		         		//$this->image_lib->display_errors();
		        		}else{
		         		$array = array(
		          			"success"=>true,
		          			"upload"=>true,
		          			"file"=>$image1
		          		);
		       		 }

        			//image uploading success end from here
        		}
        		echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request mthod ! post end from here
			}
			//sessions not avilable end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}

	public function uploadsubImage3(){

		if($this->checkSessions()){
			//sessions not available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

						$config['image_library'] = 'gd2';
						$original_path = './ad_images/sell_original/';
						$resized_path = './ad_images/sell_resized/';
						//$resized_path = './uploads/activity_images/resized';
						//$thumbs_path = './uploads/activity_images/thumb';
						$this->load->library('image_lib', $config);

		        		$config = array(
		            		'allowed_types' => 'jpg|jpeg|png|gif', //only accept these file types
		            		'max_size' => 5140, //5MB max
		            		'upload_path' => $original_path,//upload directory  
		            		'file_name'=>uniqid("sub_image_3_",true)."_".$this->session->userdata('user_id')."_".$_FILES["sub_image_3"]['name']  
		        		);
		        		$this->load->library('upload', $config);
		        		if(!$this->upload->do_upload("sub_image_3")){
		          			$array = array(
		          				"success"=>false
		          			);
		        		}else{
		        			//image uploadinf success start from here

		        			$image_data = $this->upload->data(); //upload the image
		        		$image1 = $image_data['file_name'];

		        		//your desired config for the resize() function
		        		$config = array(
		            		'source_image' => $image_data['full_path'], //path to the uploaded image
		           		 'new_image' => $resized_path,
		            		'maintain_ratio' => true,
		            		'quality'=>"65%",
		            		'width' => 350,
		            		'height' => 350,
		        		);
		        		$this->image_lib->initialize($config);
		        		$this->image_lib->resize();

		        		// for the Thumbnail image
		       		/* $config = array(
		            		'source_image' => $image_data['full_path'],
		            		'new_image' => $thumbs_path,
		            		'maintain_ratio' => true,
		            		'width' => 36,
		            		'height' => 36
		        		);
		        		//here is the second thumbnail, notice the call for the initialize() function again
		        		$this->image_lib->initialize($config);

		        		$this->image_lib->resize();*/
		        		$this->image_lib->clear();
		        		if($this->image_lib->display_errors()){
		          		$array = array(
		          			"success"=>true,
		          			"upload"=>false,
		          			"error"=>$this->image_lib->display_errors()
		          		);
		         		//$this->image_lib->display_errors();
		        		}else{
		         		$array = array(
		          			"success"=>true,
		          			"upload"=>true,
		          			"file"=>$image1
		          		);
		       		 }

        			//image uploading success end from here
        		}
        		echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request mthod ! post end from here
			}
			//sessions not avilable end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}


	public function uploadsubImage4(){

		if($this->checkSessions()){
			//sessions not available start from here
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				//request method post start from here

						$config['image_library'] = 'gd2';
						$original_path = './ad_images/sell_original/';
						$resized_path = './ad_images/sell_resized/';
						//$resized_path = './uploads/activity_images/resized';
						//$thumbs_path = './uploads/activity_images/thumb';
						$this->load->library('image_lib', $config);

		        		$config = array(
		            		'allowed_types' => 'jpg|jpeg|png|gif', //only accept these file types
		            		'max_size' => 5140, //5MB max
		            		'upload_path' => $original_path,//upload directory  
		            		'file_name'=>uniqid("sub_image_4_",true)."_".$this->session->userdata('user_id')."_".$_FILES["sub_image_4"]['name']  
		        		);
		        		$this->load->library('upload', $config);
		        		if(!$this->upload->do_upload("sub_image_4")){
		          			$array = array(
		          				"success"=>false
		          			);
		        		}else{
		        			//image uploadinf success start from here

		        			$image_data = $this->upload->data(); //upload the image
		        		$image1 = $image_data['file_name'];

		        		//your desired config for the resize() function
		        		$config = array(
		            		'source_image' => $image_data['full_path'], //path to the uploaded image
		           		 'new_image' => $resized_path,
		            		'maintain_ratio' => true,
		            		'quality'=>"65%",
		            		'width' => 350,
		            		'height' => 350,
		        		);
		        		$this->image_lib->initialize($config);
		        		$this->image_lib->resize();

		        		// for the Thumbnail image
		       		/* $config = array(
		            		'source_image' => $image_data['full_path'],
		            		'new_image' => $thumbs_path,
		            		'maintain_ratio' => true,
		            		'width' => 36,
		            		'height' => 36
		        		);
		        		//here is the second thumbnail, notice the call for the initialize() function again
		        		$this->image_lib->initialize($config);

		        		$this->image_lib->resize();*/
		        		$this->image_lib->clear();
		        		if($this->image_lib->display_errors()){
		          		$array = array(
		          			"success"=>true,
		          			"upload"=>false,
		          			"error"=>$this->image_lib->display_errors()
		          		);
		         		//$this->image_lib->display_errors();
		        		}else{
		         		$array = array(
		          			"success"=>true,
		          			"upload"=>true,
		          			"file"=>$image1
		          		);
		       		 }

        			//image uploading success end from here
        		}
        		echo json_encode($array);

				//request method post end from here
			}else{
				//request method ! post start from here
				echo "404";
				//request mthod ! post end from here
			}
			//sessions not avilable end form here
		}else{
			//sessions not available start from here
			echo "404";
			//sessions not available end form here
		}

	}

}

?>