<?php session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<link rel="icon" href="data:image/x-icon;">
<style type="text/css">
  .style1 {color: #0000FF;}
  body {
    font-size: 20px;
  }
</style>
</head>
<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><?php include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6">
      <table width="100%" height="49" border="0">
        <tr>
          <td width="100%" height="45">
            <center><span class="style1">ชื่อผู้ใช้งาน</span> : <?php echo $_SESSION['adm_name']; ?></center>
          </td>
        </tr>
      </table>
      <table width="100%" height="102" border="0">
        <tr>
          <td height="48" align="center"><img src="../images/administrator.jpg" alt="" width="100" height="100"></td>
        </tr>
        <tr>
          <td width="100%" height="48"><center>
            <a href="../logout.php"><img src="../images/logout.gif" alt="" width="16" height="16"> ออกจากระบบ </a>
          </center></td>
        </tr>
      </table>
    </td>
    <td width="77%">
      <table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
          <td background="../images/rim_02.gif"><img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
          <td background="../images/rim_02.gif">&nbsp;</td>
          <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
        </tr>
        <tr>
          <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
          <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
            <table width="100%" border="0">
              <tr>
                <td width="48%" colspan="2"><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</strong></td>
              </tr>
              <tr>
                <td colspan="2" rowspan="2" bgcolor="#FFFFFF">
                  <table width="100%" border="0">
                    <form name="login" action="PageLogin.php" method="post" onsubmit="return validate();">
                      <tr align="center">
                        <td width="100%">
                          <table width="100%" border="0">
                            <tr>
                              <td height="67"><img src="../images/menu/grad.jpg" alt="" width="375" height="43"></td>
                            </tr>
                            <tr align="center">
                              <td width="100%">
                                <table width="471" height="387" border="0">
                                  <tr>
                                    <td width="161" height="103" align="center">
                                      <a href="search_admin.php"><img src="../images/admin.png" alt="" width="128" height="99"><br>ข้อมูลผู้ดูแลระบบ</a>
                                    </td>
                                    <td width="139" align="center">
                                      <a href="search_employee.php"><img src="../images/user.png" alt="" width="128" height="99"><br>ข้อมูลเจ้าหน้าที่</a>
                                    </td>
                                    <td width="149" align="center">
                                      <a href="search_member.php"><img src="../images/User group.png" alt="" width="128" height="99"><br>ข้อมูลสมาชิก</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td height="92" align="center">
                                      <a href="search_machin.php"><img src="../images/cat2-1246522068.jpg" alt="" width="128" height="99"></a><br>ข้อมูลเครื่องจักรกล
                                    </td>
                                    <td align="center">
                                      <a href="search_type.php"><img src="../images/icon_report.png" alt="" width="128" height="99"><br>ข้อมูลรุ่นเครื่องจักรกล</a>
                                    </td>
                                    <td align="center">
                                      <a href="search_brand.php"><img src="../images/icon_report.png" alt="" width="128" height="99"><br>ข้อมูลยี่ห้อเครื่องจักรกล</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td height="92" align="center">
                                      <a href="search_position.php"><img src="../images/icon_report.png" alt="" width="128" height="99"><br>ข้อมูลตำแหน่งเจ้าหน้าที่</a>
                                    </td>
                                    <td align="center">
                                      <a href="search_status.php"><img src="../images/Gnome-status.png" alt="" width="128" height="99"><br>ข้อมูลสถานะเครื่องจักรกล</a>
                                    </td>
                                    <td align="center">
                                      <a href="contact.php"><img src="../images/Gnome-status.png" alt="" width="128" height="99"><br>ข้อมูลการติดต่อหน่วยงาน</a>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </form>
                  </table>
                </td>
              </tr>
              <tr></tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td background="../images/rim_07.gif"><img src="../images/rim_07.gif" width="23" height="11" alt=""></td>
        </tr>
        <tr>
          <td height="300" background="../images/rim_05.gif">&nbsp;</td>
          <td background="../images/rim_07.gif">&nbsp;</td>
        </tr>
        <tr>
          <td><img src="../images/rim_10.gif" width="20" height="25" alt=""></td>
          <td background="../images/rim_11.gif"><img src="../images/rim_11.gif" width="8" height="25" alt=""></td>
          <td background="../images/rim_11.gif">&nbsp;</td>
          <td><img src="../images/rim_13.gif" width="23" height="25" alt=""></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"></td>
  </tr>
</table>
</body>
</html>
