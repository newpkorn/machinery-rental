<? include("inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>: : �к����������ͧ�ѡá� ����ҧ��ǧ�����ä�� : :</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <td width="13%" height="114" bgcolor="#E7E6E6">	<?include("menu.php");?></td>
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
            <td bgcolor="#FFFFFF"><table width="100%"  border="0">
              <form name="login" action="PageLogin.php" method="post" onsubmit="return validate();">
                <tr align="center">
                  <td colspan="2"><strong>���˹�ҷ�� Login </strong></td>
                  </tr>
                <tr>
                  <td width="43%" align="right">���ͼ����ҹ</td>
                  <td width="57%"> <input name="username" type="text" id="username" size="15"></td>
                  </tr>
                <tr>
                  <td align="right">���ʼ�ҹ</td>
                  <td><input name="password" type="password" id="password" size="15"></td>
                  </tr>
                <tr align="center">
                  <td colspan="2"><input type="submit" name="Submit" value="Submit">
                    <input type="reset" name="Submit2" value="Reset"></td>
                  </tr>
                <tr align="center">
                  <td colspan="2">&nbsp;</td>
                  </tr>
                </form>
              </table></td>
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