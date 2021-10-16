<?php

class AdStatus{

	private $STATUS_PENDING = "pending";
	private $STATUS_ACTIVE = "active";
	private $STATUS_DELETED = "deleted";

	public function getPending(){
		return $this->STATUS_PENDING;
	}

	public function getActive(){
		return $this->STATUS_ACTIVE;
	}

	public function getDelete(){
		return $this->STATUS_DELETED;
	}

}

?>