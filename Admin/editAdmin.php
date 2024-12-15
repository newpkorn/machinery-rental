<?php
session_start();

include("../inc_connect.php");

if (isset($_REQUEST['edit_id']) && $_REQUEST['edit_id'] != "") {

  $id = mysqli_real_escape_string($conn, $_REQUEST['edit_id']);

  $sql_show = "SELECT * FROM tb_admin WHERE adm_id = '$id'";
  $result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));

  if ($result_show && mysqli_num_rows($result_show) > 0) {
    $row_show = mysqli_fetch_array($result_show);
  } else {
    echo "<p style='color: red;'>ไม่พบข้อมูลผู้ดูแลระบบสำหรับ ID นี้</p>";
    $row_show = null;
  }
} else {
  echo "<p style='color: red;'>ไม่ได้รับ edit_id ที่ถูกต้อง</p>";
  $row_show = null;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../css/css1.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="data:image/x-icon;">
  <script language="javascript">
    function CheckNum() {
      if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
        alert('กรอกได้เฉพาะตัวเลข 0-9 ');
      }
    }
  </script>
  <style type="text/css">
    <!--
    .style1 {
      color: #FF0000
    }

    .style2 {
      color: #0000FF
    }
    -->
  </style>

</head>

<script type="text/javascript" language="javascript" src="datetimepicker.js"></script>

<body>
  <center>
    <form name="form1" method="post" onSubmit="return chkdata();" action="save_updateAdmin.php">
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

                    <span class="style2"><strong>ชื่อผู้ใช้งาน</strong></span> : <?= $_SESSION['adm_name'] ?>
                  </center>
                </td>
              </tr>
            </table>
            <table width="100%" height="52" border="0">
              <tr>
                <td width="100%" height="48">
                  <center>
                    <img src="../images/administrator.jpg" alt="" width="100" height="100">
                  </center>
                </td>
              </tr>
            </table>
            <table width="92%" height="146" border="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/impersonal.gif" alt="" width="16" height="16"><a href="search_admin.php">&nbsp;ข้อมูลผู้ดูแลระบบ</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15"><a href="InsertAdmin.php">&nbsp;เพิ่มข้อมูลผู้ดูแลระบบ</a></strong></td>
              </tr>
              <tr>
                <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></strong></td>
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
                      <td width="47%"><strong>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง จังหวัดมหาสารคาม</strong></td>
                      <td width="53%" align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" height="10"></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <table width="100%" border="0" bgcolor="#99FFFF">
                          <tr>
                            <td colspan="2"><strong>แก้ไขข้อมูลผู้ดูแลระบบ</strong></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;รหัสผู้ดูแลระบบ : </label>&nbsp;
                              </span></td>
                            <td bgcolor="#CCFFFF"><label for="txtID"></label>
                              <input type="text" name="txtID" id="txtID" value="<?= htmlspecialchars($row_show['adm_id'], ENT_QUOTES, 'UTF-8') ?>" readonly />
                              <span class="style1">*</span>
                            </td>
                          </tr>
                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ชื่อ-สกุล : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="txtName"></label>
                              <label for="txtName2"></label>
                              <input type="text" name="txtName1" id="txtName1" value="<?= htmlspecialchars($row_show['adm_name'], ENT_QUOTES, 'UTF-8') ?>" />
                              <span class="style1">* </span>
                            </td>
                          </tr>
                          <tr>
                            <td height="43" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ตำแหน่ง : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="txtPos"></label>
                              <select name="txtPos" id="txtPos">
                                <?php
                                $positionQuery = "SELECT * FROM tb_position";
                                $stmt = $conn->prepare($positionQuery);

                                if ($stmt === false) {
                                  die('Error preparing statement: ' . $conn->error);
                                }

                                if ($stmt->execute()) {
                                  $result = $stmt->get_result(); 
                                  if ($result->num_rows > 0) {
                                    while ($rsposition = $result->fetch_assoc()) {
                                ?>
                                      <option
                                        value="<?= $rsposition['pos_id']; ?>"
                                        <?php if ($row_show["Position_id"] === $rsposition['pos_id']) echo " selected "; ?>>
                                        <?= htmlspecialchars($rsposition['pos_name'], ENT_QUOTES, 'UTF-8'); ?>
                                      </option>
                                <?php
                                    }
                                  } else {
                                    echo "<option>No positions available</option>";
                                  }
                                } else {
                                  echo "Error executing query: " . $stmt->error;
                                }
                                $stmt->close(); // ปิด statement
                                ?>
                              </select>

                            </td>
                          </tr>
                          <tr>
                            <td height="43" align="right" bgcolor="#CCFFFF"><span class="style2">&nbsp;วันเดือนปีเกิด : </span></td>
                            <td bgcolor="#CCFFFF"><input type="text" name="txtBirth" size="10" id="StartDate[]" value="<?= htmlspecialchars($row_show['birthday'], ENT_QUOTES, 'UTF-8') ?>" onKeyPress="CheckNum()" />
                              <a href="javascript:NewCal('StartDate[]','ddmmyyyy')"> <img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"> <span class="style1">* </span></a>
                            </td>
                          </tr>

                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;เบอร์โทร : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="Phone"></label>
                              <input name="Phone" type="text" id="Phone" maxlength="10" value="<?= htmlspecialchars($row_show['phone'], ENT_QUOTES, 'UTF-8') ?>" onKeyPress="CheckNum()" />
                              <span class="style1">* </span>
                            </td>
                          </tr>
                          <tr>
                            <td height="40" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ที่อยู่ : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="txtAdd"></label>
                              <textarea name="txtAdd" id="txtAdd" cols="45" rows="5"> <?= htmlspecialchars($row_show['address'], ENT_QUOTES, 'UTF-8') ?> </textarea>
                            </td>
                          </tr>
                          <tr>
                            <td height="44" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ชื่อเข้าใช้งาน : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><input name="txtUser" type="text" id="txtUser" maxlength="15" value="<?= htmlspecialchars($row_show['adm_user'], ENT_QUOTES, 'UTF-8') ?>" />
                              <span class="style1">*</span>
                            </td>
                          </tr>
                          <tr>
                            <td height="44" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;รหัสผ่าน : </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><input name="txtPass" type="text" id="txtPass" maxlength="15" value="<?= htmlspecialchars($row_show['adm_pass'], ENT_QUOTES, 'UTF-8') ?>" />
                              <span class="style1">*</span>
                            </td>
                          </tr>
                          <tr>
                            <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                            <td bgcolor="#CCFFFF">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                            <td bgcolor="#CCFFFF">
                              <table width="114" border="0">
                                <tr>
                                  <td width="55"><input type="submit" name="Update" id="Update" value="Edit" /> <input name="edit_id" type="hidden" id="edit_id" value="<?= $_REQUEST['edit_id'] ?>" /></td>
                                  <td width="140">&nbsp;</td>
                                  <td> <a href="search_Admin.php"><input type="button" name="Back" id="Back" value="Cancel" /></a></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td width="21%"></td>
                            <td width="79%"><span class="style2"></span></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" height="10"></td>
                    </tr>
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
      </table>
    </form>
  </center>
</body>

</html>