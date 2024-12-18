<?php session_start();
include("../inc_connect.php");
isset($_REQUEST['edit_id']) ? $edit_id = $_REQUEST['edit_id'] : $edit_id = "";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php

	if ($_POST['Update']) {

		$name = $_POST['txtName'];
		$position = $_POST['txtPos'];
		$birth = $_POST['txtBirth'];
		$phone = $_POST['Phone'];
		$add = $_POST['txtAdd'];
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		$id = $_REQUEST['edit_id'];
		// แก้ไขข้อมูล
		//$id = $_REQUEST['edit_id'];

		// check duplicat user
		$sql_check = "SELECT * FROM tb_employee WHERE emp_user = ? AND emp_id != ?";
		$stmt = $conn->prepare($sql_check);
		$stmt->bind_param("ss", $user, $id);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			echo "<SCRIPT>alert('Username นี้มีอยู่ในระบบแล้ว');history.back();</SCRIPT>";
			echo "<meta http-equiv='refresh' content='0; url=editemp.php'>";
			$stmt->close();
			exit();
		}

		// update statement
		$sql_edit = "UPDATE tb_employee
					SET	emp_name= ?, emp_user = ?, emp_pass = ?, birthday= ?, address = ? , phone = ?, Position_id = ? 
					WHERE emp_id = ?";
		$stmt1 = $conn->prepare($sql_edit);
		if ($stmt1 === false) {
			die('Error preparing statement: ' . $conn->error);
		}

		$stmt1->bind_param("ssssssss", $name, $user, $pass, $birth, $add, $phone, $position, $id);
		if ($stmt1->execute()) {
			echo "<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
			echo "<meta http-equiv='refresh' content='0; url=search_employee.php'>";
		} else {
			echo "<SCRIPT>alert('ไม่สำเร็จ');</SCRIPT>";
			echo "Error: " . $stmt->error;
		}
		$stmt1->close();
		//-->
	}
	?>
</body>