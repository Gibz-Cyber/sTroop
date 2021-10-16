<?php

class UserType{

	private $USER = "user";
	private $ADMIN = "admin";

	public function getUser(){
		return $this->USER;
	}

	public function getAdmin(){
		return $this->ADMIN;
	}

}

?>