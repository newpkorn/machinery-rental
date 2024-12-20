<?php session_start();
include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>

  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css1.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      <!--
      .style1 {
        color: #FFFFFF
      }

      .style2 {
        color: #0000FF;
        font-weight: bold;
      }

      .style4 {
        color: #336699
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
                    <span class="style2">ชื่อผู้ใช้งาน</span> : <?= $_SESSION['adm_name'] ?>
                  </center>
                </td>
              </tr>
            </table>
            <table width="100%" height="102" border="0">
              <tr>
                <td height="48" align="center"><img src="../images/administrator.jpg" alt="" width="100" height="99"></td>
              </tr>
              <tr>
                <td width="100%" height="48">
                  <center>
                    <table width="95%" height="38" border="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="34"><span class="style1"><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></span></td>
                      </tr>
                      <tr>
                        <td height="34"><span class="style1"><img src="../images/edit.gif" alt="" width="15" height="15">&nbsp; <a href="search_type.php">ข้อมูลรุ่นเครื่องจักรกล</a></span></td>
                      </tr>
                      <tr>
                        <td height="34"><span class="style1"><img src="../images/addg.GIF" alt="" width="15" height="15"> &nbsp;<a href="addMachinType.php">เพิ่มข้อมูลรุ่นเครื่องจักรกล</a></span></td>
                      </tr>
                      <tr>
                        <td width="100%" height="34"><span class="style1"><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php"> ออกจากระบบ</a></span></td>
                      </tr>
                    </table>

                    <table width="100%" height="36" border="0">
                      <tr>
                        <td width="100%" height="32">&nbsp;</td>
                      </tr>
                    </table>
                  </center>
                </td>
              </tr>
            </table>
          </td>
          <td width="77%">
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
                      <td width="48%" colspan="2"><strong>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </strong></td>

                    </tr>
                    <tr>
                      <td colspan="2" rowspan="2" bgcolor="#FFFFFF">
                        <table width="100%" border="0">



                        </table>
                        <table width="690" height="162" border="0" align="center">
                          <tr>
                            <td width="287" align="right"><img src="../images/icon_search11.gif" width="50" height="50" align="right"></td>
                            <td width="393"><span class="style51">ค้นหาข้อมูลรุ่นเครื่องจักรกล</span></td>
                          </tr>
                          <tr>
                            <td colspan="2" align="center">
                              <form id="form1" name="form1" method="post" action="search_type.php">
                                ชื่อที่ต้องการค้นหา
                                <input name="txtKeyword" type="text" id="txtKeyword" value="<?= htmlspecialchars($_POST["txtKeyword"] ?? '') ?>" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="submit" name="Submit" value="ค้นหา" />
                              </form>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">


                              <br>

                              <table width="448" border="0" align="center">
                                <tr>
                                  <td width="247" height="28" align="center" bgcolor="#99FFFF">
                                    <div align="center" class="style2">ชื่อ</div>
                                  </td>
                                  <td width="96" align="center" bgcolor="#99FFFF">
                                    <div align="center" class="style2">แก้ไข</div>
                                  </td>
                                  <td width="91" align="center" bgcolor="#99FFFF">
                                    <div align="center" class="style2">ลบ</div>
                                  </td>
                                </tr>

                                <?php
                                $txt_search = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : '';
                                $sql_show = "SELECT * FROM tb_machinery_type WHERE type_id IS NOT NULL AND type_name LIKE '%$txt_search%' ORDER BY type_name";

                                $result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));

                                if ($result_show && mysqli_num_rows($result_show) > 0) {
                                  while ($row_show = mysqli_fetch_array($result_show)) {
                                ?>
                                    <tr>
                                      <td bgcolor="#CCFFFF"><span class="style4">
                                          <?= htmlspecialchars($row_show['type_name'], ENT_QUOTES, 'UTF-8') ?>
                                        </span></td>
                                      <td bgcolor="#CCFFFF">
                                        <div align="center" class="style4"><a href="editMachinType.php?edit_id=<?= $row_show['type_id'] ?>">แก้ไข</a></div>
                                      </td>
                                      <td bgcolor="#CCFFFF">
                                        <div align="center" class="style4"><a href="del_MachinType.php?del_id=<?= $row_show['type_id'] ?>" onClick='return Conf(this)'>ลบ</a></div>
                                      </td>
                                    </tr>
                                <?php
                                  }
                                } else {
                                  echo "<tr><td colspan='3' bgcolor='#FFCCCC' class='style4'>ไม่พบข้อมูล</td></tr>";
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