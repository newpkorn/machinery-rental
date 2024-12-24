<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php");

	if ($_REQUEST['del_id'] != "") {
		$del_id = $_REQUEST['del_id'];
		$sql_del = "delete from tb_reserv where res_id = '$del_id';";
		mysqli_query($conn, $sql_del) or die(mysqli_error($conn));

		$sql_del2 = "delete from tb_reserv_detail where res_id = '$del_id';";
		mysqli_query($conn, $sql_del2) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('ลบข้อมูลเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=ReservationsMachine.php'>";
	}
	?>

</body>