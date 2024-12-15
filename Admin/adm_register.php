<?php
session_start();
include("../inc_connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php

	$admID = $_POST['txtID'];
	$admName = $_POST['txtName'];
	$admPos = $_POST['txtPos'];
	$birthDay = $_POST['txtBirth'];
	$sex = $_POST['sex'];
	$add = $_POST['txtAdd'];
	$phone = $_POST['Phone'];
	$user = $_POST['txtUser'];
	$pass = $_POST['txtPass'];

	$sql_show = "SELECT * FROM tb_admin WHERE adm_id = ?";
	$stmt = $conn->prepare($sql_show);
	$stmt->bind_param('s', $admID);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows > 0) {
		echo "<SCRIPT>alert('รหัสเจ้าหน้าที่ซ้ำกันครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	}

	$sql_show2 = "SELECT * FROM tb_admin WHERE adm_user = ?";
	$stmt2 = $conn->prepare($sql_show2);
	$stmt2->bind_param('s', $user);
	$stmt2->execute();
	$result2 = $stmt2->get_result();
	if ($result2->num_rows > 0) {
		echo "<SCRIPT>alert('ชื่อเข้าใช้งานซ้ำกันครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	}

	if ($admID == "") {
		echo "<SCRIPT>alert('กรุณากรอกรหัสเจ้าหน้าที่ด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($admName == "") {
		echo "<SCRIPT>alert('กรุณากรอกชื่อเจ้าหน้าที่ด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($birthDay == "") {
		echo "<SCRIPT>alert('กรุณากรอกวันเดือนปีเกิด'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($phone == "") {
		echo "<SCRIPT>alert('กรุณากรอกเบอร์โทรศัพน์ด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($add == "") {
		echo "<SCRIPT>alert('กรุณากรอกที่อยู่ด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($user == "") {
		echo "<SCRIPT>alert('กรุณากรอกเข้าใช้งานด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	} else if ($pass == "") {
		echo "<SCRIPT>alert('กรุณากรอกรหัสเข้าใช้งานด้วย่ด้วยครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	}

	$d = getdate();
	//$time = date("H:i:s");
	//$date = $d['mday']."-".$d['month']."-".$d['year'].", ".$time;
	$date = $d['mday'] . "-" . $d['month'] . "-" . $d['year'];


	$insert = "INSERT INTO tb_admin (adm_id , adm_name, adm_user, adm_pass, birthday, sex, address, phone, Position_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt3 = $conn->prepare($insert);
	$stmt3->bind_param('sssssssss', $admID, $admName, $user, $pass,  $birthDay, $sex, $add, $phone, $admPos);
	if ($stmt3->execute()) {
		echo "<SCRIPT>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');window.navigate('search_admin.php');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_admin.php'>";
	} else {
		echo "<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertAdmin.php'>";
		exit();
	}
	$stmt3->close();

	?>

</body>

</html>