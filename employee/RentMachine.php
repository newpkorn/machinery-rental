<?@session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
 <style type="text/css">
<!--
.style2 {color: #0000FF}
.style4 {color: #FFFFFF; font-weight: bold; }
.style5 {color: #0066CC}
-->
 </style>
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
            alert("��ͧ����¡�â��������ҧ���� 1 ��¡��");  
        }  
    });           
});  
</script>  
</head>
<SCRIPT language="JavaScript">
<!--   
  function Conf(object) {
  if (confirm("�س��ͧ���ź������ ?") == true) {
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
            <span class="style2">���ͼ����ҹ</span> : <?=$_SESSION['emp_name']?>
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
          <td height="34"><img src="../images/home.gif" alt="" width="16" height="14" /> <a href="Menu_Detail.php">˹���á</a></td>
        </tr>
        <tr>
          <td height="34"><img src="../images/note.png" alt="" width="15" height="15" />&nbsp;<a href="RentMachine.php">�������ͧ�ѡá�</a></td>
        </tr>
        <tr>
          <td height="34"><img src="../images/icon_searchMenu.gif" alt="" width="15" height="15" />&nbsp;<a href="search_rent.php">���Ң����š�����</a></td>
        </tr>
        <tr>
          <td height="34"><img src="../images/view.gif" alt="" width="15" height="15" />&nbsp;<a href="report_lease.php" target="_blank">��§ҹ������</a></td>
        </tr>
        <tr>
          <td width="100%" height="34"><img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">�͡�ҡ�к�</a></td>
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
              <td><img src="../images/menu/rent.jpg" alt="" width="375" height="43" /></td>
            </tr>
            <tr>
            <td><fieldset>
              <legend>��������´������</legend>
	
          <table width="100%"  border="0">
            <tr>
              <td width="10%">��Ҫԡ</td>
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
					<!-- <input type="text" name="mem_name" size="45"  id="mem_name" value=""/>	 -->
					
					</td>
            </tr>
			 <tr>
              <td width="15%">�ѵ�ػ��ʧ������</td>
              <td width="90%" align="left">	<TEXTAREA NAME="purpose" ROWS="3" COLS="55"></TEXTAREA>			  </td>        
            </tr>
   <tr>
              <td width="10%">�жҹ���</td>
              <td width="90%" align="left"> <TEXTAREA NAME="area" ROWS="3" COLS="55"></TEXTAREA>		  </td>        
            </tr>
             
              <td width="10%"></td>
              <td  align="left" colspan="2">
			  	&nbsp;&nbsp;    <button id="addRow" type="button">&nbsp; + &nbsp;</button>    
    �  
    <button id="removeRow" type="button">&nbsp; -- &nbsp;</button>�<span class="style5">�� + ���������ҡ���� 1 ��¡��  
    </span>
    <TABLE width="100%" border="0" cellspacing="2" cellpadding="0">
<TR>
	<TD width="35%">����ͧ�ѡá�</TD>
		<TD width="20%">�ѹ������</TD>
			<TD width="20%">�ѹ���׹</TD>
				<TD width="20%">��������</TD>
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


  <td  width="20%"> <input type="text" name="period1[]" size="3"  id="period1[]" value=""/>&nbsp;��.,�ѹ,��͹</td>
 	<SCRIPT LANGUAGE="JavaScript">
	<!--
	function valid(){
	if(document.form1.StartDate[].value==""){alert("��س���� �ѹ��͹�բͧ�ҡ�ѹ���");return false;}
		if(document.form1.ArriveDate[].value==""){alert("��س���� �ѹ��͹�բͧ�֧�ѹ���");return false;}
	}
	//-->
	</SCRIPT>
    </tr>  
</table>			  </td>
      
            </tr>
        

            <tr>
              <td height="39" align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
           
              <td ><input  type="submit" name="����" id="����2" value="     ����     " /></td>
            </tr>

    </form>

                <tr>
                  <td colspan="5"><table width="100%" border="1">
                    <tr>
                      <td width="8%" height="54" align="center" bgcolor="#0066CC"><span class="style4">����<BR>
                        ������</span></td>
                  <td width="16%"align="center" bgcolor="#0066CC"><span class="style4">��Ҫԡ</span></td>
                  <td width="13%" align="center"bgcolor="#0066CC"><span class="style4">���˹�ҷ��</span></td>
                  <td width="19%" align="center"bgcolor="#0066CC"><span class="style4">����ͧ�ѡá�</span></td>
                  <td width="15%" align="center"bgcolor="#0066CC"><span class="style4">�ѹ������</span></td>
                  <td width="14%"align="center" bgcolor="#0066CC"><span class="style4">�ѹ���׹</span></td>
				  <td width="9%" align="center"bgcolor="#0066CC"><span class="style4">�͡���</span></td>
				  <td width="6%" align="center"bgcolor="#0066CC"><span class="style4">ź</span></td>
                    </tr>
  
						   <?  
						     include("../inc_connect.php"); 
						   $sqlreserv1=mysql_query("select * from   tb_lease , tb_member , tb_employee where  tb_lease.emp_id=tb_employee.emp_id  and  tb_lease.mem_id=tb_member.mem_id  order by  tb_lease.leas_id DESC");
						  while($rsreserv1= mysql_fetch_array($sqlreserv1))
						  {?>
                <tr>
                  <td align="center" bgcolor="#CCFFFF"><span class="style2">
                    <?=$rsreserv1[0];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style2">
                    <?=$rsreserv1[mem_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF"><span class="style2">
                    <?=$rsreserv1[emp_name];?>
                  </span></td>
                  <td bgcolor="#CCFFFF">
	                <span class="style2">
				  <?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[mac_name];?>
				  <BR>
				  <?}?>				  
				    </span></td>
                  <td align="center" bgcolor="#CCFFFF">
		            <span class="style2">
				  <?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  <?list($day22, $month22, $year22) = split('[/.-]', $rstype1[leas_date]);
		$a9_id=  "$year22-$month22-$day22";?>
		          <?$eng_date1=strtotime("$a9_id");    
echo thai_date1($eng_date1);?> 
			      <BR>
				  <?}?>				   
				    </span></td>
				  <td align="center" bgcolor="#CCFFFF">		<span class="style2">
				    <?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$rsreserv1[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				    <?list($day11, $month11, $year11) = split('[/.-]', $rstype1[return_date]);
		$s9_id=  "$year11-$month11-$day11";?>
		            <?$eng_date2=strtotime("$s9_id");    
echo thai_date1($eng_date2);?> 
				    <BR>
				    <?}?>
				  </span></td>
                  <td align="center" bgcolor="#CCFFFF"><A HREF="form_print.php?idl=<?=$rsreserv1[0];?>" class="style2"><img src="../images/printmgr.png" alt="" width="20" height="20" /></A></td>
				   <td align="center"bgcolor="#CCFFFF"><div align="center" class="style2"><a href="del_Rent.php?del_id=<?=$rsreserv1[0]?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></div></td>
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
alert(" ��س�����ѹ��� �¡�á����� DATE");
}
} 

function reportmonth(){



 exporttype = document.form1.sel_exportType.value;
$URL="RentMachine.php?StartDate="+document.forms[0].StartDate.value+"&exp="+exporttype+"&ArriveDate="+document.forms[0].ArriveDate.value;
window.open($URL,'','toolbar=no,location=no,status=no,resizable=yes,menubar=no,scrollbars=yes');

}//of function

function kod_pum() {
alert('�������ѹ����ͧ�ӡ�á����� Date ��ҹ�鹤�Ѻ');
		event.returnValue = false;
} 
</script>

