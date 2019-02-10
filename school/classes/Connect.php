<?php

class Connect{
	public $server	= "localhost";
	public $user		= "root";
	public $pass		= "congratolation";
	public $db		= "school";
	public $con ;

	public function connection(){
		$this->con = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
		return $this->con;
	}
}