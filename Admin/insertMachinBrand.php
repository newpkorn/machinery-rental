<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtBrandID];
	$name= $_POST[txtName];
	
		/*if($id==""){
	 
		echo"<SCRIPT>alert('��سҡ�͡��������������ͧ�ѡá� ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addMachinBrand.php'>";
		exit();
	}*/
	if($name==""){
	 
		echo"<SCRIPT>alert('��سҡ�͡���������ʹ��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addMachinBrand.php'>";
		exit();
	}
	
	$insert = "insert into tb_machinery_brand values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
			echo"<SCRIPT>alert('�������������������º��������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
 
	}
	else if(!$query){
		 
			echo"<SCRIPT>alert('�������ö������������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_brand.php'>";
	}

?>

</body>