<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[mach_id];
	$name= $_POST[name];
	$licen= $_POST[licen];
	$brand= $_POST[brand];
	$mach_type= $_POST[type];
	$price= $_POST[price];
	$mach_status = $_POST[status];
	$control = $_POST[control];
		$mach_unit = $_POST[mach_unit];
	$mach_pic = $_POST[mach_pic];
	
	 $sql_show = "select * from   tb_machin where mac_id='$mach_id'";
		$result_show = mysql_query($sql_show);
$num_show=mysql_num_rows($result_show);
	if ($num_show!=0) {
			echo"<SCRIPT>alert('��������ͧ�ѡë�ӡѹ��Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
		exit();
	}

	if($id==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡��������ͧ�ѡáŴ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
		exit();
	}
	else if($licen==""){
					echo"<SCRIPT>alert('��سҡ�͡����¹����ͧ�ѡáŴ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
 
		exit();
	}
		else if($price==""){
					echo"<SCRIPT>alert('��سҡ�͡�ҤҴ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";
 
		exit();
	}
		else if($control==""){
							echo"<SCRIPT>alert('��سҡ�͡����������ͧ�ѡáŴ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=DesignInsertMachine.php'>";

		exit();
	}
	
$folder = '../images_machinery/'; 
$pic = $_FILES['pic'];
   if(is_file($pic['tmp_name'])){
    $rand = rand(1111,9999);
      copy($pic['tmp_name'],$folder.$rand.$pic['name']);
   }
	$insert = "insert into tb_machin  values('$id', '$name', '$licen', '$brand', '$mach_type' ,'$price','$mach_unit', '$mach_status', '$control','$rand$pic[name]')";
	$query = mysql_query($insert);
	if($query)
	{
 
					echo"<SCRIPT>alert('��������������ͧ�ѡá����º��������');</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_machin.php'>";
	}
	else if(!$query){
							echo"<SCRIPT>alert('��������������ͧ�ѡá������');</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_machin.php'>";
	 
	}

?>

</body>