<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['submit']))
{
$user_id=Cleanse(mysqli_real_escape_string($con,$_POST['user_id']));
$pass=Cleanse(mysqli_real_escape_string($con,$_POST['password']));
	


#admin
$ret3=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$user_id' and password='$pass'");
$num3=mysqli_fetch_array($ret3);


if($num3>0)
{
$extra="../admin/dashboard.php";//
$_SESSION['user_id']=$num3['user_id'];
$_SESSION['login']=1;
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{
	$_SESSION['msg']='<span style="color:red;">'."Invalid user id or password".'</span>';
	header("location:../login.php");
}
}


function Cleanse($Data)
{
#$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
$Data = htmlentities($Data, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
$Data = stripslashes($Data); /** Add Strip Slashes Protection */
return $Data;
}
?>

