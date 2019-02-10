<?php
spl_autoload_register(function($class){
	require $class . ".php";
});


// the hole file is for display student of one class

// the nxt class is for retrive the name of the class
class classname{
	public function main_show($i_d){
		$te = new Connect();
		$sql = "SELECT * FROM classes WHERE id='$i_d'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo  $row["classe"] . '"' .$row["classname"] . '"';
			}
		}
	}
}

// the next 
class teacher_name{
	public function main_show($id){
		$te = new Connect();
		$sql = "SELECT * FROM teachers WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["name"];
			}
		}
	}
}

class reg_stat{
	public function status($paid_fin, $cse){
		$te = new Connect();
		$sql = "SELECT * FROM fee WHERE classe='$cse'";
		$rs  = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				if ($row["fee"]-$paid_fin == 0) {
					return "مكتمل";
				}
				else{
					return $row["fee"]-$paid_fin;
				}
			}
		}
	}
}

class show_class_studets{
	public function show($cl, $cse){
		$te = new Connect();
		$sql = "SELECT * FROM student WHERE classname='$cl'";
		$rs  = mysqli_query($te->connection(), $sql);
		$i=0;
		$st = new reg_stat();
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<tr>
											<td class="text-right">' . $i = $i+1 . '</td>
											<td class="text-right" id="name">' . $row["name"] . '</td>
											<td class="text-right">' . $row["set_num"] . '</td>
											<td class="text-right">' . $st->status($row["paid_fin"], $cse) . '</td>
											<td class="text-right">
												<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">خيــارات
									  <span class="caret"></span></button>
									  <ul class="dropdown-menu">
									    <li><a href="#" type="button"  id="n-btn"  data-toggle="modal" data-target="#myModal">نقل</a></li>
									    <li><a href="thestudent.php?id=' . $row["id"] . '">عرض</a></li>
									    <li><a href="#">فصل</a></li>
									  </ul>
									</div> 
											</td>
										</tr>';
			}
		}
		else{
			echo "<tr></tr><tr><td class='text-center'>لا يوجد شئ للعرض</td></tr>";
		}
	}
	//number of students on the class
	public function counting($cl){
		$te = new Connect();
		$sql = "SELECT count(*) as total FROM student WHERE classname='$cl'";
		$rs  = mysqli_query($te->connection(), $sql);
		$row = mysqli_fetch_array($rs);
		echo $row["total"]; 
	}
}

class show_class_teachers{
	public function show($c_id){
		$te = new Connect();
		$sql = "SELECT * FROM tecl WHERE c_id='$c_id'";
		$rs  = mysqli_query($te->connection(), $sql);
		$sh = new teacher_name();
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<li>' . $sh->main_show($row["t_id"]) . '</li>';
			}
		}
		else{
			echo "<li>لا يوجد شئ للعرض</li>";
		}
	}
}

class class_sup{
	public function show_sup($id){
		$te = new Connect();
		$sql = "SELECT te_id, id, name FROM class_sup INNER JOIN teachers ON class_sup.te_id=teachers.id WHERE cl_id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo $row["name"];
			}
		}
	}
}

class change_sup{
	public function get_id($x){
		$te = new Connect();
		$sql = "SELECT * FROM teachers WHERE name='$x'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return $row["id"];
			}
		}
	}
	//*************************************************
	function change_super($x, $id){
		$te = new Connect();
		$sql = "UPDATE class_sup SET te_id='$x' WHERE cl_id='$id'";
		$rs  = mysqli_query($te->connection(), $sql);
		if ($rs) {
			echo "تم التعديل ";
		}
	}
}

class move_student{
	public function move($id, $classname){
		$te = new Connect();
		$sql= "UPDATE student SET classname='$classname' WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			
		}
	}
}
$name = $_POST["name"];
$cl_id=$_POST["cl_id"];
$cl = new change_sup();
$cl->change_super($cl->get_id($name), $cl_id);
