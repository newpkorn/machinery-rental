<?php
session_start();
include("inc_connect.php");

if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "<center><font color='red'>กรุณากรอก Username และ Password ครบทุกช่อง</font></center>";
    echo "<meta http-equiv='refresh' content='1;url=Formlogin.php'>";
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM tb_admin WHERE adm_user = ?"; 
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['adm_pass']) {
        $_SESSION['username'] = $username;
        $_SESSION['adm_id'] = $row['adm_id'];
        $_SESSION['adm_name'] = $row['adm_name'];
        header("Location: Admin/Menu_Detail.php");
        exit();
    }
} else {
    $sql2 = "SELECT * FROM tb_employee WHERE emp_user = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param('s', $username);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    if ($result2->num_rows > 0) {
        $row2 = $result2->fetch_assoc();
        if ($password == $row2['emp_pass']) {
            $_SESSION['username'] = $username;
            $_SESSION['emp_id'] = $row2['emp_id'];
            $_SESSION['emp_name'] = $row2['emp_name'];
            header("Location: employee/Menu_Detail.php");
            exit();
        }
    }
}

echo "<script>alert('User และ Password ไม่ถูกต้อง'); window.location.href='Formlogin.php';</script>";
exit();
?>
