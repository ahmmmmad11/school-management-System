<?php
spl_autoload_register(function($class){
	require $class . ".php";
});

class show_secs_name{
	public function main_show($id){
		$te = new Connect();
		$sql = "SELECT * FROM subjects WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				return  $row["subject"];
			}
		}
	}
}

class show_te{
	public function show(){
		$te = new Connect();
		$sql = "SELECT * FROM teachers";
		$rs  = mysqli_query($te->connection(), $sql);
		$i=0;
		$sh = new show_secs_name();
		if (mysqli_num_rows($rs)> 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<tr>
											<td class="text-center">' . $i = $i+1 . '</td>
											<td class="text-center">' . $row["name"] . '</td>
											<td class="text-center">' . $row["email"] . '</td>
											<td class="text-center">' . $row["phonenumber"] . '</td>
											<td class="text-center">' . $row["username"] . '</td>
											<td class="text-center">' . $sh->main_show($row["subject"]) . '</td>
											<td class="text-center"><button class="btn btn-warning">عــرض</button></td>
										</tr>';
			}
		}
		else{
			echo "<tr></tr><tr><td class='text-center'>لا يوجد شئ للعرض</td></tr>";
		}
	}
}
$sh = new show_te();
$sh->show();