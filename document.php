<? include("inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.style57 {color: #0000FF}
-->
</style>
<HEAD><TITLE>: : ระบบขอเช่าเครื่องจักรกล กรมทางหลวงมหาสารคาม : :</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/css.css" rel="stylesheet" type="text/css">

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function validate(){
	var f = document.login;
	if (f.username.value=="") 	{
		alert("กรุณาป้อนชื่อผู้ใช้งาน.");
		f.username.focus();
		return false;
	}
	if (f.password.value=="") 	{
		alert("กรุณาป้อนรหัสผ่าน.");
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
            <td><strong><marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee></strong></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF" align="center">


			  <table width="400" border="1"align="center" >
            <TR>
				<TD width="21%"  align="center" bgcolor="#CCFFFF"><span class="style57">ลำดับ</span></TD>
				<TD width="79%" align="center" bgcolor="#CCFFFF"><span class="style57">เอกสาร</span></TD>
            </TR>
			<?
			$numb=1;
			  $sqldoc=mysql_query("select * from   tb_document");
						  while($rsdoc= mysql_fetch_array($sqldoc))
						  {?>
            <TR>
				<TD align="center"><?=$numb?></TD>
				<TD  ><?if($rsdoc[2]!=""){?><A HREF="document/<?=$rsdoc[2]?>" target="_blank"><?}?><?=$rsdoc[1]?></A></TD>
            </TR>
      <?$numb++;}?>
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
    </table></td>
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
