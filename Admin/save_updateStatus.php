<? @session_start(); include("../inc_connect.php"); ?>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$idStatus = $_POST['txtStatusID'];
	$name = $_POST['txtName'];
	$id = $_REQUEST['edit_id'];
	// ��䢢�����
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_machinery_status set status_name = '$name' 
	where status_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
	 
	echo"<SCRIPT>alert(' ��䢢����Ţͧ $name  ���������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_status.php'>";
	//-->
}

//���¡�����Ũҡ ���� ���ʴ�� textbox
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