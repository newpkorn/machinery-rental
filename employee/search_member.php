<? @session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {color: #FFFFFF}
.style4 {color: #FFFFFF; font-weight: bold; }
.style6 {color: #0000FF; font-weight: bold; }
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
<span class="style6">ชื่อผู้ใช้งาน</span>: : 
<?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><img src="../images/admin.png" alt="" width="100" height="99"></td>
        </tr>
        <tr>
          <td width="100%" height="48"><table width="91%" height="146"  border="0" align="center" bgcolor="#FFFFFF">
            <tr>
              <td height="34"><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></td>
            </tr>
            <tr>
              <td height="34"><img src="../images/users.png" alt="" width="16" height="16">&nbsp;<a href="search_member.php">ข้อมูลสมาชิก</a></td>
            </tr>
            <tr>
              <td height="34"><img src="../images/addg.GIF" alt="" width="15" height="15"> <a href="InsertMember.php">เพิ่มข้อมูลสมาชิก</a></td>
            </tr>
            <tr>
              <td height="34"><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
            </tr>
            
          </table></td>
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
            <td width="48%" colspan="2"><strong><marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee></strong></td>
     
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0">
            
              
                
            </table>
              <table width="663" height="162" border="0" align="center">
                <tr>
                  <td width="245" align="right"><img src="../images/icon_search11.gif" width="50" height="50"></td>
                  <td width="239"><span class="style51">ค้นหาสมาชิก</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><form id="form1" name="form1" method="post" action="search_member.php">
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
                   </form> </td>
                  </tr>
                <tr>
                  <td colspan="2">
    
                    <?php
	if($_POST[fields]=="1"){$select1="selected";}
	if($_POST[fields]=="2"){$select2="selected";}
	if($_POST[fields]=="3"){$select3="selected";}
?><br>

                    <table width="624" border="0">
                      <tr>
                        <td width="111" height="28" bgcolor="#0066FF"><div align="center" class="style2"><strong>ชื่อ</strong></div></td>
          <td width="135" bgcolor="#0066FF"><div align="center" class="style4">รหัสประจำตัวประชาชน</div></td>
		  <td width="32" bgcolor="#0066FF"><div align="center" class="style4">อายุ</div></td>
          <td width="84" bgcolor="#0066FF"><div align="center" class="style4">เบอร์โทร</div></td>
          <td width="138" bgcolor="#0066FF"><div align="center" class="style4">ที่อยู่</div></td>
          <td width="58" bgcolor="#0066FF"><div align="center" class="style4">แก้ไข</div></td>
          <td width="36" bgcolor="#0066FF"><div align="center" class="style4">ลบ</div></td>
                      </tr>
                      
                      <?
$sql_show = "select * from tb_member where mem_id is not null ";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.="and reg_card like '%$txt_search%'";}
				else if($fields=="2"){
				$sql_show.="and mem_name like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.="and birthday like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['mem_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['reg_card']?>
          </span></td>
		  <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['mem_age']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['phone']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['address']?>
          </span></td>
          <td bgcolor="#CCFFFF"><div align="center" class="style1"><a href="editMember.php?edit_id=<?=$row_show[reg_card]?>"><img src="../images/edit.gif" alt="" width="15" height="15"></a></div></td>
          <td bgcolor="#CCFFFF"><div align="center" class="style1"><a href="del_Member.php?del_id=<?=$row_show[mem_id]?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></div></td>
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
