<? @session_start(); include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$name = $_POST['txtName'];
	$birth = $_POST['txtBirth'];
	$txtAge = $_POST['txtAge'];
	$code1= $_POST['txtCode'];
	$dateIssue = $_POST['dateIssue'];
	$phone = $_POST['Phone'];
	$add = $_POST['txtAdd'];
	$id = $_REQUEST['edit_id'];

	$id2 = $_REQUEST["code1"];
if(strlen($txtCode)!=13){
	echo"<SCRIPT>alert('กรอกข้อมูล idcard น้อยหรือมากไปครับ ต้องเท่ากับ 13 เท่านั้นครับ');history.back();</SCRIPT>";
 exit();
} 
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_member set 
	mem_name = '$name' , reg_card = '$code1' ,date_issue = '$dateIssue', address = '$add' , phone = '$phone', Birthday = '$birth', mem_age = '$txtAge' where reg_card = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
		echo"<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=search_Member.php'>";
 
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