<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php

	if ($_POST['Update']) {
		$name = $_POST['txtName'];
		$id = $_REQUEST['edit_id'];
		// แก้ไขข้อมูล
		//$id = $_REQUEST['edit_id'];
		$sql_edit = "UPDATE tb_machinery_brand SET brand_name = '$name' WHERE brand_id = '$id'";
		mysqli_query($conn, $sql_edit) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
		//-->
	}

	//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if ($_REQUEST['edit_id'] != "") {
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machinery_brand where brand_id = '$id'";
		$result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));
		$row_show = mysqli_fetch_array($result_show);
	}
	//--->
	?>
</body>