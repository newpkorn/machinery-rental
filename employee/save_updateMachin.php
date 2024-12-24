<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php

	if ($_POST['Update']) {
		$macID = $_POST['mach_id'];
		$name = $_POST['name'];
		$licen = $_POST['licen'];
		$brand = $_POST['brand'];
		$type = $_POST['mach_type'];
		$price = $_POST['price'];
		$status = $_POST['mach_status'];
		$control = $_POST['control'];
		$id = $_REQUEST['edit_id'];
		$unit = $_POST['mach_unit'];
		$pic = $_FILES['pic'];

		// Check for duplicate mac_licen
		$check_duplicate = mysqli_query($conn, "SELECT * FROM tb_machin WHERE mac_licen = '$licen' AND mac_id != '$id'");
		if (mysqli_num_rows($check_duplicate) > 0) {
			echo "<SCRIPT>alert('ทะเบียน $licen มีอยู่แล้ว');</SCRIPT>";
			echo "<meta http-equiv='refresh' content='0; url=editMachin.php?edit_id=$id'>";
			exit;
		}

		// Handle image upload
		$folder = '../images_machinery/';
		$image_path = '';
		if (is_uploaded_file($pic['tmp_name'])) {
			$rand = rand(1111, 9999);
			$image_path = $rand . $pic['name'];
			copy($pic['tmp_name'], $folder . $image_path);
		} else {
			// Keep the existing image if no new image is uploaded
			$current_image_query = mysqli_query($conn, "SELECT mac_picture FROM tb_machin WHERE mac_id = '$id'");
			$current_image = mysqli_fetch_assoc($current_image_query);
			$image_path = $current_image['mac_picture'];
		}

		// Update data
		$sql_edit = "UPDATE tb_machin SET 
                    mac_id = '$macID', 
                    mac_name = '$name', 
                    mac_licen = '$licen', 
                    mac_brand = '$brand', 
                    mac_type = '$type', 
                    mec_price = '$price', 
                    mac_unit = '$unit', 
                    mac_status = '$status', 
                    mac_picture = '$image_path', 
                    mac_control = '$control' 
                WHERE mac_id = '$id'";

		mysqli_query($conn, $sql_edit) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('แก้ไขข้อมูลของ $name สำเร็จแล้ว');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_Machin.php'>";
	}

	?>
</body>