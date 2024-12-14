<?@session_start();  include("../inc_connect.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #0000FF}
.style3 {
	font-size: 16px;
	color: #0000FF;
	font-weight: bold;
}
.style5 {color: #0000FF; font-weight: bold; }
.style6 {color: #FF0000}
.style8 {font-size: 16px; font-weight: bold; }
-->
</style>
</head>
 
<?php 
	if(isset($_POST['action']))
{ 
	$action = $_POST['action'];
	$idBrand = $_POST['txtBrandID'];
	$name = $_POST['txtName'];
	
	$id = $_REQUEST['edit_id'];
	if($action == "update"){
	// แก้ไขข้อมูล
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_machinery_brand set 
	brand_id = '$idBrand' , brand_name = 'name'
	where brand_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
	echo "แก้ไขข้อมูลของ $name  สำเร็จแล้ว";}
	//-->
}

?>
<? 
//เรียกข้อมูลจาก รหัส มาแสดงใน textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machinery_brand where brand_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>

<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="save_updateBrand.php">
    <table width="1000"  border="0" cellpadding="0" cellspacing="0">
      <tr valign="top">
        <td colspan="2"><? include("inc_header.php"); ?></td>
      </tr>
      <tr valign="top">
        <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
      </tr>
      <tr valign="top">
        <td width="23%" height="114" bgcolor="#E7E6E6"><table width="100%" height="49"  border="0">
          <tr>
            <td width="100%" height="45"><center>
              <span class="style2"><strong>ชื่อผู้ใช้งาน</strong></span> : <?=$_SESSION['adm_name']?>
            </center></td>
          </tr>
        </table>
          <table width="100%" height="52"  border="0">
            <tr>
              <td width="100%" height="48"><center>
                <img src="../images/administrator.jpg" alt="" width="100" height="99">
              </center></td>
            </tr>
          </table>
          <table width="91%" height="38"  border="0" align="center" bgcolor="#FFFFFF">
              <tr>
                <td height="34"><span class="style8"><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> หน้าแรก</a></span></td>
              </tr>
              <tr>
                <td height="34"><span class="style8"><img src="../images/edit.gif" alt="" width="15" height="15">&nbsp; <a href="search_type.php">ข้อมูลรุ่นเครื่องจักรกล</a></span></td>
              </tr>
              <tr>
                <td height="34"><span class="style8"><img src="../images/addg.GIF" alt="" width="15" height="15"> &nbsp;<a href="addMachinType.php">เพิ่มข้อมูลรุ่นเครื่องจักรกล</a></span></td>
              </tr>
              <tr>
                <td width="100%" height="34"><span class="style8"><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php"> ออกจากระบบ</a></span></td>
              </tr>
        </table>
        </td>
        <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="20"><img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
            <td background="../images/rim_02.gif"><img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
            <td background="../images/rim_02.gif">&nbsp;</td>
            <td width="23"><img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
          </tr>
          <tr>
            <td background="../images/rim_05.gif"><img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
            <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
              <tr>
                <td width="47%"><strong>ระบบขอเช่าเครื่องจักรกล กรมทางหลวง จังหวัดมหาสารคาม</strong></td>
                <td width="53%" align="right">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"  height="10"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="73%"  border="0" align="center" bgcolor="#CCFFFF">
                  <tr>
                    <td colspan="2" align="center" bgcolor="#99FFFF"><span class="style3">แก้ไขข้อมูลยี่ห้อเครื่องจักรกล</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style5">&nbsp;ชื่อยี่ห้อ : </span></td>
                    <td bgcolor="#CCFFFF"><input type="text" name="txtName" id="txtName" value="<?=$row_show['brand_name']?>"/>
                      <span class="style6">*</span></td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="44" bgcolor="#CCFFFF">&nbsp;</td>
                    <td bgcolor="#CCFFFF"><table width="114" border="0">
                      <tr>
                        <td width="55">
                        <input type="submit" name="Update" id="Update" value="แก้ไขข้อมูล" /> <input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" />                        </td>
                        <td width="140">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="21%"></td>
                    <td width="79%"><span class="style2"></span></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"  height="10"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table></td>
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
        </table></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>
