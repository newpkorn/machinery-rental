<?@session_start(); include("../../inc_connect.php"); include("../function.php");?>
<?if(isset($print)){?>
<SCRIPT LANGUAGE="JavaScript">
	window.print();
</script>
<?}?>
                      <?
$sql_show = "select * from  tb_member  ,  tb_lease  where  tb_lease.mem_id=tb_member.mem_id and leas_id=$type_id";
$result_show = mysql_query($sql_show) or die(mysql_error());
$row_show = mysql_fetch_array($result_show);
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 12">
<meta name=Originator content="Microsoft Word 12">
<link rel=File-List href="themedata/filelist.xml">
<link rel=Edit-Time-Data href="themedata/editdata.mso">

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Angsana New";
	panose-1:2 2 6 3 5 4 5 2 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:16777219 0 0 0 65537 0;}
@font-face
	{font-family:"Cordia New";
	panose-1:2 11 3 4 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:16777219 0 0 0 65537 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-1610611985 1107304683 0 0 159 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1610611985 1073750139 0 0 159 0;}
@font-face
	{font-family:"TH SarabunPSK";
	mso-font-alt:"Arial Unicode MS";
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:0 1342185562 0 0 65923 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
@page Section1
	{size:595.3pt 841.9pt;
	margin:1.0cm 21.2pt 72.0pt 1.0cm;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
-->
</style>

</head>

<body lang=EN-US style='tab-interval:36.0pt'>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'> 

<table cellpadding=0 cellspacing=0 align="right">
 <tr>
  <td width=101 height=35 bgcolor=white style='border:.5pt solid black;
  vertical-align:top;background:white'><![endif]><![if !mso]><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]>แบบ EF๑๕</td>
 </tr>
</table>

</span></span><![endif]><o:p>&nbsp;</o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal ;tab-stops:121.5pt'><span
lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"><span
style='mso-spacerun:yes'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน่วยงาน สำนักงานทางหลวงมหาสารคาม</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal tab-stops:121.5pt'><span
lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสหน่วยงาน
๑๕๕</span><span style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal tab-stops:121.5pt'><b><span
lang=TH style='font-size:16.0pt;line-height:115%;font-family:"Angsana New","serif"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ใบแจ้งหนี้ค่าเช่า</span></b><b><span
style='font-size:16.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></b></p>

<p class=MsoNormal ><span
lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประจำเดือน<span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><?php
function ThaiDate()
{
$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
$ThMonth = array ( "มกรามก", "กุมภาพันธ์", "มีนาคม", "เมษายน",
"พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม",
"กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );

$a = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
$b = date( "n" )-1; // ค่าเดือน (1-12)
$c = date( "j" ); // ค่าวันที่(1-31)
$d = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

return "   $ThMonth[$b]  $d";
}

echo ThaiDate(); // พิมพ์วันที่

?></span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>ชื่อผู้ขอเช่า  
  <?=$row_show['mem_name']?><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>เลขที่.......................................</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>ที่อยู่
<?=$row_show['address']?>
    <span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>วันที่ 
<?php
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

?>
</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:20.65pt'>
  <td width=124 valign=top style='width:93.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>อ้างอิงสัญญาเช่า<o:p></o:p></span></p>
  </td>
  <td width=125 valign=top style='width:94.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>รายการ</span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=128 valign=top style='width:96.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>ระยะเวลาเช่า/วัน/ชม</span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=123 valign=top style='width:92.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>อัตราค่าเช่า/วัน/ชม.</span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=125 valign=top style='width:93.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>จำนวนเงิน</span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=117 valign=top style='width:87.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>หมายเหตุ<o:p></o:p></span></p>
  </td>
 </tr>

	<?		  
	$numn=1;
	$sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin ,tb_machinery_unit  where  tb_machinery_unit.unit_id=tb_machin.mac_unit  and tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
 <tr style='mso-yfti-irow:1'>
  <td width=124 valign=top style='width:93.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>
    <o:p></o:p>
  </span>...........................
  </td>
  <td width=125 valign=top style='width:94.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'> <?=$rstype1[mac_id];?> <o:p></o:p></span>
  </td>
  <td width=128 valign=top style='width:96.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><?=$rstype1[period];?>&nbsp;<?=$rstype1[unit_name];?><o:p></o:p></span></p>
  </td>
  <td width=123 valign=top style='width:92.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><?=$rstype1[mec_price];?>&nbsp;บาท/<?=$rstype1[unit_name];?></span> </p>
  </td>
  <td width=125 valign=top style='width:93.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><?echo$sum1=$rstype1[period]*$rstype1[mec_price];?></span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=117 valign=top style='width:87.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
   <? $sump=$sump+$sum1;?>
 <?$numn++;}?>


 
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;mso-row-margin-right:87.45pt'>
  <td width=500 colspan=4 valign=top style='width:375.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=125 valign=top style='width:93.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;tab-stops:121.5pt 241.0pt 347.3pt'><span
  lang=TH style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><?=$sump?>.-</span><span
  style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=117><p class='MsoNormal'></td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'>จำนวนเงินรวมทั้งสิ้น
(ตัวอักษร &nbsp;<?echo  convert($sump);?>)</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ผู้ตรวจสอบ<span
style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ผู้มีอำนาจลงนาม</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>..............................................................<span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>.....................................................................</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>(..............................................................)<span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;</span>(.................................................................)</span><span
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:121.5pt 241.0pt 347.3pt'><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ตำแหน่ง................................................................<span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ตำแหน่ง................................................................<o:p></o:p></span></p>

</div>

</body>

</html>
