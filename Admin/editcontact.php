<? @session_start(); include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$addr1= $_POST['addr'];
	$tel1= $_POST['tel'];
	$email1= $_POST['email'];

	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_contact set 
	contact_tel = '$tel1' , contact_add = '$addr1' ,  contact_mail = '$email1' 
	where contact_id='1'"; 
	mysql_query($sql_edit) or die(mysql_error());
 
	echo"<SCRIPT>alert('แก้ไขข้อมูล   สำเร็จแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
	//-->
}

//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machinery_type where type_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>
</body>