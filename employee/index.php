<? include("inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>: : ระบบขอเช่าเครื่องจักรกล กรมทางหลวงมหาสารคาม : :</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-874">
<link href="css/css.css" rel="stylesheet" type="text/css">


</head>

<body>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><? include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="13%" height="114" bgcolor="#E7E6E6" align="center">	<?include("menu.php");?></td>
    <td width="60%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"> <img src="images/rim_01.gif" width="20" height="22" alt=""></td>
        <td background="images/rim_02.gif"> <img src="images/rim_02.gif" width="8" height="22" alt=""></td>
        <td background="images/rim_02.gif">&nbsp; </td>
        <td width="23"> <img src="images/rim_04.gif" width="23" height="22" alt=""></td>
      </tr>
      <tr>
        <td background="images/rim_05.gif"> <img src="images/rim_05.gif" width="20" height="11" alt=""></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
          <tr>
            <td><strong><marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee></strong></td>
            </tr>
          <tr>
            <td bgcolor="#FFFFFF">
			
			
	


  <table width="100%" border="2" align="center" cellspacing="0" bordercolor="#CCCCCC">

      <tr>



    <?
	if(!$ids_id){
	?>

<?

$show_page=12;
$sql="select * from tb_machin order by mac_id desc";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
if($num==0){
	echo"ไม่มีข้อมูล";
exit();
}


if($page==""){
$page=1;
}
if($show_page>=$num){
$num_page=1;
}elseif($num%$show_page==0){
$num_page=$num/$show_page;
}else{
$num_page=($num/$show_page)+1;
$num_page=(int)$num_page;
}
if($page>$num_page){
echo"<meta http-equiv='refresh' content=0;url='$PHP_SELF?page=1'>";
exit();
}

$select=($show_page*$page)-$show_page;
$sql="select * from tb_machin order by mac_id desc limit $select,$show_page";
$result=mysql_query($sql); 
?>
<table width='100%' border='0' align='center'  cellspacing=0 bordercolor=#FFFFFF>

<?
$count=1;
while($data=mysql_fetch_array($result)){
if($count%3==1){
?>

<TR>
	<TD>&nbsp;</TD>
</TR>

<tr>
  <td width="31" valign='top' bordercolor='back' border='1'>&nbsp;</td>
 
<?
}
?>
<!--คำสั่งนี้คือส่งค่าอยู่หน้าเดิม$PHP_SELF -->
  <td width="33%" height="" align="center" valign='top' bordercolor='back' border='1'>
    <?
	if($data[mac_picture]!=""){
	echo"<CENTER><img src='images_machinery/$data[mac_picture]' width='160' height=140 border=0 ></CENTER>";
	}else{
	echo"<center><img src='images_machinery/nopic.jpg' width='160' height=140 border=0 ></center>";
	}
	?>

    <table width="100%" border="0" cellspacing="0">
      <tr>

        <td width="70%" bgcolor="#FFFFCC"><?php echo $data['mac_name'] ?>&nbsp;</td>
      </tr>
    
    </table>
    </td>
  <td width="9" valign='top' bordercolor="#ECE9D8" bgcolor='#FFFFFF'>&nbsp;</td>
  <td width="26" valign='top' bordercolor="#ECE9D8" bgcolor='#FFFFFF'>&nbsp;</td>
  <td width="26" valign='top' bordercolor="#ECE9D8" bgcolor='#FFFFFF'>&nbsp;</td>
  <td width="21" valign='top' bordercolor="#ECE9D8" bgcolor='#FFFFFF'>&nbsp;</td>
  <td width="21" valign='top' bordercolor="#ECE9D8" bgcolor='#FFFFFF'>&nbsp;</td>
<?
if($count%3==0){
?>
</tr>


<?

}
$count++;
}}
?>
</table>

      <table width="80%" border="0" align="center" cellspacing="0">
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left"><?
echo"หน้า >> ";
		for($i=1;$i<=$num_page;$i++){
if($i<>$page){
echo"[<a href='$PHP_SELF?page=$i'>$i</a>]";
}else{
echo"[<font color='red'><b>$i</b></font>]";
}
}
mysql_close();
?></td>
            </tr>
          </table>








</td>
  </tr>
</tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"> <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>

        <TR>
          <TD class=style11 
          background= 
          bgColor=#ffffff height=30><img src="images/menu/footerr.jpg" width="100%" height="30"></TD>
  </TR></TABLE></td>
  </tr>
</table>

</body>
</Center>
</html>
