<?php
	include("Connect.inc");
	$db = "machinery";
	$tb = "tb_admin";
	
	
	$id = $_POST[txtDepID];
	$name= $_POST[txtName];
	$pos= $_POST[txtPost];
	$phone= $_POST[Phone];
	$user = $_POST[txtUser];
	$pass= $_POST[txtPass];
	
	$result = mysql_select_db($db);
	if(!$result){
		die("Can't found Database called $db".mysql_error());
	}
	
	if($id==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกรหัสพนักงานด้วยครับ</a></h3>";
		exit();
	}
	else if($name==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกชื่อพนักงานด้วยครับ</a></h3>";
		exit();
	}
		else if($pos==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกตำแหน่งพนักงานด้วยครับ</a></h3>";
		exit();
	}
		else if($phone==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกเบอร์โทรศัพน์ด้วยครับ</a></h3>";
		exit();
	}
		else if($txtUser==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกชื่อเข้าใช้งานด้วยครับ</a></h3>";
		exit();
	}
	else if($txtPass==""){
		echo "<h3><a href='formRegister.php';>ERROR :กรุณากรอกรหัสผ่านด้วยครับ</a></h3>";
		exit();
	}
	

	$insert = "insert into $tb  values('$id', '$name', '$pos', '$phone', '$txtUser' ,'$txtPass')";
	$query = mysql_query($insert);
	if($query)
	{
		echo "<center><a href='InsertDepartment.php';><b>Inserted Successfully</b></a></center>";
	}
	else if(!$query){
		echo "Can't insert data";
	}
	mysql_close($link);
?>