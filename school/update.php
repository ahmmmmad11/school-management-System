<?php session_start();
if(!isset($_SESSION["mn"]) || isset($_SESSION["bh"]) || isset($_SESSION["username"])){
	header("location:login.php");
}
require "classes/teacher-update.php";
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
	<script type="text/javascript" src="js/up-script.js"></script>
	<title>تعديل البيانات</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row container-fluid">
		<div class="col-sm-4" style="float: right;">
			<div id="btn-general" class="col-sm-12 pnl" style="margin-right: 4px">المعلومات العامة</div>
			<div id="btn-pass" class="col-sm-12 pnl" style="margin-right: 4px">كلمة المرور</div>
		</div>
		<div class="col-sm-8">
			<div class="row cont hide"  id="pass">
				<div class="col-sm-12 head-det">
					<h4 class="text-center">تعديل كلمة المرور</h4>
				</div>
				<div class="col-sm-12">
					<form class="form-horizontal" id="passo"  method="post">
						<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="password" name="password" class="form-control" id="o-password" placeholder="ادخل كلمة المرور القديمة"> 
							</div>
							<label class="control-label col-sm-4" for="o-password">كلمة المرور القديمة</label>
						</div>
						<div class="form-groub mr-bottom " align="left">
							<div class="col-sm-12">
								<button type="button" name="chick" class="btn btn-success mr-bottom" id="chick">تـــــــــــــــــــــــــم</button>
							</div>
						</div>
				
					</form>
					<form class="form-horizontal hide" method="post" id="passo2">
						<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="password" name="password" class="form-control" id="n-password" placeholder="ادخل كلمة المرور الجديدة"> 
							</div>
							<label class="control-label col-sm-4" for="n-password">كلمة المرور الجديدة</label>
						</div>
						<div class="form-groub mr-bottom">
							<div class="col-sm-8 mr-bottom">
								<input type="password" name="password" class="form-control" id="c-password" placeholder="ادخل تاكيد كلمة المرور"> 
							</div>
							<label class="control-label col-sm-4" for="c-password">تاكيد كلمة المرور</label>
						</div>
						<div class="form-groub mr-bottom " align="left">
							<div class="col-sm-12">
								<button type="submit" name="change" class="btn btn-success mr-bottom" id="save">حفـــــــــــــــــــــــــــــــظ</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!--********************************************************************************************************************** -->
			<div class="row cont" id="general">
				<div class="col-sm-12 head-det">
					<h4 class="text-center">تعديل المعلومات الاساسية</h4>
				</div>
				<div class="col-sm-12">
					<form class="form-horizontal" action="classes/teacher-update.php" method="post" id="update-general">
						<?php
							 $up = new update_teacher();
							 $id=$_SESSION["id"];
							 $up->showing($id);
						?>
					</form>
				</div>
				<div class="col-sm-12 btn-success ack" id="ack-up-gen">تم تعديل المعلومات</div>
			</div>
		</div>
		</div>
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>