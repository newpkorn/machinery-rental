	<?
@ob_start();
@session_start();
@error_reporting(0);

?>
<?if(isset($print)){?>
<SCRIPT LANGUAGE="JavaScript">
	window.print();
</script>
<?}?>
<?include("../../inc_connect.php");  include("../function.php");?>


<html >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



</head>

<body lang=EN-US style='tab-interval:36.0pt'>

<div class=Section1>

<div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<span class="style1" >  ใบรายการจอง 
  
</span></div>
<table width=924 border=1 cellpadding=0 cellspacing=0 class=MsoNormalTable
 style='width:545.75pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=76 valign=top style='width:2.0cm;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>รหัสการจอง<o:p></o:p></span></p>
  </td>
  <td width=142 valign=top style='width:106.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>ชื่อผู้จอง</span><span
  style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=132 valign=top style='width:99.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>เจ้าหน้าที่ทำรายการ</span><span
  style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>รายการเครื่องจักรกลที่จอง</span><span
  style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>วันที่จอง</span><span
  style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>วันที่รับ</span><span
  style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>

<?  $sqlreserv=mysql_query("select * from  tb_reserv , tb_employee  , tb_member where  tb_reserv.mem_id=tb_member.mem_id  and tb_reserv.emp_id=tb_employee.emp_id and res_id='$idr' ");
$rsreserv= mysql_fetch_array($sqlreserv);
			?>

						  
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=76 valign=top style='width:2.0cm;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$rsreserv[0];?><o:p></o:p></span></p>
  </td>
  <td width=142 valign=top style='width:106.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$rsreserv[mem_name];?><o:p></o:p></span></p>
  </td>
  <td width=132 valign=top style='width:99.2pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$rsreserv[emp_name];?></span><span style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=189 valign=top style='width:5.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'>



		<?		    $sqltype=mysql_query("select * from   tb_reserv_detail ,tb_machin  where  tb_machin.mac_id=tb_reserv_detail.mac_id and res_id='$rsreserv[res_id]' ");
						  while($rstype= mysql_fetch_array($sqltype)){?>
				  
				  <?=$rstype[mac_name];?><BR>
				  <?}?>


  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><?$eng_date=strtotime("$rsreserv[res_date]");    
echo thai_date1($eng_date);?></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:16.0pt;font-family:"TH SarabunPSK","sans-serif"'><?$eng_date2=strtotime("$rsreserv[rec_date]");    
echo thai_date1($eng_date2);?></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>สำนักงานทางหลวงมหาสารคาม</span><a
name="_GoBack"></a><span style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>โทร.๐๔๓-๗๑๑๒๗๘</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>โทรสาร ๐๔๓-๗๒๓๓๑๗<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
<? ob_flush();?>