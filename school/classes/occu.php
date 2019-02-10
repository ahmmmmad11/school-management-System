<?php

spl_autoload_register(function($class){
	require $class . ".php";
});

class show_teacher{
	public function main_show($id){
		$te = new Connect();
		$sql = "SELECT * FROM teachers WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["name"];
			}
		}
	}
}

class show_manag{
	public function show(){
		$te = new Connect();
		$sql = "SELECT * FROM manag";
		$rs  = mysqli_query($te->connection(), $sql);
		$i=0;
		$sh = new show_teacher();
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<tr>
											<td class="text-center">' . $row["occu"] . '</td>
											<td class="text-center" id="' . $row["oc"]. '">' . $sh->main_show($row["t_id"]) . '</td>
											<td class="text-center"><button class="btn btn-warning" id="' . $row["oc"]. '1">تغييـــر</button></td>
										</tr>';
			}
		}
		else{
			echo "<td class='text-center'>'لا يوجد شئ للعرض</td>";
		}
	}
}

class acadimicYear{
	public function show_year(){
		$te = new Connect();
		$sql = "SELECT * FROM acadimic_year";
		$rs  = mysqli_query($te->connection(), $sql);	
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["a_year"];
			}
		}
	}
	//************************************************
	public function show_exam_type(){
		$te = new Connect();
		$sql = "SELECT * FROM exam_type";
		$rs  = mysqli_query($te->connection(), $sql);	
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["ex_type"];
			}
		}
	}
	//************************************************
	public function update_exam_type($ex_type){
		$te = new Connect();
		$sql = "UPDATE exam_type SET ex_type='$ex_type'";
		$rs  = mysqli_query($te->connection(), $sql);
		if ($rs) {
			header("location:../acadimic-year.php");
		}
		
	}
	//************************************************
	public function update_year($a_year){
		$te = new Connect();
		$sql = "UPDATE acadimic_year SET a_year='$a_year'";
		$rs  = mysqli_query($te->connection(), $sql);
		if ($rs) {
			header("location:../acadimic-year.php");
		}
	}
}
$ac = new acadimicYear();
$a_year = $_POST["a_year"];
if (isset($_POST["subYear"])) {
	# code...
	$ac->update_year($a_year);
}
//********************************
$ex_type = $_POST["ex_type"];
if (isset($_POST["subExam"])) {
	# code...
	$ac->update_exam_type($ex_type);
}