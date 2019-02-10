<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

class myclasses1{
	public function get_classes($x){
		$te = new Connect();
		$sql= "SELECT * FROM classes WHERE id ='$x'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["classname"];
			}
		}
	}
	public function show_classes($id){
		$te = new Connect();
		$m  = new myclasses1();
		$sql = "SELECT * FROM tecl  WHERE t_id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)>0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '
						<div class="col-sm-4 pnl" id="c' . $row["c_id"] . '"><span class="ico"><i class="fa fa-institution"></i></span>' . $m->get_classes($row["c_id"]) . '</div>
				';
			}
		}
	}
}
?>