<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include("Search/connect_Machin.php"); ?>

<br>
<table width="753" height="205" border="0.5">
  <tr>
    <td><table width="745" border="0">
  <tr>
    <td width="48" bgcolor="#CCCCCC"><div align="center">รหัส</div></td>
    <td width="74" bgcolor="#CCCCCC"><div align="center">ชื่อ</div></td>
    <td width="72" bgcolor="#CCCCCC"><div align="center">ทะเบียน</div></td>
    <td width="50" bgcolor="#CCCCCC"><div align="center">ยี่ห้อ</div></td>
    <td width="57" bgcolor="#CCCCCC"><div align="center">ประเภท</div></td>
    <td width="103" bgcolor="#CCCCCC"><div align="center">ราคาต่อหน่วย</div></td>
    <td width="52" bgcolor="#CCCCCC"><div align="center">จำนวน</div></td>
    <td width="62" bgcolor="#CCCCCC"><div align="center">สถานะ</div></td>
    <td width="118" bgcolor="#CCCCCC"><div align="center">ผู้ดูแล</div></td>
    <td width="67" bgcolor="#CCCCCC"><div align="center">แก้ไข</div></td>
  </tr>
  <?
$sql_show = "select * from tb_machin where mac_id != ''";
$txt_search = $_POST['txtKeyword'];
if($fields=="1"){
					$sql_show.="and mac_id like '%$txt_search%'";}
				else if($fields=="2"){
				$sql_show.="and mac_licen like '%$txt_search%'";}
				else if($fields=="3"){
						$sql_show.="and mac_name like '%$txt_search%'";}
						else if($fields=="4"){
						$sql_show.="and mac_control like '%$txt_search%'";}	
				

$result_show = mysql_query($sql_show) or die(mysql_error());
while($row_show = mysql_fetch_array($result_show))
{
?>
  <tr>
    <td><?=$row_show['mac_id']?></td>
    <td><?=$row_show['mac_name']?></td>
    <td><?=$row_show['mac_licen']?></td>
    <td><?=$row_show['mac_brand']?></td>
    <td><?=$row_show['mac_type']?></td>
    <td><?=$row_show['mec_price']?></td>
    <td><?=$row_show['mac_qty']?></td>
    <td><?=$row_show['mac_status']?></td>
    <td><?=$row_show['mac_control']?></td>
    <td><div align="center"><a href="edit.php?edit_id=<?=$row_show[mem_id]?>">แก้ไข</a></div></td>
  </tr>
  <?
}
?>
</table></td>
  </tr>
</table>
