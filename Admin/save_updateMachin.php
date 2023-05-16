<?@session_start(); include("../inc_connect.php"); ?>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<body>
	<?php 

	if($_POST['Update'])
{ 
	$action = $_POST['action'];
	$macID = $_POST['mach_id'];
	$name = $_POST['name'];
	$licen = $_POST['licen'];
	$brand = $_POST['brand'];
	$type = $_POST['mach_type'];
	$price = $_POST['price'];
	$status = $_POST['mach_status'];
	$control = $_POST['control'];
	$id = $_REQUEST['edit_id'];
		$unit = $_POST['mach_unit'];
	// แก้ไขข้อมูล
if($pic!=""){
	$folder = '../images_machinery/'; 
$pic = $_FILES['pic'];
   if(is_file($pic['tmp_name'])){
    $rand = rand(1111,9999);
      copy($pic['tmp_name'],$folder.$rand.$pic['name']);
   }
}
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_machin set 
	mac_id  = '$macID', 
	mac_name  = '$name', 
	mac_licen  = '$licen', 
	mac_brand  = '$brand', 
	mac_type = '$type', 
	mec_price = '$price', 
	mac_unit = '$unit', 
	mac_status = '$status', 
	mac_picture = '$rand$pic[name]', 
	mac_control = '$control' 
	where mac_id = '$id'";
	
	mysql_query($sql_edit) or die(mysql_error());
 
		echo"<SCRIPT>alert('แก้ไขข้อมูลของ $name  สำเร็จแล้ว'); </SCRIPT>";
	 echo "<meta http-equiv='refresh' content='0; url=search_Machin.php'>";
	//-->
}

//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machin where mac_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>
</body>