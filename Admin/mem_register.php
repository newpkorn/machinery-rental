<?
@session_start();
include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<title>Untitled Document</title>
</head>

<body>
<?php

	$name= $_POST[txtName];
	$cardID= $_POST[txtCode];
	$birthDay = $_POST[StartDate];
	$txtAge = $_POST[txtAge];
	$dateIssue = $_POST[dateIssue];
	$sex= $_POST[sex];
	$add = $_POST[txtAdd];
	$phone= $_POST[Phone];
	


  // echo"<SCRIPT>alert('�����Ţ�ѵû�ЪҪ��ͧ��ҹ���١��ͧ');history.back();</SCRIPT>";
	// echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
$id = $_REQUEST["txtCode"];
if(strlen($txtCode)<>13){
	echo"<SCRIPT>alert('��͡������ idcard ���������ҡ令�Ѻ ��ͧ��ҡѺ 13 ��ҹ�鹤�Ѻ');history.back();</SCRIPT>";
 exit();
} 

 
	if($name==""){
 
		echo"<SCRIPT>alert('��سҡ�͡������Ҫԡ���¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}
			else if($birthDay==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡�ѹ��͹���Դ ���¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}
			else if($txtAge==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡���� ���¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}
		else if($txtCode==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡�Ţ�ѵû�Шӵ�ǻ�ЪҪ����¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}

			else if($dateIssue==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡�ѹ�͡�ѵô��¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}
		else if($phone==""){
	 
			echo"<SCRIPT>alert('��سҡ�͡�������Ѿ����¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}

	
		else if($txtAdd==""){
 
		echo"<SCRIPT>alert('��سҡ�͡���������¤�Ѻ');history.back();</SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=InsertMember.php'>";
		exit();
	}
	
	$d = getdate();
	$time = date("H:i:s");
	//$date = $d['mday']."-".$d['month']."-".$d['year'].", ".$time;
	$date = $d['mday']."-".$d['month']."-".$d['year'];

	$insert = "insert into tb_member values ('$cardID', '$name','$sex','$add' ,'$cardID','$dateIssue', '$birthDay','$txtAge','$phone','$date')"; 
	
	$query = mysql_query($insert);
	if($query)
	{
 
						echo"<SCRIPT>alert('�������������º��������'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_member.php'>";
	 
	}
	else if(!$query){
		echo "Can't insert data";
	}

?>

</body>
</html>