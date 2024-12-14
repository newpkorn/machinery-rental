<?@session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>
</head>

<body><font size="+5">
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><? include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6">
    <table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>
<span class="style1">ชื่อผู้ใช้งาน</span> :: <?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><img src="../images/admin.png" alt="" width="100" height="99"></td>
        </tr>
        <tr>
          <td width="100%" height="48" valign="middle"><center>
            <a href="../logout.php"><img src="../images/logout.gif" alt="" width="16" height="16"> ออกจากระบบ </a>
          </center></td>
        </tr>
    </table>
    </td>
    <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"> <img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
        <td background="../images/rim_02.gif"> <img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
        <td background="../images/rim_02.gif">&nbsp; </td>
        <td width="23"> <img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"> <img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
          <tr>
            <td width="48%" colspan="2"><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </strong></td>
          
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF"><table width="100%" height="407"  border="0">
              <form name="login" action="PageLogin.php" method="post" onsubmit="return validate();">
                <tr>
                  <td height="67"><img src="../images/menu/grad.jpg" alt="" width="375" height="43"></td>
                </tr>
                <tr align="center">
                  <td width="100%"><table width="471" height="288" border="0">
                    <tr>
                      <td width="161" height="103" align="center"><a href="InsertMember.php"><img src="../images/admin.jpg" alt="" width="128" height="99"><br>
                        ข้อมูลสมาชิก</a></td>
                      <td width="139" align="center"><a href="search_machin.php"><img src="../images/9201รถยนต์นั่ง เก๋ง ตู้.gif" alt="" width="128" height="99"><br>
                            ข้อมูลเครื่องจักรกล</a></td>
                      <td width="149" align="center"><a href="ReservationsMachine.php"><img src="../images/20090401144610_pic.gif" alt="" width="128" height="99"><br>
                        ข้อมูลการจองเครื่องจักรกล</a></td>
                    </tr>
                    <tr>
                      <td height="92" align="center"><a href="RentMachine.php"><img src="../images/20090401163201_pic.gif" alt="" width="128" height="99"><BR>
                        ข้อมูลการเช่าเครื่องจักรกล</a></td>
                      <td align="center"><a href="ReturntMachine.php"><img src="../images/fileopen.png" alt="" width="128" height="99"><BR>
                        ข้อมูลการรับคืน</a></td>
                      <td align="center"><a href="document.php"><img src="../images/icon_report.png" alt="" width="130" height="97"99"><BR>
                        เอกสารดาวน์โหลด</a></td>
                    </tr>

                  </table>
                  </td>
                </tr>
                </form>
            </table></td>
          </tr>
          <tr></tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td background="../images/rim_07.gif"> <img src="../images/rim_07.gif" width="23" height="11" alt=""></td>
      </tr>
      <tr>
        <td height="300" background="../images/rim_05.gif">&nbsp; </td>
        <td background="../images/rim_07.gif">&nbsp; </td>
      </tr>
      <tr>
        <td> <img src="../images/rim_10.gif" width="20" height="25" alt=""></td>
        <td background="../images/rim_11.gif"> <img src="../images/rim_11.gif" width="8" height="25" alt=""></td>
        <td background="../images/rim_11.gif">&nbsp; </td>
        <td> <img src="../images/rim_13.gif" width="23" height="25" alt=""></td>
      </tr>
    </table></td>
  </tr>
</tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"></td>
  </tr>
</table>
</font>
</body>
</Center>
</html>
