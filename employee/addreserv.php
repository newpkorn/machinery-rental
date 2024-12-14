	<?include("../inc_connect.php");  ?>
	<?
@session_start();
@error_reporting(0);
@ob_start();

?>

<script language="javascript" src="jquery-1.4.2.min.js"></script>  

<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
	<?php

	$date=date("Y-m-d");
list($day1, $month1, $year1) = split('[/.-]', $StartDate);
		$year1 = $year1 - 543;
		$StartDate=  "$year1-$month1-$day1";

list($day2, $month2, $year2) = split('[/.-]', $ArriveDate);
		$year2 = $year2 - 543;
		$ArriveDate=  "$year2-$month2-$day2";
$chkType = $_POST['machin_name']; 
$numa=0;
for ($u=0; $u<count($chkType); $u++){
	$numa++;
}
$numa;
if($numa>3){
		echo"<SCRIPT>alert('จองได้ไม่เกิน 3 เครื่อง'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=ReservationsMachine.php'>";
			exit();
}if($numa<=3){
$sql = "insert into tb_reserv     values ('','$mem_name','$_SESSION[emp_id]','$StartDate','$ArriveDate' )";
$result=mysql_query($sql)or die("no $sql");
$insert_id=mysql_insert_id();
$chkType = $_POST['machin_name']; 
for ($i=0; $i<count($chkType); $i++){
    $mem_id = $machin_name[$i];
 include("../inc_connect.php"); 
$sql2="INSERT INTO `tb_reserv_detail` (`res_id`, `mac_id`) VALUES ('".$insert_id."', '".$mem_id."');";
//$sql2= "insert into tb_reserv_detail  values ('$insert_id', '$_POST[machin_name][$i]' )";
$result2=mysql_query($sql2)or die("no $sql2");
	}
if($result2){

echo"<SCRIPT>alert('ทำการเพิ่มข้อมูลเสร็จแล้ว');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"0;url=ReservationsMachine.php\"> ";
}	else {echo"<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"0;url=ReservationsMachine.php\"> ";
}
}

?>