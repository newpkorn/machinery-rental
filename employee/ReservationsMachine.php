<?@session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #0000CC}
.style4 {color: #0000FF}
.style6 {color: #FFFFFF; font-weight: bold; }
.style7 {color: #0066CC}
-->
</style>
<form action="addreserv.php" method="post" name="form1" id="form1">
<script language='javascript' src='popcalendar.js'></script>
<script language="javascript" src="jquery-1.4.2.min.js"></script>  
<script type="text/javascript">  
$(function(){  
    $("#addRow").click(function(){  
        $("#myTbl").append($("#firstTr").clone());  
    });  
    $("#removeRow").click(function(){  
        if($("#myTbl tr").size()>1){  
            $("#myTbl tr:last").remove();  
        }else{  
            alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");  
        }  
    });           
});  
</script>  
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
            <span class="style1">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="52"  border="0">
        <tr>
          <td width="100%" height="48"><center>
            <img src="../images/admin.png" alt="" width="100" height="99" />
          </center></td>
        </tr>
    </table>
      <table width="91%" height="137"  border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td height="25"><img src="../images/home.gif" alt="" width="16" height="14" /><a href="Menu_Detail.php"> หน้าแรก</a></td>
        </tr>
        <tr>
          <td height="25"><img src="../images/note.png" alt="" width="15" height="15" />&nbsp;<a href="ReservationsMachine.php">จองเครื่องจักรกล</a></td>
        </tr>
        <tr>
          <td height="25"><img src="../images/icon_searchMenu.gif" alt="" width="15" height="15" />&nbsp;<a href="search_reserv.php">ค้นหาข้อมูลการจอง</a></td>
        </tr>
        <tr>
          <td height="25"><img src="../images/view.gif" alt="" width="15" height="15" />&nbsp;<a href="report_book.php" target="_blank">รายงานการจอง</a></td>
        </tr>
        <tr>
          <td width="100%" height="25"><img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
        </tr>
    </table> 
    </td>
    <td width="84%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt="" /></td>
        <td width="591" background="../images/rim_02.gif">&nbsp;</td>
        <td width="369" background="../images/rim_02.gif">&nbsp;</td>
        <td width="32"><img src="../images/rim_04.gif" width="23" height="22" alt="" /></td>
      </tr>



      <tr>
        <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt="" /></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><legend><img src="../images/menu/reserv.jpg" alt="" width="375" height="43" /></legend>
          <table width="100%"  border="0">
            <tr>
              <td width="7%">สมาชิก</td>
              <td width="22%" align="left">
	  					    <select name="mem_name">
		 <? 
						  $sqlmember=mysql_query("select * from  tb_member");
						  while($rsmember= mysql_fetch_array($sqlmember))
						  {
						  ?>
                        <option value="<? echo $rsmember[0];?>" <? if($row_show["mac_brand"]===$rsmember[0]) echo " selected ";?>><? echo $rsmember[mem_name];?></option>
						<?}?>

                    </select>

			<!-- 		<input type="text" name="mem_name" size="40"  id="mem_name" value=""/>	 -->
			  </td>
           <td width="7%">เครื่องจักรกล</td>
              <td width="30%" align="left">
			  	&nbsp;&nbsp;    <button id="addRow" type="button">&nbsp; + &nbsp;</button>    
    &nbsp;  
    <button id="removeRow" type="button">&nbsp; -- &nbsp;</button>
    <span class="style7">+ จองมากกว่าหนึ่งรายการ</span>  
 <table id="myTbl" width="" border="0" cellspacing="2" cellpadding="0">  
  <tr id="firstTr">  
            <td width="459"class="style14"><div align="left">
			
			<select name="machin_name[]" id="machin_name[]">  
		 <? 
						  $sqlmachin=mysql_query("select * from  tb_machin where mac_status=2 order by mac_name");
						  while($rsmachin= mysql_fetch_array($sqlmachin))
						  {
						  ?>
                        <option value="<? echo $rsmachin[0];?>"><? echo $rsmachin[mac_name];?></option>
						<?}?>

                    </select>
	</div></td>
    </tr>  
</table> 

			    
				
			  </td>
            </tr>
            <tr>
             
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td  >วันที่จอง</td>
              <td  align="left">  <input type="text" name="StartDate" id="StartDate" value="<?=$StartDate?>" onKeyPress="kod_pum()"/>&nbsp;
			  		   <script language='javascript'>
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, form1.StartDate, \"dd/mm/yyyy\")' value=' Date ' style='font-size:11px'>")
   }

              </script> </td>
              <td  >วันที่รับ</td>
              <td  align="left"> <input type="text" name="ArriveDate"  id="ArriveDate" value="<?=$ArriveDate?>" onKeyPress="kod_pum()"/>&nbsp;
			   <script language='javascript'>
  
    if (!document.layers) {
     document.write("<input type=button onclick='popUpCalendar(this, form1.ArriveDate, \"dd/mm/yyyy\")' value=' Date ' style='font-size:11px'>")
   }

              </script> </td>
            </tr>
            <tr>
              <td height="39" align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
              <td ><input  type="submit" name="ค้นหา" id="ค้นหา2" value="     เพิ่ม     " /></td>
            </tr>

    </form>


            <tr>
              <td height="56" colspan="4"><table width="100%" border="1">
                <tr>
				<td width="10%" height="30" align="center" bgcolor="#0066CC"><span class="style6">รหัสการจอง</span></td>
                  <td width="14%"align="center" bgcolor="#0066CC"><span class="style6">สมาชิก</span></td>
                  <td width="13%" align="center"bgcolor="#0066CC"><span class="style6">เจ้าหน้าที่</span></td>
                  <td width="23%" align="center"bgcolor="#0066CC"><span class="style6">เครื่องจักรกล</span></td>
                  <td width="10%" align="center"bgcolor="#0066CC"><span class="style6">วันที่จอง</span></td>
                  <td width="12%"align="center" bgcolor="#0066CC"><span class="style6">วันที่รับ</span></td>
				  <td width="11%" align="center"bgcolor="#0066CC"><span class="style6">พิมพ์ใบเสร็จ</span></td>
				  <td width="7%" align="center"bgcolor="#0066CC"><span class="style6">ลบ</span></td>
                </tr>
    
<?  $sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id  ");
						  while($rsreserv= mysql_fetch_array($sqlreserv))
						  {?>
                <tr>
                  <td align="center" bgcolor="#CCFFFF"><span class="style4">
                    <?=$rsreserv[0];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style4">
                    <?=$rsreserv[mem_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style4">
                    <?=$rsreserv[emp_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF">
		            <span class="style4">
				  <?		    $sqltype=mysql_query("select * from   tb_reserv_detail ,tb_machin  where  tb_machin.mac_id=tb_reserv_detail.mac_id and res_id='$rsreserv[res_id]' ");
						  while($rstype= mysql_fetch_array($sqltype)){?>
				  
				  <?=$rstype[mac_name];?>
				  <BR>
				  <?}?>				  
				    </span></td>
                  <td align="center" bgcolor="#CCFFFF"><span class="style4">
                    <?$eng_date=strtotime("$rsreserv[res_date]");    
echo thai_date1($eng_date);?>
                  </span> </td>
				  <td align="center" bgcolor="#CCFFFF"><span class="style4">
				    <?$eng_date2=strtotime("$rsreserv[rec_date]");    
echo thai_date1($eng_date2);?>
				  </span> </td>
                  <td align="center" bgcolor="#CCFFFF"><A HREF="form/form_Receipt.php?idr=<?=$rsreserv[0];?>&print=1 "  target="_blank" class="style4"><img src="../images/printmgr.png" alt="" width="20" height="20" /></A></td>
				  <td align="center"bgcolor="#CCFFFF"><div align="center" class="style4"><a href="del_Reserv.php?del_id=<?=$rsreserv[0]?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></div></td>
                </tr>
<?}?>

              </table></td>
            </tr>
          </table>
          <table width="737" border="0">
            <tr>
              <td width="241">&nbsp;</td>
              <td width="399">&nbsp;</td>
              <td width="83">&nbsp;</td>
            </tr>
          </table></td>
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
<script language="javascript">
<!--//

function check_number() {
e_k=event.keyCode
if (((e_k < 48) || (e_k > 47)) && e_k != 46 && e_k != 13) {
//if (e_k != 13 && (e_k < 48) || (e_k > 57) || e_k == ) {
event.returnValue = false;
alert(" กรุณาใส่วันที่ โดยการกดปุ่ม DATE");
}
} 

function reportmonth(){



 exporttype = document.form1.sel_exportType.value;
$URL="ReservationsMachine.php?StartDate="+document.forms[0].StartDate.value+"&exp="+exporttype+"&ArriveDate="+document.forms[0].ArriveDate.value;
window.open($URL,'','toolbar=no,location=no,status=no,resizable=yes,menubar=no,scrollbars=yes');

}//of function

function kod_pum() {
alert('การใส่วันที่ต้องทำการกดปุ่ม Date เท่านั้นครับ');
		event.returnValue = false;
} 
</script>

