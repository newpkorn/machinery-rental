<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtBrandID];
	$name= $_POST[txtName];
	
		/*if($id==""){
	 
		echo"<SCRIPT>alert('กรุณากรอกรหัสยี่ห้อเครื่องจักรกล ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addMachinBrand.php'>";
		exit();
	}*/
	if($name==""){
	 
		echo"<SCRIPT>alert('กรุณากรอกชื่อยี่ห้อด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addMachinBrand.php'>";
		exit();
	}
	
	$insert = "insert into tb_machinery_brand values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
			echo"<SCRIPT>alert('เพิ่มข้อมูลยี่ห้อเรียบร้อยแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
 
	}
	else if(!$query){
		 
			echo"<SCRIPT>alert('ไม่สามารถเพิ่มข้อมูลได้'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
	}

?>

</body>