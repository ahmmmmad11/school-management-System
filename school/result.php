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
	<script type="text/javascript" src="js/result-fun.js"></script>
	<script type="text/javascript" src="js/student-buttons.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title>عرض النتيجة</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="r-res">
				<div class="row cont">
					<div class="col-sm-12 head-det mr-bottom">
						<h4 class="text-center">عرض النتيجة</h4>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 ">
								<div class="col-sm-4 pnl-2" id="third"  style="margin-left: 0px"><span class="ico"><i class=" 	fa fa-institution"></i></span>الصف الثالث</div>
								<div class="col-sm-4 pnl-2" id="second"><span class="ico"><i class=" 	fa fa-institution"></i></span>الصف الثاني</div>
								<div class="col-sm-4 pnl-2" id="first" style="margin-right: 0px"><span class="ico"><i class=" 	fa fa-institution"></i></span>الصف الاول</div>
								<div class="row col-sm-12 first hide res-pnl">
									<button class="btn btn-default col-sm-4 pnl-3">ابوبكر</button>
									<button class="btn btn-default col-sm-4 pnl-3">عمر</button>
									<button class="btn btn-default col-sm-4 pnl-3" style="margin-right: 0px">عثمان</button>
								</div>
								<div class="row col-sm-12 second hide res-pnl">
									<button class="btn btn-default col-sm-4 pnl-3">عبدالله الطيب</button>
									<button class="btn btn-default col-sm-4 pnl-3">الطيب صالح</button>
									<button class="btn btn-default col-sm-4 pnl-3" style="margin-right: 0px">مجذوب</button>
								</div>
								<div class="row col-sm-12 third hide res-pnl">
									<button class="btn btn-default col-sm-4 third pnl-3" id="sayna">ابن سيناء</button>
									<button class="btn btn-default col-sm-4 third pnl-3" id="rushd">ابن رشد</button>
									<button class="btn btn-default col-sm-4 pnl-3 third mr-bottom" id="khowarithm" style="margin-right: 0px">الخوارزمي</button>
								</div>
							</div>
							<div class="col-sm-12 res-pnl">
								<div class="row col-sm-12 sayna-hedden res-pnl hide">
									<div class="col-sm-6 btn btn-success">حياء</div>
									<div class="col-sm-6 btn btn-success mr-bottom res-pnl" >حاسوب</div>
								</div>
								<div class="row col-sm-12 khowarithm-hedden res-pnl hide">
									<div class="col-sm-6 btn btn-success">عسكرية</div>
									<div class="col-sm-6 btn btn-success mr-bottom res-pnl" >دراسات</div>
								</div>
							</div>
						</div>
					</div><br>
					<div class="col-sm-12 margin-top">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">الرقم</th>
									<th class="text-center">اسم الطالب</th>
									<th class="text-center">عربي</th>
									<th class="text-center">رياضيات</th>
									<th class="text-center">انجليزي</th>
									<th class="text-center">اسلامية</th>
									<th class="text-center sn">فيزياء</th>
									<th class="text-center sn">كيمياء</th>
									<th class="text-center ar">تاريخ</th>
									<th class="text-center ar">جغرافياء</th>
									<th class="text-center ar" id="st">دراسات</th>
									<th class="text-center ar" id="pl">عسكرية</th>
									<th class="text-center sn" id="bi">احياء</th>
									<th class="text-center sn" id="co">حاسوب</th>
									<th class="text-center sn" id="en">هندسية</th>
									<th class="text-center out">فرنسي</th>
									<th class="text-center">المجموع</th>
									<th class="text-center">النسبة</th>
								</tr>
							</thead>
							<tbody>
								<!-- <tr>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
									<td  class="text-center"></td>
								</tr> -->
							</tbody>
						</table>
					</div>								
				</div>
			</div>	
			<!--****************************************************************************************************************************-->
		</div>
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>