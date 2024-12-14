<?@session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
 <form action="addlease.php" method="post" name="form1" id="form1" onsubmit="return valid()">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
	<script language="javascript">
function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 48){
		      event.returnValue = false;
	    	}
	}
</script>
 <script type="text/javascript" language="javascript" src="datetimepicker.js"></script>
  <script language="JavaScript">
	<!--
		if (document.images)
		{
		calimg= new Image(16,16); 
		calimg.src="../images/cal.gif"; 
		}
	//-->
</script>


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
        <td width="100%" height="45"><center>ชื่อผู้ใช้งาน : <?=$_SESSION['emp_name']?></center></td>
      </tr>
    </table>
      <table width="100%" height="52"  border="0">
        <tr>
          <td width="100%" height="48"><center><input name="imageField2" type="image" id="imageField2" src="../images/nopic.gif" /></center></td>
        </tr>
    </table>
      <table width="100%" height="38"  border="0">
        <tr>
          <td width="100%" height="34">
            <input type="image" name="imageField3" id="imageField3" src="../images/bullet.gif" />
            <a href="Menu_Detail.php">หน้าแรก</a></td>
        </tr>
    </table>
		    <table width="100%" height="29"  border="0">
        <tr>
          <td width="100%" height="25"><img src="../images/bullet.gif" >&nbsp;<A HREF="RentMachine.php">เช่าเครื่องจักรกล</A></td>
        </tr>
    </table> 
    <table width="100%" height="29"  border="0">
        <tr>
          <td width="100%" height="25"><img src="../images/bullet.gif" >&nbsp;<A HREF="search_rent.php">ค้นหาข้อมูลการเช่า</A></td>
        </tr>
    </table> 
		    <table width="100%" height="29"  border="0">
        <tr>
          <td width="100%" height="25"><img src="../images/bullet.gif" >&nbsp;<A HREF="report_lease.php" target="_blank">รายงานการเช่า</A></td>
        </tr>
    </table> 
       <table width="100%" height="27"  border="0">
          <tr>
              <td width="100%" height="24"><img src="../images/bullet.gif" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
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
        <td colspan="2" rowspan="3" valign="top" bgcolor="#FFFFFF">
		
		<table width="100%" border="0">

            <tr>
            <td><fieldset>
              <legend>รายละเอียดการเช่า</legend>
	
          <table width="100%"  border="0">
            <tr>
              <td width="10%">สมาชิก</td>
              <td width="90%" align="left">
			  					    <select name="mem_name">
		 <? 
						  $sqlmember=mysql_query("select * from  tb_member");
						  while($rsmember= mysql_fetch_array($sqlmember))
						  {
						  ?>
                        <option value="<? echo $rsmember[0];?>" <? if($row_show["mac_brand"]===$rsmember[0]) echo " selected ";?>><? echo $rsmember[mem_name];?></option>
						<?}?>

                    </select>
			  </td>
          
            </tr>
			 <tr>
              <td width="15%">วัตถุประสงค์เพื่อ</td>
              <td width="90%" align="left"><input type="text" name="purpose" size="45"  id="purpose" value=""/>
			  </td>        
            </tr>
   <tr>
              <td width="10%">สะถานที่</td>
              <td width="90%" align="left"><input type="text" name="area" size="45"  id="area" value=""/>
			  </td>        
            </tr>
             
              <td width="10%"></td>
              <td  align="left" colspan="2">
			  	&nbsp;&nbsp;    <button id="addRow" type="button">&nbsp; + &nbsp;</button>    
    &nbsp;  
    <button id="removeRow" type="button">&nbsp; -- &nbsp;</button>  
<TABLE width="100%" border="0" cellspacing="2" cellpadding="0">
<TR>
	<TD width="35%">เครื่องจักรกล</TD>
		<TD width="20%">วันที่เช่า</TD>
			<TD width="20%">วันที่คืน</TD>
				<TD width="20%">ระยะเวลา</TD>
</TR>
</TABLE>
 <table id="myTbl" width="100%" border="0" cellspacing="2" cellpadding="0">  
  <tr id="firstTr">  
            <td  class="style14" width="35%"><div align="left">
			
			<select name="machin_name[]" id="machin_name[]">  
		 <? 
						  $sqlmachin=mysql_query("select * from  tb_machin where mac_status=1 order by mac_name");
						  while($rsmachin= mysql_fetch_array($sqlmachin))
						  {
						  ?>
                        <option value="<? echo $rsmachin[0];?>"><? echo $rsmachin[mac_name];?></option>
						<?}?>

                    </select>
	</div></td>

