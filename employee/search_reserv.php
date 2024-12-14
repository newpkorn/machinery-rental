<? @session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
            <td><img src="../images/menu/search_reserv.jpg" alt="" width="375" height="43" /></td>
          </tr>
          <tr>
            <td><fieldset>
              <legend>ข้อมูลการจอง</legend>
              <table width="100%" border="0">
             <tr>
                  <td width=" " align="right">รหัสการจอง</td>
				  
			  <form id="form2" name="form2" method="post" action="search_reserv.php">
                  <td width=" "><input name="txt_search" type="text" id="txt_search" size="30" maxlength="100" />
                    <input type="submit" name="ค้นหา3" id="ค้นหา3" value="ค้นหา" /></td>
                  <td width=""></td> </FORM>
                </tr>
               
                <tr>
                  <td colspan="3"><table width="100%" border="1">
                    <tr>
                   <td width="9%" height="35" align="center" bgcolor="#0066CC"><span class="style5">รหัสการจอง</span></td>
                  <td width="12%"align="center" bgcolor="#0066CC"><span class="style5">สมาชิก</span></td>
                  <td width="12%" align="center"bgcolor="#0066CC"><span class="style5">พนักงานดูแล</span></td>
                  <td width="29%" align="center"bgcolor="#0066CC"><span class="style5">เครื่องจักรกล</span></td>
                  <td width="9%" align="center"bgcolor="#0066CC"><span class="style5">วันที่จอง</span></td>
                  <td width="9%"align="center" bgcolor="#0066CC"><span class="style5">วันที่รับ</span></td>
				  <td width="12%" align="center"bgcolor="#0066CC"><span class="style5">พิมพ์ใบเสร็จ</span></td>
				  <td width="8%" align="center"bgcolor="#0066CC"><span class="style5">ลบ</span></td>
                    </tr>
                 <?  $sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id and  res_id like '%$txt_search%'  ");
						  while($rsreserv= mysql_fetch_array($sqlreserv))
						  {?>
                <tr>
                  <td align="center" bgcolor="#CCFFFF"><span class="style3">
                    <?=$rsreserv[0];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style3">
                    <?=$rsreserv[mem_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style3">
                    <?=$rsreserv[emp_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF">
		            <span class="style3">
				  <?		    $sqltype=mysql_query("select * from   tb_reserv_detail ,tb_machin  where  tb_machin.mac_id=tb_reserv_detail.mac_id and res_id='$rsreserv[res_id]' ");
						  while($rstype= mysql_fetch_array($sqltype)){?>
				  
				  <?=$rstype[mac_name];?>
				  <BR>
				  <?}?>				  
				    </span></td>
                      <td align="center" bgcolor="#CCFFFF"><span class="style3">
                        <?$eng_date=strtotime("$rsreserv[res_date]");    
echo thai_date1($eng_date);?>
                      </span> </td>
				  <td align="center" bgcolor="#CCFFFF"><span class="style3">
				    <?$eng_date2=strtotime("$rsreserv[rec_date]");    
echo thai_date1($eng_date2);?>
				  </span> </td>
                <td align="center" bgcolor="#CCFFFF"><A HREF="form/form_Receipt.php?idr=<?=$rsreserv[0];?>"  target="_blank" class="style3"><img src="../images/printmgr.png" alt="" width="20" height="20" /></A></td>
				 <td align="center"bgcolor="#CCFFFF"><div align="center" class="style3"><a href="del_Reserv.php?del_id=<?=$rsreserv[0]?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></div></td>
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

