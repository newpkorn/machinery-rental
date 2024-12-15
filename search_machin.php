<?php
include("inc_connect.php");

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
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>

  <head>
    <HTML xmlns="http://www.w3.org/1999/xhtml">
    <style type="text/css">
      <!--
      .style56 {
        color: #FFFFFF
      }

      .style57 {
        color: #0000FF
      }

      .table-machine {
        font-size: small;
      }
      -->
    </style>

    <HEAD>
      <TITLE>: : ระบบขอเช่าเครื่องจักรกล กรมทางหลวงมหาสารคาม : :</TITLE>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="css/css.css" rel="stylesheet" type="text/css">

      <SCRIPT LANGUAGE="JavaScript">
        <!-- Begin
        function validate() {
          var f = document.login;
          if (f.username.value == "") {
            alert("กรุณาป้อนชื่อผู้ใช้งาน.");
            f.username.focus();
            return false;
          }
          if (f.password.value == "") {
            alert("กรุณาป้อนรหัสผ่าน.");
            f.password.focus();
            return false;
          }
        }
        //  End 
        -->
      </script>
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
        <td width="13%" height="114" align="center" bgcolor="#E7E6E6"> <?php include("menu.php"); ?></td>
        <td width="60%">
          <table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20"> <img src="images/rim_01.gif" width="20" height="22" alt=""></td>
              <td background="images/rim_02.gif"> <img src="images/rim_02.gif" width="8" height="22" alt=""></td>
              <td background="images/rim_02.gif">&nbsp; </td>
              <td width="23"> <img src="images/rim_04.gif" width="23" height="22" alt=""></td>
            </tr>
            <tr>
              <td background="images/rim_05.gif"> <img src="images/rim_05.gif" width="20" height="11" alt=""></td>
              <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
                <table width="100%" border="0">
                  <tr>
                    <td><strong>
                        <marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee>
                      </strong></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF">
                      <table width="100%" height="162" border="0" align="center">
                        <tr>
                          <td width="325" align="right"><img src="images/icon_search11.gif" width="50" height="50"></td>
                          <td width="486"><span class="style51">ค้นหาเครื่องจักรกล</span></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center">
                            <form id="form1" name="form1" method="post" action="search_machin.php">
                              คำที่ต้องการค้นหา
                              <input name="txtKeyword" type="text" id="txtKeyword" value="<?= isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : ''; ?>" />
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จาก
                              <select name="fields">
                                <option value="1" <?= $select1; ?>>รหัสเครื่อง</option>
                                <option value="2" <?= $select2; ?>>ทะเบียน</option>
                                <option value="3" <?= $select3; ?>>ชื่อเครื่องจักรกล</option>
                                <option value="4" <?= $select4; ?>>ชื่อผู้ดูแล</option>
                              </select>
                              &nbsp;
                              <input type="submit" name="Submit" value="ค้นหา" />
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <table class="table-machine" width="100%" border="0">
                              <tr>
                                <td width="75" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>รหัส</strong></div>
                                </td>
                                <td width="87" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ชื่อ</strong></div>
                                </td>
                                <td width="65" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ทะเบียน</strong></div>
                                </td>
                                <td width="64" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ยี่ห้อ</strong></div>
                                </td>
                                <td width="65" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ประเภท</strong></div>
                                </td>
                                <td width="67" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ราคา</strong></div>
                                </td>
                                <td width="66" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>สถานะ</strong></div>
                                </td>
                                <td width="66" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>รูปภาพ</strong></div>
                                </td>
                                <td width="61" bgcolor="#0066CC">
                                  <div align="center" class="style5 style56"><strong>ผู้ดูแล</strong></div>
                                </td>
                              </tr>

                              <?php
                              $sql_show = "SELECT * FROM tb_machin, tb_machinery_brand, tb_machinery_control,
                                                          tb_machinery_status, tb_machinery_type, tb_machinery_unit 
                                                    WHERE 
                                                        tb_machin.mac_status = tb_machinery_status.status_id AND    
                                                        tb_machin.mac_unit = tb_machinery_unit.unit_id AND   
                                                        tb_machin.mac_type = tb_machinery_type.type_id AND  
                                                        tb_machin.mac_control = tb_machinery_control.control_id AND  
                                                        tb_machin.mac_brAND = tb_machinery_brAND.brAND_id AND 
                                                        tb_machin.mac_id != ''";

                              $txt_search = isset($_POST['txtKeyword']) ? $_POST['txtKeyword'] : '';
                              $fields = isset($_POST['fields']) ? $_POST['fields'] : '';

                              if ($fields == "1") {
                                $sql_show .= " AND mac_id LIKE '%$txt_search%'";
                              } else if ($fields == "2") {
                                $sql_show .= " AND mac_licen LIKE '%$txt_search%'";
                              } else if ($fields == "3") {
                                $sql_show .= " AND mac_name LIKE '%$txt_search%'";
                              }
                              if ($fields == "4") {
                                $sql_show .= " AND control_name LIKE '%$txt_search%'";
                              }

                              $result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));

                              // Check if the query returned rows
                              if (mysqli_num_rows($result_show) > 0) {
                                // Fetch and display the rows
                                while ($row_show = mysqli_fetch_array($result_show)) {
                              ?>
                                  <tr>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['mac_id']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['mac_name']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['mac_licen']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['brand_name']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['type_name']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['mec_price']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['status_name']) ?>
                                      </span></td>
                                    <td bgcolor="#CCFFFF">
                                      <a href="images_machinery/<?php echo !empty($row_show['mac_picture']) ? htmlspecialchars($row_show['mac_picture']) : 'nopic.jpg'; ?>" target="_blank" class="style4">ดูภาพ</a>
                                    </td>
                                    <td bgcolor="#CCFFFF"><span class="style4">
                                        <?= htmlspecialchars($row_show['control_name']) ?>
                                      </span></td>
                                  </tr>
                              <?php
                                }
                              } else {
                                // No rows found
                                echo "<tr><td colspan='9' bgcolor='#CCFFFF'><span class='style4'>No results found.</span></td></tr>";
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
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </td>
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
        <td colspan="2">
          <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>

            <TR>
              <TD class=style11
                background=bgColor=#ffffff height=30><img src="images/menu/footerr.jpg" width="100%" height="30"></TD>
            </TR>
          </TABLE>
        </td>
      </tr>
    </table>

  </body>
</Center>

</html>