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
<meta http-equiv=Content-Type content="text/html; charset=windows-874">
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
	margin:72.0pt 72.0pt 1.0cm 72.0pt;
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

<p class=MsoNormal><b><span lang=TH
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;㺢��������ͧ�ѡá�</span></b><b><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>
  <o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span lang=TH style='font-size:
14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><span
style='mso-tab-count:9'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>�������
 &nbsp;<?=$row_show['address']?></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>�͡����Ţ���.....................<span style='mso-tab-count:5'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>�ѹ��� <span class="MsoNormal" style="text-align:justify">
 <?php
function ThaiDate()
{
$ThDay = array ( "�ҷԵ��", "�ѹ���", "�ѧ���", "�ظ", "�����", "�ء��", "�����" );
$ThMonth = array ( "������", "����Ҿѹ��", "�չҤ�", "����¹",
"����Ҥ�", "�Զع�¹", "�á�Ҥ�", "�ԧ�Ҥ�",
"�ѹ��¹", "���Ҥ�", "��Ȩԡ�¹", "�ѹ�Ҥ�" );

$a = date( "w" ); // ����ѹ��ѻ���� (0-6)
$b = date( "n" )-1; // �����͹ (1-12)
$c = date( "j" ); // ����ѹ���(1-31)
$d = date( "Y" )+543; // ��� �.�.�ǡ 543 ������� �.�.

return " $c  $ThMonth[$b]  $d";
}

echo ThaiDate(); // ������ѹ���

?>
</span></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>����ͧ
���������ͧ�ѡá��Թ��ع���¹</span><span style='font-size:14.0pt;
line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>���¹
����ӹ�¡���ӹѡ�ҹ�ҧ��ǧ�����ä��</span><span style='font-size:14.0pt;
line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>��Ҿ���
(������, �ԵԺؤ��) 
  <?=$row_show['mem_name']?>
&nbsp;�դ������ʧ������������ͧ�ѡá��Թ�ع��ع���¹
�������ѡ�ҹ�Ѻ ����任�Ժѵԧҹ 
  <?=$row_show['purpose']?>
</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>
  <o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>�. ʶҹ���
  <?=$row_show['area']?>
  ������äǺ����ͧ˹��§ҹ �ͧ����ҧ��ǧ�ѧ���</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>
  <o:p></o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=659
 style='width:494.45pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=45 rowspan=2 valign=top style='width:33.75pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>�ӴѺ���<o:p></o:p></span></p>
  </td>
  <td width=114 rowspan=2 valign=top style='width:85.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>��¡��</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>(��������ͧ�ѡá�)</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=76 rowspan=2 valign=top style='width:57.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>�ӹǹ</span><span style='font-size:
  14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>(�ѹ/����ͧ)</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=169 colspan=2 valign=top style='width:126.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>��ǧ�������<o:p></o:p></span></p>
  </td>
  <td width=85 rowspan=2 valign=top style='width:63.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>��������ҷ�����</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=76 rowspan=2 valign=top style='width:2.0cm;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>��.
  ��/</span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>�ѹ
  ��/</span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>��͹
  ��</span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=94 rowspan=2 valign=top style='width:70.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>������
  (�ҷ)</span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>������ѹ���</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>(�ѹ/��͹/��)</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p>
  </span></p></td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>�֧�ѹ���</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>(�ѹ/��͹/��)</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>

 	<?		  
	$numn=1;
	$sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin ,tb_machinery_unit  where  tb_machinery_unit.unit_id=tb_machin.mac_unit  and tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
 <tr style='mso-yfti-irow:2'>
  <td width=45 valign=top style='width:33.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'><?=$numn?></span><span style='font-size:
  14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=114 valign=top style='width:85.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$rstype1[mac_id];?></span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:57.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>1</span><span style='font-size:
  14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?list($day22, $month22, $year22) = split('[/.-]', $rstype1[leas_date]);
		$a9_id=  "$year22-$month22-$day22";?>
		<?$eng_date1=strtotime("$a9_id");    
echo thai_date1($eng_date1);?></span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?list($day11, $month11, $year11) = split('[/.-]', $rstype1[return_date]);
		$s9_id=  "$year11-$month11-$day11";?>
		<?$eng_date2=strtotime("$s9_id");    
echo thai_date1($eng_date2);?> </span><span style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'><?=$rstype1[period];?> &nbsp;<?=$rstype1[unit_name];?> </span><span style='font-size:
  14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=76 valign=top style='width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$rstype1[mec_price];?></span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>.-<o:p></o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?echo$sum1=$rstype1[period]*$rstype1[mec_price];?>.-</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
 </tr>
 <? $sump=$sump+$sum1;?>
 <?$numn++;}?>


 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes'>
  <td width=565 colspan=7 valign=top style='width:423.6pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span lang=TH style='font-size:14.0pt;
  font-family:"TH SarabunPSK","sans-serif"'>���������</span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>
  </td>
  <td width=94 valign=top style='width:70.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'><?=$sump?></span><span
  style='font-size:14.0pt;font-family:"TH SarabunPSK","sans-serif"'>.-<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span
lang=TH>��駹����ӹ�¤����дǡ㹡�û�Ժѵԧҹ����������ó�
����Թ�շ��Ш����Թ ���������ش�����Ңͧ���Фѹ
���ҡ��������<br>
����������ͧ�ѡáŤѹ��Թ �� �ѹ����
�Ш����繧Ǵ���������¡��ͧ�� �§Ǵ�� �� �ѹ
������Ѻ���Ф�������㹡�â�������ͧ�ѡá�<BR> �� ��ҹ���ѹ������ԧ
�����������§��ѡ�ҹ<span style='mso-spacerun:yes'>&nbsp;
</span>�����駤�ҹ���ѹ������ԧ㹡�û�Ժѵԧҹ
�����ҧ���������ͧ�ѡáŷ�����
������ͧ�Ѻ���Ф�����<BR>����ͧ�ѡ÷����㹡�������§����</span>
    <o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>�֧���¹�����ͷ�Һ</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ŧ����.........................................<span style='mso-tab-count:
1'>&nbsp;&nbsp;&nbsp;&nbsp; </span>��һ�зѺ...............................................</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(<?=$row_show['mem_name']?>)  </span><span style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p>
</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p>(�ԵԺؤ��)</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>�����ӹ�¡�����Ἱ</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>���ͷ�Һ ���Թ���</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ŧ����..................................................</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>(������ പ��Թ����)</span><span style='font-size:14.0pt;line-height:
115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>PS.<span
lang=TH> ʧ�.�����ä��<o:p></o:p></span></span></p>

</div>

</body>

</html>
