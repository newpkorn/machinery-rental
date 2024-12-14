<? @session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
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
<span class="style1">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['adm_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><img src="../images/administrator.jpg" alt="" width="100" height="99"></td>
        </tr>
        <tr>
          <td width="100%" height="48"><center>
            <table width="94%" height="38"  border="0" bgcolor="#FFFFFF">
			<tr>
                <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/edit.gif" alt="" width="15" height="15">&nbsp; <a href="search_position.php">ข้อมูลตำแหน่ง</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15"> &nbsp;<a href="addPosition.php">เพิ่มข้อมูลตำแหน่ง</a></strong></td>
              </tr>
              <tr>
                <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php"> ออกจากระบบ</a></strong></td>
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
            <td width="48%" colspan="2" ><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </strong></td>
  
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0">
            
              
                
            </table>
              <table width="690" height="162" border="0" align="center">
                <tr>
                  <td width="287" align="right"><img src="../images/icon_search11.gif" width="50" height="50" align="right"></td>
                  <td width="393"><span class="style51">ค้นหาข้อมูลตำแหน่ง</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><form id="form1" name="form1" method="post" action="search_position.php">
      ชื่อที่ต้องการค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit" value="ค้นหา" />
                  </form></td>
                  </tr>
                <tr>
                  <td colspan="2">
                  

                  
<br>

                    <table width="457" border="0" align="center">
                      <tr>
                      	<td width="241" height="28" align="center" bgcolor="#99FFFF"><div align="center" class="style1">ชื่อ</div></td>
          <td width="139" align="center" bgcolor="#99FFFF"><div align="center" class="style1">แก้ไข</div></td>
          <td width="63" align="center" bgcolor="#99FFFF"><div align="center" class="style1">ลบ</div></td>
                      </tr>
                      
                      <?
					  $txt_search = $_POST['txtKeyword'];
$sql_show = "select * from tb_position where pos_id is not null and name like '%$txt_search%'";
$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
        <td bgcolor="#CCFFFF"><?=$row_show['name']?></td>
          <td bgcolor="#CCFFFF"><div align="center"><a href="editPosition.php?edit_id=<?=$row_show['pos_id']?>">แก้ไข</a></div></td>
           <td bgcolor="#CCFFFF"><div align="center"><a href="del_Position.php?del_id=<?=$row_show[pos_id]?>" onClick='return Conf(this)' >ลบ</a></div></td>
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
