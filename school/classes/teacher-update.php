<?php
session_start();
spl_autoload_register(function($class){
	require $class . ".php";
});


// this class for update teacher information
//  
class update_teacher{

	// the next method is used for display teacher information befor updating
	public function showing($id){
		$te = new Connect();
		$sql= "SELECT * FROM teachers WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) > 0) {
			while ($row = mysqli_fetch_array($rs)) {
				echo '<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="text" name="name" value="' . $row["name"] . '" class="form-control" id="name" > 
							</div>
							<label class="control-label col-sm-4" for="o-password">الاسم:</label>
						</div>
						<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="text" name="email" value="' . $row["email"] . '" class="form-control" id="email"> 
							</div>
							<label class="control-label col-sm-4" for="n-password">الاميل:</label>
						</div>
						<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="text" name="phonenumber" value="' . $row["phonenumber"] . '" class="form-control" id="number"> 
							</div>
							<label class="control-label col-sm-4" for="c-password">الرقم:</label>
						</div>
						<div class="form-groub mr-bottom " align="left">
							<div class="col-sm-12">
								<button type="submit" name="gen"  class="btn btn-success mr-bottom" id="save">حفـــــــــــــــــــــــــــــــظ</button>
							</div>
						</div>';
			}
		}
	}

	// the next method is used for updating the general information like name,email and phone number
	public function update($name ,$phone, $email, $id){
		$te = new Connect();
		$sql= "UPDATE teachers SET name='$name' , phonenumber='$phone' , email = '$email' WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			header("location:../update.php");
		}
		else{
			echo "failed";
		}
	}

	// the next method is used for updating the password
	public function update_pass($pass, $id){
		$te = new Connect();
		$sql= "UPDATE teachers SET password='$pass' WHERE id='$id'";
		$rs = mysqli_query($te->connection(), $sql);
		if ($rs) {
			header("location:../update.php#success");
		}
		else{
			header("location:../update.php#fail");
			echo $id;
		}
	}

	// the next method is used for confirming the old password to allow update
	public function detect_pass($pass){
		$te = new Connect();
		$sql= "SELECT * FROM teachers WHERE password='$pass'";
		$rs = mysqli_query($te->connection(), $sql);
		if (mysqli_num_rows($rs) == 1) {
			echo "success";
		}
	}
}

// use of update class
$up = new update_teacher();
   $pass = $_POST["password"];

 $up->detect_pass($pass);
//*************************************
$id=$_SESSION["id"];
  if (isset($_POST["save"])) {
  	$up->detect_pass($pass);
  }
 //***********************************
$name =$_POST["name"];
$phone=$_POST["phonenumber"];
$email=$_POST["email"];
if (isset($_POST["gen"])) {
	$up->update($name ,$phone, $email, $id);
}