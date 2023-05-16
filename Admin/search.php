<?@session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<table width="574" height="229" border="0">
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="51"> <form id="form1" name="form1" method="post" action="search.php">
      คำที่ต้องการค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
<select name="fields" >
  <option value="1" selected="selected" <? echo $select1;?>>เลขบัตรประจำตัวประชาชน</option>
  <option value="2"<? echo $select2;?>>ชื่อ</option>
  <option value="3" <? echo $select3;?>>ว/ด/ปี เกิด</option>
</select>
&nbsp;
<input type="submit" name="Submit" value="ค้นหา" />
    </form>&nbsp;</td>
  </tr>
  <tr>
    <td height="88"><?
// เชื่่อมต่อฐานข้อมูล
$host="localhost"; // กำหนด host
$username="root"; // กำหนด username
$pass_word="123456"; // กำหนด Password
$db="machinery"; // กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn); // set กำหนดมาตราฐาน
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล 
//---> 
?>

<?php
	if($_POST[fields]=="1"){$select1="selected";}
	if($_POST[fields]=="2"){$select2="selected";}
	if($_POST[fields]=="3"){$select3="selected";}
?>

      <table width="600" border="1" cellspacing="2" cellpadding="2">
        <tr>
          <td bgcolor="#CCCCCC"><div align="center">ชื่อ</div></td>
          <td bgcolor="#CCCCCC"><div align="center">รหัสประจำตัวประชาชน</div></td>
          <td bgcolor="#CCCCCC"><div align="center">เพศ</div></td>
          <td bgcolor="#CCCCCC"><div align="center">เบอร์โทร</div></td>
          <td bgcolor="#CCCCCC"><div align="center">ที่อยู่</div></td>
          <td bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
        </tr>
        <?
$sql_show = "select * from tb_member where status = 'M'";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.="and reg_card like '%$txt_search%'";}
				else if($fields=="2"){
				$sql_show.="and mem_name like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.="and mem_birth like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
          <td><?=$row_show['mem_name']?></td>
          <td><?=$row_show['reg_card']?></td>
          <td><?=$row_show['mem_sex']?></td>
          <td><?=$row_show['mem_phone']?></td>
          <td><?=$row_show['mem_add']?></td>
          <td><div align="center"><a href="edit.php?edit_id=<?=$row_show[mem_id]?>">แก้ไข</a></div></td>
        </tr>
        <?
}
?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>