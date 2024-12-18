<?php include("inc_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <TITLE>: : ระบบขอเช่าเครื่องจักรกล กรมทางหลวงมหาสารคาม : :</TITLE>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="./css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
  <Center>
    <style type="text/css">
      <!--
      .style53 {
        color: #3399FF
      }

      .style55 {
        color: #0000FF
      }

      .style56 {
        color: #CC9900
      }
      -->
    </style>
    <SCRIPT LANGUAGE="JavaScript">
      <!-- Begin
      function validate() {
        var f = document.login;
        if (f.username.value == "") {
          alert("กรุณาป้อนชื่อผู้ใช้งาน.");
          `
            f.username.focus();
            return false;
          }
          if (f.password.value=="") 	{
            alert("กรุณาป้อนรหัสผ่าน.");
            f.password.focus();
            return false;
          }
        }
      -->
    </script>

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
              <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
                <table width="100%" border="0">
                  <tr>
                    <td><strong>
                        <marquee>
                          <span class="style53">ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </span>
                        </marquee>
                      </strong></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF">
                      <table width="84%" border="0" align="center">
                        <?php $sql_show = "select * from tb_contact where contact_id = '1'";
                        $result_show = mysqli_query($conn, $sql_show) or die(mysqli_error($conn));
                        $row_show = mysqli_fetch_array($result_show); ?>
                        <TR>
                          <TD><span class="style55"><BR>ติดต่อสำนักงานทางหลวงมหาสารคาม </span><BR><BR>
                            &nbsp;&nbsp;&nbsp; <span class="style56"><?= $row_show['contact_add'] ?> </span><BR><BR>
                            <span class="style55">โทรศัพน์</span><BR><BR>
                            &nbsp;&nbsp;&nbsp; <span class="style56"><?= $row_show['contact_tel'] ?></span><BR><BR>
                            <span class="style55">อีเมล์</span><BR><BR>&nbsp;&nbsp;&nbsp;<span class="style56"><?= $row_show['contact_mail'] ?></span><BR>
                          </TD>
                        </TR>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </td>
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


  </Center>



</body>

</html>