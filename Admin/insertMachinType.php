<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtTypeID];
	$name= $_POST[txtName];
	
		/*if($id==""){
	 
		echo"<SCRIPT>alert('��سҡ�͡�����������ͧ�ѡáŴ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=insertMachinType.php'>";
		exit();
	}*/
	if($name==""){
	 
		echo"<SCRIPT>alert('��سҡ�͡������蹴��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=insertMachinType.php'>";
		exit();
	}
	
	$insert = "insert into tb_machinery_type values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
 
			echo"<SCRIPT>alert('����������������º��������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	}
	else if(!$query){
				echo"<SCRIPT>alert('�������ö������������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_type.php'>";
	}

?>

</body>