<?php session_start();
if(!isset($_SESSION["username"])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/class-buttons.js"></script>
	<script type="text/javascript" src="js/panel.js"></script>
	<script type="text/javascript" src="js/normal.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title>لوحة الاستاذ</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		
		<div class="row right align-right" >
			<?php
				require "classes/myclasses.php";
				$m  = new myclasses1();
				$m->show_classes($_SESSION["id"]);
			?>
		</div>
		
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>