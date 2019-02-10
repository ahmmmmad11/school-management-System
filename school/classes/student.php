<?php
/**
* 
*/
spl_autoload_register(function($class){
	require  $class . ".php";
});

/* this file is used for registring a new student  */


// this class is used for returning the class id 
class show_classe{
	public function main_show($classname){
		$te = new Connect();
		$sql = "SELECT * FROM classes WHERE classname='$classname'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["id"];
			}
		}
	}
}


// this class is used for registering a new student
class register{
	
	public function registeration($name, $father_name, $father_number, $paid_fin, $classname,  $year){
		$te = new Connect();
		$sql = "INSERT INTO student (name, father_name, father_number, paid_fin, classname, year) VALUES ('$name', '$father_name', '$father_number', '$paid_fin', '$classname', '$year')";
	 	$rs = mysqli_query($te->connection(),$sql);
	 	if ($rs) {
	 		echo "success";
	 	}
	}
}

	$name				 = $_POST["name"]; 
	$father_name	   	 = $_POST["father_name"];
	$father_number 		 = $_POST["father_number"];
	$paid_fin 			 = $_POST["paid_fin"];
	$classname			 = $_POST["classname"];
	$year      			 = $_POST["year"];

	$cls = new show_classe();
	$re = new register();
	$re->registeration($name, $father_name, $father_number, $paid_fin, $cls->main_show($classname),  $year);



