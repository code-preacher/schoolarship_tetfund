<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

if (isset($_POST['submit'])) {
$crud->addApplication($_POST);
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
				<form action="application.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
<!-- 
					<span class="login100-form-title p-b-5">
						<p style="color: blue;opacity: .5;font-size: 20px;margin-top: -150px;"> <marquee behavior="alternate" scrollDelay="10">COURSEWARE FOR DISTANCE LEARNING</marquee></p>
						<br><br><br><br>
						
					</span> -->
					<h1 style="margin-top: -150px;">Application Form</h1>
					<p><?=$lib->msg();?></p>
					
					<div class="wrap-input100 validate-input" style="margin-top: -2px;" data-validate = "fullname is required">
						<input class="input100" type="text" name="name" placeholder="Your Fullname" required  />
						<span class="focus-input100">Fullname</span>
						<span class="label-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Lecturer Id is required">
						<input class="input100" type="text" name="lecturer_id" placeholder="Lecturer Id" required />
						<span class="focus-input100">Lecturer Id</span>
						<span class="label-input100"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "School of Lecturing is required">
						<!-- 	<input class="input100" type="text" name="state" placeholder="Your State of Origin" required  /> -->
						<span>School of Lecturing</span>
						<select class="input100"  name="school_id" title="School of Lecturing" placeholder="School of Lecturing" required="required">
							<?php
							$rt=$crud->displayAllWithOrder('school','id','desc');
							foreach ($rt as $f) {
								?>
								<option value="<?php echo $f['id'];  ?>"><?php echo strtoupper($f['name']);  ?></option>
								
							<?php } ?>

						</select>
						<span class="label-input100"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "Department of Lecturing is required">
						<!-- 	<input class="input100" type="text" name="state" placeholder="Your State of Origin" required  /> -->
						<span>Department of Lecturing</span>
						<select class="input100"  name="department_id" title="Department of Lecturing" placeholder="Department of Lecturing" required="required">
							<?php
							$rt=$crud->displayAllWithOrder('department','id','desc');
							foreach ($rt as $f) {
								?>
								<option value="<?php echo $f['id'];  ?>"><?php echo strtoupper($f['name']);  ?></option>
								
							<?php } ?>

						</select>
						<span class="label-input100"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "Year of Completion">
						<!-- 	<input class="input100" type="text" name="state" placeholder="Your State of Origin" required  /> -->
						<span>Year of Experience</span>
						<select class="input100"  name="year" title="Year of Completion" placeholder="Year of Completion" required="required">
							<?php
							for($f=1;$f<=50;$f++) {
								?>
								<option value="<?=$f ?>"><?=$f ?></option>
								
							<?php } ?>

						</select>
						<span class="label-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Schoolarship Type">
						<!-- 	<input class="input100" type="text" name="state" placeholder="Your State of Origin" required  /> -->
						<span>Schoolarship Type</span>
						<select class="input100"  name="schoolarship_type" title="Schoolarship Type" placeholder="Schoolarship Type" required="required">
							<option value="MSC">MSC</option>
							<option value="PHD">PHD</option>
							<option value="TRAINING">TRAINING</option>

						</select>
						<span class="label-input100"></span>
					</div>

					


					<div class="container-login100-form-btn">
						<button  type="submit" name="submit" class="login100-form-btn">
							Apply
						</button>
					</div>
					
					<div class="text-left p-t-46 p-b-20">
						<span class="txt2">
							

							<a href="index.html" style="text-decoration: none;">
								Go back to home?
								<i class="fa fa-home fa-2x"></i>
							</a>
							<a href="application-check.php" style="text-decoration: none;">
								Check Application Status
								<i class="fa fa-check-circle"></i>
							</a>
						</span>
					</div>


					
					
					


				</fieldset>
			</form>

		
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


