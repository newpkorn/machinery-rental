	<?include("../inc_connect.php");  ?>
	<?
@session_start();
@error_reporting(0);
@ob_start();

?>



<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
	<?
	$dnow=date('Y-m-d H:m:s');
	$sqlt = "update tb_machin     set     mac_status='1' where  mac_id='$idmac'";		
			$resultin = mysql_query($sqlt);
			$sqlt2 = "update  tb_back_detail     set     b_status='1' , back_date='$dnow'  where  mac_id='$idmac' and leas_id='$idleas'";		
			$resultin2 = mysql_query($sqlt2);
//$sql_del2 = "delete from tb_lease_detail where leas_id='$idleas' and mac_id='$idmac'";
//mysql_query($sql_del2) or die(mysql_error());
 //  $sqltype1=mysql_query("select * from   tb_lease_detail where leas_id='$idleas' and mac_id='$idmac'");
	//		$row3=mysql_num_rows($sqltype1);		
//if($row3<=1){
//	$sql_del3 = "delete from tb_lease where leas_id='$idleas'";
//mysql_query($sql_del3) or die(mysql_error());
//}
if($resultin){

echo"<SCRIPT>alert('ทำการคืนเสร็จแล้ว');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"1;url=ReturntMachine.php\"> ";
}	else {echo"<SCRIPT>alert('ไม่สามารถคืนข้อมูลได้');</SCRIPT>";
echo "<meta http-equiv=\"refresh\" content=\"1;url=ReturntMachine.php\"> ";
}?>