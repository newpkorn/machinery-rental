<?php
include_once("inc_connect.php");
$PHP_SELF = $_SERVER['PHP_SELF'];

$page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machinery Rental</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="data:image/x-icon;">
</head> 

<body>
    <table width="1000" border="0" cellpadding="0" cellspacing="0">
        <tr valign="top">
            <td colspan="2"><?php include_once("inc_header.php"); ?></td>
        </tr>
        <tr valign="top">
            <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
        </tr>
        <tr valign="top">
            <td width="13%" height="114" bgcolor="#E7E6E6" align="center"><?php include_once("menu.php"); ?></td>
            <td width="60%">
                <table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="20"><img src="images/rim_01.gif" width="20" height="22" alt=""></td>
                        <td background="images/rim_02.gif"><img src="images/rim_02.gif" width="8" height="22" alt=""></td>
                        <td background="images/rim_02.gif">&nbsp;</td>
                        <td width="23"><img src="images/rim_04.gif" width="23" height="22" alt=""></td>
                    </tr>
                    <tr>
                        <td background="images/rim_05.gif"><img src="images/rim_05.gif" width="20" height="11" alt=""></td>
                        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF">
                            <table width="100%" border="0">
                                <tr>
                                    <td><strong>
                                            <marquee>Welcome to our machinery rental service</marquee>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF">
                                        <table width="100%" border="2" align="center" cellspacing="0" bordercolor="#CCCCCC">
                                            <tr>
                                                <?php
                                                if (!isset($ids_id)) {

                                                    $show_page = 12;
                                                    $sql = "SELECT * FROM tb_machin ORDER BY mac_id DESC";
                                                    $result = mysqli_query($conn, $sql);
                                                    $num = mysqli_num_rows($result);
                                                    if ($num == 0) {
                                                        echo "No machines available";
                                                        exit();
                                                    }

                                                    $page = isset($page) ? $page : 1;
                                                    $num_page = ($num % $show_page == 0) ? $num / $show_page : floor($num / $show_page) + 1;

                                                    if ($page > $num_page) {
                                                        echo "<meta http-equiv='refresh' content=0;url='$PHP_SELF?page=1'>";
                                                        exit();
                                                    }

                                                    $select = ($show_page * $page) - $show_page;
                                                    $sql = "SELECT * FROM tb_machin ORDER BY mac_id DESC LIMIT $select, $show_page";
                                                    $result = mysqli_query($conn, $sql);
                                                ?>
                                                    <table width="100%" border="0" align="center" cellspacing="0" bordercolor="#FFFFFF">
                                                        <?php
                                                        $count = 1;
                                                        while ($data = mysqli_fetch_array($result)) {
                                                            if ($count % 3 == 1) {
                                                                echo '<tr><td>&nbsp;</td></tr><tr>';
                                                            }
                                                        ?>
                                                            <td width="33%" height="" align="center" valign="top" bordercolor="back" border="1">
                                                                <?php
                                                                if ($data['mac_picture'] != "") {
                                                                    echo "<CENTER><img src='images_machinery/{$data['mac_picture']}' width='130' height='120' border='0'></CENTER>";
                                                                } else {
                                                                    echo "<center><img src='images_machinery/nopic.jpg' width='160' height='140' border='0'></center>";
                                                                }

                                                                $sql_show = mysqli_query($conn, "SELECT * FROM tb_machinery_unit WHERE unit_id='{$data['mac_unit']}'");
                                                                $data2 = mysqli_fetch_array($sql_show);
                                                                ?>
                                                                <table width="80%" border="0" cellspacing="0">
                                                                    <tr>
                                                                        <td width="70%" bgcolor="#FFFFCC" align="center">
                                                                            <font size="-1"><?php echo $data['mac_name']; ?><br><?php echo $data['mec_price']; ?>/<?= $data2['unit_name'] ?></font>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        <?php
                                                            if ($count % 3 == 0) {
                                                                echo '</tr>';
                                                            }
                                                            $count++;
                                                        }
                                                        ?>
                                                    </table>

                                                    <table width="80%" border="0" align="center" cellspacing="0">
                                                        <tr>
                                                            <td align="left">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <?php
                                                                echo "Page >> ";
                                                                for ($i = 1; $i <= $num_page; $i++) {
                                                                    if ($i != $page) {
                                                                        echo "[<a href='?page=$i'>$i</a>]";
                                                                    } else {
                                                                        echo "[<a href='#' class='active'>$i</a>]";
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="top" bgcolor="#E7E6E6">
                        <td colspan="2">
                            <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                <tr>
                                    <td class="style11" background="bgColor=#ffffff" height="30">
                                        <img src="images/menu/footerr.jpg" width="100%" height="30">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

<?php mysqli_close($conn); ?>