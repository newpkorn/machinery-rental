<?@session_start(); include("../../inc_connect.php"); include("../function.php");?>
<?if(isset($print)){?>
<SCRIPT LANGUAGE="JavaScript">
	window.print();
</script>
<?}?>
                      <?
$sql_show = "select * from  tb_member  ,  tb_back  where  tb_back.mem_id=tb_member.mem_id and leas_id=$type_id";
$result_show = mysql_query($sql_show) or die(mysql_error());
$row_show = mysql_fetch_array($result_show);
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 12">
<meta name=Originator content="Microsoft Word 12">
<link rel=File-List
href="themedata/filelist.xml">
<link rel=Edit-Time-Data
href="themedata/editdata.mso">

<link rel=themeData
href="themedata/themedata.thmx">
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
	margin:1.0cm 35.35pt 42.55pt 72.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 @list l0
	{mso-list-id:577521741;
	mso-list-type:hybrid;
	mso-list-template-ids:786704678 -406289536 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
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
-->
</style>

</head>

<body lang=EN-US style='tab-interval:36.0pt'>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'>
<span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=255 height=4></td>
 </tr>
 <tr>
  <td></td>
  <td>
  <IMG SRC="../../images/krut.jpg" WIDTH="108" HEIGHT="119" BORDER="0" ALT="">
 </td>
 </tr>
</table>

</span><![endif]><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='line-height:normal'><o:p>&nbsp;</o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'>ที่ </span><span
lang=TH style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>คค
</span><span style='font-family:"Angsana New","serif"'>O</span><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>๖๔๖/๑.๔/............</span> <span
lang=TH style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>สำนักงานทางหลวงมหาสารคาม
ถ.ถีนานนท์</span><span style='font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ต.ตลาด
อ.เมือง จ.มหาสารคาม ๔๔</span><span style='font-family:"Angsana New","serif"'>OOO<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

return " $c  $ThMonth[$b]  $d";
}

echo ThaiDate(); // พิมพ์วันที่

?></span><span style='font-family:
"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:123.0pt'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'>เรื่อง<span
style='mso-spacerun:yes'>&nbsp; </span>แจ้งหนี้ค่าเช่าเครื่องจักรกล</span><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:123.0pt'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'>เรียน<span
style='mso-spacerun:yes'>&nbsp; </span><?=$row_show['mem_name']?></span><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>อ้างถึง<span
style='mso-spacerun:yes'>&nbsp; </span>สัญญาเช่าเครื่องจักรกล เลขที่ ................................. ลงวันที่</span></span><span lang=TH style='font-size:14.0pt;
mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp; </span><?echo ThaiDate(); // พิมพ์วันท?></span><span
style='font-family:"Angsana New","serif"'>
<o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ตามที่
ท่านได้เช่าเครื่องจักรกลของสำนักงานทางหลวงมหาสารคารมประกอบด้วย</span><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>


	<?		  
	$numn=1;
	$sqltype1=mysql_query("select * from   tb_back_detail , tb_machin ,tb_machinery_unit  where  tb_machinery_unit.unit_id=tb_machin.mac_unit  and tb_machin.mac_id=tb_back_detail.mac_id and leas_id='$row_show[leas_id]' and b_status=1");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
<p class=MsoListParagraphCxSpFirst style='margin-left:90.0pt;mso-add-space:
auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:
2.0cm'><![if !supportLists]><span lang=TH style='font-size:14.0pt;font-family:
"Angsana New","serif";mso-fareast-font-family:"Angsana New"'><span
style='mso-list:Ignore'><?=$numn?>.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=TH style='font-size:14.0pt;
font-family:"Angsana New","serif"'><?=$rstype1[mac_name];?><span style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>จำนวน
1 คัน</span><span style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>
<?$sum1=$rstype1[period]*$rstype1[mec_price];?>
  <? $sump=$sump+$sum1;?>
<?$b_date=$rstype1[back_date];?>
<?$b2_date=$rstype1[leas_date];?>
 <?$numn++;}?>



<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>เมื่อวันที่</span><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New","serif"'>
<?list($day22, $month22, $year22) = split('[/.-]', $b2_date);
		$aa9_id=  "$year22-$month22-$day22";?>

<?$eng_date=strtotime("$aa9_id");    echo thai_date1($eng_date);?> 
และได้ส่งคืนเครื่องจักรกลข้างต้นแล้วเมื่อวันที่ </span><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'> <?$eng_date=strtotime("$b_date");    echo thai_date3($eng_date);?> </span><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'>   นั้น<BR>
สำนักงานทางหลวง จึงขอแจ้งค่าเช่าเครื่องจักรกลเป็นเงิน จำนวนทั้งสิ้น </span><span
lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$sump?></span><span
style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>.-</span><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New","serif"'> บาท (<?echo  convert($sump);?>)
ตามเอกสารที่แนบมา<BR>พร้อมนี้ และขอให้ชำระเงินค่าเช่าภายใน ๓ วันทำการ
นับแต่วันที่ได้รับใบแจ้งหนี้</span><span style='font-size:14.0pt;font-family:
"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'><span
style='mso-tab-count:8'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ขอแสดงความนับถือ</span><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>...............................................................</span><span
style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:2.0cm'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>(นายโกมล เดชกวินเลิศ)</span><span style='font-size:14.0pt;font-family:
"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>ผู้จัดการศูนย์เครื่องจักรกล</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
style='mso-spacerun:yes'>&nbsp;</span>สำนักงานทางหลวงมหาสารคาม</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>สำนักงานทางหลวงมหาสารคาม</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>โทร.</span><span
lang=TH style='font-family:"Angsana New","serif"'> </span><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>๐๔๓-๗๑๑๒๗๘</span><span
style='font-family:"Angsana New","serif"'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal;tab-stops:50.25pt'><span lang=TH
style='font-size:14.0pt;mso-ansi-font-size:11.0pt;font-family:"Angsana New","serif"'>โทรสาร
๐๔๓-๗๒๓๓๑๗</span><span lang=TH style='font-size:14.0pt;font-family:"Angsana New","serif"'><o:p></o:p></span></p>

</div>

</body>

</html>
