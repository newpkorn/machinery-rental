<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtPosID];
	$name= $_POST[txtName];
	
		/*if($id==""){
 
				echo"<SCRIPT>alert('��سҡ�͡���ʵ��˹觴��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addPosition.php'>";
		exit();
	}*/
	if($name==""){
 
				echo"<SCRIPT>alert('��سҡ�͡���͵��˹觴��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addPosition.php'>";
		exit();
	}
	
	$insert = "insert into tb_position  values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
 
		echo"<SCRIPT>alert('���������ŵ��˹����º��������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	}
	else if(!$query){
				echo"<SCRIPT>alert('�������ö������������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_position.php'>";
	}

?>

</body>