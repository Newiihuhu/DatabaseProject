<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sing Up Metflix</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="icons/favicon.PNG"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Tool/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Tool/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Tool/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Toolvendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Toolvendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Toolvendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Toolvendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Toolvendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Tool/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Tool/css/main.css">
<!--===============================================================================================-->
<!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				    <span class="login100-form-title p-b-20">
						Sing Up
					</span>
					
					<form  name="formlogin" action="register.php" method="POST" class="form-horizontal">
					
						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input type="text"  name="Email" class="input100" id="Email"/>
							<span class="focus-input100" data-placeholder="Email"></span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "Enter Name/LastName">
							<input type="text"  name="Name" class="input100" id="Name"/>
							<span class="focus-input100" data-placeholder="Name/Last"></span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate="Enter Password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="Password" id="Password">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>
					
						<div class="wrap-input100 validate-input" data-validate="Enter Confirm Password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="ConPassword" id="ConPassword">
							<span class="focus-input100" data-placeholder="Confirm Password"></span>
						</div>
					
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
										Register Now
									</button>
							</div>
						</div>
					</form>
					<div class="text-center p-t-20">
						<span class="txt1">
							have an account?
						</span>

						<a class="txt2" href="../index.php">
							Log in
						</a>
					</div>
				</div>
			</div>
		</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Tool/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/vendor/bootstrap/js/popper.js"></script>
	<script src="../Tool/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Tool/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Tool/js/main.js"></script>

</body>
</html>