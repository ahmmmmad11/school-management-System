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
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script1.js"></script>
	<script type="text/javascript" src="js/student-buttons.js"></script>
	<script type="text/javascript" src="js/info.js"></script>
	<script type="text/javascript" src="js/show-data2.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title>الطلاب</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row">
			
			<div class="col-sm-9 st-pnl-mr">
				<div class="s-reg">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">تسجيل طالب</h4>
						</div>
						<div class="col-sm-12">
							<form class="horizontal-form"  method="post" id="new-student">
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" placeholder="اسم الطالب" id="s-name" required>
									</div>
									<label class="control-label col-sm-2" for="s-name">سم الطالب :</label>
								</div>
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<input type="text" name="father_name" class="form-control" placeholder="اسم اولي الامر" id="res-name" required>
									</div>
									<label class="control-label col-sm-2" for="res-name">سم اولي الامر :</label>
								</div>
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<input type="text" name="father_number" class="form-control" placeholder="رقم ولي الامر" id="res-number" required maxlength="10">
									</div>
									<label class="control-label col-sm-2" for="res-number">رقم ولي الامر :</label>
								</div>
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<input type="text" name="paid_fin" class="form-control" placeholder="الرسوم المدفوعة" id="paid-fin" required>
									</div>
									<label class="control-label col-sm-2" for="paid-fin">الرسوم المدفوعة:</label>
								</div>
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<select class="form-control" name="year">
											<option></option>
											<option>2015</option>
											<option>2016</option>
										</select>
									</div>
									<label class="control-label col-sm-2" for="s-name">سنة الدخول :</label>
								</div>
								<div class="form-groub row mr-bottom">
									<div class="col-sm-10">
										<select class="form-control" name="classname">
											<option></option>
											<?php
												require "classes/classes.php";
												$cl = new show_classes();
												$cl->class_show();
											?>
										</select>
									</div>
									<label class="control-label col-sm-2" for="s-name">الفصل :</label>
								</div>
								<div class="form-groub mr-bottom " align="left">
									<button class="btn btn-success" type="button" id="st-in-sub">حفـــــــــــــــــــــــــــــــظ</button>
								</div>
							</form>
						</div>
						<div class="col-sm-12 btn-success text-center" id="st-ack"></div>
					</div>
				</div>
				<!--****************************************************************************************************************************-->
				<div class="s-grad">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">الخريجيـــن</h4>
						</div>
						<div class="col-sm-12">
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">الرقم</th>
										<th class="text-center">اسم الطالب</th>
										<th class="text-center">سنة التخرج</th>
										<th class="text-center">المساق</th>
										<th class="text-center">النسبة</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
				</div>	
				<!--****************************************************************************************************************************-->
				
				<div class="s-show">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">معلومات الطلاب</h4>
						</div>	
						<div class="col-sm-12">
							<!-- <table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center">الرقم</th>
										<th class="text-center">اسم الطالب</th>
										<th class="text-center">الفصل</th>
									</tr>
								</thead>
								<tbody id="s-s-show">
									
								</tbody>
							</table> -->
							<div class="row">
								<div class="col-sm-4 cont-2 head-det" style="float: right;">
									<h3>عدد طلاب الصف الاول <span  style="float: left;" id="cl1">0</span> </h3><hr style="width: 100%" >
									<h3>عدد طلاب الصف الثاني<span  style="float: left;" id="cl2">0</span> </h3><hr style="width: 100%">
									<h3>عدد طلاب الصف الثالث<span  style="float: left;" id="cl3">0</span> </h3>
								</div>
								<div class="col-sm-12 foot-det" style="float: right; margin-bottom: 0px">
									<div class="col-sm-6" style="float: right;"><h1>العدد الكلي للطلاب<h1></div>
									<div class="col-sm-6 text-left big" id="s-s-show" ></div>
								</div>
							</div>
						</div>					
					</div>
				</div>	
				<!--****************************************************************************************************************************-->
				<div class="s-elite">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">hhhhh</h4>
						</div>						
					</div>
				</div>	
				<!--****************************************************************************************************************************-->
				<div class="s-unreg">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">الطلاب الغير مسجلين</h4>
						</div>	
						<div class="col-sm-12">
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">الرقم</th>
										<th class="text-center">اسم الطالب</th>
										<th class="text-center">الصف</th>
										<th class="text-center">المبلغ المدفوع</th>
										<th class="text-center">المبلغ المتبقي</th>
									</tr>
								</thead>
								<tbody id="s-unreg-id">
									
								</tbody>
							</table>
						</div>							
					</div>
				</div>	
				<!--****************************************************************************************************************************-->
				<div class="s-block">
					<div class="row cont">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">الطلاب المفصولين</h4>
						</div>	
						<div class="col-sm-12">
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">الرقم</th>
										<th class="text-center">اسم الطالب</th>
										<th class="text-center">الصف</th>
										<th class="text-center">سبب الفصل</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
										<td  class="text-center"></td>
									</tr>
								</tbody>
							</table>
						</div>									
					</div>
				</div>	
			</div>
			<div class="col-sm-3">
				<div class="row st-mr">
					<div class="col-sm-12 pnl" id="s-reg"><span class="ico"><i class="fa fa-user-plus"></i></span> تسجيل طالب </div>
					<div class="col-sm-12 pnl" id="s-show"><span class="ico"><i class="fa fa-users"></i></span> معلومات الطلاب</div>
					<div class="col-sm-12 pnl" id="s-unreg"><span class="ico"><i class="fa fa-reorder"></i></span>الطلاب غير المسجلين</div>
					<div class="col-sm-12 pnl" id="s-grad"><span class="ico"><i class="fa fa-graduation-cap"></i></span> الخريجين</div>
					<div class="col-sm-12 pnl" id="s-elite"><span class="ico"><i class="fa fa-area-chart"></i></span> الطلاب المميزين </div>
					<div class="col-sm-12 pnl" id="s-block"><span class="ico"><i class="fa fa fa-ban"></i></span> الطلاب المفصولين</div>
				</div>
			</div>
		</div>
		
	</div>

		
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>