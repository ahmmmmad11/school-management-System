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
	<script type="text/javascript" src="js/validaitor.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/teachers_tap.js"></script>
	<script type="text/javascript" src="js/info.js"></script>
	<script type="text/javascript" src="js/show-data.js"></script>
	<script type="text/javascript" src="js/play-sec.js"></script>
	<script type="text/javascript" src="js/general.js"></script>
	<title>الاساتذة</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row">
			<div class="col-sm-3 pnl" id="c-fee"><span class="ico"><i class="fa fa-money"></i></span>تحديد الرسوم</div>
			<div class="col-sm-3 pnl" id="show"><span class="ico"><i class="fa fa-reorder"></i></span> عرض الاساتذة</div>
			<div class="col-sm-3 pnl" id="reg"><span class="ico"><i class="fa fa-plus"></i></span> تسجيل \ حذف اساتذ</div>
			<div class="col-sm-3 pnl" id="secs"><span class="ico"><i class="fa fa fa-language"></i></span>الاقسام</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
		<!--*********************************************************************************************************************************-->
			<div class="t-sec">
				<div class="col-sm-9 c-pnl-2 cont">
					<div class="row">
						<div class="col-sm-12 head-det">
							<h4 class="text-center"> معلومات القسم </h4>
						</div>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-4 cont t-sec-b-sup">
									<div class="row">
										<div class="col-sm-12 head-det">
											<h4 class="text-center head-det"> رئيس القسم </h4>
										</div>
										<div class="col-sm-12">
											<span id="boss">طــــارق فيزياء</span>
										</div>
										<div class="col-sm-12 foot-det">
											<div " align="left">
												<button class="btn btn-success">تعديل</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-8 cont c-pnl-2">
									<div class="row">
										<div class="col-sm-12 head-det ">
											<h4 class="text-center "> قسم <span id="sub">اللغة العربية</span></h4>
										</div>
										<div class="col-sm-12">
											<table class="table">
												<thead>
													<tr>
														<th class="text-center">الرقم</th>
														<th class="text-center">اسم الاستاذ</th>
														<th class="text-center">الصفوف</th>
													</tr>
												</thead>
												<tbody id="t-tsec">
													<!-- <?php
														require "classes/teacher-classes.php";
														$tec = new show_te_sec();
														$tec->show(2);
													?> -->
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 c-pnl-2 col-sm-3-3 cont">
					<div class="row">
						<div class="col-sm-12 head-det">
							<h4 class="text-center"> الاقســام </h4>
						</div>
						<div class="col-sm-12" id="t-sec-show">
							
						</div>
					</div>
				</div>				
			</div>
			<!--**************************************************************************************************************************** -->
			<div class="t-reg">
				<!--  class col-sm-3-3 was built for resize the width of col-sm-3 to meet the screen size -->
				<!-- class cont was made for makeking border to the element / head-det for heading details -->
				<div class="col-sm-3 c-pnl-2 col-sm-3-3 cont">
					<div class="row">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">  حــذف استاذ</h4>
						</div>
						<!-- this form is for delete teacher for teacher list -->
						<div class="col-sm-12">
							<form  id="del-te" method="post">
								<div class="form-groub">
									<label for="sele">اختر الاستاذ</label>
									<select class="form-control" id="sel-to-del" name="name" style="margin-top: 40px;" placeholder="حدد اسم الاستاذ">
										<option></option>
										
									</select>
									<br>
									<button class="btn btn-success btn-te" id="del" type="button" name="del">حـــــــــــــــــذف</button>
									<br>
								</div>
							</form>
						</div>
						<div class="col-sm-12 text-center ack btn-success" id="del-ack"></div>
					</div>
				</div>
				<div class="col-sm-9 c-pnl-2 cont">
					<div class="row">
						<div class="col-sm-12 head-det">
							<h4 class="text-center">  تسجيل استاذ</h4>
						</div>
						<div class="col-sm-12" dir="">
							<form class="form-horizontal" method="post" id="teacher-in" >
								<!-- this first row of input form -->
								<div class="row teacher-form-ele">
									<!-- dept of the teacher -->
									<div class="form-groub margin-top">
										<div class="col-sm-4">
											<select name="subject" id="sub" class="form-control" placeholder="االتخصص" required>
												<?php
												require "classes/show-secs.php";
												$sh1 = new show_secs_in();
												$sh1->input_show();
												?>
											</select>
										</div>
										<label for="sub" class="control-label col-sm-2 text-left">التخصص :</label>
									</div>
									<!-- name of the teacher -->
									<div class="form-groub">
										<div class="col-sm-4">
											<input type="text" name="name" id="name" class="form-control" placeholder="اسم الاستاذ" required>
										</div>
										<label for="name" class="control-label col-sm-2">اسم الاستاذ :</label>
									</div>
								</div>
								<!-- the second row of input form  login information-->
								<div class="row teacher-form-ele">
									<!--  teacher  password -->
									<div class="form-groub margin-top">
										<div class="col-sm-4">
											<input type="text" name="password" id="pass" class="form-control" placeholder="كلمة المرور" required>
										</div>
										<label for="pass" class="control-label col-sm-2 text-left">كلمة المرور :</label>
									</div>
									<!--  teacher  username -->
									<div class="form-groub">
										<div class="col-sm-4">
											<input type="text" name="username" id="t_user" class="form-control" placeholder="اسم المستخدم" required>
										</div>
										<label for="t-user" class="control-label col-sm-2">اسم المستخدم :</label>
									</div>
								</div>
								<div class="row teacher-form-ele">
									<!--  teacher  password -->
									<div class="form-groub margin-top">
										<div class="col-sm-4">
											<input type="text" name="email" id="email" class="form-control" placeholder="الايميل" required data-validation="email">
										</div>
										<label for="email" class="control-label col-sm-2 text-left">الايميل :</label>
									</div>
									<!--  teacher  username -->
									<div class="form-groub">
										<div class="col-sm-4">
											<input type="text" name="phonenumber" id="t_num" class="form-control" placeholder="رقم الهاتف" required maxlength="10" data-validation="number">
										</div>
										<label for="t-num" class="control-label col-sm-2">رقم الهاتف :</label>
									</div>
								</div>
								<div class="row teacher-form-ele">
									<div class="form-groub teacher-form-ele-btn" align="left">
										<!-- <input type="submit" name="submit" value="حفـــــــظ" class="btn btn-success"> -->
										<!--<button class="btn btn-danger" id="cancil">الغــاء</button>-->
										<button class="btn btn-success" type="button" id="te-in-sub">حفـــــــظ</button>
									</div>
								</div>
							</form>
							<div class="col-sm-12 text-center ack btn-success" id="ack"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- ***************************************************************************************************************** -->
			<div class="t-show">
				<div class="row">
					<div class="col-sm-4 cont teacher-mng-col">
						<div class="row">
							<div class="col-sm-12 head-det">
								<h4 class="text-center">الادارة </h4>
							</div>
							<div class="col-sm-12">
								<table class="table">
									<tbody id="">
										<?php
											require "classes/occu.php";
											$oc = new show_manag();
											$oc->show();
										?> 
									</tbody>
								</table>
							</div>
						</div>
					</div><!--  -->
					<div class="col-sm-8 c-pnl-2 cont">
						<div class="row">
							<div class="col-sm-12 head-det">
								<h4 class="text-center">قائمة الاساتذ</h4>
							</div>
							<div class="col-sm-12">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">الرقم</th>
											<th class="text-center">الاسم</th>
											<th class="text-center">الايميل</th>
											<th class="text-center">رقم الهاتف</th>
											<th class="text-center">اسم المستخدم</th>
											<th class="text-center">التخصص</th>
											<th class="text-center">كلمة المرور</th>
										</tr>
									</thead>
									<tbody id="t-t-show">
										 
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--**********************************************************************************************************************-->
			<div class="row c-fee">
				<div class="col-sm-4"></div>
				<div class="col-sm-4 c-pnl-2 cont" style="padding: 0px;">
					<div class="col-sm-12 head-det">
						<h4 class="text-center  ">تحديد الرسوم</h4>
					</div>
					<div class="col-sm-12">
						<form class="form-horizontal" method="post" id="fee-form">
							<div class="form-groub">
								<div class=" col-sm-9 mr-bottom">
									<select id="sel-classe" name="classe" class="form-control ">
										<option>الصف الاول</option>
										<option>الصف الثاني</option>
										<option>الصف الثالث</option>
									</select>
								</div>
								<label for="sel-classe" class="control-label col-sm-3">حدد الفرقة</label>
							</div>
							<div class="form-groub mr-bottom">
								<div class="col-sm-9">
									<input type="text" name="fee" placeholder="ادخل الرسوم" id="fee" class="form-control mr-bottom">
								</div>
								<label class="control-label col-sm-3" for="fee">الرسوم</label>
							</div>
							<div class="form-groub  text-left margin-top">
								<div class="col-sm-12">
									<button class="btn btn-success mr-bottom" id="update" type="button" >حفــــــــظ</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-12 ack btn-success" id="ack-fee"></div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</div>
	<div class="footer w3-gray " id="footer">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>