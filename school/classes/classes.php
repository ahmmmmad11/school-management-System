<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

class show_classes{
	public function class_show(){
		$te = new Connect();
		$sql = "SELECT * FROM classes";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<option>' . $row["classname"] . '</option>';
			}
		}
	}
}