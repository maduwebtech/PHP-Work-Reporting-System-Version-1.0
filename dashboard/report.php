<?php
include "config.php";
session_start();
if (isset($_POST['report_btn'])) {
	$work_date=$_POST['work_date'];
	$date=date('d-m-Y',strtotime($work_date));
	$sql="SELECT * FROM work_tbl LEFT JOIN user_tbl ON work_tbl.employee_id=user_tbl.id WHERE work_date='$work_date'";
	$query=mysqli_query($con,$sql);
	$rows=mysqli_num_rows($query);
	if ($rows) {
		$html='<table border="1" width="100%" cellpadding="10" cellspacing="0">
	<tr>
		<th>Sr.No</th>
		<th>Employee Name</th>
		<th>Designation</th>
		<th>Scale</th>
		<th>Work Date</th>
		<th colspan="3">Work Description</th>
	</tr>
	<tbody>';
	$count=0;
	while($row=mysqli_fetch_assoc($query)){
	$html .='<tr>
			<td>'.++$count.'</td>
			<td>'.$row['fullname'].'</td>
			<td>'.$row['user_des'].'</td>
			<td>'.$row['user_scale'].'</td>
			<td>'.$date.'</td>
			<td colspan="3">'.$row['work_desc'].'</td>
		</tr>';
	}
		$html .='</tbody></table>';
		require_once __DIR__ . '/vendor/autoload.php';
		$mpdf=new \Mpdf\Mpdf(['format'=>'A4-L']);
		$mpdf->SetHTMLHeader("<h3 style='text-align:center'>Daily Work Report</h3>");
		$mpdf->WriteHTML($html);
		$mpdf->SetHTMLFooter("<p style='text-align:center'>{PAGENO}</p>");
		$file="report.pdf";
		$mpdf->Output($file,'I');

	}
	else
	{
		$_SESSION['error']="<small class='text-danger'>No Work found in your selected date</small>";
		header("location:admin_profile.php");
	}
}
?>