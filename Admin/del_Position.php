<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
	<?php session_start();
	include("../inc_connect.php");

	if ($_REQUEST['del_id'] != "") //ถ้า ค่า del_id ไม่เท่ากับค่าว่างเปล่า
	{
		$del_id = $_REQUEST['del_id'];
		$sql_del = "delete from tb_position where pos_id = '$del_id';";
		mysqli_query($conn, $sql_del) or die(mysqli_error($conn));

		echo "<SCRIPT>alert('ลบข้อมูลตำแหน่งเรียบร้อยแล้ว'); </SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	}
	?>

</body>