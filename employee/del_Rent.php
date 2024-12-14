<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
	<?php 

	if($_REQUEST['del_id'] != "") //ถ้า ค่า del_id ไม่เท่ากับค่าว่างเปล่า
{
$del_id = $_REQUEST['del_id'];
$sql_del = "delete from tb_lease where leas_id = '$del_id';";
mysql_query($sql_del) or die(mysql_error());
  $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$del_id' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){
	$sqlt = "update tb_machin     set     mac_status='1' where  mac_id='$rstype1[mac_id]'";		
			$resultin = mysql_query($sqlt);
						  }
$sql_del2 = "delete from tb_lease_detail where leas_id = '$del_id';";
mysql_query($sql_del2) or die(mysql_error());
 
			echo"<SCRIPT>alert('ลบข้อมูลเรียบร้อยแล้ว'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=RentMachine.php'>";
}
?>


</body>