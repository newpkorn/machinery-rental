<?@session_start();  include("../inc_connect.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
		<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
			  alert( 'กรอกได้เฉพาะตัวเลข 0-9 ' );
	    	}
	}
</script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {font-weight: bold}
.style3 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>
 

<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="editcontact.php">
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
              <span class="style3">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['adm_name']?>
            </center></td>
          </tr>
        </table>
          <table width="100%" height="52"  border="0">
            <tr>
              <td width="100%" height="48"><center>
                <img src="../images/administrator.jpg" alt="" width="100" height="99">
              </center></td>
            </tr>
          </table>
          <table width="93%" height="38"  border="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></strong></td>
              </tr>
            
              <tr>
                <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php"> ออกจากระบบ</a></strong></td>
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
                <td colspan="2"  height="10"></td>
              </tr>

			  <?$sql_show = "select * from tb_contact where contact_id = '1'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);?>
              <tr>
                <td colspan="2"><table width="69%"  border="0" align="center" bgcolor="#CCFFFF">
                  <tr>
                    <td colspan="2" align="center" bgcolor="#99FFFF"><span class="style4">ข้อมูลการติดต่อหน่วยงาน</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="45" align="right" bgcolor="#CCFFFF"><span class="style3">
                      <label>&nbsp;ที่อยู่ : </label>
                      &nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><label for="txtName"></label>
                     
					  <TEXTAREA NAME="addr" id="addr"  ROWS="5" COLS="40"><?=$row_show['contact_add']?></TEXTAREA><span class="style1">*</span>
					  
					  </td>
                  </tr>
                  <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style3">&nbsp;โทรศัพท์ : </span></td>
                    <td bgcolor="#CCFFFF"><input type="text" name="tel" id="tel" size="15" value="<?=$row_show['contact_tel']?>" maxlength="10" onKeyPress="CheckNum()"/>
                      <span class="style1">*</span></td>
                  </tr>

				   <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style3">&nbsp;อีเมล์ : </span></td>
                    <td bgcolor="#CCFFFF"><input type="text" value="<?=$row_show['contact_mail']?>" name="email" id="email" size="50"/>
                      <span class="style1">*</span></td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF"><table width="114" border="0">
                      <tr>
                        <td width="55"><input type="submit" name="Update" id="Update" value="แก้ไขข้อมูล" /></td>
                        <td width="140">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="26%"></td>
                    <td width="74%"><span class="style2"></span></td>
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
