<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php
	session_start();
	include("../inc_connect.php");

	if ($_REQUEST['del_id'] != "") {
		$del_id = $_REQUEST['del_id'];

		// Get the image path before deleting the record
		$sql_get_image = "SELECT mac_picture FROM tb_machin WHERE mac_id = '$del_id'";
		$result = mysqli_query($conn, $sql_get_image) or die(mysqli_error($conn));
		$image_data = mysqli_fetch_assoc($result);

		if ($image_data && $image_data['mac_picture'] != "") {
			$image_path = '../images_machinery/' . $image_data['mac_picture'];
			if (file_exists($image_path)) {
				unlink($image_path); // Delete the image file
			}
		}

		// Delete the record
		$sql_del = "DELETE FROM tb_machin WHERE mac_id = '$del_id'";
		mysqli_query($conn, $sql_del) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('ลบข้อมูลและรูปภาพเรียบร้อยแล้ว');</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_machin.php'>";
	}
	?>
</body>