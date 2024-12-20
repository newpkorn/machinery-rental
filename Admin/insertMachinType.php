<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php");

	$name = $_POST['txtName'];

	if ($name == "") {

		echo "<SCRIPT>alert('กรุณากรอกชื่อรุ่นด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=insertMachinType.php'>";
		exit();
	}

	$insert = "insert into tb_machinery_type (type_name) values('$name')";
	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {
		echo "<SCRIPT>alert('เพิ่มข้อมูลรุ่นเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	} else {
		echo "<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	}

	?>

</body>