<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
	<?php 

	if($_REQUEST['del_id'] != "") //ถ้า ค่า del_id ไม่เท่ากับค่าว่างเปล่า
{
$del_id = $_REQUEST['del_id'];
$sql_del = "delete from tb_member where mem_id = '$del_id';";
mysql_query($sql_del) or die(mysql_error());
 
		echo"<SCRIPT>alert('ลบข้อมูลเรียบร้อยแล้ว'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=search_member.php'>";
}
?>


</body>