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
style='font-size:16.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>˹ѧ����ѭ�����</span></b><b><span
style='font-size:16.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></b></p>

<p class=MsoNormal><b><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><span
lang=TH style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><span
style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>��¹���&nbsp;&nbsp;&nbsp;�ӹѡ�ҹ�ҧ��ǧ�����ä��</span><span style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span lang=TH>
<o:p></o:p></span></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>������ѹ���&nbsp;&nbsp;
<?echo date('d');?>&nbsp;&nbsp;��͹&nbsp;&nbsp; <?$mmm=date('m');?><?$eng_date4=strtotime("$mmm");    
echo thai_date4($eng_date4);?> &nbsp;&nbsp; <span class=SpellE>�.�</span>&nbsp;&nbsp;
<? $aaa=date('Y'); echo $aaa+543; ?></span><span style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'>&nbsp;&nbsp;
<o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>��˹ѧ��ͩ�Ѻ���
��Ҿ��� �ӹѡ�ҹ�ҧ��ǧ�����ä��
����&nbsp;&nbsp;-&nbsp;&nbsp;��ҹ�Ţ���&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;������&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;���&nbsp;&nbsp;&nbsp;�չҹ���&nbsp;&nbsp;&nbsp;��͡/���&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;�Ӻ�&nbsp;&nbsp;&nbsp;��Ҵ&nbsp;&nbsp;&nbsp;�����&nbsp;&nbsp;&nbsp;���ͧ&nbsp;&nbsp;&nbsp;�ѧ��Ѵ&nbsp;&nbsp;&nbsp;�����ä��&nbsp;&nbsp;&nbsp;</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>��觵�����ѭ�ҹ�����¡���
���������Ҕ ����˹�� �Ѻ��Ҿ���&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['mem_name']?>&nbsp;&nbsp;&nbsp;&nbsp;���� 
<?=$row_show['mem_age']?>
<span
lang=TH>�� �������&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['address']?>&nbsp;&nbsp;&nbsp;&nbsp;��ͺѵû�ЪҪ��Ţ���&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['reg_card']?>&nbsp;&nbsp;&nbsp;&nbsp;�͡�����&nbsp;&nbsp;&nbsp;&nbsp;�����û���ͧ������ѹ���&nbsp;&nbsp;
<?=$row_show['date_issue']?>
&nbsp;&nbsp;��觵��仹���ѭ�ҹ�����¡���
������Ҕ �ա����˹�觷���ͧ���·��ѭ�ҡѹ�ѧ���</span>
<o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>���
�. ��������ҵ�ŧ������ ��м����ҵ�ŧ��� &nbsp;&nbsp;&nbsp;&nbsp;����ͧ�ѡá������Ţ

<?		    $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[mac_id];?>&nbsp;&nbsp;
				  <?}?>  �ӹǹ <?=$num_rows?>&nbsp;
�ѹ&nbsp;&nbsp;&nbsp;&nbsp;�����ѵ�ػ��ʧ������&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_show['purpose']?> &nbsp;&nbsp;<?=$row_show['area']?>&nbsp;&nbsp;&nbsp;&nbsp;�ա�˹�<span class=SpellE>�������&nbsp;&nbsp;&nbsp;&nbsp;<? $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  
				  <?=$rstype1[period];?>&nbsp;&nbsp;
				  <?}?>&nbsp;&nbsp;&nbsp;&nbsp;(�ѹ/��.)
�����������ѹ���&nbsp;&nbsp;&nbsp;&nbsp;<? $sqltype1=mysql_query("select * from   tb_lease_detail ,tb_machin  where  tb_machin.mac_id=tb_lease_detail.mac_id and leas_id='$row_show[leas_id]' ");
$num_rows = mysql_num_rows($sqltype1);
						  while($rstype1= mysql_fetch_array($sqltype1)){?>
				  <? $sump=$sump+$rstype1[mec_price];?>
				  <?=$rstype1[leas_date];?>&nbsp;&nbsp;
				  <? }?>&nbsp;&nbsp;&nbsp;&nbsp;
 �¼����ҵ�ŧ����������������������� (�ѹ/��.)&nbsp;&nbsp;&nbsp;&nbsp;�ѹ,��&nbsp;&nbsp;&nbsp;&nbsp;���&nbsp;&nbsp;&nbsp;&nbsp;<?=$sump?>&nbsp;</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><span
lang=TH>.-�ҷ&nbsp;&nbsp;&nbsp;&nbsp;(<?echo  convert($sump);?>) �ա�˹��������� �
�ѹ�ӡ�� �Ѻ�ҡ�ѹ������Ѻ���˹�� ���ͧ͢�ء �� �ѹ
��ǹ�Թ��������ѹ�Դ�ҡ��Ѿ���Թ�����ҹ�� ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�繼������</span><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>���
�. ���������Ǩ�ٷ�Ѿ���Թ���������� �����ҷء����������Ҿ���º�������������ҧ����ó� �д��ŷ�Ѻ���Թ�������������٭���
��к��ا�ѡ������������Ҿ���������� ������������ͧ�׹�����Ҿ����ء��С�� ��е�ŧ��������������͵��᷹ ��ҵ�Ǩ�ٷ�Ѻ���Թ��������ء����
 �����ѧ������駤������ʧ���������ҷ�Һ���� ����ҡ�Դ������������� ���Ѿ���Թ���������ͤ���������µ�ͺؤ����з�Ѿ���Թ �ѹ���ͧ�ҡ��÷ӧҹ�ͧ��Ѿ���Թ������  �����Ҩе�ͧ�Ѻ�Դ�ͺ������ ¡��鹡�ê��ش�ҡ�����ҹ����</span><span style='font-size:14.0pt;line-height:
115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>���
�. ������������Է���ӷ�Ѻ���Թ������ �͡����������Ҫ�ǧ ���ͷӹԵԡ�����Ѻ������ ��ѹ�����繼š������Դ�����١�ѹ㹷�Ѿ���Թ������
�������µç�����»����� ��Ш����ӡ�ôѴ�ŧ���͵�������Ѿ���Թ������ �����ҷ��������ͺҧ��ǹ ���������Ѻ�����Թ�����˹ѧ��ͨҡ�������������ҡ��������ӡ�ôѴ�ŧ ���͵��������㴵��������Ѻ�����Թ�������������
���������¡�����Է���㹷�Ѿ���Թ��觹����鵡�繢ͧ��������ҹѺ������͹�鹴��·�����

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>���
�. ����ͼ����ҷӡ�üԴ�ѭ�Ң��㴢��˹�� ������������Է�Ժ͡��ԡ�ѭ����ѹ�� ��м��������������ĪҸ��������Ѻ��ҷ��¤�����ʹ����Ҿ�˹�
��Ф�������㹡�äԴ��ͷǧ���������������Ҩ��ú��ǹ</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>����ѭ������ҹ������㨢�ͤ���������
�֧ŧ�����ͪ���������Ӥѭ���˹�Ҿ�ҹ</span><span style='font-size:14.0pt;
line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>ŧ����...............................................������<span
style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ŧ����...............................................���������</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(<?=$row_show['mem_name']?>)<span style='mso-tab-count:7'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>(������
പ��Թ����)</span><span style='font-size:14.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'>ŧ����.............................................��ҹ<span
style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>ŧ����..............................................��ҹ</span><span
style='font-size:14.0pt;line-height:115%;font-family:"TH SarabunPSK","sans-serif"'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:115%;
font-family:"TH SarabunPSK","sans-serif"'><span
style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>(................................................)<span style='mso-tab-count:6'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(....................................................)<o:p></o:p></span></p>

</div>

</body>

</html>
