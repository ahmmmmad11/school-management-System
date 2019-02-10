<?php
/**
*  this file is used to add a new teacher 
*/
spl_autoload_register(function($class){
	require  $class . ".php";
});
class show_subject{
	public function main_show($subject){
		$te = new Connect();
		$sql = "SELECT * FROM subjects WHERE subject='$subject'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["id"];
			}
		}
	}
}
class register{
	
	public function registeration($name, $subject, $phone, $email, $username, $password){
		$te = new Connect();
		$sql = "INSERT INTO teachers (name, subject, phonenumber, email, username, password) VALUES ('$name', '$subject', '$phone', '$email', '$username', '$password')";
	 	$rs = mysqli_query($te->connection(),$sql);
	 	if ($rs) {
	 		echo "تمت اضافة الاستاذ " . $name;
	 	}
	}
}
	
	$name			 = $_POST["name"]; 
	$subject	   	 = $_POST["subject"];
	$phone      	 = $_POST["phonenumber"];
	$email  		 = $_POST["email"];
	$username 		 = $_POST["username"];
	$password		 = $_POST["password"];


	$sh = new show_subject();
	$re = new register();
	$re->registeration($name, $sh->main_show($subject), $phone, $email, $username, $password);



