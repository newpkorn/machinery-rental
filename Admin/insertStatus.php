<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php"); ?>
	<?php

	$name = $_POST['txtName'];

	if ($name == "") {

		echo "<SCRIPT>alert('กรุณากรอกชื่อสถานะด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=addStatus.php'>";
		exit();
	}


	$insert = "insert into tb_machinery_status (status_name)  values ('$name')";
	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {

		echo "<SCRIPT>alert('เพิ่มข้อมูลสถานะเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_status.php'>";
	} else {
		echo "<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_status.php'>";
	}

	?>

</body>