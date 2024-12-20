<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php

	if ($_POST['Update']) {
		$pos_name = $_POST['txtName'];
		$id = $_REQUEST['edit_id'];
		$sql_edit = "update tb_position set pos_name = '$pos_name' where pos_id = '$id'";
		mysqli_query($conn, $sql_edit) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('แก้ไขข้อมูลของ $pos_name  สำเร็จแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
		//-->
	}
	?>
</body>