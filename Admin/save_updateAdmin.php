<? @session_start(); include("../inc_connect.php"); ?>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$memid = $_POST['txtID'];
	$namex= $_POST['txtName1'];
	$position = $_POST['txtPos'];
	$birth = $_POST['txtBirth'];
	$code = $_POST['txtCode'];
	$phone = $_POST['Phone'];
	$add = $_POST['txtAdd'];
	$user = $_POST['txtUser'];
	$pass = $_POST['txtPass'];
	$id = $_REQUEST['edit_id'];
	// ��䢢�����
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_admin set 
	adm_id = '$memid', adm_name='$namex' , address = '$add' , phone = '$phone', Position_id = '$position', brithday = '$birth', adm_user = '$user', adm_pass = '$pass' where adm_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
	echo"<SCRIPT>alert('��䢢����Ţͧ $namex  ���������'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=search_Admin.php'>";
 
	//-->
}


?>
</body>