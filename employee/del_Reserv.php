<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
	<?php 

	if($_REQUEST['del_id'] != "") //��� ��� del_id �����ҡѺ�����ҧ����
{
$del_id = $_REQUEST['del_id'];
$sql_del = "delete from tb_reserv where res_id = '$del_id';";
mysql_query($sql_del) or die(mysql_error());

$sql_del2 = "delete from tb_reserv_detail where res_id = '$del_id';";
mysql_query($sql_del2) or die(mysql_error());
 
		echo"<SCRIPT>alert('ź���������º��������'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=ReservationsMachine.php'>";
}
?>


</body>