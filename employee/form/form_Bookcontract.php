<?@session_start(); include("../../inc_connect.php"); include("../function.php"); ob_start() ;?>
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

<link rel=themeData href="themedata/themedata.thmx">
<link rel=colorSchemeMapping
href="themedata/colorschememapping.xml">

<style>
<!--
 /* Font Definitions */
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
	panose-1:2 11 5 0 4 2 0 2 0 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1593835409 1342185562 0 0 65923 0;}
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
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	mso-ascii-font-family:Calibri;
	mso-fareast-font-family:Calibri;
	mso-hansi-font-family:Calibri;
	mso-bidi-font-family:"Cordia New";}
@page Section1
	{size:595.3pt 841.9pt;
	margin:14.2pt 72.0pt 21.3pt 72.0pt;
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

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:16.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span lang=TH
style='font-size:16.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>หนังสือสัญญาเช่า</span></b><b><span
style='font-size:16.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></b></p>

<p class=MsoNormal><b><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><span
lang=TH style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>เขียนที่&nbsp;&nbsp;&nbsp;สำนักงานทางหลวงมหาสารคาม</span><span style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span lang=TH>
<o:p></o:p></span></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>เมื่อวันที่&nbsp;&nbsp;
<?echo date('d');?>&nbsp;&nbsp;เดือน&nbsp;&nbsp; <?$mmm=date('m');?><?$eng_date4=strtotime("$mmm");    
echo thai_date4($eng_date4);?> &nbsp;&nbsp; <span class=SpellE>พ.ศ</span>&nbsp;&nbsp;
<? $aaa=date('Y'); echo $aaa+543; ?></span><span style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>&nbsp;&nbsp;
<o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>โดยหนังสือฉบับนี้
ข้าพเจ้า สำนักงานทางหลวงมหาสารคาม
อายุ&nbsp;&nbsp;-&nbsp;&nbsp;บ้านเลขที่&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;หมู่ที่&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;ถนน&nbsp;&nbsp;&nbsp;ถีนานนท์&nbsp;&nbsp;&nbsp;ตรอก/ซอย&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;ตำบล&nbsp;&nbsp;&nbsp;ตลาด&nbsp;&nbsp;&nbsp;อำเภอ&nbsp;&nbsp;&nbsp;เมือง&nbsp;&nbsp;&nbsp;จังหวัด&nbsp;&nbsp;&nbsp;มหาสารคาม&nbsp;&nbsp;&nbsp;</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>ซึ่งต่อไปในสัญญานี้เรียกว่า
ผู้ให้เช่า ฝ่ายหนึ่ง กับข้าพเจ้า&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['mem_name']?>&nbsp;&nbsp;&nbsp;&nbsp;อายุ 
<?=$row_show['mem_age']?>
<span
lang=TH>ปี ที่อยู่&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['address']?>&nbsp;&nbsp;&nbsp;&nbsp;ถือบัตรประชาชนเลขที่&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['reg_card']?>&nbsp;&nbsp;&nbsp;&nbsp;ออกให้โดย&nbsp;&nbsp;&nbsp;&nbsp;กรมการปกครองเมื่อวันที่&nbsp;&nbsp;
<?=$row_show['date_issue']?>
&nbsp;&nbsp;ซึ่งต่อไปนี้สัญญานี้เรียกว่า
ผู้เช่า อีกฝ่ายหนึ่งทั้งสองฝ่ายทำสัญญากันดังนี้</span>
<o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ข้อ
๑. ผู้ให้เช่าตกลงให้เช่า และผู้เช่าตกลงเช่า &nbsp;&nbsp;&nbsp;&nbsp;เครื่องจักรกลหมายเลข

<?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[mac_id];?>&nbsp;&nbsp;
				  <?}?>  จำนวน <?=$num_rows?>&nbsp;
คัน&nbsp;&nbsp;&nbsp;&nbsp;โดยมีวัตถุประสงค์เพื่อ&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['purpose']?> &nbsp;&nbsp;<?=$row_show['area']?>&nbsp;&nbsp;&nbsp;&nbsp;มีกำหนด<span class=SpellE>เวลาเช่า&nbsp;&nbsp;&nbsp;&nbsp;<? $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[period];?>&nbsp;&nbsp;
				  <?}?>&nbsp;&nbsp;&nbsp;&nbsp;(วัน/ชม.)