<td  width="20%"><input type="text" name="StartDate[]" size="10"  id="StartDate[]" value="<?=$StartDate?>" onKeyPress="CheckNum()"/><a href="javascript:NewCal('StartDate[]','ddmmyyyy')"><img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td> 


 <td  width="20%"> <input type="text" name="ArriveDate[]"  size="10"  id="ArriveDate[]" value="<?=$ArriveDate?>" onKeyPress="CheckNum()"/><a href="javascript:NewCal('ArriveDate[]','ddmmyyyy')"><img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>


  <td  width="20%"> <input type="text" name="period1[]" size="3"  id="period1[]" value=""/>&nbsp;ชม.,วัน,เดือน</td>
 	<SCRIPT LANGUAGE="JavaScript">
	<!--
	function valid(){
	if(document.form1.StartDate[].value==""){alert("กรุณาใส่ วันเดือนปีของจากวันที่");return false;}
		if(document.form1.ArriveDate[].value==""){alert("กรุณาใส่ วันเดือนปีของถึงวันที่");return false;}
	}
	//-->
	</SCRIPT>
    </tr>  
</table> 
			  </td>
      
            </tr>
        

            <tr>
              <td height="39" align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
           
              <td ><input  type="submit" name="ค้นหา" id="ค้นหา2" value="     เพิ่ม     " /></td>
            </tr>

    </form>

                <tr>
                  <td colspan="5"><table width="100%" border="1">
                    <tr>
                      <td width="8%" align="center" bgcolor="#00CCFF">รหัสการเช่า</td>
                  <td width="13%"align="center" bgcolor="#00CCFF">สมาชิก</td>
                  <td width="13%" align="center"bgcolor="#00CCFF">พนักงานดูแล</td>
                  <td width="30%" align="center"bgcolor="#00CCFF">เครื่องจักรกล</td>
                  <td width="11%" align="center"bgcolor="#00CCFF">วันที่เช่า</td>
                  <td width="11%"align="center" bgcolor="#00CCFF">วันที่คืน</td>
				  <td width="10%" align="center"bgcolor="#00CCFF">เอกสาร</td>
				  <td width="8%" align="center"bgcolor="#00CCFF">ลบ</td>
                    </tr>
  
						   <?  
						     include("../inc_connect.php"); 
						   $sqlreserv1=mysql_query("select * from   tb_lease , tb_member , tb_employee where  tb_lease.emp_id=tb_employee.emp_id  and  tb_lease.mem_id=tb_member.mem_id  ");
						  while($rsreserv1= mysql_fetch_array($sqlreserv1))
						  {?>
                <tr>
                  <td align="center" bgcolor="#CCCCCC"><?=$rsreserv1[0];?></td>
                  <td bgcolor="#CCCCCC"><?=$rsreserv1[mem_name];?></td>
                  <td bgcolor="#CCCCCC"><?=$rsreserv1[emp_name];?></td>
                  <td bgcolor="#CCCCCC">
	<?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[mac_name];?><BR>
				  <?}?>
				  </td>
                  <td align="center" bgcolor="#CCCCCC">
		<?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  <?list($day22, $month22, $year22) = split('[/.-]', $rstype1[leas_date]);
		$a9_id=  "$year22-$month22-$day22";?>
		<?$eng_date1=strtotime("$a9_id");    
echo thai_date1($eng_date1);?> 
			<BR>
				  <?}?>
				   </td>
				  <td align="center" bgcolor="#CCCCCC">		<?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  <?list($day11, $month11, $year11) = split('[/.-]', $rstype1[return_date]);
		$s9_id=  "$year11-$month11-$day11";?>
		<?$eng_date2=strtotime("$s9_id");    
echo thai_date1($eng_date2);?> 
				 <BR>
				  <?}?></td>
                  <td align="center" bgcolor="#CCCCCC"><A HREF="form_print.php?idl=<?=$rsreserv1[0];?>" target="_blank">พิมพ์</A></td>
				   <td align="center"bgcolor="#CCCCCC"><div align="center"><a href="del_Rent.php?del_id=<?=$rsreserv1[0]?>" onClick='return Conf(this)' >ลบ</a></div></td>
                </tr>
<?}?>
         

                  </table></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td> </td>
                  <td> </td>
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

