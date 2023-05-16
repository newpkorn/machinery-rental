<? @session_start(); include("../inc_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
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
            หน้าแรก</td>
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
        <td width="591" background="../images/rim_02.gif">&nbsp;</td>
        <td width="369" background="../images/rim_02.gif">&nbsp;</td>
        <td width="32"><img src="../images/rim_04.gif" width="23" height="22" alt="" /></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt="" /></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><legend><strong>ข้อมูลการจอง</strong></legend>
          <table width="79%"  border="0">
            <tr>
              <td>รหัสสมาชิก</td>
              <td><input name="name" type="text" id="name" size="30" maxlength="100" /></td>
              <td>รหัสกรรมการ</td>
              <td><input name="name2" type="text" id="name2" size="30" maxlength="100" /></td>
            </tr>
            <tr>
              <td>รหัสเครื่องจักรกล</td>
              <td><input name="name3" type="text" id="name3" size="30" maxlength="100" /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="18%">วันที่จอง</td>
              <td width="32%"><select name="select" id="select4">
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
                <select name="select2" id="select2">
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
                <select name="select3" id="select3">
                  <option>2554</option>
                  <option>2555</option>
                  <option>2556</option>
                  <option>2557</option>
                </select></td>
              <td width="16%">วันที่รับ</td>
              <td width="34%"><select name="select4" id="select">
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
                <select name="select4" id="select5">
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
                <select name="select4" id="select6">
                  <option>2554</option>
                  <option>2555</option>
                  <option>2556</option>
                  <option>2557</option>
                </select></td>
            </tr>
            <tr>
              <td height="39" align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
              <td align="right">&nbsp;</td>
              <td ><input  type="submit" name="ค้นหา" id="ค้นหา2" value="     เพิ่ม     " /></td>
            </tr>
            <tr>
              <td height="56" colspan="4"><table width="735" border="1">
                <tr>
                  <td width="159" bgcolor="#00CCFF">รหัสสมาชิก</td>
                  <td width="183" bgcolor="#00CCFF">รหัสกรรมการ</td>
                  <td width="224" bgcolor="#00CCFF">รหัสเครื่องจักรกล</td>
                  <td width="224" bgcolor="#00CCFF">วันที่จอง</td>
                  <td width="128" bgcolor="#00CCFF">วันที่รับ</td>
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
          </table>
          <table width="737" border="0">
            <tr>
              <td width="241">&nbsp;</td>
              <td width="399">&nbsp;</td>
              <td width="83"><input  type="submit" name="ค้นหา2" id="ค้นหา" value="พิมพ์ใบจอง" /></td>
            </tr>
          </table></td>
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