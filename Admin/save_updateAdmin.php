<?php session_start();
include("../inc_connect.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>

    <?php
    if ($_POST['Update']) {
        if (isset($_REQUEST['edit_id']) && !empty($_REQUEST['edit_id'])) {
            $id = $_REQUEST['edit_id'];
        } else {
            echo "<SCRIPT>alert('ไม่ได้รับ edit_id ที่ถูกต้อง');</SCRIPT>";
            echo "<meta http-equiv='refresh' content='0; url=editAdmin.php'>";
            exit();
        }

        $namex = $_POST['txtName1'];
        $position = $_POST['txtPos'];
        $birth = $_POST['txtBirth'];
        $phone = $_POST['Phone'];
        $add = trim($_POST['txtAdd']);
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];

        $chkUser = "SELECT adm_user FROM tb_admin WHERE adm_user = ? AND adm_id != ?";
        $stmt1 = $conn->prepare($chkUser);
        if ($stmt1 === false) {
            die('Error preparing statement: ' . $conn->error);
        }
        $stmt1->bind_param("ss", $user, $id);
        $stmt1->execute();
        $result = $stmt1->get_result();

        if ($result->num_rows > 0) {
            echo "<SCRIPT>alert('Username นี้มีอยู่ในระบบแล้ว');history.back();</SCRIPT>";
            echo "<meta http-equiv='refresh' content='0; url=editAdmin.php'>";
            $stmt1->close();
            exit();
        }
        $stmt1->close();

        $sql_edit = "UPDATE tb_admin 
                SET adm_name = ?, 
                    adm_user = ?, 
                    adm_pass = ?, 
                    birthday = ?, 
                    address = ?, 
                    phone = ?, 
                    Position_id = ? 
                WHERE adm_id = ?";
        $stmt = $conn->prepare($sql_edit);
        if ($stmt === false) {
            die('Error preparing statement: ' . $conn->error);
        }

        $stmt->bind_param("ssssssss", $namex, $user, $pass, $birth, $add, $phone, $position, $id);

        if ($stmt->execute()) {
            echo "<SCRIPT>alert('แก้ไขข้อมูลของ $namex สำเร็จแล้ว');</SCRIPT>";
            echo "<meta http-equiv='refresh' content='0; url=search_Admin.php'>";
        } else {
            echo "<SCRIPT>alert('ไม่สำเร็จ');</SCRIPT>";
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    ?>


</body>