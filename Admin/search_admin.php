<?php
session_start();
include("../inc_connect.php");

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Submit'])) {
  $txt_search = htmlspecialchars($_POST['txtKeyword']);
  $fields = $_POST['fields'];

  switch ($fields) {
    case '1':
      $sql_show = "SELECT * FROM tb_admin
                  JOIN tb_position ON tb_admin.Position_id = tb_position.pos_id
                  WHERE adm_id LIKE ?";
      break;
    case '2':
      $sql_show = "SELECT * FROM tb_admin
                  JOIN tb_position ON tb_admin.Position_id = tb_position.pos_id
                  WHERE adm_name LIKE ?";
      break;
    case '3':
      $sql_show = "SELECT * FROM tb_admin
                  JOIN tb_position ON tb_admin.Position_id = tb_position.pos_id
                  WHERE adm_birth LIKE ?";
      break;
    default:
      $sql_show = "SELECT * FROM tb_admin
                  JOIN tb_position ON tb_admin.Position_id = tb_position.pos_id";
      break;
  }

  if ($stmt = mysqli_prepare($conn, $sql_show)) {
    if ($fields !== 'default') {
      $txt_search = '%' . $txt_search . '%';
      mysqli_stmt_bind_param($stmt, "s", $txt_search);
    }

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    $results = [];
  }
} else {
  $sql_show = "SELECT * FROM tb_admin
              JOIN tb_position ON tb_admin.Position_id = tb_position.pos_id";
  $result = mysqli_query($conn, $sql_show);
  $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>

  <head>
    <title>Machinery Rental for Department of Highways of Mahasarakham</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css1.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="data:image/x-icon;">
    <style type="text/css">
      <!--
      .style1 {
        color: #0000FF;
        font-weight: bold;
      }

      .style3 {
        color: #FFFFFF;
        font-weight: bold;
      }

      .main-menu {
        border-radius: 10px;
      }
      -->
    </style>
  </head>

  <script language="JavaScript">
    function Conf(object) {
      return confirm("คุณต้องการลบข้อมูล ?");
    }
  </script>

  <body>
    <font size="+5">
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
                  <center>
                    <span class="style1">ชื่อผู้ใช้งาน</span> : <?= $_SESSION['adm_name'] ?>
                  </center>
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
                    <table class="main-menu" width="94%" height="146" border="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php">หน้าแรก</a></strong></td>
                      </tr>
                      <tr>
                        <td height="34"><strong><img src="../images/impersonal.gif" alt="" width="16" height="16">&nbsp;<a href="search_admin.php">ข้อมูลผู้ดูแลระบบ</a></strong></td>
                      </tr>
                      <tr>
                        <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15">&nbsp;<a href="InsertAdmin.php">เพิ่มข้อมูลผู้ดูแลระบบ</a></strong></td>
                      </tr>
                      <tr>
                        <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></strong></td>
                      </tr>
                    </table>
                  </center>
                </td>
              </tr>
            </table>
          </td>
          <td width="77%">
            <table width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" rowspan="0" valign="top" bgcolor="#FFFFFF">
                  <table width="100%" border="0" >
                    <tr>
                      <td width="48%" colspan="2"><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </strong></td>
                    </tr>
                    <tr>
                      <td colspan="2" rowspan="2" bgcolor="#FFFFFF">
                        <table width="100%" border="0">
                          <tr>
                            <td width="294" align="right"><img src="../images/icon_search11.gif" width="50" height="50"></td>
                            <td width="386"><span class="style51">ค้นหาเจ้าหน้าที่</span></td>
                          </tr>
                          <tr>
                            <td colspan="2" align="center">
                              <form id="form1" name="form1" method="post" action="search_admin.php">
                                คำที่ต้องการค้นหา
                                <input name="txtKeyword" type="text" id="txtKeyword" value="<?= htmlspecialchars($_POST["txtKeyword"] ?? '') ?>" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
                                <select name="fields">
                                  <option value="1" selected="selected">รหัส</option>
                                  <option value="2">ชื่อ</option>
                                  <option value="3">ว/ด/ปี เกิด</option>
                                </select>
                                &nbsp;
                                <input type="submit" name="Submit" value="ค้นหา" />
                              </form>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <table width="667" border="0">
                                <tr>
                                  <td width="50" height="27" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">รหัส</div>
                                  </td>
                                  <td width="99" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">ชื่อ</div>
                                  </td>
                                  <td width="64" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">ตำแหน่ง</div>
                                  </td>
                                  <td width="60" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">ชื่อเข้าใช้งาน</div>
                                  </td>
                                  <td width="68" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">เบอร์โทร</div>
                                  </td>
                                  <td width="72" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">ที่อยู่</div>
                                  </td>
                                  <td width="56" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">แก้ไข</div>
                                  </td>
                                  <td width="26" bordercolor="#0066FF" bgcolor="#0066CC">
                                    <div align="center" class="style3">ลบ</div>
                                  </td>
                                </tr>

                                <?php foreach ($results as $row_show): ?>
                                  <tr>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['adm_id'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['adm_name'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['pos_name'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['adm_user'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['phone'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF"><?= $row_show['address'] ?></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF" align="center"><a href="editAdmin.php?edit_id=<?= $row_show['adm_id'] ?>"><img src="../images/edit.gif" alt="" width="15" height="15"></a></a></td>
                                    <td bordercolor="#0066FF" bgcolor="#CCFFFF" align="center"><a href="del_admin.php?del_id=<?= $row_show['adm_id'] ?>" onClick='return Conf(this)' ><img src="../images/delete.gif" alt="" width="15" height="15"></a></td>
                                  </tr>
                                <?php endforeach; ?>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </font>
  </body>

</html>