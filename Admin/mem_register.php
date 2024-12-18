<?php
session_start();
include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php

	$name = $_POST['txtName'];
	$cardID = $_POST['txtCode'];
	$birthDay = $_POST['StartDate'];
	$txtAge = $_POST['txtAge'];
	$dateIssue = $_POST['dateIssue'];
	$sex = $_POST['sex'];
	$add = $_POST['txtAdd'];
	$phone = $_POST['Phone'];

	$id = $_REQUEST["txtCode"];

	if (strlen($cardID) <> 13) {
		echo "<SCRIPT>alert('กรอกข้อมูล idcard น้อยหรือมากไปครับ ต้องเท่ากับ 13 เท่านั้นครับ');history.back();</SCRIPT>";
		exit();
	}

	if ($name == "") {
		echo "<SCRIPT>alert('กรุณากรอกชื่อสมาชิกด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($birthDay == "") {

		echo "<SCRIPT>alert('กรุณากรอกวันเดือนปีเกิด ด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($txtAge == "") {
		echo "<SCRIPT>alert('กรุณากรอกอายุ ด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($cardID == "") {
		echo "<SCRIPT>alert('กรุณากรอกเลขบัตรประจำตัวประชาชนด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($dateIssue == "") {
		echo "<SCRIPT>alert('กรุณากรอกวันออกบัตรด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($phone == "") {
		echo "<SCRIPT>alert('กรุณากรอกเบอร์โทรศัพน์ด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	} else if ($add == "") {
		echo "<SCRIPT>alert('กรุณากรอกที่อยู่ด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}

	$sql_show = "SELECT reg_card FROM tb_member WHERE reg_card = ?";
	$stmt = $conn->prepare($sql_show);
	$stmt->bind_param('s', $cardID);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows > 0) {
		echo "<SCRIPT>alert('รหัส ID Card ซ้ำครับ'); history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}

	$d = getdate();
	$time = date("H:i:s");
	//$date = $d['mday']."-".$d['month']."-".$d['year'].", ".$time;
	$date = $d['mday'] . "-" . $d['month'] . "-" . $d['year'];

	$insert = "insert into tb_member values ('$id', '$name','$sex','$add' ,'$cardID','$dateIssue', '$birthDay','$txtAge','$phone','$date')";

	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {

		echo "<SCRIPT>alert('เพิ่มข้อมูลเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_member.php'>";
	} else if (!$query) {
		echo "Can't insert data";
	}

	?>

</body>

</html>