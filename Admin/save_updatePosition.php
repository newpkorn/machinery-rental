<? @session_start(); include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$idPos = $_POST['txtPosID'];
	$name = $_POST['txtName'];
	$id = $_REQUEST['edit_id'];
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_position set name = '$name' 
	where pos_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
 
		echo"<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	//-->
}

//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_position where pos_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>
</body>