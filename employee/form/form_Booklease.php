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
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Davinci</o:Author>
  <o:LastAuthor>Power User</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>17</o:TotalTime>
  <o:Created>2012-05-17T13:49:00Z</o:Created>
  <o:LastSaved>2012-05-17T13:49:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>270</o:Words>
  <o:Characters>1542</o:Characters>
  <o:Lines>12</o:Lines>
  <o:Paragraphs>3</o:Paragraphs>
  <o:CharactersWithSpaces>1809</o:CharactersWithSpaces>
  <o:Version>12.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
  <o:TargetScreenSize>1024x768</o:TargetScreenSize>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="themedata/themedata.thmx">
<link rel=colorSchemeMapping
href="themedata/colorschememapping.xml">

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
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
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
	margin:2.0cm 35.35pt 7.1pt 72.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:379520846;
	mso-list-type:hybrid;
	mso-list-template-ids:624591596 1092373504 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
	{mso-level-number-format:thai-2;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
div.MsoNormal1 {mso-style-unhide:no;
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
li.MsoNormal1 {mso-style-unhide:no;
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
p.MsoNormal1 {mso-style-unhide:no;
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
-->
</style>
</head>

<body lang=EN-US style='tab-interval:36.0pt'>
<span style='mso-ignore:vglayout'>
<table cellpadding=0 cellspacing=0 align=left>
  <tr>
    <td width=255 height=4></td>
  </tr>
  <tr>
    <td></td>
    <td><IMG SRC="../../images/krut.jpg" WIDTH="108" HEIGHT="119" BORDER="0" ALT=""> </td>
  </tr>
</table>
</span>
<![endif]>
<o:p>&nbsp;</o:p>
</p>
<p class=MsoNormal1 style='line-height:normal'>
  <o:p>&nbsp;</o:p>
</p>
<p class=MsoNormal1 style='line-height:normal'>
  <o:p>&nbsp;</o:p>
</p>
<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'><![endif]><span style='font-family:"Angsana New","serif"'>
<o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>ที่
คค </span><span style='font-family:"Angsana New","serif"'>O</span><span
lang=TH style='font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;
font-family:"Angsana New","serif"'>๖๔๖/๑.๔/...............</span><span lang=TH style='font-size:14.0pt;
mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>สำนักงานทางหลวงมหาสารคาม ถ.ถีนานนท์</span><span style='font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ต.ตลาด
อ.เมือง จ.มหาสารคาม ๔๔</span><span style='font-family:"Angsana New","serif"'>OOO<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;"><?//echo date('d');?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span> <span style='font-family:
"Angsana New","serif"'><o:p></o:p>
</span><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
<?$mmm=date('m');?>
</span><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
<?$eng_date4=strtotime("$mmm");    
//echo thai_date4($eng_date4);?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
<? $aaa=date('Y'); //echo $aaa+543; ?>
<?php
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

return " $c  $ThMonth[$b]  $d";
}

echo ThaiDate(); // พิมพ์วันที่

?>
</span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>เรื่อง<span
style='mso-spacerun:yes'>&nbsp; </span>ขอเช่าเครื่องจักรกล</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>เรียน<span
style='mso-spacerun:yes'>&nbsp; </span>นางอัจฉรา งามดี</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>อ้างถึง<span
style='mso-spacerun:yes'>&nbsp; </span>สัญญาเช่าเครื่องจักรกล เลขที่..................................ลงวันที่</span><span lang=TH style='font-size:14.0pt;
mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;  <span
style='font-family:"Angsana New","serif"'>
  <o:p></o:p></span><span class="MsoNormal" style="tab-stops:50.25pt"><span
style='mso-spacerun:yes'><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;"><?echo ThaiDate(); ?><?//echo date('d');?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span style='font-family:
"Angsana New","serif"'>
  <o:p></o:p>
  </span><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
  <?$mmm=date('m');?>
  </span><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
  <?$eng_date4=strtotime("$mmm");    
//echo thai_date4($eng_date4);?>
  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
  <? $aaa=date('Y');// echo $aaa+543; ?>
  </span></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ตามที่
ท่านมีความประสงค์ขอเช่าเครื่องจักรกลพร้อมพนักงานขับ
ของสำนักงานทางหลวงมหาสารคามไปใช้งานเพื่อ <br><?=$row_show['purpose']?> &nbsp;&nbsp; <?=$row_show['area']?>&nbsp; นั้น</span><span style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>สำนักงาน
ไม่ขัดข้องและขอส่งเครื่องจักรพร้อมพนักงานขับ เข้าปฏิบัติงาน ตามสัญญาเช่าดังนี้</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='margin-left:40.85pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=43 valign=top style='width:32.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:50.25pt'><span lang=TH
  style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>ลำดับที่<o:p></o:p></span></p>
  </td>
  <td width=269 valign=top style='width:201.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:50.25pt'><span lang=TH
  style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>หมายเลขเครื่องจักรกล</span><span
  style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=204 valign=top style='width:152.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:50.25pt'><span lang=TH
  style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>พนักงานขับ</span><span
  style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
 </tr>


	<?		  
	$numn=1;
	$sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin ,tb_machinery_control  where  tb_machinery_control.control_id=tb_machin.mac_control  and tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
					  
 <tr style='mso-yfti-irow:1'>
  <td width=43 valign=top style='width:32.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:50.25pt'><span lang=TH
  style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><?=$numn?></span><span
  style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=269 valign=top style='width:201.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;font-family:
  "TH SarabunPSK","sans-serif"'> <?=$rstype1[mac_id];?></span><span style='font-family:
  "Angsana New","serif"'><o:p></o:p></span></p>
  </td>
  <td width=204 valign=top style='width:152.7pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
  11.0pt;font-family:"Angsana New","serif"'><?=$rstype1[control_name];?><o:p></o:p></span></p>
  </td>
 </tr>
 <?$numn++;}?>
</table>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>โดยมีช่างควบคุมดังนี้</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoListParagraph style='margin-left:90.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l0 level1 lfo1;tab-stops:50.25pt'><![if !supportLists]><span
lang=TH style='font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;
font-family:"Angsana New","serif";mso-fareast-font-family:"Angsana New"'><span
style='mso-list:Ignore'>๑.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=TH style='font-size:14.0pt;
mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>นายลิขิต
แพงเวียงจันทร์</span><span style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทั้งนี้ตั้งแต่วันที่<span class="MsoNormal" style="tab-stops:50.25pt"><span lang=TH style='font-size:14.0pt;
mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp; <span
style='font-family:"Angsana New","serif"'>
<o:p></o:p>
</span><span class="MsoNormal" style="tab-stops:50.25pt"><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;"><?//echo date('d');?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style='font-family:
"Angsana New","serif"'>
<o:p></o:p>
</span><span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
<?$mmm=date('m');?>

<?$eng_date4=strtotime("$mmm");    
//echo thai_date4($eng_date4);?>
<?echo ThaiDate(); ?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14.0pt;line-height:115%;
font-family:&quot;TH SarabunPSK&quot;,&quot;sans-serif&quot;">
<? $aaa=date('Y'); //echo $aaa+543; ?>
</span></span></span> เมื่อ
ครบกำหนดเช่าแล้ว กรุณาส่งเครื่องจักรกลพร้อมเจ้าหน้าที่กลับสำนักงานด้วย</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-tab-count:8'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>.................................................................</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(........................................................................)</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ผู้จัดการศูนย์เครื่องจักรกล</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>สำนักงานทางหลวงมหาสารคาม</span><span style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>สำนักงานทางหลวงมหาสารคาม</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>โทร.</span><span
lang=TH style='font-family:"Angsana New","serif"'> </span><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:
"Angsana New","serif"'>๐๔๓-๗๑๑๒๗๘</span><span style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:50.25pt'><span lang=TH style='font-size:
14.0pt;mso-ansi-font-size:11.0pt;line-height:115%;font-family:"Angsana New","serif"'>โทรสาร
๐๔๓-๗๒๓๓๑๗<o:p></o:p></span></p>

</div>

</body>

</html>
