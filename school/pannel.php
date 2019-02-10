<?php session_start();
if(!isset($_SESSION["mn"]) || isset($_SESSION["bh"])){
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
	<script type="text/javascript" src="js/script1.js"></script>
	<script type="text/javascript" src="js/panel.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title>اللوحة الرئيسية</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	</nav>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-4 pnl" id="st-reg"><span class="ico"><i class="fa fa-user-plus" ></i></span> تسجيل طالب </div>
			<div class="col-sm-4 pnl" id="st-scr"><span class="ico"><i class="fa fa-wrench" 		></i></span> اضافة \ تعديل الدرجات</div>
			<div class="col-sm-4 pnl" id="st-sho"><span class="ico"><i class="fa fa-users" 			></i></span> عرض الطلاب</div>
		</div>
	</div>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-4 pnl" id="c-fee"><span class="ico"><i class="fa fa-money" >	</i></span>تحديد الرسوم</div>
			<div class="col-sm-4 pnl" id="te-sho"><span class="ico"><i class="fa fa-reorder"		></i></span> عرض الاساتذة</div>
			<div class="col-sm-4 pnl" id="te-reg"><span class="ico"><i class="fa fa-plus" 			></i></span> تسجيل \ حذف اساتذ</div>
		</div>
	</div>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-4 pnl" id="cl-det"><span class="ico"><i class="fa fa-pie-chart" 		></i></span> بيانات الفصل</div>
			<div class="col-sm-4 pnl" id="sc-sho"><span class="ico"><i class="fa fa-tachometer" 	></i></span> عرض النتيجة</div>
			<div class="col-sm-4 pnl" id="cl-scr"><span class="ico"><i class="fa fa-newspaper-o"    ></i></span> نتائج الفصل</div>
		</div>
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>