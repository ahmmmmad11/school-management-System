<?php
session_start();
spl_autoload_register(function($class){
	require  $class . ".php";
});

class login{
			public function detec_admin($x){
				$re = new Connect();
				$qr = "SELECT * FROM manag WHERE t_id='$x'";
				$rs = mysqli_query($re->connection(), $qr);
				if (mysqli_num_rows($rs)== 1) {
					$row=mysqli_fetch_array($rs);
					return $row["id"];
				}
			}
			//*****************************************************************************
			public function connection2($user, $pass){
				$re = new Connect();
				$lg = new login();
				$qr = "SELECT * FROM teachers WHERE username='$user' and password='$pass'";
				$rs = mysqli_query($re->connection(), $qr);
				if (mysqli_num_rows($rs)== 1) {
					while($row=mysqli_fetch_array($rs)){
						if ($lg->detec_admin($row["id"])==1) {
								# code...
							$_SESSION["id"]=$row["id"];
							$_SESSION["mn"]="mn";
							echo "mn";
						}
						elseif ($lg->detec_admin($row["id"])==2) {
								# code...
							$_SESSION["id"]=$row["id"];
							$_SESSION["bh"]="bh";
							echo "bh";
						}
						elseif ($lg->detec_admin($row["id"])==3) {
								# code...
							$_SESSION["id"]=$row["id"];
							$_SESSION["fs"]="fs";
							echo "fs";
						}
						else{
							$_SESSION["id"]=$row["id"];
							$_SESSION["username"]=$user;
							echo "user";
						}
					}
				}
				else{
					header("location:../login.php");
				}
				mysqli_close($re->connection());
			}
		}
		$re = new Connect();
		$user =mysqli_escape_string($re->connection(),$_POST["username"]);
		$users=filter_var($user, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$pass =mysqli_escape_string($re->connection(),$_POST["password"]);
		$passs=filter_var($pass, FILTER_SANITIZE_STRING , FILTER_FLAG_STRIP_HIGH);
		$cl = new login();
		$cl->connection2($users, $passs);