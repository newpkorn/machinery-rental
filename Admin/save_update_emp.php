<? @session_start(); include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$memid = $_POST['txtID'];
	$name22= $_POST['txtName'];
	$position = $_POST['txtPos'];
	$birth2= $_POST['txtBirth'];
	$code = $_POST['txtCode'];
	$phone = $_POST['Phone'];
	$add = $_POST['txtAdd'];
	$user = $_POST['txtUser'];
	$pass = $_POST['txtPass'];
	$id = $_REQUEST['edit_id'];
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_employee set 
	emp_id = '$memid', emp_name='$txtNamexx', address = '$add' , phone = '$phone', Position_id = '$position', birthday='$txtBirth1', emp_user = '$user', emp_pass = '$pass' where emp_id = '$edit_id'"; 
	mysql_query($sql_edit) or die(mysql_error());

		echo"<SCRIPT>alert('แก้ไขข้อมูลของ $txtNamexx  สำเร็จแล้ว'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=search_employee.php'>";
	//-->
}

?>
</body>