<?php session_start();
if(!isset($_SESSION["mn"]) || isset($_SESSION["bh"])){
	header("location:login.php");
}
require "classes/occu.php";
$ac = new acadimicYear();
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
	<title>بيانات السنة الدراسية</title>
</head>
<body dir="rtl" >
	<?php include("nav.php");?>
	<div class="container-fluid c-pnl">
		<div class="row container-fluid">
			<div class="col-sm-6" style="float: right;">
				<div class="row cont" id="general" style="margin-right: 5px">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">السنة الدراسية</h4>
					</div>
					<div class="col-sm-12">
						<form class="form-horizontal" method="post" action="classes/occu.php">
							<div class="form-groub">
								<div class="col-sm-10 mr-bottom">
									<input type="text" name="a_year" class="form-control" value="<?php echo $ac->show_year(); ?>" placeholder="ادخل السنة الدراسية">
								</div>
								<label class="control-label col-sm-2">العام الدراسي </label>
							</div>
							<div class="form-groub text-left col-sm-12">
								<button class="btn btn-success mr-bottom" name="subYear" type="submit">حفـــــــــــــظ</button>
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
			<div class="col-sm-6">

				<!--********************************************************************************************************************** -->
				<div class="row cont" id="general" style="margin-right: 5px">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">اختيار الامتحان</h4>
					</div>
					<div class="col-sm-12">
						<form class="form-horizontal" method="post" action="classes/occu.php">
							<div class="form-groub">
								<div class="col-sm-10 mr-bottom">
									<select class="form-control" name="ex_type">
										<option><?php echo $ac->show_exam_type();?></option>
										<option>--------------</option>
										<option>الشهري الاول</option>
										<option>الفترة الاولى</option>
										<option>الشهري الثاني</option>
										<option>النهائي</option>
									</select>
								</div>
								<label class="control-label col-sm-2">نوع الامتحان</label>
							</div>
							<div class="form-groub text-left col-sm-12">
								<button class="btn btn-success mr-bottom" name="subExam" type="submit">حفـــــــــــــظ</button>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="footer w3-gray navbar-fixed-bottom">
		<span class="w3-center">جميع الحقوق محفوظة للمبرمج</span>
	</div>
</body>
</html>