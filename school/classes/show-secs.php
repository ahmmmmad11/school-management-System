<?php
spl_autoload_register(function($class){
	require $class . ".php";
});


// this file is used for displaing sections (subjects)
class show_secs{
	public function main_show(){
		$te = new Connect();
		$sql = "SELECT * FROM subjects";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<div class="col-sm-12 pnl text-center" id="s"> ' . $row["subject"] . '</div>';
			}
		}
	}
}

class show_secs_in{
	public function input_show(){
		$te = new Connect();
		$sql = "SELECT * FROM subjects";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<option>' . $row["subject"] . '</option>';
			}
		}
	}
}
$sh = new show_secs();
$sh->main_show();