<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php
	session_start();
	include("../inc_connect.php"); ?>
	<?php

	$pos_name = $_POST['txtName'];

	if ($pos_name == "") {
		echo "<SCRIPT>alert('กรุณากรอกชื่อตำแหน่งด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=addPosition.php'>";
		exit();
	}

	$insert = "INSERT INTO tb_position (pos_name) VALUES ('$pos_name')";
	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {

		echo "<SCRIPT>alert('เพิ่มข้อมูลยี่ห้อเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	} else {
		echo "<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	}

	?>

</body>