<?@session_start(); include("../inc_connect.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
	<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
			  alert( '��͡��੾�е���Ţ 0-9 ' );
	    	}
	}
</script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
.style4 {color: #0000FF; font-weight: bold; }
-->
</style>
</head>


<? 
//���¡�����Ũҡ ���� ���ʴ�� textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machin where mac_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>

<body><font size="-1">
<center>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><form action="" method="post" name="form1" id="form1">
      <input type="image" name="imageField" id="imageField" src="../images/HeadeIndexr.png" />
    </form></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6"><table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>
            <span class="style4">���ͼ����ҹ </span>: <?=$_SESSION['adm_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="52"  border="0">
        <tr>
          <td width="100%" height="48"><center>
            <img src="../images/administrator.jpg" alt="" width="100" height="100" />
          </center></td>
        </tr>
    </table>
      <table width="95%" height="146"  border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td height="34"><strong>&nbsp;&nbsp;<img src="../images/home.gif" alt="" width="16" height="14" />            <a href="Menu_Detail.php">˹���á</a></strong></td>
        </tr>
        <tr>
          <td height="34"><strong>&nbsp;&nbsp;<img src="../images/edit.gif" alt="" width="15" height="15" />&nbsp;<a href="search_machin.php">����������ͧ�ѡá�</a></strong></td>
        </tr>
        <tr>
          <td height="34"><strong>&nbsp;&nbsp;<img src="../images/addg.GIF" alt="" width="15" height="15" />&nbsp;<a href="DesignInsertMachine.php">��������ͧ�ѡá�</a></strong></td>
        </tr>
        <tr>
          <td width="100%" height="34"><strong>&nbsp;&nbsp;<img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">�͡�ҡ�к�</a></strong></td>
        </tr>
    </table>
<!-- <table width="100%" height="27"  border="0">
  <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="ReservationsMachine.php">�ͨͧ����ͧ�ѡá�</a></td>
        </tr>
  </table>
      <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="RentMachine.php">���������ͧ�ѡá�</a></td>
        </tr>
      </table>
       <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="ReturntMachine.php">�Ѻ��׹����ͧ�ѡá�</a></td>
        </tr>
      </table> -->
      
      </td>
    <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt="" /></td>
        <td background="../images/rim_02.gif"><img src="../images/rim_02.gif" width="8" height="22" alt="" /></td>
        <td background="../images/rim_02.gif">&nbsp;</td>
        <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt="" /></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt="" /></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
          <form id="form1" name="form1" method="post" action="save_updateMachin.php" enctype="multipart/form-data" >
          <table width="101%" height="515"  border="0">
            <tr>
              <td colspan="2"><fieldset>
                <legend class="style2"><strong>��䢢���������ͧ�ѡá�</strong></legend>
                <table width="115%"  border="0">
                  <tr>
                    <td width="8%"  height="39" ><span class="style2">
                      <label>��������ͧ�ѡ�</label>
                    </span></td>
                    <td width="25%"><input name="mach_id" type="text" id="mach_id" size="30" maxlength="9" value="<?=$row_show['mac_id']?>" />
                      <span class="style1">*</span></td>
                    <td width="8%"><span class="style2">��������ͧ�ѡ�</span></td>
                    <td width="30%"><input name="name" type="text" id="name" size="30" maxlength="100" value="<?=$row_show['mac_name']?>" />
                      <span class="style1">*</span></td>
                    </tr>
                  <tr>
                    <td height="41" ><span class="style2">����¹</span></td>
                    <td ><input name="licen" type="text" id="licen" size="30" maxlength="100" value="<?=$row_show['mac_licen']?>" />
                      <span class="style1">*</span></td>
                    <td ><span class="style2">������</span></td>
                    <td > 
					    <select name="brand">
		 <? 
						  $sqlbrand=mysql_query("select * from  tb_machinery_brand");
						  while($rsbrand= mysql_fetch_array($sqlbrand))
						  {
						  ?>
                        <option value="<? echo $rsbrand[0];?>" <? if($row_show["mac_brand"]===$rsbrand[0]) echo " selected ";?>><? echo $rsbrand[1];?></option>
						<?}?>
                    </select>					</td>
                    </tr>
                  <tr>
                    <td height="103" ><span class="style2">������</span></td>
                    <td > 
					
							    <select name="mach_type">
		 <? 
						  $sqltype=mysql_query("select * from  tb_machinery_type");
						  while($rstype= mysql_fetch_array($sqltype))
						  {
						  ?>
                        <option value="<? echo $rstype[0];?>" <? if($row_show["mac_type"]===$rstype[0]) echo " selected ";?>><? echo $rstype[1];?></option>
						<?}?>
                    </select>					</td>
                    <td ><span class="style2">�Ҥ�</span></td>
                    <td ><input name="price" type="text" id="price" size="20" maxlength="7"  onKeyPress="CheckNum()" value="<?=$row_show['mec_price']?>" />&nbsp;&nbsp;	<select name="mach_unit">
		 <? 
						  $sqlunit=mysql_query("select * from  tb_machinery_unit");
						  while($rsunit= mysql_fetch_array($sqlunit))
						  {
						  ?>
                        <option value="<? echo $rsunit[0];?>" <? if($row_show["mac_unit"]===$rsunit[0]) echo " selected ";?>><? echo $rsunit[1];?></option>
						<?}?>

                    </select></td>
                    </tr>
                  <tr>
                    <td  height="38" ><span class="style2">ʶҹ�</span></td>
                    <td  > 
					<select name="mach_status">
		 <? 
						  $sqlstatus=mysql_query("select * from  tb_machinery_status");
						  while($rsstatus= mysql_fetch_array($sqlstatus))
						  {
						  ?>
                        <option value="<? echo $rsstatus[0];?>" <? if($row_show["mac_status"]===$rsstatus[0]) echo " selected ";?>><? echo $rsstatus[1];?></option>
						<?}?>
                    </select>					</td>
                    <td  ><span class="style2">������</span></td>
                    <td > 
								<select name="control">
		 <? 
						  $sqlcontrol=mysql_query("select * from  tb_machinery_control");
						  while($rscontrol= mysql_fetch_array($sqlcontrol))
						  {
						  ?>
                        <option value="<? echo $rscontrol[0];?>" <? if($row_show["mac_control"]===$rscontrol[0]) echo " selected ";?>><? echo $rscontrol[1];?></option>
						<?}?>
                    </select>
                                <span class="style1">*</span></td>
                    </tr>
                    <tr>
                      <td width="8%"  height="39" ><span class="style2">
                        <label>�ٻ�Ҿ</label>
                      </span></td>
                      <td width="25%"><input name="pic" type="file" id="pic" size="30"  value="" /></td>
                    <td width="8%"><input type="submit" name="Update" id="Update" value="���" />
                      <input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" /></td>
                    <td width="30%"></td>
                    </tr>
                </table>
              </fieldset></td>
              </tr>
            <tr>
              
              </tr>
            <tr>
              <td >&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" height="10"></td>
              </tr>
            <tr>
              <td height="56" colspan="2">
              	
              </td>
              </tr>
          </table>
          </form>
        </td>
        <td background="../images/rim_07.gif"><img src="../images/rim_07.gif" width="23" height="11" alt="" /></td>
      </tr>
      <tr>
        <td height="300" background="../images/rim_05.gif">&nbsp;</td>
        <td background="../images/rim_07.gif">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="../images/rim_10.gif" width="20" height="25" alt="" /></td>
        <td background="../images/rim_11.gif"><img src="../images/rim_11.gif" width="8" height="25" alt="" /></td>
        <td background="../images/rim_11.gif">&nbsp;</td>
        <td><img src="../images/rim_13.gif" width="23" height="25" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td></tr></td>
  </tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>