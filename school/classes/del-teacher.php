<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

class delete{
	public function delition($name){
		$te = new Connect();
		$sql = "DELETE FROM teachers WHERE name='$name'";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			# code...
			echo " تم مسح " . $name ;
		}
	}
}
$name = $_POST["name"];
	# code...
	$dl = new delete();
	$dl->delition($name);
