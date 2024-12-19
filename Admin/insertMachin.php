<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php"); ?>
	<?php

	$id = $_POST['mach_id'];
	$name = $_POST['name'];
	$licen = $_POST['licen'];
	$brand = $_POST['brand'];
	$mach_type = $_POST['type'];
	$price = $_POST['price'];
	$mach_status = $_POST['status'];
	$control = $_POST['control'];
	$mach_unit = $_POST['mach_unit'];


	$sql_show = "select * from  tb_machin where mac_id ='$id'";
	$result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));;
	$num_show = mysqli_num_rows($result_show);
	if ($num_show != 0) {
		echo "<SCRIPT>alert('รหัสเครื่องจักรซ้ำกันครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
		exit();
	}

	$sql_chk_licen = "select * from  tb_machin where mac_licen = ?";
	$stmt = $conn->prepare($sql_chk_licen);
	if ($stmt === false) {
		die('prepare failed: ' . htmlspecialchars($stmt->error));
	}

	$stmt->bind_param("s", $licen);
	$stmt->execute();
	$stmt->store_result();
	$num_chk_licen = $stmt->num_rows;
	if ($num_chk_licen > 0) {
		echo "<SCRIPT>alert('ทะเบียนเครื่องจักรซ้ำกันครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
		exit();
	}

	if ($id == "") {

		echo "<SCRIPT>alert('กรุณากรอกรหัสเครื่องจักรกลด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
		exit();
	} else if ($licen == "") {
		echo "<SCRIPT>alert('กรุณากรอกทะเบียนเครื่องจักรกลด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";

		exit();
	} else if ($price == "") {
		echo "<SCRIPT>alert('กรุณากรอกราคาด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";

		exit();
	} else if ($control == "") {
		echo "<SCRIPT>alert('กรุณากรอกผู้ดูแลเครื่องจักรกลด้วยครับ');history.back();</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";

		exit();
	}

	$folder = '../images_machinery/';
	$pic = $_FILES['pic'];
	if (is_file($pic['tmp_name'])) {
		$rand = rand(1111, 9999);
		copy($pic['tmp_name'], $folder . $rand . $pic['name']);
	}
	$insert = "insert into tb_machin  values('$id', '$name', '$licen', '$brand', '$mach_type' ,'$price','$mach_unit', '$mach_status', '$control','$rand$pic[name]')";
	$query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
	if ($query) {

		echo "<SCRIPT>alert('เพิ่มข้อมูลเครื่องจักรกลเรียบร้อยแล้ว');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_machin.php'>";
	} else if (!$query) {
		echo "<SCRIPT>alert('เพิ่มข้อมูลเครื่องจักรกลไม่ได้');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_machin.php'>";
	}

	?>

</body>