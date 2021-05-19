<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

$user=$crud->displayById('application',$_GET['id']);
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
<body style="background-color: #ffffff;">
	
	<div class="limiter">
		<div class="container-login100">
				<form class="login100-form validate-form" >
<!-- 
					<span class="login100-form-title p-b-5">
						<p style="color: blue;opacity: .5;font-size: 20px;margin-top: -150px;"> <marquee behavior="alternate" scrollDelay="10">COURSEWARE FOR DISTANCE LEARNING</marquee></p>
						<br><br><br><br>
						
					</span> -->
					<h1 style="margin-top: -150px;"><center><img src="images/tet.jpg" width="150" height="100"></center></h1>
					<br><br><br>
					
<span style="word-wrap:break-word;">		
This is to certify that <?=strtoupper($user['name'])?> of <?=strtoupper($crud->displayNameById('school',$user['school_id']))?> ( <?=strtoupper($crud->displayNameById('department',$user['department_id']))?> DEPARTMENT) schoolarship application for <?=strtoupper($user['aprogram'])?> at  <?=strtoupper($user['aschool'])?> was screened and successfully processed. Congratulations!!!.... Click on this link for next step <a href="www.tetfund.com">www.tetfund.com/payment</a>
</span>

<br><br><br><br><br><br>

<span style="font-size: 12px;"><img src="images/sign.jpg" width="100" height="50"> <br>TETFUND ADMIN</span>

<br><br><br>

 <br><a href="javascript:print()" style="text-decoration: none;font-size: 16px;color: blue;" class="fa fa-print fa-2x">&nbsp;&nbsp;Print</a>


<br><br><br>

<a href="index.html" style="text-decoration: none;">
								Go back to home?
								<i class="fa fa-home fa-2x"></i>
							</a>

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


