<?
	// เชื่อมต่อฐานข้อมูล local
	$host="localhost"; // กำหนด host
	$username="root"; // กำหนด username
	$pass_word="12345678"; // กำหนด Password
	$db="machinery"; // กำหนดชื่อฐานข้อมูล
	$Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
	mysql_query("SET NAMES tis620",$Conn); // set กำหนดมาตราฐาน
	mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล  
	
	/*
	$host="localhost"; // กำหนด host	
	$username="id20704846_db_machinery"; // กำหนด username
    $pass_word="DB_Davinciiz19"; // กำหนด Password
    $db="id20704846_machinery"; // กำหนดชื่อฐานข้อมูล
    $Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
    mysql_query("SET NAMES tis620",$Conn); // set กำหนดมาตราฐาน
    mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล 
	*/
	
?>