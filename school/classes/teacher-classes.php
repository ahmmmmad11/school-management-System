<?php

	require  "Connect.php";

// the next class is used to return class id from the table that combine class_id with teacher id
class show_secs_class{
	public function main_show($id){
		$te = new Connect();
		$sql = "SELECT * FROM tecl WHERE t_id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["c_id"];
			}
		}
	}
}

// the next class is used for return class name from classes table
class show_secs_tecl{
	public function main_show($id){
		$te = new Connect();
		$sha = new show_secs_class();
		$sql = "SELECT * FROM classes WHERE id='$sha->main_show()'";//here I used the previous class to bass the id
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["classname"];
			}
		}
	}
}

// the main class on this file is used for displaing class for a teacher
class show_te_sec{
	public function show($sub){
		$te = new Connect();
		$sql = "SELECT * FROM teachers WHERE subject='$sub'";
		$rs  = mysqli_query($te->connection(), $sql);
		$i=0;
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<tr>
											<td class="text-center">' . $i = $i+1 . '</td>
											<td class="text-center">' . $row["name"] . '</td>
											<td class="text-center">' . $row["name"] . '</td>
										</tr>';
			}
		}
		else{
			echo '<td class="text-center">لا يوجد شئ للعرض </td>' ;
		}
	}
}