<?@session_start();  include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

	$admID = $_POST[txtID];
	$admName= $_POST[txtName];
	$admPos= $_POST[txtPos];
	$birthDay = $_POST[txtBirth];
	$sex= $_POST[sex];
	$add = $_POST[txtAdd];
	$phone= $_POST[Phone];
	$user= $_POST[txtUser];
	$pass= $_POST[txtPass];
	
	 $sql_show = "select * from  tb_employee where emp_id='$txtID'";
		$result_show = mysql_query($sql_show);
$num_show=mysql_num_rows($result_show);
	if ($num_show!=0) {
			echo"<SCRIPT>alert('รหัสเจ้าหน้าที่ซ้ำกันครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
		exit();
	}

	 $sql_show2 = "select * from  tb_employee where emp_user='$txtUser'";
		$result_show2 = mysql_query($sql_show2);
$num_show2=mysql_num_rows($result_show2);
	if ($num_show2!=0) {
			echo"<SCRIPT>alert('ชื่อเข้าใช้งานซ้ำกันครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
		exit();
	}
	
	if($admID==""){
	
		echo"<SCRIPT>alert('กรุณากรอกรหัสเจ้าหน้าที่ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
		exit();
	}
	else if($admName==""){
			echo"<SCRIPT>alert('กรุณากรอกชื่อเจ้าหน้าที่ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
 
		exit();
	}
		else if($phone==""){
					echo"<SCRIPT>alert('กรุณากรอกเบอร์โทรศัพน์ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
	 
		exit();
	}
		else if($txtAdd==""){
		 
			echo"<SCRIPT>alert('กรุณากรอกที่อยู่ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
		exit();
	}
	else if($txtUser==""){
		echo"<SCRIPT>alert('กรุณากรอกเข้าใช้งานด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
		 
		exit();
	}
	else if($txtPass==""){
			echo"<SCRIPT>alert('กรุณากรอกรหัสเข้าใช้งานด้วย่ด้วยครับ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=Insertemployee.php'>";
	 
		exit();
	}
	
	$d = getdate();
	//$time = date("H:i:s");
	//$date = $d['mday']."-".$d['month']."-".$d['year'].", ".$time;
	$date = $d['mday']."-".$d['month']."-".$d['year'];
	

	$insert = "insert into tb_employee values ('$admID', '$admName','$user', '$pass', '$txtBirth', '$sex', '$add' ,'$phone', '$admPos')"; 
	
	$query = mysql_query($insert);
	if($query)
	{
				echo"<SCRIPT>alert('เพิ่มข้อมูลเรียบร้อยแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_employee.php'>";
	 
	}
	else if(!$query){
		echo "Can't insert data";
	}

?>

</body>
</html>