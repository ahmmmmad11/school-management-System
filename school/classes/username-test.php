<?php
// the next code is for cheking if the username of the the new teacher is all ready exist or not
spl_autoload_register(function($class){
	require $class . ".php";
});

class show_username{
	public function show($username){
		$te = new Connect();
		$sql = "SELECT * FROM teachers WHERE username='$username'";
		$rs  = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return true;
			}
		}
		else{
			return false;
		}
	}
}
// here call the the class to use it
$username = $_POST["username"];
$us = new show_username();
$us->show($username);