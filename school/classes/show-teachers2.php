<?php
spl_autoload_register(function($class){
	require $class . ".php";
});
// this file is used to ddisplay teachers name from tablel of teachers
class show_t{
	public function show(){
		$te = new Connect();
		$sql = "SELECT * FROM teachers";
		$rs  = mysqli_query($te->connection(), $sql);
		$i=0;
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<option>'. $row["name"] . '</option>' ;
			}
		}
		else{
			echo "الا يوجد شئ للعرض";
		}
	}
}
$sh = new show_t();
$sh->show();