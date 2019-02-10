<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

// this class is for getting incomplete payment
class un_reg{

	// this is the function to get the class name
	public function get_classname($id){
		$te = new Connect();
		$sql = "SELECT * FROM classes WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["classname"];
			}
		}
	}

	// start of function to get the student class
	public function get_classe($id){
		$te = new Connect();
		$sql = "SELECT * FROM classes WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["classe"];
			}
		}
	}
	// end of function to get the student class


	// start of function to get the remind of the student 
	public function get_remine($x,$y){
		$te = new Connect();
		$gc = new un_reg();
		$sql = "SELECT * FROM fee WHERE classe='$gc->get_classe($y)'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["fee"] - $x;
			}
		}
	}
	// start of function to get the remind of the student 

	// start of function to get the student
	// it is the main function witch use the previous function
	public function get_students(){
		$i=0;
		$te = new Connect();
		$g = new un_reg();
		$sql = "SELECT * FROM student WHERE paid_fin < 1000";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '
					<tr>
						<td class="text-center">' . $i = $i+1 . '</td>
						<td class="text-center">' . $row["name"] . '</td>
						<td class="text-center">' . $g->get_classname($row["classname"]) . '</td>
						<td class="text-center">' . $row["paid_fin"] . '</td>
						<td class="text-center">' . $g->get_remine($row["paid_fin"], $row["classname"])/*use of the remend function */ . '</td>
					</tr>
				';
			}
		}
		else {
			echo '<span class="text-center">جميع الطلاب مكتملي التسجيل</span>';
		}
	}
}

$gc = new un_reg();
$gc->get_students();