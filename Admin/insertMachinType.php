<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtTypeID];
	$name= $_POST[txtName];
	
		/*if($id==""){
	 
		echo"<SCRIPT>alert('กรุณากรอกรหัสรุ่นเครื่องจักรกลด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=insertMachinType.php'>";
		exit();
	}*/
	if($name==""){
	 
		echo"<SCRIPT>alert('กรุณากรอกชื่อรุ่นด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=insertMachinType.php'>";
		exit();
	}
	
	$insert = "insert into tb_machinery_type values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
 
			echo"<SCRIPT>alert('เพิ่มข้อมูลรุ่นเรียบร้อยแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	}
	else if(!$query){
				echo"<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	}

?>

</body>