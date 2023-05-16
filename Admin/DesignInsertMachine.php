<?@session_start(); include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
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
.style2 {color: #0000FF}
-->
</style>
</head>

<body><font size="-1">
<center>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2">
      <input type="image" name="imageField" id="imageField" src="../images/HeadeIndexr.png" />
</td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6"><table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>
            <span class="style2">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['emp_name']?>
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
          <td height="34">&nbsp;&nbsp;<img src="../images/home.gif" alt="" width="16" height="14" />            <a href="Menu_Detail.php">หน้าแรก</a></td>
        </tr>
        <tr>
          <td height="34">&nbsp;&nbsp;<img src="../images/edit.gif" alt="" width="15" height="15" />&nbsp;<a href="search_machin.php">ข้อมูลเครื่องจักรกล</a></td>
        </tr>
        <tr>
          <td height="34">&nbsp;&nbsp;<img src="../images/addg.GIF" alt="" width="15" height="15" />&nbsp;<a href="DesignInsertMachine.php">เพิ่มเครื่องจักรกล</a></td>
        </tr>
        <tr>
          <td width="100%" height="34">&nbsp;&nbsp;<img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
        </tr>
    </table>
     
<!-- <table width="100%" height="27"  border="0">
  <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="ReservationsMachine.php">ขอจองเครื่องจักรกล</a></td>
        </tr>
  </table>
      <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="RentMachine.php">ขอเช่าเครื่องจักรกล</a></td>
        </tr>
      </table>
       <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;<a href="ReturntMachine.php">รับบคืนเครื่องจักรกล</a></td>
        </tr>
      </table> -->
              <table width="100%" height="28"  border="0">
            <tr>
              <td width="100%" height="24">&nbsp;</td>
            </tr>
          </table>
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
          <form id="form1" name="form1" method="post" action="insertMachin.php" enctype="multipart/form-data">
          <table width="125%"  border="0">
            <tr>
              <td width="17%">&nbsp;</td>
              <td width="53%" align="right">&nbsp;</td>
              <td width="20%" align="right">&nbsp;</td>
              </tr>
            <tr>
              <td colspan="2" height="10"><img src="../images/menu/add_machin.jpg" alt="" width="375" height="43" /></td>
              </tr>
            <tr>
              <td colspan="2">
                
                <table width="111%"  border="0">
                  <tr>
                    <td width="10%" height="39" ><span class="style2">
                      <label>รหัสเครื่องจักร</label>
                    </span></td>
                    <td width="30%" ><input name="mach_id" type="text" id="mach_id" size="20" maxlength="12" />
                      <span class="style1">*</span></td>
                    <td width="9%" ><span class="style2">ชื่อเครื่องจักร</span></td>
                    <td width="30%" ><input name="name" type="text" id="name" size="20" maxlength="100" />
                      <span class="style1">*</span></td>
                    </tr>
                  <tr>
                    <td height="41" ><span class="style2">ทะเบียน</span></td>
                    <td ><input name="licen" type="text" id="licen" size="20" maxlength="100" />
                      <span class="style1">*</span></td>
                    <td ><span class="style2">ยี่ห้อ</span></td>
                    <td ><label for="iiii"></label>
                      <label for="brand"></label>

                      <select name="brand" id="brand">
       
		 <? 
						  $sqlbrand=mysql_query("select * from  tb_machinery_brand");
						  while($rsbrand= mysql_fetch_array($sqlbrand))
						  {
						  ?>
                        <option value="<?=$rsbrand[0]?>" ><?=$rsbrand[1]?></option>
						<?}?>
                    </select>
                      <span class="style1">*</span>					  </td>
                    </tr>
                  <tr>
                    <td height="103" ><span class="style2">ประเภท</span></td>
                    <td ><label for="type"></label>
                      <select name="type" id="type">
           
		 <? 
						  $sqltype=mysql_query("select * from  tb_machinery_type");
						  while($rstype= mysql_fetch_array($sqltype))
						  {
						  ?>
                        <option value="<? echo $rstype[0];?>" ><? echo $rstype[1];?></option>
						<?}?>
                    </select>
                      <span class="style1">*</span></td>
                    <td ><span class="style2">ราคา</span></td>
                    
                        <td><input name="price" type="text" id="price" size="20" maxlength="7"  onKeyPress="CheckNum()"//><select name="mach_unit">
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
                    <td   height="38" ><span class="style2">รหัสสถานะ</span></td>
                    <td   ><label for="status"></label>
                      <select name="status" id="status">
                    		 <? 
						  $sqlstatus=mysql_query("select * from  tb_machinery_status");
						  while($rsstatus= mysql_fetch_array($sqlstatus))
						  {
						  ?>
                        <option value="<? echo $rsstatus[0];?>" ><? echo $rsstatus[1];?></option>
						<?}?>
                    </select>
                      <span class="style1">*</span></td>
                    <td ><span class="style2">รหัสผู้ดูแล</span></td>
                    <td   ><label for="control"></label>
                      <select name="control" id="control">
                 	 <? 
						  $sqlcontrol=mysql_query("select * from  tb_machinery_control");
						  while($rscontrol= mysql_fetch_array($sqlcontrol))
						  {
						  ?>
                        <option value="<? echo $rscontrol[0];?>" ><? echo $rscontrol[1];?></option>
						<?}?>
                      </select>                      
                      <span class="style1">*</span></td>
                    </tr>
                           <tr>
                             <td width="8%"  height="39" ><span class="style2">
                               <label>รูปภาพ</label>
                             </span></td>
                             <td width="25%"><input name="pic" type="file" id="pic" size="30"  value="" /></td>
                    <td width="8%"></td>
                    <td width="30%"></td>
                    </tr>
                </table>
              </td>
              </tr>
            <tr>
              
              </tr>
            <tr>
              <td >&nbsp;</td>
              <td><input type="submit" name="Submit3" value="เพิ่มข้อมูล" />
                <input type="reset" name="Submit4" value="ล้างข้อมูลReset" /></td>
              </tr>
            <tr background="images/dot1.gif">
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