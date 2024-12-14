<? @session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
</head>

<SCRIPT language="JavaScript">
<!--   
  function Conf(object) {
  if (confirm("คุณต้องการลบข้อมูล ?") == true) {
  return true;
  }
  return false;
  }
//-->
</SCRIPT>

<body><font size="+5">
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><? include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6">
    <table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>
ชื่อผู้ใช้งาน : <?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><input name="imageField2" type="image" id="imageField2" src="../images/nopic.gif" /></td>
        </tr>
        <tr>
          <td width="100%" height="48"><center>
            <table width="100%" height="38"  border="0">
              <tr>
                <td width="100%" height="34"><input type="image" name="imageField3" id="imageField3" src="../images/bullet.gif" />
                  <a href="Menu_Detail.php">หน้าแรก</a></td>
              </tr>
            </table>
            <table width="100%" height="29"  border="0">
              <tr>
                <td width="100%" height="25"><img src="../images/bullet.gif" >&nbsp;<a href="search_admin.php">ข้อมูลเจ้าหน้าที่</a></td>
              </tr>
            </table>
            <table width="100%" height="31"  border="0">
              <tr>
                <td width="100%" height="27"><img src="../images/bullet.gif" >&nbsp;<a href="InsertAdmin.php">เพิ่มข้อมูลเจ้าหน้าที่</a></td>
              </tr>
            </table>
            <table width="100%" height="28"  border="0">
              <tr>
                <td width="100%" height="24"><img src="../images/bullet.gif" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
              </tr>
            </table>
            <table width="100%" height="36"  border="0">
              <tr>
                <td width="100%" height="32">&nbsp;</td>
              </tr>
            </table>
          </center></td>
        </tr>
    </table>
    </td>
    <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"> <img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
        <td background="../images/rim_02.gif"> <img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
        <td background="../images/rim_02.gif">&nbsp; </td>
        <td width="23"> <img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"> <img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
          <tr>
            <td width="48%"><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </strong></td>
            <td width="52%" align="right">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0">
            
              
                
            </table>
              <table width="690" height="162" border="0" align="center">
                <tr>
                  <td width="245" align="right"><img src="../images/icon_search11.gif" width="50" height="50"></td>
                  <td width="239"><span class="style51">ค้นหาเจ้าหน้าที่</span></td>
                </tr>
                <tr>
                  <td colspan="2"><form id="form1" name="form1" method="post" action="search_admin.php">
      คำที่ต้องการค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
<select name="fields" >
  <option value="1" selected="selected" <? echo $select1;?>>รหัส</option>
  <option value="2"<? echo $select2;?>>ชื่อ</option>
  <option value="3" <? echo $select3;?>>ว/ด/ปี เกิด</option>
</select>
&nbsp;
<input type="submit" name="Submit" value="ค้นหา" />
     </form></td>
                  </tr>
                <tr>
                  <td colspan="2">
                  

                  
				  <?php
	if($_POST[fields]=="1"){$select1="selected";}
	if($_POST[fields]=="2"){$select2="selected";}
	if($_POST[fields]=="3"){$select3="selected";}
?><br>

                    <table width="667" border="0">
                      <tr>
                      	<td width="50" bgcolor="#CCCCCC"><div align="center">รหัส</div></td>
                        <td width="99" bgcolor="#CCCCCC"><div align="center">ชื่อ</div></td>
                        <td width="64" bgcolor="#CCCCCC"><div align="center">ตำแหน่ง</div></td>
          <td width="60" bgcolor="#CCCCCC"><div align="center">เพศ</div></td>
          <td width="68" bgcolor="#CCCCCC"><div align="center">เบอร์โทร</div></td>
          <td width="72" bgcolor="#CCCCCC"><div align="center">ที่อยู่</div></td>
          <td width="56" bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
          <td width="26" bgcolor="#CCCCCC"><div align="center">ลบ</div></td>
                      </tr>
                      
                      <?
$sql_show = "select * from tb_admin where adm_id is not null";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.=" and adm_id like '%$txt_search%'";}
				else if($fields=="2"){
						$sql_show.=" and adm_name like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.=" and adm_birth like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
        <td><?=$row_show['adm_id']?></td>
          <td><?=$row_show['adm_name']?></td>
          <td><?=$row_show['Position_id']?></td>
          <td><?=$row_show['sex']?></td>
          <td><?=$row_show['phone']?></td>
          <td><?=$row_show['address']?></td>
          <td><div align="center"><a href="editAdmin.php?edit_id=<?=$row_show['adm_id']?>">แก้ไข</a></div></td>
           <td><div align="center"><a href="del_Admin.php?del_id=<?=$row_show[adm_id]?>" onClick='return Conf(this)' >ลบ</a></div></td>
        </tr>
        <?
}
?>
                      
                    </table></td>
                </tr>
                <tr>
                 
                  </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td background="../images/rim_07.gif"> <img src="../images/rim_07.gif" width="23" height="11" alt=""></td>
      </tr>
      <tr>
        <td height="300" background="../images/rim_05.gif">&nbsp; </td>
        <td background="../images/rim_07.gif">&nbsp; </td>
      </tr>
      <tr>
        <td> <img src="../images/rim_10.gif" width="20" height="25" alt=""></td>
        <td background="../images/rim_11.gif"> <img src="../images/rim_11.gif" width="8" height="25" alt=""></td>
        <td background="../images/rim_11.gif">&nbsp; </td>
        <td> <img src="../images/rim_13.gif" width="23" height="25" alt=""></td>
      </tr>
    </table></td>
  </tr>
</tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"></td>
  </tr>
</table>
</font>
</body>
</Center>
</html>