เริ่มตั้งแต่วันที่&nbsp;&nbsp;&nbsp;&nbsp;<? $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  <? $sump=$sump+$rstype1[mec_price];?>
				  <?=$rstype1[leas_date];?>&nbsp;&nbsp;
				  <? }?>&nbsp;&nbsp;&nbsp;&nbsp;
 โดยผู้เช่าตกลงให้ค่าเช่าแก่ผู้ให้เช่าเป็นราย (วัน/ชม.)&nbsp;&nbsp;&nbsp;&nbsp;วัน,ชม&nbsp;&nbsp;&nbsp;&nbsp;รวม&nbsp;&nbsp;&nbsp;&nbsp;<?=$sump?>&nbsp;</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><span
lang=TH>.-บาท&nbsp;&nbsp;&nbsp;&nbsp;(<?echo  convert($sump);?>) มีกำหนดชำระภายใน ๓
วันทำการ นับจากวันที่ได้รับใบแจ้งหนี้ หรือของทุก ๑๕ วัน
ส่วนเงินค่าภาษีอันเกิดจากทรัพย์สินที่เช่านี้ ให้&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นผู้เสีย</span><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ข้อ
๒. ผู้เช่าได้ตรวจดูทรัพย์สินที่เช่าแล้ว เห็นว่าทุกสิ่งอยู่ในสภาพเรียบร้อยใช้การได้อย่างสมบูรณ์ จะดูแลทรับย์สินที่เช่าไม่ให้สูญหาย
และบำรุงรักษาให้อยู่ในสภาพดีอยู่เสมอ พร้อมที่จะส่งมองคืนตามสภาพเดิมทุกประการ และตกลงให้ผู้ให้เช่าหรือตัวแทน เข้าตรวจดูทรับย์สินที่เช่าได้ทุกเวลา
 ภายหลังที่ได้แจ้งความประสงค์ให้ผู้เช่าทราบแล้ว และหากเกิดความเสียหายใดๆ แก่ทรัพย์สินที่เช่าหรือความเสียหายต่อบุคคลและทรัพย์สิน อันเนื่องจากการทำงานของทรัพย์สินที่เช่า  ผู้เช่าจะต้องรับผิดชอบทั้งสิ้น ยกเว้นการชำรุดจากการใช้งานปกติ</span><span style='font-size:14.0pt;line-height:
115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ข้อ
๓. ผู้เช่าไม่มีสิทธิ์นำทรับย์สินที่เช่า ออกให้ผู้อื่นเช่าช่วง หรือทำนิติกรรมใดๆกับผู้อื่น ในอันที่จะเป็นผลก่อให้เกิดความผูกพันในทรัพย์สินที่เช่า
ไม่ว่าโดยตรงหรือโดยปริยาย และจะไม่ทำการดัดแปลงหรือต่อเติมทรัพย์สินที่เช่า ไม่ว่าทั้งหมดหรือบางส่วน เว้นแต่จะได้รับความยินยอมเป็นหนังสือจากผู้ให้เช่าและหากผู้เช่าได้ทำการดัดแปลง หรือต่อเติมสิ่งใดตามที่ได้รับความยินยอมเมื่อใดแล้ว
ผู้เช่ายอมยกกรรมสิทธิ์ในทรัพย์สินสิ่งนั้นให้ตกเป็นของผู้ให้เช่านับแต่เมื่อนั้นด้วยทั้งสิ้น

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ข้อ
๔. เมื่อผู้เช่าทำการผิดสัญญาข้อใดข้อหนึ่ง ผู้ให้เช่ามีสิทธิบอกเลิกสัญญาได้ทันที และผู้เช่ายอมชดใช้ค่าฤชาธรรมเนียมกับค่าทนายความตลอดจนค่าพาหนะ
และค่าใช้จ่ายในการคิดต่อทวงถามให้แก่ผู้ให้เช่าจนครบถ้วน</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>คู่สัญญาได้อ่านและเข้าใจข้อความดีแล้ว
จึงลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยาน</span><span style='font-size:14.0pt;
line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>ลงชื่อ...............................................ผู้เช่า<span
style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ลงชื่อ...............................................ผู้ให้เช่า</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(<?=$row_show['mem_name']?>)<span style='mso-tab-count:7'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(นายโกมล
เดชกวินเลิศ)</span><span style='font-size:14.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>ลงชื่อ.............................................พยาน<span
style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ลงชื่อ..............................................พยาน</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>(................................................)<span style='mso-tab-count:6'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(....................................................)<o:p></o:p></span></p>

</div>

</body>

</html>
