<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
<? @session_start(); include("../inc_connect.php"); ?>
<?php

	$id = $_POST[txtStatusID];
	$name= $_POST[txtName];
	
			/*if($id==""){
 
				echo"<SCRIPT>alert('��سҡ�͡����ʶҹ� ���¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addPosition.php'>";
		exit();
	}*/
	if($name==""){
 
						echo"<SCRIPT>alert('��سҡ�͡����ʶҹд��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=addStatus.php'>";
		exit();
	}
	
$folder = '../images_machinery/'; 
$pic = $_FILES['pic'];
   if(is_file($pic['tmp_name'])){
    $rand = rand(1111,9999);
      copy($pic['tmp_name'],$folder.$rand.$pic['name']);
   }
	$insert = "insert into tb_machinery_status  values('', '$name')";
	$query = mysql_query($insert);
	if($query)
	{
 
			echo"<SCRIPT>alert('����������ʶҹ����º��������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_status.php'>";
	}
	else if(!$query){
					echo"<SCRIPT>alert('�������ö������������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_status.php'>";
	}

?>

</body>