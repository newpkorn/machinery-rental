<?php include("inc_connect.php"); ?>

<!DOCTYPE>
<html>

<head>

  <HEAD>
    <TITLE>: : ระบบขอเช่าเครื่องจักรกล กรมทางหลวงมหาสารคาม : :</TITLE>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="./css/css.css" rel="stylesheet" type="text/css" />

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

  <center>

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
      <td width="60%" higth="100%">
        <div class="document-support">
          <table width="100%" border="0">
            <tr>
              <td><strong>
                  <marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee>
                </strong></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" align="center">
                <table width="400" border="1" align="center">
                  <TR>
                    <TD width="21%" align="center" bgcolor="#CCFFFF"><span class="style57">ลำดับ</span></TD>
                    <TD width="79%" align="center" bgcolor="#CCFFFF"><span class="style57">เอกสาร</span></TD>
                  </TR>
                  <?php
                  $numb = 1;
                  $sqldoc = mysqli_query($conn, "SELECT * FROM tb_document") or die(mysqli_connect_error($conn));
                  while ($rsdoc = mysqli_fetch_array($sqldoc)) { ?>
                    <TR>
                      <TD align="center"><?= $numb ?></TD>
                      <TD><? if ($rsdoc[2] != "") { ?><A HREF="document/<?= $rsdoc[2] ?>" target="_blank"><? } ?><?= $rsdoc[1] ?></A></TD>
                    </TR>
                  <?php $numb++;
                  } ?>
                </table>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>
  </td>
  </tr>
  </tr>
  <tr>
    <td colspan="2">
      <img src="images/menu/footerr.jpg" width="100%" height="30">
    </td>
  </tr>
  </table>
</body>
</center>

</html>