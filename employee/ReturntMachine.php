<?@session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<link href="../css/css1.css" rel="stylesheet" type="text/css">
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
<style type="text/css">
<!--
.style1 {color: #0000FF}
.style3 {color: #0033FF}
.style5 {color: #FFFFFF; font-weight: bold; }
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
      <table width="92%" height="182"  border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td height="34"><img src="../images/home.gif" alt="" width="16" height="14" /> <a href="Menu_Detail.php">หน้าแรก</a></td>
        </tr>
        <tr>
          <td height="34"><img src="../images/note.png" alt="" width="15" height="15" />&nbsp;<a href="RentMachine.php">เช่าเครื่องจักรกล</a></td>
        </tr>
        <tr>
          <td height="34"><img src="../images/icon_searchMenu.gif" alt="" width="15" height="15" />&nbsp;<a href="search_rent.php">ค้นหาข้อมูลการเช่า</a></td>
        </tr>
                <tr>
          <td height="34"><img src="../images/view.gif" alt="" width="15" height="15" />&nbsp;<a href="report_return.php" target="_blank">รายงานการคืนเครื่องจักร</a></td>
        </tr>
		        <tr>
          <td height="34"><img src="../images/view.gif" alt="" width="15" height="15" />&nbsp;<a href="report_noreturn.php" target="_blank">รายงานเครื่องจักรกลที่ยังไม่คืน</a></td>
        </tr>
        <tr>
          <td width="100%" height="34"><img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
        </tr>
    </table>

</td>
    <td width="100%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt="" /></td>
        <td background="../images/rim_02.gif">&nbsp;</td>
        <td background="../images/rim_02.gif">&nbsp;</td>
        <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt="" /></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif">&nbsp;</td>
        <td colspan="2" rowspan="3" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0">
          <tr>
            <td><img src="../images/menu/return.jpg" alt="" width="375" height="43" /></td>
          </tr>
          <tr>
            <td><fieldset>
              <legend>รายละเอียดการรับคืน</legend>
              <table width="100%" border="0">
                <tr>
                  <td width=" " align="right">รหัสการเช่า</td><form id="form2" name="form2" method="post" action="ReturntMachine.php">
                  <td width=" "><input name="txt_search" type="text" id="txt_search" size="30" maxlength="100" />
                    <input type="submit" name="ค้นหา3" id="ค้นหา3" value="ค้นหา" /></td>
                  <td width=""></td>
                
                </FORM>
                <tr>
                  <td colspan="3"><table width="100%" border="1">
                    <tr>
                      <td width="8%" height="43" align="center" bgcolor="#0066CC"><span class="style5">รหัสการเช่า</span></td>
                  <td width="13%"align="center" bgcolor="#0066CC"><span class="style5">สมาชิก</span></td>
                  <td width="13%" align="center"bgcolor="#0066CC"><span class="style5">พนักงานดูแล</span></td>
				  <td width="20%" align="center"bgcolor="#0066CC"><span class="style5">รหัสเครื่อง</span></td>
                  <td width="20%" align="center"bgcolor="#0066CC"><span class="style5">เครื่องจักรกล</span></td>
                  <td width="10%" align="center"bgcolor="#0066CC"><span class="style5">วันที่เช่า</span></td>
                  <td width="10%"align="center" bgcolor="#0066CC"><span class="style5">วันที่คืน</span></td>
				   <td width="10%" align="center"bgcolor="#0066CC"><span class="style5">รับคืน</span></td>
                    </tr>
                 <?  
$sqlreserv=mysql_query("select * from   tb_back_detail ,tb_machin where tb_back_detail.mac_id=tb_machin.mac_id and tb_back_detail.b_status='2' ");

						  while($rsreserv= mysql_fetch_array($sqlreserv))
						  {
		$sqlreserv1=mysql_query("select * from   tb_back , tb_employee, tb_member where tb_back.leas_id=$rsreserv[0] and tb_back.emp_id=tb_employee.emp_id and tb_back.mem_id=tb_member.mem_id");
$rsreserv1= mysql_fetch_array($sqlreserv1);					  
							  ?>
<TR>
	<TD align="center"><?=$rsreserv[0];?></TD>
	<TD><?=$rsreserv1[mem_name];?></TD>
	<TD><?=$rsreserv1[emp_name];?></TD>
	<TD> <?=$rsreserv[mac_id];?></TD>
	<TD> <?=$rsreserv[mac_name];?> </TD>
	 <td align="center"  > 
	     <?list($day2, $month2, $year2) = split('[/.-]', $rsreserv[leas_date]);
		$a9_id=  "$year2-$month2-$day2";?>
		<?$eng_date1=strtotime("$a9_id");    
echo thai_date1($eng_date1);?> 
				 </td>
	<td align="center" > 
				    <?list($day11, $month11, $year11) = split('[/.-]', $rsreserv[return_date]);
		$s9_id=  "$year11-$month11-$day11";?>
		<?$eng_date2=strtotime("$s9_id");    
echo thai_date1($eng_date2);?> 
			</td>


				<td align="center"bgcolor="#CCFFFF"><div align="center" class="style3"><a href="form_Return.php?idl=<?=$rsreserv[0];?>" >รับคืน</a></div></td>
                </tr>
<?}?>
                    
                  </table></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </fieldset></td>
          </tr>
         
        </table></td>
        <td background="../images/rim_07.gif">&nbsp;</td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt="" /></td>
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
$URL="RentMachine.php?StartDate="+document.forms[0].StartDate.value+"&exp="+exporttype+"&ArriveDate="+document.forms[0].ArriveDate.value;
window.open($URL,'','toolbar=no,location=no,status=no,resizable=yes,menubar=no,scrollbars=yes');

}//of function

function kod_pum() {
alert('การใส่วันที่ต้องทำการกดปุ่ม Date เท่านั้นครับ');
		event.returnValue = false;
} 
</script>

