<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
	<?php 
	include("connect_Member.php"); 
	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$memid = $_POST['txtID'];
	$name = $_POST['txtName'];
	$position = $_POST['txtPos'];
	$birth = $_POST['txtBirth'];
	$code = $_POST['txtCode'];
	$phone = $_POST['Phone'];
	$add = $_POST['txtAdd'];
	$user = $_POST['txtUser'];
	$pass = $_POST['txtPass'];
	$id = $_REQUEST['edit_id'];
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_member set 
	mem_id = '$memid', mem_name = '$name' , reg_card = '$code' , mem_add = '$add' , mem_phone = '$phone', mem_position = '$position', mem_birth = '$birth', mem_user = '$user', mem_pass = '$pass' where mem_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
	echo "<div align='center'><a href='../Search/search_Admin.php'> แก้ไขข้อมูลของ $name  สำเร็จแล้ว</a></div>";
	//-->
}

//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_member where mem_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>
</body>