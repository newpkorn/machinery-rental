<?@session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<link href="../css/css1.css" rel="stylesheet" type="text/css">

</head>
<? include("../inc_connect.php"); ?>
<? 
//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_admin where adm_id= '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>

<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="save_updateAdmin.php">
    <table width="1000"  border="0" cellpadding="0" cellspacing="0">
      <tr valign="top">
        <td colspan="2"><? include("inc_header.php"); ?></td>
      </tr>
      <tr valign="top">
        <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
      </tr>
      <tr valign="top">
        <td width="23%" height="114" bgcolor="#E7E6E6"><table width="100%" height="49"  border="0">
          <tr>
            <td width="100%" height="45"><center>
              ชื่อผู้ใช้งาน : <?=$_SESSION['emp_name']?>
            </center></td>
          </tr>
        </table>
          <table width="100%" height="52"  border="0">
            <tr>
              <td width="100%" height="48"><center>
                <input name="imageField2" type="image" id="imageField2" src="../images/nopic.gif" />
              </center></td>
            </tr>
          </table>
          <table width="100%" height="38"  border="0">
            <tr>
              <td width="100%" height="34"><input type="image" name="imageField3" id="imageField3" src="..//images/bullet.gif" />
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
          <table width="100%" height="27"  border="0">
            <tr>
              <td width="100%" height="23">&nbsp;</td>
            </tr>
          </table></td>
        <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
            <td background="../images/rim_02.gif"><img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
            <td background="../images/rim_02.gif">&nbsp;</td>
            <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
          </tr>
          <tr>
            <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
            <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
              <tr>
                <td width="47%"><strong>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง จังหวัดมหาสารคาม</strong></td>
                <td width="53%" align="right">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" background="../images/dot1.gif" height="10"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="100%"  border="0">
                  <tr>
                    <td colspan="2"><strong>แก้ไขข้อมูลเจ้าหน้าที่</strong></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="45" bgcolor="#FFFFFF"><label>&nbsp;รหัสเจ้าหน้าที่</label></td>
                    <td bgcolor="#FFFFFF"><label for="txtID"></label>
                      <input type="text" name="txtID" id="txtID" value="<?=$row_show['mem_id']?>" />                      
                      *</td>
                  </tr>
                  <tr>
                    <td height="45" bgcolor="#FFFFFF"><label>&nbsp;ชื่อ-สกุล</label>
                      &nbsp;</td>
                    <td bgcolor="#FFFFFF"><label for="txtName"></label>
                      <label for="txtName2"></label>
                      <input type="text" name="txtName" id="txtName" value="<?=$row_show['mem_name']?>" />
* </td>
                  </tr>
                  <tr>
                    <td height="43" bgcolor="#FFFFFF"><label>&nbsp;ตำแหน่ง</label>
                      &nbsp;</td>
                    <td bgcolor="#FFFFFF"><label for="txtPos"></label>
                      <input type="text" name="txtPos" id="txtPos" value="<?=$row_show['mem_position']?>" /></td>
                  </tr>
                  <tr>
                    <td height="43" bgcolor="#FFFFFF">&nbsp;วันเดือนปีเกิด</td>
                    <td bgcolor="#FFFFFF"><input type="text" name="txtBirth" id="txtBirth" value="<?=$row_show['mem_birth']?>"/>
                      *</td>
                  </tr>
                  <tr>
                    <td height="43" bgcolor="#FFFFFF"><label>&nbsp;เลขบัตรประจำตัวประชาชน</label>
                      &nbsp;</td>
                    <td bgcolor="#FFFFFF"><label for="txtCode"></label>
                      <input name="txtCode" type="text" id="txtCode" maxlength="13"  value="<?=$row_show['reg_card']?>" />
                      * </td>
                  </tr>
                  <tr>
                    <td height="45" bgcolor="#FFFFFF"><label>&nbsp;เบอร์โทร</label>
                      &nbsp;</td>
                    <td bgcolor="#FFFFFF"><label for="Phone"></label>
                      <input name="Phone" type="text" id="Phone" maxlength="10"  value="<?=$row_show['mem_phone']?>" />
                      * </td>
                  </tr>
                  <tr>
                    <td height="40" bgcolor="#FFFFFF"><label>&nbsp;ที่อยู่</label>
                      &nbsp;</td>
                    <td bgcolor="#FFFFFF"><label for="txtAdd"></label>
                      <textarea name="txtAdd" id="txtAdd" cols="45" rows="5"> <?=$row_show['mem_add']?> </textarea></td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#FFFFFF"><label>&nbsp;ชื่อเข้าใช้งาน</label>
&nbsp;</td>
                    <td bgcolor="#FFFFFF"><input name="txtUser" type="text" id="txtUser" maxlength="15" value="<?=$row_show['mem_user']?>" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#FFFFFF"><label>&nbsp;รหัสผ่าน</label>
&nbsp;</td>
                    <td bgcolor="#FFFFFF"><input name="txtPass" type="text" id="txtPass" maxlength="15" value="<?=$row_show['mem_pass']?>" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#FFFFFF">&nbsp;</td>
                    <td bgcolor="#FFFFFF"><table width="114" border="0">
                      <tr>
                        <td width="55"><input type="submit" name="Update" id="Update" value="Edit" /> <input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" /></td>
                        <td width="140">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="21%"></td>
                    <td width="79%"><span class="style2"></span></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" background="../images/dot1.gif" height="10"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table></td>
            <td background="../images/rim_07.gif"><img src="../images/rim_07.gif" width="23" height="11" alt=""></td>
          </tr>
          <tr>
            <td height="300" background="../images/rim_05.gif">&nbsp;</td>
            <td background="../images/rim_07.gif">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="../images/rim_10.gif" width="20" height="25" alt=""></td>
            <td background="../images/rim_11.gif"><img src="../images/rim_11.gif" width="8" height="25" alt=""></td>
            <td background="../images/rim_11.gif">&nbsp;</td>
            <td><img src="../images/rim_13.gif" width="23" height="25" alt=""></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>
