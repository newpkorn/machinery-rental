<?@session_start(); include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Machinery Rental for Department of Highways of Mahasarakham</title>
</head>

<body><font size="-1">
<center>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><form action="" method="post" name="form1" id="form1">
      <input type="image" name="imageField" id="imageField" src="../images/HeadeIndexr.png" />
    </form></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6"><table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>ชื่อผู้ใช้งาน : <?=$_SESSION['adm_name']?></center></td>
      </tr>
    </table>
      <table width="100%" height="52"  border="0">
        <tr>
          <td width="100%" height="48"><center><input name="imageField2" type="image" id="imageField2" src="../images/nopic.gif" /></center></td>
        </tr>
    </table>
      <table width="100%" height="38"  border="0">
        <tr>
          <td width="100%" height="34">
            <input type="image" name="imageField3" id="imageField3" src="../images/bullet.gif" />
            <a href="index.php">หน้าแรก</a></td>
        </tr>
    </table>
      <table width="100%" height="29"  border="0">
        <tr>
          <td width="100%" height="25"><img src="../images/bullet.gif" >&nbsp;ข้อมูลเครื่องจักร</td>
        </tr>
    </table>
      <table width="100%" height="31"  border="0">
        <tr>
          <td width="100%" height="27"><img src="../images/bullet.gif" >&nbsp;เพิ่มเครื่องจักร</td>
        </tr>
    </table>
      <table width="100%" height="28"  border="0">
        <tr>
          <td width="100%" height="24"><img src="../images/bullet.gif" />&nbsp;แก้ไขข้อมูล</td>
        </tr>
    </table>
      <table width="100%" height="36"  border="0">
        <tr>
          <td width="100%" height="32"><img src="../images/bullet.gif" />&nbsp;ลบข้อมูล</td>
        </tr>
    </table>
      <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;ขอจอง</td>
        </tr>
    </table>
      <table width="100%" height="27"  border="0">
        <tr>
          <td width="100%" height="23"><img src="../images/bullet.gif" alt="" />&nbsp;ขอเช่า</td>
        </tr>
      </table></td>
    <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt="" /></td>
        <td background="../images/rim_02.gif">&nbsp;</td>
        <td background="../images/rim_02.gif">&nbsp;</td>
        <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt="" /></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif">&nbsp;</td>
        <td colspan="2" rowspan="3" valign="top" bgcolor="#FFFFFF"><table width="806" border="0">
          <tr>
            <td><fieldset>
              <legend>ข้อมูลการจอง</legend>
              <table width="725" border="0">
                <tr>
                  <td width="193">รหัสการจอง</td>
                  <td width="330"><input name="name4" type="text" id="name4" size="30" maxlength="100" />
                    <input type="submit" name="ค้นหา3" id="ค้นหา3" value="ค้นหา" /></td>
                  <td width="188"><form id="form" name="form2" method="post" action="">
                  </form></td>
                </tr>
                <tr>
                  <td colspan="3"><table width="740" border="1">
                    <tr>
                      <td width="128" bgcolor="#00CCFF">รหัสการจอง</td>
                      <td width="133" bgcolor="#00CCFF">วันที่จอง</td>
                      <td width="116" bgcolor="#00CCFF">รหัสสมาชิก</td>
                      <td width="126" bgcolor="#00CCFF">รหัสกรรมการ</td>
                      <td width="134" bgcolor="#00CCFF">รหัสเครื่องจักรกล</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </fieldset></td>
          </tr>
          <tr>
            <td><fieldset>
              <legend>รายละเอียดการเช่า</legend>
              <table width="769" border="0">
                <tr>
                  <td width="106">รหัสเจ้าหน้าที่ </td>
                  <td width="105">รหัสเครื่องจักร</td>
                  <td width="86">รหัสสมาชิก</td>
                  <td width="225">วันที่เช่า</td>
                  <td width="225">วันที่คืน </td>
                  </tr>
                <tr>
                  <td><input name="name" type="text" id="name5" size="15" maxlength="100" /></td>
                  <td><input name="name2" type="text" id="name" size="15" maxlength="100" /></td>
                  <td><input name="name3" type="text" id="name2" size="14" maxlength="100" /></td>
                  <td><select name="select5" id="select7">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                    <select name="select5" id="select8">
                      <option>มกราคม</option>
                      <option>กุมพาพันธ์</option>
                      <option>มีนาคม</option>
                      <option>เมษายน</option>
                      <option>พฤษภาคม</option>
                      <option>มิถุนายน</option>
                      <option>กรกฎาคม</option>
                      <option>สิงหาคม</option>
                      <option>กันยายน</option>
                      <option>ตุลาคม</option>
                      <option>พฤษจิกายน</option>
                      <option>ธันวาคม</option>
                    </select>
                    <select name="select5" id="select9">
                      <option>2554</option>
                      <option>2555</option>
                      <option>2556</option>
                      <option>2557</option>
                    </select></td>
                  <td><select name="select" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                    <select name="select" id="select2">
                      <option>มกราคม</option>
                      <option>กุมพาพันธ์</option>
                      <option>มีนาคม</option>
                      <option>เมษายน</option>
                      <option>พฤษภาคม</option>
                      <option>มิถุนายน</option>
                      <option>กรกฎาคม</option>
                      <option>สิงหาคม</option>
                      <option>กันยายน</option>
                      <option>ตุลาคม</option>
                      <option>พฤษจิกายน</option>
                      <option>ธันวาคม</option>
                    </select>
                    <select name="select" id="select3">
                      <option>2554</option>
                      <option>2555</option>
                      <option>2556</option>
                      <option>2557</option>
                    </select></td>
                </tr>
                <tr>
                  <td colspan="5"><table width="807" border="1">
                    <tr>
                      <td width="133" bgcolor="#00CCFF">รหัสเจ้าหน้าที่</td>
                      <td width="133" bgcolor="#00CCFF">รหัสเครื่องจักรกล</td>
                      <td width="159" bgcolor="#00CCFF">รหัสสมาชิก</td>
                      <td width="115" bgcolor="#00CCFF">วันที่เช่า</td>
                      <td width="111" bgcolor="#00CCFF">วันที่รับ</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                    <tr>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                      <td bgcolor="#CCCCCC">&nbsp;</td>
                    </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><input  type="submit" name="ค้นหา2" id="ค้นหา" value="     บันทึก     " /></td>
                  <td><input  type="submit" name="ค้นหา" id="ค้นหา4" value="     ออกรายงาน     " /></td>
                  </tr>
              </table>
            </fieldset></td>
          </tr>
        </table></td>
        <td background="../images/rim_07.gif">&nbsp;</td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt="" /></td>
        <td background="../images/rim_07.gif"><img src="../images/rim_07.gif" width="23" height="11" alt="" /></td>
      </tr>
      <tr>
        <td height="300" background="../images/rim_05.gif">&nbsp;</td>
        <td background="../images/rim_07.gif">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="../images/rim_10.gif" width="20" height="25" alt="" /></td>
        <td background="../images/rim_11.gif"><img src="../images/rim_11.gif" width="8" height="25" alt="" /></td>
        <td background="../images/rim_11.gif">&nbsp;</td>
        <td><img src="../images/rim_13.gif" width="23" height="25" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td></tr></td>
  </tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>