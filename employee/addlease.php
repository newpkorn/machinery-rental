	<?include("../inc_connect.php");  ?>
	<?
@session_start();
@error_reporting(0);
@ob_start();

?>

<script language="javascript" src="jquery-1.4.2.min.js"></script>  

<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
	<?php
	if($purpose==""){
	 
			echo"<SCRIPT>alert('กรุณากรอกวัตถุประสงค์ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=RentMachine.php'>";
		exit();
	}	else if($area==""){
					echo"<SCRIPT>alert('กรุณากรอกสะถานที่ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=RentMachine.php'>";
 
		exit();
	}
	$date=date("Y-m-d");

$chkType = $_POST['machin_name']; 
$numa=0;
for ($u=0; $u<count($chkType); $u++){
	$numa++;
}
$numa;
if($numa>3){
		echo"<SCRIPT>alert('เช่าได้ไม่เกิน 3 เครื่อง'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=RentMachine.php'>";
			exit();
}if($numa<=3){

$sql1 = "insert into tb_lease     values ('','$_SESSION[emp_id]','$mem_name','$purpose','$area' )";
$result1=mysql_query($sql1)or die("no $sql1");
$insert_id=mysql_insert_id();
$sql11 = "insert into tb_back     values ('$insert_id','$_SESSION[emp_id]','$mem_name')";
$result11=mysql_query($sql11)or die("no $sql11");

$chkType = $_POST['machin_name']; 
for ($i=0; $i<count($chkType); $i++){

//list($day11, $month11, $year11) = split('[/.-]', $StartDate[$i]);
//		$s9_id=  "$year11-$month11-$day11";

//list($day22, $month22, $year22) = split('[/.-]', $ArriveDate[$i]);
//		$a9_id=  "$year22-$month22-$day22";

    $mem9_id = $machin_name[$i];
	 $p9_id = $period1[$i];
$s9_id = $StartDate[$i];
$a9_id = $ArriveDate[$i];
 include("../inc_connect.php"); 


$sql2="INSERT INTO `tb_lease_detail` (`leas_id`, `mac_id`, `period`, `leas_date`, `return_date`) VALUES ('".$insert_id."', '".$mem9_id."', '".$p9_id."', '".$s9_id."', '".$a9_id."');";
$result2=mysql_query($sql2)or die("no $sql2");
 $sqlb= "insert into tb_back_detail  values ('$insert_id', '$mem9_id','$s9_id','$a9_id','2','' ,'$p9_id')";
 $resultb=mysql_query($sqlb)or die("no $sqlb");


	$sqlt = "update tb_machin     set     mac_status='2' where  mac_id='$mem9_id'";		
			$resultin = mysql_query($sqlt);
	}
if($result2){

echo"<SCRIPT>alert('ทำการเพิ่มข้อมูลเสร็จแล้ว');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"1;url=RentMachine.php\"> ";
}	else {echo"<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"1;url=RentMachine.php\"> ";
}
}

?>



