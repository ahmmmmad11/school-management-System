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
	<script type="text/javascript" src="js/cl.js"></script>
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
	<div class="container-fluid c-pnl">
		<div class="row pnl-hdn-2">
			<div class="col-sm-12 text-center" >
				<h3 class=""><?php
					
					$classname->main_show($i_d);
				?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 pnl-hdn-3">
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">معلومات الفصل</h4>
					</div>
					<div class="col-sm-12 main-det">
						<div class="row">
							<div class="col-sm-12 text-right">مشرف الفصل:-</div>
							<div class="col-sm-12 text-right lead"  id="supervisor"><!-- ا\حسن عمر خالد -->
								<?
									$c_s = new class_sup();
									$c_s->show_sup($i_d)
								?>
							</div>
							<div class="col-sm-12 text-left" id="buttons">
							<button class='btn btn-default hide' id='cancel'>الغاء</button>
								<button class="btn btn-primary" id="chng-sup">تعديل</button>
							</div>
						</div>
					</div>
					<div class="col-sm-12 foot-det text-left">
						<div class="row">
							<div class="col-sm-6 big ">
								<?php
									$cln = $_GET["classname"];
									$clst = new show_class_studets();
									$clst->counting($cln);
								?>
							</div>
							<div class="col-sm-6 text-right">عدد الطلاب</div>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">معلومات اضافية</h4>
					</div>
					<div class="col-sm-12 main-det">
						<div class="row" dir="rtl">
							<div class="col-sm-6 text-right lead">20</div>
							<div class="col-sm-6 text-right">عدد المقاعد</div>
						</div>
						<div class="row">
							<div class="col-sm-6 text-right lead">10</div>
							<div class="col-sm-6 text-right">عدد المقاعد الفارغة</div>
						</div>
					</div>
					<div class="col-sm-12 foot-det text-left">
						<div class="row">
							<div class="col-sm-6 text-right lead">غير مكتمل</div>
							<div class="col-sm-6 text-right"> حالة الفصل</div>
						</div>
					</div>
				</div>
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
							<th class="text-right">رقم الجلوس</th>
							<th class="text-right">حالة التسجيل</th>
							<th class="text-right">خيارات</th>
						</tr>
					</thead>
					<tbody>
						
						<?php
							$cse = $_GET["classe"];
							$clst->show($cln, $cse);

						?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-3 pnl-hdn-3">
				<div class="row cont">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">اساتذة الصف</h4>
					</div>
					<div class="col-sm-12 main-det">
						<ul class="text-right">
							<!-- <li>الصادق الطيب</li>
							<li>طارق فيزيا</li>
							<li>مصطفى كيمياء</li>
							<li>مجدي عصبة</li>
							<li>عوض خورشيد</li>
							<li>نزار مدثر</li>
							<li>وائل علي</li> -->
							<?php
								$c_id = $_GET["c_id"];
								$clte = new show_class_teachers();
								$clte->show($c_id);
							?>
						</ul>
					</div>
					<div class="col-sm-12 foot-det text-left">
						
					</div>
				</div>
			</div>
		</div>
		<!-- ****************************** modal 1 ************************************************************** -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><span id="st-name"></span></h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" id="ch-st-cl" method="post">
							<div class="form-groub col-sm-12">
								<div class="col-sm-9 mr-bottom">
									<input type="text" name="id" id="st-id" class="hide">
									<select class="form-control mr-bottom" name="classname">
										<option></option>
											<?php
												require "classes/classes.php";
												$cl = new show_classes();
												$cl->class_show();
											?>
									</select>
								</div>
								<label class="control-label col-sm-3">نقل الى:</label>
							</div>
							<div class="form-groub text-left">
								<button class="btn btn-success" style="margin-left: 29px">نقــــــــــــل</button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
					</div>
				</div>
      
   			 </div>
 		 </div>
  <!-- ********************************** modal 1 end *****************************************************************-->
	</div>
	<div class="footer w3-gray" id="footer">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>