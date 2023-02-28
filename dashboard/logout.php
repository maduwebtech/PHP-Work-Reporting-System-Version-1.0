<?php 
if (isset($_POST['emp_logout'])) {
	session_start();
	session_unset();
	session_destroy();
	header("location:../index.php");
	exit();
}
else
{
	header("location:../404.php");
}
?>