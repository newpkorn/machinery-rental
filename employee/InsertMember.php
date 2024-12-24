<?php session_start();
include("../inc_connect.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>Machinery Rental for Department of Highways of Mahasarakham</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../css/css1.css" rel="stylesheet" type="text/css">

  <script language="javascript">
    function CheckNum() {
      if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
        alert('กรอกได้เฉพาะตัวเลข 0-9 ');
      }
    }
  </script>
  <script type="text/javascript" language="javascript" src="datetimepicker.js"></script>
  <style type="text/css">
    <!--
    .style2 {
      color: #336699
    }

    .style3 {
      color: #0000FF;
      font-weight: bold;
    }

    .style4 {
      color: #FF0000
    }
    -->
  </style>
</head>

<body>
  <center>
    <form name="form1" method="post" onSubmit="return chkdata();" action="mem_register.php">
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
                    <span class="style3">ชื่อผู้ใช้งาน</span>: : <?= $_SESSION['emp_name'] ?>
                  </center>
                </td>
              </tr>
            </table>
            <table width="100%" height="52" border="0">
              <tr>
                <td width="100%" height="48">
                  <center>
                    <img src="../images/admin.png" alt="" width="100" height="99">
                  </center>
                </td>
              </tr>
            </table>
            <table width="91%" height="146" border="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/users.png" alt="" width="16" height="16">&nbsp;<a href="search_member.php">ข้อมูลสมาชิก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15"> <a href="InsertMember.php">เพิ่มข้อมูลสมาชิก</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php">ออกจากระบบ</a></strong></td>
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
                        <table width="100%" border="0" bgcolor="#CCFFFF">
                          <tr>
                            <td colspan="2"><img src="../images/menu/add_mem.jpg" alt="" width="375" height="43"></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ชื่อ-สกุล</label>
                                : &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="txtName"></label>
                              <input name="txtName" type="text" id="txtName" />
                              <span class="style4">* </span>
                            </td>
                          </tr>
                          <tr>
                            <td height="70" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;เพศ</label>
                                : &nbsp;</span></td>
                            <td bgcolor="#CCFFFF">
                              <table width="168" border="0">
                                <tr>
                                  <td width="37">&nbsp;
                                    <input type="radio" name="sex" id="sex" value="m" checked="checked" />
                                    <label for="sex"></label>
                                  </td>
                                  <td width="121"><span class="style2">
                                      <label>ชาย</label>
                                      &nbsp;</span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;
                                    <input type="radio" name="sex" id="sex1" value="f" />
                                    <label for="sex1"></label>
                                  </td>
                                  <td><span class="style2">
                                      <label>หญิง</label>
                                      &nbsp;</span></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <?php $StartDate = isset($_POST['StartDate']) ? $_POST['StartDate'] : ''; ?>
                            <td height="43" align="right" bgcolor="#CCFFFF"><span class="style2">&nbsp;วันเดือนปีเกิด : </span></td>
                            <td width="20%" bgcolor="#CCFFFF"><input type="text" name="StartDate" size="10" id="StartDate[]" value="<?= $StartDate ?>" onKeyPress="CheckNum()" />
                              <a href="javascript:NewCal('StartDate[]','ddmmyyyy')"> <img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"> <span class="style4">* </span></a>
                            </td>
                          </tr>
                          <tr>
                            <td height="43" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>อายุ</label>
                                :</span> </td>
                            <td bgcolor="#CCFFFF"><input name="txtAge" type="text" id="txtAge" onKeyPress="CheckNum()" size="2" maxlength="2" />
                              <span class="style4">*</span>
                            </td>
                          </tr>
                          <tr>
                            <td height="43" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;เลขบัตรประจำตัวประชาชน: </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="txtCode"></label>
                              <input name="txtCode" type="text" id="txtCode" onKeyPress="CheckNum()" maxlength="13" />
                              <span class="style4">* </span>
                            </td>
                          </tr>
                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>วันออกบัตร</label>
                                :</span></td>
                            <?php $dateIssue = isset($_POST['dateIssue']) ? $_POST['dateIssue'] : ''; ?>
                            <td bgcolor="#CCFFFF"><input type="text" name="dateIssue" size="10" id="dateIssue[]" value="<?= $dateIssue ?>" onKeyPress="CheckNum()" />
                              <a href="javascript:NewCal('dateIssue[]','ddmmyyyy')"> <img src="../images/cal.gif" width="16" height="16" border="0" alt="Pick a date"> </a><a href="javascript:NewCal('dateIssue[]','ddmmyyyy')"><span class="style4">* </span></a>
                            </td>
                          </tr>
                          <tr>
                            <td height="45" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;เบอร์โทร: </label>
                                &nbsp;</span></td>
                            <td bgcolor="#CCFFFF"><label for="Phone"></label>
                              <input name="Phone" type="text" id="Phone" onKeyPress="CheckNum()" maxlength="10" />
                              <span class="style4">* </span>
                            </td>
                          </tr>
                          <tr>
                            <td height="40" align="right" bgcolor="#CCFFFF"><span class="style2">
                                <label>&nbsp;ที่อยู่ : </label>
                                &nbsp;</span></td>
                            <td valign="top" bgcolor="#CCFFFF"><label for="txtAdd"></label>
                              <textarea name="txtAdd" id="txtAdd" cols="45" rows="5"></textarea>
                              <span class="style4">*</span>
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
                                  <td width="55"><input type="submit" name="submit" id="submit" value="เพิ่ม" /></td>
                                  <td width="140"><input type="reset" name="Reset" id="Reset" value="เคลียร์" /></td>
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