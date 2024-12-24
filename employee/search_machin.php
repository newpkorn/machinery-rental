<?php session_start();
include("../inc_connect.php");
$select1 = $select2 = $select3 = $select4 = '';
$fields = isset($_POST['fields']) ? $_POST['fields'] : '';

if ($fields == "1") {
  $select1 = 'selected';
} elseif ($fields == "2") {
  $select2 = 'selected';
} elseif ($fields == "3") {
  $select3 = 'selected';
} elseif ($fields == "4") {
  $select4 = 'selected';
}
?>;

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>

  <head>
    <title>Machinery Rental for Department of Highways of Mahasarakham</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css1.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      <!--
      .style1 {
        color: #0000FF;
        font-weight: bold;
      }

      .style2 {
        color: #FFFFFF
      }

      .style4 {
        color: #3366FF
      }

      .style5 {
        color: #FFFFFF;
        font-weight: bold;
      }

      .style6 {
        color: #FF0000;
      }
      -->
    </style>
  </head>

  <SCRIPT language="JavaScript">
    <!--   
    function Conf(object) {
      if (confirm("คุณต้องการลบข้อมูล ?") == true) {
        return true;
      }
      return false;
    }
    //
    -->
  </SCRIPT>

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
                    <span class="style1">ชื่อผู้ใช้งาน</span> : <?= $_SESSION['emp_name'] ?>
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
                    <table width="97%" height="173" align="center" border="0" bgcolor="#FFFFFF">
                      <tr>
                        <td width="100%" height="34"><strong>&nbsp;&nbsp;<img src="../images/home.gif" alt="" width="16" height="14"> <a href="Menu_Detail.php">หน้าแรก</a></strong></td>
                      </tr>
                      <tr>
                        <td height="34"><strong>&nbsp;&nbsp;<img src="../images/edit.gif" alt="" width="15" height="15">&nbsp;<a href="search_machin.php">ข้อมูลเครื่องจักรกล</a></strong></td>
                      </tr>
                      <tr>
                        <td height="34"><strong>&nbsp;&nbsp;<img src="../images/addg.GIF" alt="" width="15" height="15"><a href="DesignInsertMachine.php">&nbsp;เพิ่มข้อมูลเครื่องจักรกล</a></strong></td>
                      </tr>
                      <tr>
                        <td height="37"><strong>&nbsp;&nbsp;<img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></strong></td>
                      </tr>
                    </table>
                  </center>
                </td>
              </tr>
            </table>
          </td>
          <td width="100%">
            <table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="20"> <img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
                <td background="../images/rim_02.gif"> <img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
                <td background="../images/rim_02.gif">&nbsp; </td>
                <td width="23"> <img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
              </tr>
              <tr>
                <td background="../images/rim_05.gif"> <img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
                <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
                  <table width="100%" border="0">
                    <tr>
                      <td width="100%" colspan="2"><strong>
                          <marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</marquee>
                        </strong></td>

                    </tr>
                    <tr>
                      <td colspan="2" rowspan="2" bgcolor="#FFFFFF">
                        <table width="100%" border="0">
                        </table>
                        <table width="100%" height="162" border="0" align="center">
                          <tr>
                            <td width="50%" align="right"><img src="../images/icon_search11.gif" width="50" height="50"></td>
                            <td width="50%"><span class="style51">ค้นหาเครื่องจักรกล</span></td>
                          </tr>
                          <tr>
                            <td colspan="2" align="center">
                              <form id="form1" name="form1" method="post" action="search_machin.php">
                                คำที่ต้องการค้นหา
                                <input name="txtKeyword" type="text" id="txtKeyword" value="<?= isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : ''; ?>" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
                                <select name="fields">
                                  <option value="1" selected="selected" <?php $select1; ?>>รหัสเครื่อง</option>
                                  <option value="2" <?php $select1; ?>>ทะเบียน</option>
                                  <option value="3" <?php $select2; ?>>ชื่อเครื่องจักรกล</option>
                                  <option value="4" <?php $select3; ?>>ขื่อผู้ดูแล</option>
                                </select>
                                &nbsp;
                                <input type="submit" name="Submit" value="ค้นหา" />
                              </form>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <table width="100%" border="0">
                                <tr>
                                  <td width="10%" height="30" bgcolor="#0066CC">
                                    <div align="center" class="style2"><strong>รหัส</strong></div>
                                  </td>
                                  <td width="20%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ชื่อ</div>
                                  </td>
                                  <td width="10%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ทะเบียน</div>
                                  </td>
                                  <td width="15%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ยี่ห้อ</div>
                                  </td>
                                  <td width="15%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ประเภท</div>
                                  </td>
                                  <td width="7%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ราคา</div>
                                  </td>
                                  <td width="5%" bgcolor="#0066CC">
                                    <div align="center" class="style5">สถานะ</div>
                                  </td>
                                  <td width="5%" bgcolor="#0066CC">
                                    <div align="center" class="style5">รูปภาพ</div>
                                  </td>
                                  <td width="15%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ผู้ดูแล</div>
                                  </td>
                                  <td width="5%" bgcolor="#0066CC">
                                    <div align="center" class="style5">แก้ไข</div>
                                  </td>
                                  <td width="5%" bgcolor="#0066CC">
                                    <div align="center" class="style5">ลบ</div>
                                  </td>
                                </tr>
                                <?php
                                $sql_show = "SELECT * FROM 
              tb_machin,
              tb_machinery_brand,
              tb_machinery_control,
              tb_machinery_status,
              tb_machinery_type,
              tb_machinery_unit
            WHERE tb_machin.mac_status=tb_machinery_status.status_id
              AND tb_machin.mac_unit=tb_machinery_unit.unit_id
              AND tb_machin.mac_type=tb_machinery_type.type_id
              AND tb_machin.mac_control=tb_machinery_control.control_id
              AND tb_machin.mac_brand=tb_machinery_brand.brand_id";

                                $txt_search = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : '';
                                $fields = isset($_POST['fields']) ? $_POST['fields'] : '';

                                if (!empty($txt_search)) {
                                  switch ($fields) {
                                    case "1":
                                      $sql_show .= " AND mac_id LIKE ?";
                                      break;
                                    case "2":
                                      $sql_show .= " AND mac_licen LIKE ?";
                                      break;
                                    case "3":
                                      $sql_show .= " AND mac_name LIKE ?";
                                      break;
                                    case "4":
                                      $sql_show .= " AND mac_control LIKE ?";
                                      break;
                                  }
                                }

                                $stmt = $conn->prepare($sql_show);
                                if (!empty($txt_search)) {
                                  $search_param = "%$txt_search%";
                                  $stmt->bind_param('s', $search_param);
                                }
                                $stmt->execute();
                                $result_show = $stmt->get_result();

                                if ($result_show && $result_show->num_rows > 0) {
                                  while ($row_show = $result_show->fetch_assoc()) {
                                ?>
                                    <tr>
                                      <td><?= htmlspecialchars($row_show['mac_id'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['mac_name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['mac_licen'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['brand_name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['type_name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['mec_price'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><?= htmlspecialchars($row_show['status_name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><a href="../images_machinery/<?= htmlspecialchars($row_show['mac_picture'] ?: 'nopic.jpg', ENT_QUOTES, 'UTF-8') ?>" target="_blank">ดูภาพ</a></td>
                                      <td><?= htmlspecialchars($row_show['control_name'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
                                      <td><a href="editMachin.php?edit_id=<?= htmlspecialchars($row_show['mac_id'], ENT_QUOTES, 'UTF-8') ?>"><img src="../images/edit.gif" alt="Edit"></a></td>
                                      <td><a href="del_Machin.php?del_id=<?= htmlspecialchars($row_show['mac_id'], ENT_QUOTES, 'UTF-8') ?>" onClick='return Conf(this)'><img src="../images/delete.gif" alt="Delete"></a></td>
                                    </tr>
                                <?php
                                  }
                                } else {
                                  echo "<tr><td colspan='11'>No records found</td></tr>";
                                }
                                ?>

                              </table>
                            </td>
                          </tr>
                          <tr>

                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                  </table>
                </td>
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
            </table>
          </td>
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