<?@session_start(); include("../inc_connect.php"); include("function.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<link href="../css/css1.css" rel="stylesheet" type="text/css">
   <?if(isset($print)){?>
<SCRIPT LANGUAGE="JavaScript">
	window.print();
</script>
<?}?>

<body><font size="-1">
<center>
<table width="1000"  border="0" cellpadding="0" cellspacing="0" align="center">
  <tr valign="top" height="54">
    <td colspan="7" align="center">
   <H2>รายงานการจอง</H2>
   </TD></TR>

<TR>
	<TD align="center"></TD><FORM METHOD=POST ACTION="" name="form1">
	<TD   height="44">
	   <?if(isset($print)){?>
<?}else{?>
<table width="100%" border="0" cellspacing = "1">
				<tr bgcolor="#3333FF" align="center"> 
						<td colspan="7" height="15" class = settitle> <div align="left"><font color="#FFFF99" size="2" face="Microsoft Sans Serif, EucrosiaUPC">กรุณากรอกข้อมูลสำหรับการค้นหา</font></div></td>
				</tr>

				<tr bgcolor="#009999"> 
						 
						  
						  <td height="23" bgcolor="#009999" class = setdetail >
								<font size="2" face="Microsoft Sans Serif, EucrosiaUPC"> 
								<input  type = "RADIO" name = showtype  value = "typemonth"    >    ทั้งหมด </font>
						  </td>
						   <td height="23" bgcolor="#009999" class = setdetail>&nbsp;

						
						 
						
							
							</td>
							<td height="23" class = setdetail>&nbsp; </td>
							 <td height="23" class = setdetail>&nbsp; </td>

							  
		
				</tr>
		<!-- 		<tr  bgcolor="#009999"  > 
							
							  <td height="23"  bgcolor="#009999"  class = setdetail>
									<div align="left"> <font size="2" face="Microsoft Sans Serif, EucrosiaUPC"> 
								  <input type="radio" name="showtype" value = "typedate"       > แบบวัน
								  </font> </div>
							</td>
							  <td height="23"   nowrap bgcolor="#009999" class = setdetail>
							  <select name="frmday" id = "frmday]">
							  <option value=  01 > 
								  01								  </option>
							  <option value=  02 > 
								  02								  </option>
								  <option value=  03 > 
								  03								  </option>
								  <option value=  04 > 
								  04								  </option>
							  <option value=  05 > 
								  05								  </option>
								  <option value=  06 > 
								  06								  </option>
								  <option value=  07 > 
								  07								  </option>
								  <option value=  08 > 
								  08								  </option>
								  <option value=  09 > 
								  09								  </option>
								  <option value=  10 > 
								  10								  </option>
								  <option value=  11 > 
								  11								  </option>
								  <option value=  12 > 
								  12								  </option>
								  <option value=  13 > 
								  13								  </option>
								  <option value=  14 > 
								  14								  </option>
								  <option value=  15 > 
								  15								  </option>
								  <option value=  16 > 
								  16								  </option>
							  <option value=  17 > 
								  17								  </option>
							  <option value=  18 > 
								  18								  </option>
							  <option value=  19 > 
								  19								  </option>
								  <option value=  20 > 
								  20								  </option>
								  <option value=  21 > 
								  21								  </option>
								  <option value=  22 > 
								  22								  </option>
							  <option value=  23 > 
								  23								  </option>
								  <option value=  24 > 
								  24								  </option>
								  <option value=  25 > 
								  25								  </option>
								  <option value=  26 > 
								  26								  </option>
								  <option value=  27 > 
								  27								  </option>
							  <option value=  28 > 
								  28								  </option>
								  <option value=  29 > 
								  29								  </option>
								  <option value=  30 > 
								  30								  </option>
							  <option value=  31 > 
								  31								  </option>
								  							  </select> 
							 <select name="frmmonth">
								  <option value=01>มกราคม</option>
								  <option value=02>กุมภาพันธ์</option>
								  <option value=03>มีนาคม</option>
								  <option value=04>เมษายน</option>
							  <option value=05 >พฤษภาคม</option>
							  <option value=06>มิถุนายน</option>
								  <option value=07>กรกฎาคม</option>
								  <option value=08>สิงหาคม</option>
								  <option value=09>กันยายน</option>
								  <option value=10>ตุลาคม</option>
								  <option value=11>พฤศจิกายน</option>
							  <option value=12>ธันวาคม</option>
								  								</select> 
							 <select name="frmyear">
							 <option value=  2012 > 
					  2555					  </option>
				  <option value=  2013 > 
					  2556					  </option>
			  <option value=  2014 > 
					  2557					  </option>
			  <option value=  2015 > 
					  2558					  </option>
		  <option value=  2016 > 
					  2559					  </option>
 <option value=  2017  > 
					  2560					  </option>
								  								</select> </td>
							  <td height="23" class = setdetail>&nbsp; </td>
							   <td height="23" class = setdetail>&nbsp; </td>
				  </tr> -->

	  <tr bgcolor="#009999">
		
				  <td height="23"  bgcolor="#009999"  class = setdetail>
						<div align="left"> <font size="2" face="Microsoft Sans Serif, EucrosiaUPC"> 
					  <input type="radio" name="showtype" value = "typerange"   > แบบช่วงวัน
					  </font> </div>
				</td>
				<td height="23"   nowrap bgcolor="#009999" class = setdetail>
				  <select name="frmday_from" id = "frmday_from">
					  <option value=  01 > 
					  01					  </option>
					  <option value=  02 > 
					  02					  </option>
					  <option value=  03 > 
					  03					  </option>
					  <option value=  04 > 
					  04					  </option>
					  <option value=  05 > 
					  05					  </option>
					  <option value=  06 > 
					  06					  </option>
					  <option value=  07 > 
					  07					  </option>
					  <option value=  08 > 
					  08					  </option>
					  <option value=  09 > 
					  09					  </option>
					  <option value=  10 > 
					  10					  </option>
					  <option value=  11 > 
					  11					  </option>
					  <option value=  12 > 
					  12					  </option>
					  <option value=  13 > 
					  13					  </option>
					  <option value=  14 > 
					  14					  </option>
					  <option value=  15 > 
					  15					  </option>
					  <option value=  16 > 
					  16					  </option>
					  <option value=  17 > 
					  17					  </option>
					  <option value=  18 > 
					  18					  </option>
					  <option value=  19 > 
					  19					  </option>
					  <option value=  20 > 
					  20					  </option>
					  <option value=  21 > 
					  21					  </option>
					  <option value=  22 > 
					  22					  </option>
					  <option value=  23 > 
					  23					  </option>
					  <option value=  24 > 
					  24					  </option>
					  <option value=  25 > 
					  25					  </option>
					  <option value=  26 > 
					  26					  </option>
					  <option value=  27 > 
					  27					  </option>
					  <option value=  28 > 
					  28					  </option>
					  <option value=  29 > 
					  29					  </option>
					  <option value=  30 > 
					  30					  </option>
					  <option value=  31 > 
					  31					  </option>
					  				  </select> 
				 <select name="frmmonth_from" >
					  <option value=01>มกราคม</option>
					  <option value=02>กุมภาพันธ์</option>
				  <option value=03>มีนาคม</option>
					  <option value=04>เมษายน</option>
					  <option value=05 >พฤษภาคม</option>
					  <option value=06>มิถุนายน</option>
					  <option value=07>กรกฎาคม</option>
					  <option value=08>สิงหาคม</option>
					  <option value=09>กันยายน</option>
					  <option value=10>ตุลาคม</option>
					  <option value=11>พฤศจิกายน</option>
				  <option value=12>ธันวาคม</option>
					  					</select> 
				 <select name="frmyear_from" >
				  <option value=  2012 > 
					  2555					  </option>
				  <option value=  2013 > 
					  2556					  </option>
			  <option value=  2014 > 
					  2557					  </option>
			  <option value=  2015 > 
					  2558					  </option>
		  <option value=  2016 > 
					  2559					  </option>
 <option value=  2017  > 
					  2560					  </option>
					  					</select> </td>
					<td height="23"  bgcolor="#009999"  class = setdetail>
						<div align="center"> <font size="2" face="Microsoft Sans Serif, EucrosiaUPC"> 
					   ถึงวันที่
					  </font> </div>
				</td>
					<td height="23"   nowrap bgcolor="#009999" class = setdetail>
				  <select name="frmday_to" id = "frmday_to" >
					  <option value=  01 > 
					  01					  </option>
					  <option value=  02 > 
					  02					  </option>
					  <option value=  03 > 
					  03					  </option>
					  <option value=  04 > 
					  04					  </option>
					  <option value=  05 > 
					  05					  </option>
					  <option value=  06 > 
					  06					  </option>
					  <option value=  07 > 
					  07					  </option>
					  <option value=  08 > 
					  08					  </option>
					  <option value=  09 > 
					  09					  </option>
					  <option value=  10 > 
					  10					  </option>
					  <option value=  11 > 
					  11					  </option>
				  <option value=  12 > 
					  12					  </option>
					  <option value=  13 > 
					  13					  </option>
					  <option value=  14 > 
					  14					  </option>
					  <option value=  15 > 
					  15					  </option>
				  <option value=  16 > 
					  16					  </option>
				  <option value=  17 > 
					  17					  </option>
				  <option value=  18 > 
					  18					  </option>
				  <option value=  19 > 
					  19					  </option>
				  <option value=  20 > 
					  20					  </option>
				  <option value=  21 > 
					  21					  </option>
				  <option value=  22 > 
					  22					  </option>
					  <option value=  23 > 
					  23					  </option>
				  <option value=  24 > 
					  24					  </option>
				  <option value=  25 > 
					  25					  </option>
					  <option value=  26 > 
					  26					  </option>
					  <option value=  27 > 
					  27					  </option>
				  <option value=  28 > 
					  28					  </option>
					  <option value=  29 > 
					  29					  </option>
					  <option value=  30 > 
					  30					  </option>
				  <option value=  31 > 
					  31					  </option>
					  				  </select> 
				 <select name="frmmonth_to" >
				  <option value=01>มกราคม</option>
				  <option value=02>กุมภาพันธ์</option>
				  <option value=03>มีนาคม</option>
					  <option value=04>เมษายน</option>
				  <option value=05 >พฤษภาคม</option>
				  <option value=06>มิถุนายน</option>
				  <option value=07>กรกฎาคม</option>
				  <option value=08>สิงหาคม</option>
				  <option value=09>กันยายน</option>
				  <option value=10>ตุลาคม</option>
				  <option value=11>พฤศจิกายน</option>
			  <option value=12>ธันวาคม</option>
					  					</select> 
				 <select name="frmyear_to" >
			  <option value=  2012 > 
					  2555					  </option>
				  <option value=  2013 > 
					  2556					  </option>
			  <option value=  2014 > 
					  2557					  </option>
			  <option value=  2015 > 
					  2558					  </option>
		  <option value=  2016 > 
					  2559					  </option>
 <option value=  2017  > 
					  2560					  </option>
					  					</select> </td>

	  </tr>
    
  </table>
  <input type="submit" name="Submit" value="ค้นหาข้อมูล...">
		
	</FORM>
	
	</TD>
<TD colspan="4" ></TD>
</TR>

   </TABLE>
<?}?>
<table width="1000"  border="1" cellpadding="0" cellspacing="0" align="center">
<TR>
	<TD align="center" bgcolor="#CCCCCC">รหัสการจอง</TD>
	<TD align="center" bgcolor="#CCCCCC">ชื่อผู้จอง</TD>
	<TD align="center" bgcolor="#CCCCCC">ชื่อเจ้าหน้าที่</TD>
	<TD align="center" bgcolor="#CCCCCC">รหัสเครื่องจักร</TD>
	<TD align="center" bgcolor="#CCCCCC">ชื่อเครื่องจักร</TD>
	<TD align="center" bgcolor="#CCCCCC">วันที่จอง</TD>
	<TD align="center" bgcolor="#CCCCCC">วันที่รับ</TD>
</TR>
    <? 
		$txt_search="$sel_year-$sel_month";
		$txt_search2="$frmyear-$frmmonth-$frmday";
		$showtype;
$txt_search3="$frmyear_from-$frmmonth_from-$frmday_from";
$txt_search4="$frmyear_to-$frmmonth_to-$frmday_to";
		if($showtype=='typemonth'){	//ค้นหาทั้งหมด
$sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id and  res_date like '%$txt_search%'  ");}
	if($showtype=='typedate'){	//ค้นหาจากวันที่
	$sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id and  res_date='$txt_search2'  ");}
		if($showtype=='typerange'){ //ช่วงเวลา
	$sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id and  res_date between '$txt_search3' and '$txt_search4' ");}
	else{	$sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id    ");}
						  while($rsreserv= mysql_fetch_array($sqlreserv))
						  {?>
<TR>
	<TD align="center"><?=$rsreserv[0];?></TD>
	<TD><?=$rsreserv[mem_name];?></TD>
	<TD><?=$rsreserv[emp_name];?></TD>
	<TD><?		    $sqltype=mysql_query("select * from   tb_reserv_detail ,tb_machin  where  tb_machin.mac_id=tb_reserv_detail.mac_id and res_id='$rsreserv[res_id]' ");
						  while($rstype= mysql_fetch_array($sqltype)){?>
				  
				  <?=$rstype[mac_id];?><BR>
				  <?}?></TD>
	<TD><?		    $sqltype=mysql_query("select * from   tb_reserv_detail ,tb_machin  where  tb_machin.mac_id=tb_reserv_detail.mac_id and res_id='$rsreserv[res_id]' ");
						  while($rstype= mysql_fetch_array($sqltype)){?>
				  
				  <?=$rstype[mac_name];?><BR>
				  <?}?></TD>
	 <td align="center"  ><?$eng_date=strtotime("$rsreserv[res_date]");    
echo thai_date1($eng_date);?> </td>
	<td align="center" ><?$eng_date2=strtotime("$rsreserv[rec_date]");    
echo thai_date1($eng_date2);?>  </td>
</TR>
<?}?>
   </TABLE>
   <?if(isset($print)){?>
<?}else{?>
<A HREF="?print">   <IMG SRC="../images/printmgr.png" WIDTH="48" HEIGHT="48" BORDER="0" ALT=""></A>
<?}?>
<BR><BR><BR>
<table width="1000"  border="0" cellpadding="0" cellspacing="0" align="center" >
 

<TR>
	<TD align="center" width="50" ></TD>
	<TD   align="center" width="180"  height="30">ผู้ออกรายงาน</TD>
<TD colspan="4"   ></TD>
</TR>
	<TD align="center"></TD>
	<TD   height="30">ลงชื่อ........................................</TD>
<TD colspan="4" ></TD>
</TR>
	<TD align="center"></TD>
	<TD align="center"  height="30">(  &nbsp;<?=$_SESSION['emp_name']?>&nbsp; )</TD>
<TD colspan="4" ></TD>
</TR>
</TR>
	<TD align="center"></TD>
	<TD   height="30">วันที่....<?php
function ThaiDate1()
{
$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
$ThMonth = array ( "มกรามก", "กุมภาพันธ์", "มีนาคม", "เมษายน",
"พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม",
"กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );

$a = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
$b = date( "n" )-1; // ค่าเดือน (1-12)
$c = date( "j" ); // ค่าวันที่(1-31)
$d = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

return " $c  $ThMonth[$b]  $d";
}

echo ThaiDate1(); // พิมพ์วันที่

?>.....</TD>
<TD colspan="4" ></TD>
</TR>
   </TABLE>
