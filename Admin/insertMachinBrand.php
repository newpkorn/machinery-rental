<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php"); ?>
	<?php

	$name = $_POST['txtName'];

	if ($name == "") {

		echo "<SCRIPT>alert('กรุณากรอกชื่อยี่ห้อด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=addMachinBrand.php'>";
		exit();
	}

	$insert = "INSERT INTO tb_machinery_brand (brand_name) VALUES ('$name')";
	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {
		echo "<SCRIPT>alert('เพิ่มข้อมูลยี่ห้อเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
	} else if (!$query) {

		echo "<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
	}

	?>

</body>