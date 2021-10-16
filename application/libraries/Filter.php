<?php

class Filter{

	public function xssFilter($data){

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;

	}

}

?>