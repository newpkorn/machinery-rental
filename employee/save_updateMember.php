<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php
	if ($_POST['Update']) {
		$name = $_POST['txtName'];
		$birth = $_POST['txtBirth'];
		$txtAge = $_POST['txtAge'];
		$idCard = $_POST['txtIdCard'];
		$dateIssue = $_POST['dateIssue'];
		$phone = $_POST['Phone'];
		$add = $_POST['txtAdd'];
		$id = $_REQUEST['edit_id'];


		if (strlen($id) != 13) {
			echo "<SCRIPT>alert('กรอกข้อมูล idcard น้อยหรือมากไปครับ ต้องเท่ากับ 13 เท่านั้นครับ');history.back();</SCRIPT>";
			exit();
		}

		$sql_show = "select reg_card from tb_member where reg_card = '$idCard' and mem_id != '$id'";
		$result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));
		$count_show = mysqli_num_rows($result_show);
		if ($count_show > 0) {
			echo "<SCRIPT>alert('ID นี้มีในระบบแล้ว');history.back();</SCRIPT>";
			echo "<meta http-equiv='refresh' content='0; url=editMember.php'>";
			exit;
		}


		// แก้ไขข้อมูล
		//$id = $_REQUEST['edit_id'];
		$sql_edit = "update tb_member 
					set mem_name = '$name',
						reg_card = '$idCard',
						date_issue = '$dateIssue',
						address = '$add',
						phone = '$phone',
						Birthday = '$birth',
						mem_age = '$txtAge'
					where reg_card = '$id'";
		mysqli_query($conn, $sql_edit) or die(mysqli_error($conn));
		echo "<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_Member.php'>";
	}

	?>
</body>