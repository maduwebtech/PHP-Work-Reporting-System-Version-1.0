<?php 
$con=mysqli_connect("localhost","root","","work_reporting");
if ($con) {
	echo "";
}
else
{
	echo "DB Not Connected";
}
?>