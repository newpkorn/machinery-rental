<?@session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="datetimepicker.js"></script>
		<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
			  alert( 'กรอกได้เฉพาะตัวเลข 0-9 ' );
	    	}
	}
</script>
  <script language="JavaScript">
	<!--
		if (document.images)
		{
		calimg= new Image(16,16); 
		calimg.src="../images/cal.gif"; 
		}
	//-->
</script>

  <style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {color: #FF0000}
.style4 {color: #0000FF; font-weight: bold; }
-->
  </style>
</head>
<? include("../inc_connect.php"); ?>
<? 
//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from  tb_employee where emp_id= '$edit_id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>

<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="save_update_emp.php">
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
              <span class="style4">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['adm_name']?>
            </center></td>
          </tr>
        </table>
          <table width="100%" height="52"  border="0">
            <tr>
              <td width="100%" height="48"><center>
                <img src="../images/administrator.jpg" alt="" width="100" height="100">
              </center></td>
            </tr>
          </table>
          <table width="93%" height="146"  border="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/impersonal.gif" alt="" width="16" height="16">&nbsp;<a href="search_employee.php">ข้อมูลเจ้าหน้าที่</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15">&nbsp;<a href="Insertemployee.php">เพิ่มข้อมูลเจ้าหน้าที่</a></strong></td>
              </tr>
              <tr>
                <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></strong></td>
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
                <td colspan="2" height="10"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="100%"  border="0" bgcolor="#99FFFF">
                  <tr>
                    <td colspan="2"><strong>แก้ไขข้อมูลเจ้าหน้าที่</strong></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="45" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;รหัสเจ้าหน้าที่ : </label>
                    </span></td>
                    <td bgcolor="#CCFFFF"><label for="txtID"></label>
                      <input type="text" name="txtID" id="txtID" value="<?=$row_show['emp_id']?>" />                      
                      <span class="style2">*</span></td>
                  </tr>
                  <tr>
                    <td height="45" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;ชื่อ-สกุล : </label>
                      &nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><label for="txtName"></label>
                      <label for="txtName2"></label>
                      <input type="text" name="txtNamexx" id="txtNamexx" value="<?=$row_show['emp_name']?>" />
                      <span class="style2">*</span> </td>
                  </tr>
                  <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;ตำแหน่ง : </label>
                      &nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><label for="txtPos"></label>
					<select name="txtPos" id="txtPos">
            
					  	 <? 
						  $sqlposition=mysql_query("select * from  tb_position");
						  while($rsposition= mysql_fetch_array($sqlposition))
						  {
						  ?>
                              <option value="<? echo $rsposition[0];?>" <? if($row_show["Position_id"]===$rsposition[0]) echo " selected ";?>><? echo $rsposition[1];?></option>
						<?}?>
                    </select>					  </td>
                  </tr>
                  <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style1">&nbsp;วันเดือนปีเกิด  : </span></td>
                    <td bgcolor="#CCFFFF"><input type="text" name="txtBirth1"  size="10"  id="txtBirth1" value="<?=$row_show['brithday']?>" onKeyPress="CheckNum()"/><a href="javascript:NewCal('txtBirth1','ddmmyyyy')"><img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
                      <span class="style2">*</span></td>
                  </tr>
                  
                  <tr>
                    <td height="45" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;เบอร์โทร : </label>
                      &nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><label for="Phone"></label>
                      <input name="Phone" type="text" id="Phone" maxlength="10"  value="<?=$row_show['phone']?>" onKeyPress="CheckNum()" />
                      <span class="style2">* </span></td>
                  </tr>
                  <tr>
                    <td height="40" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;ที่อยู่ : </label>
                      &nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><label for="txtAdd"></label>
                      <textarea name="txtAdd" id="txtAdd" cols="45" rows="5"><?=$row_show['address']?> </textarea>
                      <span class="style2">*</span></td>
                  </tr>
                  <tr>
                    <td height="44" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;ชื่อเข้าใช้งาน : </label>
&nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><input name="txtUser" type="text" id="txtUser" maxlength="15" value="<?=$row_show['emp_user']?>" />
                      <span class="style2">*</span></td>
                  </tr>
                  <tr>
                    <td height="44" align="right" bgcolor="#CCFFFF"><span class="style1">
                      <label>&nbsp;รหัสผ่าน : </label>
&nbsp;</span></td>
                    <td bgcolor="#CCFFFF"><input name="txtPass" type="text" id="txtPass" maxlength="15" value="<?=$row_show['emp_pass']?>" />
                      <span class="style2">*</span></td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF"><table width="114" border="0">
                      <tr>
                        <td width="55"><input type="submit" name="Update" id="Update" value="แก้ไข" /> <input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" /></td>
                        <td width="140">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="21%" bgcolor="#CCFFFF"></td>
                    <td width="79%" bgcolor="#CCFFFF"><span class="style2"></span></td>
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
