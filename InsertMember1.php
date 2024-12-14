<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
body,td,th {
	font-family: MS Sans Serif, CordiaUPC;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-family: MS Sans Serif, CordiaUPC;
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style2 {color: #000000}
.style3 {
	color: #0000FF;
	font-weight: bold;
	font-size: 24px;
	font-family: "TH SarabunPSK";
}
-->
</style>

<script language="javascript">
      	function chkdata()<!--chkdata คือ ชื่อ function-->
           	{
                      	if(txtMemID.value=='')
                      	{
                         	alert(' กรอก Test ด้วย ครับ');txtMemID.focus();
                                	return false;
                        }
						
						if(txtName.value=='')
                      	{
                         	alert(' กรอก Test ด้วย ครับ');txtName.focus();
                                	return false;
                        }
           }
</script>

</head>
<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="mem_register.php">
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
              ชื่อผู้ใช้งาน : Admin
            </center></td>
          </tr>
        </table>
          <table width="100%" height="52"  border="0">
            <tr>
              <td width="100%" height="48"><center>
                <input name="imageField2" type="image" id="imageField2" src="/TestDream/images/nopic.gif" />
              </center></td>
            </tr>
          </table>
          <table width="100%" height="38"  border="0">
            <tr>
              <td width="100%" height="34"><img src="images/bullet.gif" > <a href="Menu_Detail.php">หน้าแรก</a></td>
            </tr>
          </table>
          <table width="100%" height="29"  border="0">
            <tr>
              <td width="100%" height="25"><img src="images/bullet.gif" >&nbsp;<a href="Search/search_member.php">ข้อมูลสมาชิก</a></td>
            </tr>
          </table>
          <table width="100%" height="31"  border="0">
            <tr>
              <td width="100%" height="27"><img src="images/bullet.gif" >&nbsp;<a href="logout.php">ออกจากระบบ</a></td>
            </tr>
          </table>
          <table width="100%" height="28"  border="0">
            <tr>
              <td width="100%" height="24">&nbsp;</td>
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
            <td width="20"><img src="images/rim_01.gif" width="20" height="22" alt=""></td>
            <td background="images/rim_02.gif"><img src="images/rim_02.gif" width="8" height="22" alt=""></td>
            <td background="images/rim_02.gif">&nbsp;</td>
            <td width="23"><img src="images/rim_04.gif" width="23" height="22" alt=""></td>
          </tr>
          <tr>
            <td background="images/rim_05.gif"><img src="images/rim_05.gif" width="20" height="11" alt=""></td>
            <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
              <tr>
                <td width="47%"><strong>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง จังหวัดมหาสารคาม</strong></td>
                <td width="53%" align="right">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"  height="10"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="100%"  border="0" bgcolor="#CCFFFF">
                  <tr>
                    <td colspan="2" align="center" bgcolor="#00CCFF" class="style3">เพิ่มข้อมูลสมาชิก</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="right"><label>&nbsp;รหัสสมาชิก : </label>
&nbsp;</td>
                    <td><input name="txtName2" type="text" id="txtName2" />
* </td>
                  </tr>
                  <tr>
                    <td height="45" align="right"><label>&nbsp;ชื่อ-สกุล : </label>
                      &nbsp;</td>
                    <td><label for="txtName"></label>
                      <input name="txtName" type="text" id="txtName" />
                      * </td>
                  </tr>
                  <tr>
                    <td height="70" align="right"><label>&nbsp;เพศ : </label>
                      &nbsp;</td>
                    <td><table width="168" border="0">
                      <tr>
                        <td width="37">&nbsp;
                          <input type="radio" name="sex" id="sex" value="male"  checked="checked"/>
                          <label for="sex"></label></td>
                        <td width="121"><label>ชาย</label>
                          &nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;
                          <input type="radio" name="sex" id="sex1" value="female" />
                          <label for="sex1"></label></td>
                        <td><label>หญิง</label>
                          &nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="43" align="right">&nbsp;วันเดือนปีเกิด :   </td>
                    <td><input type="text" name="txtBirth" id="txtBirth" />
                      *</td>
                  </tr>
                  <tr>
                    <td height="43" align="right"><label>&nbsp;เลขบัตรประจำตัวประชาชน</label>
:                      &nbsp;</td>
                    <td><label for="txtCode"></label>
                      <input name="txtCode" type="text" id="txtCode" maxlength="13" />
                      * </td>
                  </tr>
                  <tr>
                    <td height="45" align="right"><label>&nbsp;เบอร์โทร : </label>
                      &nbsp;</td>
                    <td><label for="Phone"></label>
                      <input name="Phone" type="text" id="Phone" maxlength="10" />
                      * </td>
                  </tr>
                  <tr>
                    <td height="40" align="right"><label>&nbsp;ที่อยู่</label>
:                      &nbsp;</td>
                    <td bordercolor="#66FFFF"><label for="txtAdd"></label>
                      <textarea name="txtAdd" id="txtAdd" cols="45" rows="5"></textarea></td>
                  </tr>
                  <tr>
                    <td height="44">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="44">&nbsp;</td>
                    <td bordercolor="#FFFFFF"><table width="114" border="0">
                      <tr>
                        <td width="55"><input type="submit" name="submit" id="submit" value="Submit" /></td>
                        <td width="140"><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
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
                <td colspan="2"  height="10"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table></td>
            <td background="images/rim_07.gif"><img src="images/rim_07.gif" width="23" height="11" alt=""></td>
          </tr>
          <tr>
            <td height="300" background="images/rim_05.gif">&nbsp;</td>
            <td background="images/rim_07.gif">&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/rim_10.gif" width="20" height="25" alt=""></td>
            <td background="images/rim_11.gif"><img src="images/rim_11.gif" width="8" height="25" alt=""></td>
            <td background="images/rim_11.gif">&nbsp;</td>
            <td><img src="images/rim_13.gif" width="23" height="25" alt=""></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>
