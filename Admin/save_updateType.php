<? @session_start(); include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$idType = $_POST['txtTypeID'];
	$name = $_POST['txtName'];
	$id = $_REQUEST['edit_id'];
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_machinery_type set type_name = '$name' 
	where type_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
 
	echo"<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
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