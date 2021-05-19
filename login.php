<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$validate=new Auth;

if (isset($_POST['login'])) {
$validate->check($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>LECTURER TETFUND SCHOOLARSHIP APPLICATION SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="login.php" class="login100-form validate-form" method="post">

					<span class="login100-form-title p-b-5">
						<p style="color: blue;opacity: .5;font-size: 20px;margin-top: -150px;"> <marquee behavior="alternate" scrollDelay="10"> LECTURER TETFUND SCHOOLARSHIP APPLICATION SYSTEM</marquee></p>
						<br><br><br><br>
						Login to continue
					</span>
					<p><?=$lib->msg();?></p>
					
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="Email" required  />
						<span class="focus-input100">Email</span>
						<span class="label-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required />
						<span class="focus-input100">Password</span>
						<span class="label-input100"></span>
					</div>



					<div class="container-login100-form-btn">
						<button  type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-left p-t-46 p-b-20">
						<span class="txt2">
							

							<a href="index.html" style="text-decoration: none;">
								Go back to home?
								<i class="fa fa-home fa-2x"></i>
							</a>
						</span>
					</div>


					
					
					


				</fieldset>
			</form>

			<div class="login100-more" style="background-image: url('images/tet.jpg'); background-size: 70%;">
			</div>
		</div>
	</div>
</div>





<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>


