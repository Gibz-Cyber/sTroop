<?php

class Category{

	private $SELL = "sell";
	private $JOB = "job";
	private $RENT = "rent";
	private $BUY = "buy";



	public function categorySelector($category){

		$array = array("electronics","vehicles","properties","leisure","services","kids items","fashion","sports","education","industrial","home and garden","food and agriculture","other");

		if(in_array($category, $array)){
			return $category;
		}else{
			return false;
		}


	}

	public function getBuy(){

		return $this->BUY;

	}

	public function getSell(){
		return $this->SELL;
	}

	public function getJob(){
		return $this->JOB;
	}

	public function getRent(){
		return $this->RENT;
	}


}

?>