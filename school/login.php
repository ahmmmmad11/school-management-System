<?php 
session_start();
if (isset($_SESSION["username"])) {
	header("location:pannel.php");
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
	<script type="text/javascript" src="js/sub-val.js"></script>
	<title>تسجيل الدخــول</title>
</head>
<body dir="rtl" >
	<div class="container-gluid">
		<div class="row login">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 cont">
				<div class="row">
					<div class="col-sm-12 head-det">
						<h4 class="text-center">تسجيل الدخــول</h4>
					</div>
					<div class="col-sm-12">
						<form class="form-horizontal" id="login-form" method="post">
							<div id="ack" class="btn-warning text-center corners mr-bottom"></div>
							<div class="form-groub mr-bottom margin-top">
								<div class="col-sm-8">
									<input type="text" name="username" id="username" class="form-control mr-bottom" placeholder="اسم المستخدم" data-validation="length alphanumeric" data-validation-length="min4" required>
								</div>
								<label for="username" class="control-label col-sm-4">اسم المستخدم :</label>
							</div>
							<div id="msg"></div>
							<div class="form-groub mr-bottom margin-top">
								<div class="col-sm-8">
									<input type="password" name="password" id="pass" class="form-control" placeholder="كلمة المرور" required>
								</div>
								<label for="pass" class="col-sm-4 control-label" >كلمة المرور :</label>
							</div>
							<div id="msg2"></div>
							<div class="form-groub login-btn col-sm-12" align="left">
								<button class="btn btn-success" type="button" id="submit">تسجيل الدخول</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<script>
  $.validate({
    lang: 'es'
  });
</script>
</body>
</html>