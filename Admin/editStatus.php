<?@session_start();  include("../inc_connect.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>�к����������ͧ�ѡá� ����ҧ��ǧ �����ä��</title>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<link href="../css/css1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {font-weight: bold}
.style3 {
	font-size: 16px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>
 
<?php 
	if(isset($_POST['action']))
{ 
	$action = $_POST['action'];
	$idStatus = $_POST['txtStatusID'];
	$name = $_POST['txtName'];
	
	$id = $_REQUEST['edit_id'];
	if($action == "update"){
	// ��䢢�����
	//$id = $_REQUEST['edit_id'];
	$sql_edit = "update tb_machinery_status set 
	status_id = '$idStatus' , status_name = 'name'
	where status_id = '$id'"; 
	mysql_query($sql_edit) or die(mysql_error());
	echo "��䢢����Ţͧ $name  ���������";}
	//-->
}

?>
<? 
//���¡�����Ũҡ ���� ���ʴ�� textbox
	if($_REQUEST['edit_id'] != "")
	{
		$id = $_REQUEST['edit_id'];
		$sql_show = "select * from tb_machinery_status where status_id = '$id'";
		$result_show = mysql_query($sql_show) or die(mysql_error());
		$row_show = mysql_fetch_array($result_show);
	}
	//--->
?>

<body>
<center>
  <form name="form1" method="post"  onSubmit="return chkdata();" action="save_updateStatus.php">
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
              <span class="style1">���ͼ����ҹ</span> : <?=$_SESSION['adm_name']?>
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
          <table width="92%" height="38"  border="0" align="center" bgcolor="#FFFFFF">
            <tr>
              <td height="34"><strong><img src="../images/home.gif" alt="" width="16" height="14"><a href="Menu_Detail.php"> ˹���á</a></strong></td>
            </tr>
              <tr>
                <td height="34"><strong><img src="../images/edit.gif" alt="" width="15" height="15">&nbsp; <a href="search_status.php">������ʶҹ�����ͧ�ѡá�</a></strong></td>
              </tr>
              <tr>
                <td height="34"><strong><img src="../images/addg.GIF" alt="" width="15" height="15"> &nbsp;<a href="addStatus.php">����������ʶҹ�����ͧ�ѡá�</a></strong></td>
              </tr>
              <tr>
                <td width="100%" height="34"><strong><img src="../images/logout.gif" alt="" width="16" height="16">&nbsp;<a href="../logout.php"> �͡�ҡ�к�</a></strong></td>
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
                <td width="47%"><strong>�к����������ͧ�ѡá� ����ҧ��ǧ �ѧ��Ѵ�����ä��</strong></td>
                <td width="53%" align="right">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"  height="10"></td>
              </tr>
              <tr>
                <td colspan="2"><table width="74%"  border="0" align="center" bgcolor="#CCFFFF">
                  <tr>
                    <td colspan="2" align="center" bgcolor="#99FFFF"><span class="style3">��䢢�����ʶҹ�</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="43" align="right" bgcolor="#CCFFFF"><span class="style1">&nbsp;����ʶҹ� : </span><strong>&nbsp;</strong></td>
                    <td bgcolor="#CCFFFF"><input type="text" name="txtName" id="txtName" value="<?=$row_show['status_name']?>"/></td>
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
                        <input type="submit" name="Update" id="Update" value="��䢢�����" /> <input name="edit_id" type="hidden" id="edit_id" value="<?=$_REQUEST['edit_id']?>" />                        </td>
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
