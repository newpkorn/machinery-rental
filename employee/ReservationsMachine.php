<?php
session_start();
include("../inc_connect.php");
include("function.php");

// Ensure session variable 'emp_name' exists
$emp_name = isset($_SESSION['emp_name']) ? $_SESSION['emp_name'] : 'Guest';

?>
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <title>Machinery Rental for Department of Highways of Mahasarakham</title>
  <link href="../css/css1.css" rel="stylesheet" type="text/css">
  <style>
    .style1 {
      color: #0000CC;
    }

    .style4 {
      color: #0000FF;
    }

    .style6 {
      color: #FFFFFF;
      font-weight: bold;
    }

    .style7 {
      color: #0066CC;
    }
  </style>
  <script src="jquery-1.4.2.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#addRow").click(function() {
        const newRow = $("#firstTr").clone();
        $("#myTbl").append(newRow);
      });

      $("#removeRow").click(function() {
        if ($("#myTbl tr").length > 1) {
          $("#myTbl tr:last").remove();
        } else {
          alert("ต้องมีรายการข้อมูลอย่างน้อย 1 รายการ");
        }
      });
    });

    function confirmDelete() {
      return confirm("คุณต้องการลบข้อมูล?");
    }
  </script>
</head>

<body>
  <center>
    <table width="1000" border="0">
      <tr>
        <td colspan="2"><img src="../images/HeadeIndexr.png" alt="Header" /></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E7E6E6"></td>
      </tr>
      <tr>
        <td width="23%" bgcolor="#E7E6E6">
          <table width="100%" border="0">
            <tr>
              <td>
                <center>ชื่อผู้ใช้งาน: <?= htmlspecialchars($emp_name) ?></center>
              </td>
            </tr>
          </table>
          <table width="100%" border="0">
            <tr>
              <td>
                <center><img src="../images/administrator.jpg" alt="Admin" width="100" height="99" /></center>
              </td>
            </tr>
          </table>
          <table width="91%" border="0" align="center" bgcolor="#FFFFFF">
            <tr>
              <td><a href="Menu_Detail.php">หน้าแรก</a></td>
            </tr>
            <tr>
              <td><a href="ReservationsMachine.php">จองเครื่องจักรกล</a></td>
            </tr>
            <tr>
              <td><a href="search_reserv.php">ค้นหาข้อมูลการจอง</a></td>
            </tr>
            <tr>
              <td><a href="report_book.php" target="_blank">รายงานการจอง</a></td>
            </tr>
            <tr>
              <td><a href="../logout.php">ออกจากระบบ</a></td>
            </tr>
          </table>
        </td>
        <td width="77%">
          <form action="addreserv.php" method="post">
            <table border="0">
              <tr>
                <td>สมาชิก</td>
                <td>
                  <select name="mem_name">
                    <?php
                    $sqlmember = mysqli_query($conn, "SELECT * FROM tb_member");
                    if ($sqlmember) {
                      while ($rsmember = mysqli_fetch_assoc($sqlmember)) {
                        echo "<option value='" . htmlspecialchars($rsmember['mem_id']) . "'>" . htmlspecialchars($rsmember['mem_name']) . "</option>";
                      }
                    } else {
                      echo "<option value=''>ไม่มีสมาชิก</option>";
                    }
                    ?>
                  </select>
                </td>
                <td>เครื่องจักรกล</td>
                <td>
                  <button type="button" id="addRow">+ เพิ่ม</button>
                  <button type="button" id="removeRow">- ลบ</button>
                  <table id="myTbl">
                    <tr id="firstTr">
                      <td>
                        <select name="machin_name[]">
                          <?php
                          $sqlmachin = mysqli_query($conn, "SELECT * FROM tb_machin WHERE mac_status=2 ORDER BY mac_name");
                          if ($sqlmachin) {
                            while ($rsmachin = mysqli_fetch_assoc($sqlmachin)) {
                              echo "<option value='" . htmlspecialchars($rsmachin['mac_id']) . "'>" . htmlspecialchars($rsmachin['mac_name']) . "</option>";
                            }
                          } else {
                            echo "<option value=''>ไม่มีเครื่องจักรกล</option>";
                          }
                          ?>
                        </select>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>วันที่จอง</td>
                <td><input type="date" name="StartDate" required></td>
                <td>วันที่รับ</td>
                <td><input type="date" name="ArriveDate" required></td>
              </tr>
              <tr>
                <td colspan="4"><input type="submit" value="เพิ่ม"></td>
              </tr>
            </table>
          </form>
          <table border="1">
            <tr>
              <th>รหัสการจอง</th>
              <th>สมาชิก</th>
              <th>เจ้าหน้าที่</th>
              <th>เครื่องจักรกล</th>
              <th>วันที่จอง</th>
              <th>วันที่รับ</th>
              <th>พิมพ์ใบเสร็จ</th>
              <th>ลบ</th>
            </tr>
            <?php
            $sqlreserv = mysqli_query($conn, "
                                              SELECT *
                                              FROM tb_reserv, tb_employee, tb_member
                                              WHERE tb_reserv.mem_id = tb_member.mem_id
                                                    AND
                                                    tb_reserv.emp_id = tb_employee.emp_id
            ") or die(mysqli_error($conn));

            if (mysqli_num_rows($sqlreserv) > 0) {
              while ($rsreserv = mysqli_fetch_array($sqlreserv)) { ?>
                <tr>
                  <td align="center" bgcolor="#CCFFFF">
                    <span class="style4">
                      <?= $rsreserv[0]; ?>
                    </span>
                  </td>
                  <td bgcolor="#CCFFFF">
                    <span class="style4">
                      <?= $rsreserv['mem_name']; ?>
                    </span>
                  </td>
                  <td bgcolor="#CCFFFF">
                    <span class="style4">
                      <?= $rsreserv['emp_name']; ?>
                    </span>
                  </td>
                  <td bgcolor="#CCFFFF">
                    <span class="style4">
                      <?php
                      $sqltype = mysqli_query($conn, "
                                                      SELECT * 
                                                      FROM tb_reserv_detail, tb_machin
                                                      WHERE tb_machin.mac_id = tb_reserv_detail.mac_id
                                                      AND res_id = '" . $rsreserv['res_id'] . "'
                      ") or die(mysqli_error($conn));

                      if (mysqli_num_rows($sqltype) > 0) {
                        while ($rstype = mysqli_fetch_array($sqltype)) { ?>
                          <?= $rstype['mac_name']; ?><br>
                      <?php }
                      } else {
                        echo "ไม่มีข้อมูล";
                      }
                      ?>
                    </span>
                  </td>
                  <td align="center" bgcolor="#CCFFFF">
                    <span class="style4">
                      <?= $rsreserv['res_date'] ?>
                    </span>
                  </td>
                  <td align="center" bgcolor="#CCFFFF">
                    <span class="style4">
                      <?= $rsreserv['rec_date'] ?>
                    </span>
                  </td>
                  <td align="center" bgcolor="#CCFFFF">
                    <A
                      HREF="form/form_Receipt.php?idr=<?= $rsreserv[0]; ?>&print=1 "
                      target="_blank"
                      class="style4">
                      <img src="../images/printmgr.png" alt="" width="20" height="20" />
                    </A>
                  </td>
                  <td align="center" bgcolor="#CCFFFF">
                    <div align="center" class="style4">
                      <a href="del_Reserv.php?del_id=<?= $rsreserv[0] ?>" onClick='return Conf(this)'>
                        <img src="../images/delete.gif" alt="" width="15" height="15">
                      </a>
                    </div>
                  </td>
                </tr>
            <?php }
            } else {
              echo "<tr><td colspan='8'>ไม่มีข้อมูล</td></tr>";
            }
            ?>
          </table>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>