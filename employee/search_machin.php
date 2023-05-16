<? @session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {color: #FFFFFF}
.style6 {color: #FFFFFF; font-weight: bold; }
.style7 {color: #FF0000; }
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
<span class="style1">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><img src="../images/admin.png" alt="" width="100" height="99"></td>
        </tr>
        <tr>
          <td width="100%" height="48"><center>
          <table width="97%" height="173" align="center" border="0" bgcolor="#FFFFFF">
            <tr>
              <td width="100%" height="34">&nbsp;&nbsp;<img src="../images/home.gif" alt="" width="16" height="14">                <a href="Menu_Detail.php">หน้าแรก</a></td>
            </tr>
            <tr>
              <td height="34">&nbsp;&nbsp;<img src="../images/edit.gif" alt="" width="15" height="15">&nbsp;<a href="search_machin.php">ข้อมูลเครื่องจักรกล</a></td>
            </tr>
            <tr>
              <td height="34">&nbsp;&nbsp;<img src="../images/addg.GIF" alt="" width="15" height="15"><a href="DesignInsertMachine.php">&nbsp;เพิ่มข้อมูลเครื่องจักรกล</a></td>
            </tr>
            <tr>
              <td height="37">&nbsp;&nbsp;<img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
            </tr>
          </table>
          </center></td>
        </tr>
    </table>
    </td>
    <td width="100%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
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
            <td width="100%" colspan="2"><strong><marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</marquee> </strong></td>
           
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF"><table width="100%"  border="0">
            
              
                
            </table>
              <table width="100%" height="162" border="0" align="center">
                <tr>
                  <td width="50%" align="right"><img src="../images/icon_search11.gif" width="50" height="50"></td>
                  <td width="50%"><span class="style51">ค้นหาเครื่องจักรกล</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center" width="100%><form id="form1" name="form1" method="post" action="search_machin.php">
      คำที่ต้องการค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
<select name="fields" >
  <option value="1" selected="selected" <? echo $select1;?>>รหัสเครื่อง</option>
  <option value="2" <? echo $select1;?>>ทะเบียน</option>
  <option value="3"<? echo $select2;?>>ชื่อเครื่องจักรกล</option>
  <option value="4" <? echo $select3;?>>ขื่อผู้ดูแล</option>
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
	if($_POST[fields]=="4"){$select3="selected";}
?><br>

                    <table width="100%" border="0">
                      <tr>
                      	<td width="8%" height="31" bgcolor="#0066CC"><div align="center" class="style2"><strong>รหัส</strong></div></td>
                        <td width="17%" bgcolor="#0066CC"><div align="center" class="style6">ชื่อ</div></td>
                        <td width="8%" bgcolor="#0066CC"><div align="center" class="style6">ทะเบียน</div></td>
          <td width="13%" bgcolor="#0066CC"><div align="center" class="style6">ยี่ห้อ</div></td>
          <td width="13%" bgcolor="#0066CC"><div align="center" class="style6">ประเภท</div></td>
          <td width="6%" bgcolor="#0066CC"><div align="center" class="style6">ราคา</div></td>
		            <td width="6%" bgcolor="#0066CC"><div align="center" class="style6">หน่วย</div></td>
          <td width="5%" bgcolor="#0066CC"><div align="center" class="style6">สถานะ</div></td>
		  		  <td width="5%" bgcolor="#0066CC"><div align="center" class="style6">รูปภาพ</div></td>
          <td width="13%" bgcolor="#0066CC"><div align="center" class="style6">ผู้ดูแล</div></td>
          <td width="6%" bgcolor="#0066CC"><div align="center" class="style6">แก้ไข</div></td>
          <td width="6%" bgcolor="#0066CC"><div align="center" class="style6">ลบ</div></td>
                      </tr>
                      
                      <?
$sql_show = "select * from tb_machin , tb_machinery_brand , tb_machinery_control , tb_machinery_status  ,tb_machinery_type , tb_machinery_unit  where  tb_machin.mac_status=tb_machinery_status.status_id and    tb_machin.mac_unit=tb_machinery_unit.unit_id and   tb_machin.mac_type=tb_machinery_type.type_id and  tb_machin.mac_control=tb_machinery_control.control_id and  tb_machin.mac_brand=tb_machinery_brand.brand_id and tb_machin.mac_id != ''";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.="and mac_id like '%$txt_search%'";}
				else if($fields=="2"){
				$sql_show.="and mac_licen like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.="and mac_name like '%$txt_search%'";}
						else if($fields=="4"){
						$sql_show.="and mac_control like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
        <td bgcolor="#CCFFFF"><span class="style1">
          <?=$row_show['mac_id']?>
        </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['mac_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['mac_licen']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['brand_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['type_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['mec_price']?>
          </span></td>
		   <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['unit_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['status_name']?>
          </span></td>
		    <td bgcolor="#CCFFFF"><A HREF="../images_machinery/<?if($row_show[mac_picture]!=""){echo"$row_show[mac_picture]";}else{echo"nopic.jpg";}?>" target="_blank" class="style7">ดูภาพ</A></td>
          <td bgcolor="#CCFFFF"><span class="style1">
            <?=$row_show['control_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><div align="center" class="style1"><a href="editMachin.php?edit_id=<?=$row_show['mac_id']?>"><img src="../images/edit.gif" alt="" width="15" height="15"></a></div></td>
           <td bgcolor="#CCFFFF"><div align="center" class="style1"><a href="del_Machin.php?del_id=<?=$row_show[mac_id]?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></div></td>
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
