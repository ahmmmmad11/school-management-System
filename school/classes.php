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
	<script type="text/javascript" src="js/classes-taps.js"></script>
	<title>الصفوف</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-12 pnl-hdr text-center">
				<h3 class="pnl-hdn">الصف الاول</h3>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 pnl" id="cl3"><span class="ico"><i class=" 	fa fa-institution"></i></span>عثمان</div>
			<div class="col-sm-4 pnl" id="cl2"><span class="ico"><i class=" 	fa fa-institution"></i></span>اعمر</div>
			<div class="col-sm-4 pnl" id="cl1"><span class="ico"><i class=" 	fa fa-institution"></i></span>ابوبكر</div>
		</div>
	</div>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-12 pnl-hdr text-center">
				<h3 class="pnl-hdn">الصف الثاني</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 pnl" id="cl6"><span class="ico"><i class=" 	fa fa-institution"></i></span>مجذوب</div>
			<div class="col-sm-4 pnl" id="cl5"><span class="ico"><i class=" 	fa fa-institution"></i></span>الطيب صالح</div>
			<div class="col-sm-4 pnl" id="cl4"><span class="ico"><i class=" 	fa fa-institution"></i></span>عبدالله الطيب</div>
		</div>
	</div>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-12 pnl-hdr text-center">
				<h3 class="pnl-hdn">الصف الثالث</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 pnl" id="cl9"><span class="ico"><i class=" 	fa fa-institution"></i></span>خوارزمي</div>
			<div class="col-sm-4 pnl" id="cl8"><span class="ico"><i class=" 	fa fa-institution"></i></span>ابن رشد</div>
			<div class="col-sm-4 pnl" id="cl7"><span class="ico"><i class=" 	fa fa-institution"></i></span>ابن سيناء</div>
		</div>
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>