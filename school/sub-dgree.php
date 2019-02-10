<?php session_start();
if(!isset($_SESSION["username"])){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/validaitor.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="js/cl.js"></script> -->
	<script type="text/javascript" src="js/normal.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title><?php
					require "classes/classes-students.php";
					$i_d = $_GET["id"];
					$classname = new classname();
					$classname->main_show($i_d);
	?></title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl c-pnl-2 c-pnl-3">
		<div class="row pnl-hdn-2">
			<div class="col-sm-12 text-center" >
				<h3 class=""> اضافة درجات <?php
					
					$classname->main_show($i_d);
				?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 pnl-hdn-3">
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">بيانات النتيجة</h4>
					</div>
					<div class="col-sm-12 main-det">
						<div class="row">
							<div class="col-sm-6 text-right lead" >
								
							</div>
							<div class="col-sm-6">اعلى درجة</div>
							<!-- ******************************************************************************** -->
							<div class="col-sm-6">اقل درجة</div>
							<div class="col-sm-6">
							</div>
						</div>
					</div>
					<div class="col-sm-12 foot-det text-left">
						<div class="row">
							<div class="col-sm-6 big ">
								0
							</div>
							<div class="col-sm-6 text-right">نسبة النجاح</div>
						</div>
					</div>
				</div>
				<!--  -->
				
			</div>
			<div class="col-sm-6 pnl-hdn-3">
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">الطــــــلاب</h4>
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-right">الرقم</th>
							<th class="text-right">الاسم</th>
							<th class="text-right">الدرجة</th>
							<th class="text-right">التقدير</th>
						</tr>
					</thead>
					<tbody>
						<?
							require "classes/adding-dgrees.php";
							$ad = new add_dgree();
							$ad->get_students($i_d);
						?>
					</tbody>
				</table>
				<div class="col-sm-12 align-left">
					<button class="btn btn-success " id="save-degree">ادخـــــــــــــال</button>
				</div>
				
			</div>
			<div class="col-sm-3 pnl-hdn-3">
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">نوع الامتحان</h4>
					</div>
					<div class="col-sm-12 main-det">
						<form class="form-horizontal" method="post" id="select-test">
							<select name="type" class="form-control">
								<option>الشهري الاول</option>
								<option>الشهري الثاني</option>
								<option>نصف السنة</option>
								<option>النهائي</option>
							</select>
						</form>
					</div>
					<div class="col-sm-12 foot-det text-left">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer w3-gray">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
	<script>
  $.validate({
    
  });
</script>
</body>
</html>