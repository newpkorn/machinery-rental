<?php
ini_set('session.gc_probability', 1);
session_start();
include("../inc_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Machinery Rental for Department of Highways of Mahasarakham</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../css/css1.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="data:image/x-icon;">
  <style type="text/css">
    .style1 {
      color: #0000FF;
    }

    body {
      font-size: 20px;
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .menu-container {
      background-color: #E7E6E6;
      height: 60vh;
    }

    .menu-admin {
      background-color: white;
      border-radius: 15px;
      width: 95%;
    }
  </style>
</head>

<body>
  <center>
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
              <td width="100%" height="48">
                <center>
                  <a href="../logout.php"><img src="../images/logout.gif" alt="" width="16" height="16"> ออกจากระบบ </a>
                </center>
              </td>
            </tr>
          </table>
        </td>
        <td width="77%">
          <div class="menu-container">
            <center>
              <div class="menu-admin">
                <table width="90%" border="0">
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
              </div>
            </center>
          </div>
        </td>
      </tr>
      <tr valign="top" bgcolor="#E7E6E6">
        <td colspan="2"></td>
      </tr>
    </table>
  </center>
</body>

</html>