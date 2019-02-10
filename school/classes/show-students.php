<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

class show_secs_name{
	public function main_show($id){
		$te = new Connect();
		$sql = "SELECT * FROM classes WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["classname"];
			}
		}
	}
}

class show_te{
	public function show(){
		$te = new Connect();
		$sql = "SELECT count(*) as total FROM student";
		$rs  = mysqli_query($te->connection(), $sql);
		$row = mysqli_fetch_array($rs);
		echo '<span>' . $row["total"] . '</span>';
	}
}
$sh = new show_te();
$sh->show();