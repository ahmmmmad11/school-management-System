<?php
session_start();
spl_autoload_register(function($class){
	require $class  .".php";
});

// this file is used for adding degrees of the exsams to thier student 

class add_dgree{
	public function get_students($x){
		$te = new Connect();
		$i=0;
		$sql  = "SELECT * FROM student WHERE classname ='$x'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '</form><form method="post" id="degree-form' . $i= $i+1 . '">
						<tr>
								
								<td class="text-right">' .$i= $i+1 . '</td>
								<td class="text-right"> <input type="text" name="id" class="hide" value="' .	$row["id"] . '">' .	$row["name"] . '</td>
								<td class="text-right" style="width:80px"><input type="text" data-validation="number" data-validation-allowing="range[1;100]"   name="degree" class="col-sm-2 form-control" maxlength="3" id="degree' .$i= $i+1 . '" max="100" required></td>
								<td class="text-right" id="res' .$i= $i+1 . '"></td>
								
						</tr>
				';
			}
		}
	}

	public function get_subject($x){
		$te = new Connect();
		$i=0;
		$sql  = "SELECT * FROM teachers WHERE id ='$x'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["subject"];
			}
		}
	}



	public function set_degrees($id, $s_id, $degree, $a_year){
		$te = new Connect();
		$ad = new add_dgree();
		$sup_id = $ad->get_subject($id);
		$sql = "INSERT INTO sub_degrees (s_id, sub_id, degree, a_year) VALUES ('$s_id', '$sub_id', '$degree', '$a_year')";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			echo '1';
		}
	}
}
// $id = $_SESSION["id"];
//  $s_id = $_POST["id"];
//  $degree = $_POST["degree"];
//  $a_year = "2015";
// $ad = new add_dgree();
// $ad->set_degrees($id, $s_id, $degree, $a_year);
// echo $id;
// echo $s_id;
// echo $degree;