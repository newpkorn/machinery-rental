<? include("inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style56 {color: #FFFFFF}
.style57 {color: #0000FF}
-->
</style>
<HEAD><TITLE>: : �к����������ͧ�ѡá� ����ҧ��ǧ�����ä�� : :</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<link href="css/css.css" rel="stylesheet" type="text/css">

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function validate(){
	var f = document.login;
	if (f.username.value=="") 	{
		alert("��سһ�͹���ͼ����ҹ.");
		f.username.focus();
		return false;
	}
	if (f.password.value=="") 	{
		alert("��سһ�͹���ʼ�ҹ.");
		f.password.focus();
		return false;
	}
}
//  End -->
</script>
</head>

<body>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><? include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="13%" height="114" align="center" bgcolor="#E7E6E6">	<?include("menu.php");?></td>
    <td width="60%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"> <img src="images/rim_01.gif" width="20" height="22" alt=""></td>
        <td background="images/rim_02.gif"> <img src="images/rim_02.gif" width="8" height="22" alt=""></td>
        <td background="images/rim_02.gif">&nbsp; </td>
        <td width="23"> <img src="images/rim_04.gif" width="23" height="22" alt=""></td>
      </tr>
      <tr>
        <td background="images/rim_05.gif"> <img src="images/rim_05.gif" width="20" height="11" alt=""></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
          <tr>
            <td><strong><marquee>�Թ�յ�͹�Ѻ����к����������ͧ�ѡá� ����ҧ��ǧ �����ä�� </marquee></strong></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF">


		        <table width="100%" height="162" border="0" align="center">
                <tr>
                  <td width="325" align="right"><img src="images/icon_search11.gif" width="50" height="50"></td>
                  <td width="486"><span class="style51">��������ͧ�ѡá�</span></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><form id="form1" name="form1" method="post" action="search_machin.php">
      �ӷ���ͧ��ä���
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ҡ
<select name="fields" >
  <option value="1" selected="selected" <? echo $select1;?>>��������ͧ</option>
  <option value="2" <? echo $select1;?>>����¹</option>
  <option value="3"<? echo $select2;?>>��������ͧ�ѡá�</option>
  <option value="4" <? echo $select3;?>>���ͼ�����</option>
</select>
&nbsp;
<input type="submit" name="Submit" value="����" />
                  </form></td>
                  </tr>
                <tr>
                  <td colspan="2">
                  
 
                  
				  <?php
	if($_POST[fields]=="1"){$select1="selected";}
	if($_POST[fields]=="2"){$select2="selected";}
	if($_POST[fields]=="3"){$select3="selected";}
	if($_POST[fields]=="4"){$select3="selected";}
?><br>

                    <table width="100%" border="0">
                      <tr>
                      	<td width="75" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>����</strong></div></td>
                        <td width="87" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>����</strong></div></td>
                        <td width="65" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>����¹</strong></div></td>
          <td width="64" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>������</strong></div></td>
          <td width="65" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>������</strong></div></td>
          <td width="67" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>�Ҥ�</strong></div></td>
          <td width="66" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>ʶҹ�</strong></div></td>
		  <td width="66" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>�ٻ�Ҿ</strong></div></td>
          <td width="61" bgcolor="#0066CC"><div align="center" class="style5 style56"><strong>������</strong></div></td>
                      </tr>
                      
                      <?
$sql_show = "select * from tb_machin , tb_machinery_brand , tb_machinery_control , tb_machinery_status  ,tb_machinery_type , tb_machinery_unit  where  tb_machin.mac_status=tb_machinery_status.status_id and    tb_machin.mac_unit=tb_machinery_unit.unit_id and   tb_machin.mac_type=tb_machinery_type.type_id and  tb_machin.mac_control=tb_machinery_control.control_id and  tb_machin.mac_brand=tb_machinery_brand.brand_id and tb_machin.mac_id != ''";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.="and mac_id like '%$txt_search%'";}
				else if($fields=="2"){
				$sql_show.="and mac_licen like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.="and mac_name like '%$txt_search%'";}
						else if($fields=="4"){
						$sql_show.="and mac_control like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
        <tr>
        <td bgcolor="#CCFFFF"><span class="style4">
          <?=$row_show['mac_id']?>
        </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['mac_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['mac_licen']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['brand_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['type_name']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['mec_price']?>
          </span></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['status_name']?>
          </span></td>
		  <td bgcolor="#CCFFFF"><A HREF="images_machinery/<?if($row_show[mac_picture]!=""){echo"$row_show[mac_picture]";}else{echo"nopic.jpg";}?>" target="_blank" class="style4">���Ҿ</A></td>
          <td bgcolor="#CCFFFF"><span class="style4">
            <?=$row_show['control_name']?>
          </span></td>
        </tr>
        <?
}
?>
                    </table></td>
                </tr>
                <tr>
                 
                  </tr>
              </table>
			  
			  
			  
			  </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td background="images/rim_07.gif"> <img src="images/rim_07.gif" width="23" height="11" alt=""></td>
      </tr>
      <tr>
        <td height="300" background="images/rim_05.gif">&nbsp; </td>
        <td background="images/rim_07.gif">&nbsp; </td>
      </tr>
      <tr>
        <td> <img src="images/rim_10.gif" width="20" height="25" alt=""></td>
        <td background="images/rim_11.gif"> <img src="images/rim_11.gif" width="8" height="25" alt=""></td>
        <td background="images/rim_11.gif">&nbsp; </td>
        <td> <img src="images/rim_13.gif" width="23" height="25" alt=""></td>
      </tr>
    </table>
	
	
	</td>
  </tr>
</tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"> <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>

        <TR>
          <TD class=style11 
          background= 
          bgColor=#ffffff height=30><img src="images/menu/footerr.jpg" width="100%" height="30"></TD>
  </TR></TABLE></td>
  </tr>
</table>

</body>
</Center>
</html>
