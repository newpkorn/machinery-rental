<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php

	if ($_POST['Update']) {
		$addr1 = $_POST['addr'];
		$tel1 = $_POST['tel'];
		$email1 = $_POST['email'];

		$sql_edit = "update tb_contact set 
	contact_tel = '$tel1' , contact_add = '$addr1' ,  contact_mail = '$email1' 
	where contact_id='1'";
		mysqli_query($conn, $sql_edit) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('แก้ไขข้อมูล   สำเร็จแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
	}
	?>
</body>