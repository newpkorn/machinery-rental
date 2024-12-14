<? @session_start(); include("../inc_connect.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<Center>
<head>
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/css1.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style2 {color: #FFFFFF}
.style3 {color: #0066FF}
.style4 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>

<body><font size="+5">
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td colspan="2"><? include("inc_header.php"); ?></td>
  </tr>
  <tr valign="top">
    <td height="5" colspan="2" bgcolor="#E7E6E6"></td>
  </tr>
  <tr valign="top">
    <td width="23%" height="114" bgcolor="#E7E6E6">
    <table width="100%" height="49"  border="0">
      <tr>
        <td width="100%" height="45"><center>
<span class="style4">ชื่อผู้ใช้งาน</span> : <?=$_SESSION['emp_name']?>
        </center></td>
      </tr>
    </table>
      <table width="100%" height="102"  border="0">
        <tr>
          <td height="48" align="center"><img src="../images/admin.png" alt="" width="100" height="99" /></td>
        </tr>
    
    </table>
	      <table width="92%" height="70"  border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td height="35"><img src="../images/home.gif" alt="" width="16" height="14" /> <a href="Menu_Detail.php">หน้าแรก</a></td>
        </tr>        
        <tr>
          <td width="100%" height="23"><img src="../images/logout.gif" alt="" width="16" height="16" />&nbsp;<a href="../logout.php">ออกจากระบบ</a></td>
        </tr>
    </table>
    </td>
    <td width="77%"><table id="Table_01" width="100%" height="0" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20"> <img src="../images/rim_01.gif" width="20" height="22" alt=""></td>
        <td background="../images/rim_02.gif"> <img src="../images/rim_02.gif" width="8" height="22" alt=""></td>
        <td background="../images/rim_02.gif">&nbsp; </td>
        <td width="23"> <img src="../images/rim_04.gif" width="23" height="22" alt=""></td>
      </tr>
      <tr>
        <td background="../images/rim_05.gif"> <img src="../images/rim_05.gif" width="20" height="11" alt=""></td>
        <td colspan="2" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0">
          <tr>
            <td width="48%" colspan="2"><strong><marquee>ยินดีต้อนรับสู่ระบบขอเช่าเครื่องจักรกล กรมทางหลวง มหาสารคาม </marquee></strong></td>
          
          </tr>
          <tr>
            <td colspan="2" rowspan="2" bgcolor="#FFFFFF">
			
			<table width="100%"  border="0">


      <tr align="center">
                  <td width="100%" bgcolor="#CCFFFF">
				  <?if($edit==""){?>
				<FORM METHOD=POST ACTION=""  enctype="multipart/form-data">
					  <TABLE>
				  <TR>
					<TD>ชื่อเอกสาร</TD><TD><INPUT TYPE="text" NAME="docname"></TD>
				  </TR>
				  <TR>
					<TD>ไฟล์เอกสาร</TD><TD><INPUT TYPE="file" NAME="file_UpFile[]" id="file_UpFile[]" ></TD>
				  </TR>
				  <TR>
					<TD align="center" colspan="2"><INPUT TYPE="submit" value="บันทึก"></TD>
				  </TR><INPUT TYPE="hidden" NAME="add" value="1">
				   <TR>
					<TD align="center" colspan="2"> รูปแบบไฟล์ที่อัพโหลดได้ .doc .pdf ขนาดไม่เกิน 2 Mb</TD>
				  </TR>
				  </TABLE>
				  </FORM>
				 <? }?>
				<?
if($add==1){

$folder = '../document/'; 
	if($_FILES){
		$NumFile = count($_FILES['file_UpFile'] ['name']);

			for($i=0; $i<$NumFile; $i++){
				if($_FILES['file_UpFile'] ['error'] [$i] !=0){
					continue;
				}
			
			$FileName 	= $_FILES['file_UpFile'] ['name'] [$i];
			$Filetype 		= $_FILES['file_UpFile'] ['type'] [$i];
			$FileSize 		= $_FILES['file_UpFile'] ['size'] [$i];
	 		$FileUpLoadtmp = $_FILES['file_UpFile'] ['tmp_name'] [$i];
			if($FileUpLoadtmp){					 
					$array_last = explode(".",$FileName); // เป็น array หาจำนวน จุด . ของชื่อตัวแปร์			
							$c = count($array_last) - 1; //นับจำนวน จุด "." ของชื่อตัวแปร์ 
							$lname = strtolower($array_last [$c]); // หา นามสกุลไฟล์ ตัวสุดท้ายของ ตัวแปร์
							$NewFileupload = date("U"); 
						    $NewFile = $NewFileupload.$i.".$lname"; //รวม ชื่อและนามสกลุดไฟล์เข้าด้วยกัน \
if ($FileSize > 2000000)
    {
    echo"<SCRIPT>alert('ขนาดไฟล์ใหญ่เกิน 2 Mb'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=document.php'>"; 
		exit();
    }

if($lname!="doc" and  $lname!="pdf"  ){	echo"<SCRIPT>alert('รูปแบบไฟล์ไม่ถูกต้อง'); </SCRIPT>";
	//echo "<meta http-equiv='refresh' content='0; url=document.php'>"; 
	}
						if($lname=="doc" or $lname=="pdf" ){
	
								if(move_uploaded_file($FileUpLoadtmp, "$folder/".$NewFile)){
									 @unlink("$folder/".$DataM['mb_photo']);
$sqlin = "insert into  tb_document    values ('','$docname','$NewFile')  ";
$resultin = mysql_query($sqlin);}
						}
			}
			}
		}
	  }

?>



				 	  <?if($edit!=""){
						    $sqldoc1=mysql_query("select * from   tb_document where document_id='$edit'");
						   $rsdoc1= mysql_fetch_array($sqldoc1);
							  ?>
				  			<FORM METHOD=POST ACTION=""  enctype="multipart/form-data">
					  <TABLE>
				  <TR>
					<TD>ชื่อเอกสาร</TD><TD><INPUT TYPE="text" NAME="docname" value="<?=$rsdoc1[1]?>"></TD>
				  </TR>
				  <TR>
					<TD>ไฟล์เอกสาร</TD><TD><INPUT TYPE="file" NAME="file_UpFile[]" id="file_UpFile[]"></TD>
				  </TR>
				  <TR>
					<TD align="center" colspan="2"><INPUT TYPE="submit" value="แก้ไข"></TD>
				  </TR><INPUT TYPE="hidden" NAME="add" value="2">
				  </TABLE>
				  </FORM>
				<?  }?>
				<?
if($add==2){
$folder = '../document/'; 
	if($_FILES){
		$NumFile = count($_FILES['file_UpFile'] ['name']);

			for($i=0; $i<$NumFile; $i++){
				if($_FILES['file_UpFile'] ['error'] [$i] !=0){
					continue;
				}
			
			$FileName 	= $_FILES['file_UpFile'] ['name'] [$i];
			$Filetype 		= $_FILES['file_UpFile'] ['type'] [$i];
			$FileSize 		= $_FILES['file_UpFile'] ['size'] [$i];
	 		$FileUpLoadtmp = $_FILES['file_UpFile'] ['tmp_name'] [$i];
			if($FileUpLoadtmp){					 
					$array_last = explode(".",$FileName); // เป็น array หาจำนวน จุด . ของชื่อตัวแปร์			
							$c = count($array_last) - 1; //นับจำนวน จุด "." ของชื่อตัวแปร์ 
							$lname = strtolower($array_last [$c]); // หา นามสกุลไฟล์ ตัวสุดท้ายของ ตัวแปร์
							$NewFileupload = date("U"); 
						    $NewFile = $NewFileupload.$i.".$lname"; //รวม ชื่อและนามสกลุดไฟล์เข้าด้วยกัน \
if ($FileSize > 2000000)
    {
    echo"<SCRIPT>alert('ขนาดไฟล์ใหญ่เกิน 2 Mb'); </SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=document.php'>"; 
		exit();
    }

if($lname!="doc" and  $lname!="pdf"  ){	echo"<SCRIPT>alert('รูปแบบไฟล์ไม่ถูกต้อง'); </SCRIPT>";
	//echo "<meta http-equiv='refresh' content='0; url=document.php'>"; 
	}
						if($lname=="doc" or $lname=="pdf" ){
	
								if(move_uploaded_file($FileUpLoadtmp, "$folder/".$NewFile)){
									 @unlink("$folder/".$DataM['mb_photo']);
$sqlin = "update tb_document     set   document_name='$docname'  ,document_file='$NewFile' where  document_id='$edit'";
$resultin = mysql_query($sqlin);}

				}
			
			}	
			}
		}
	  }

?>
				
				
				<BR><BR>
				  <table width="500" border="1">
            <TR>
				<TD width="15%"  align="center" bgcolor="#0000FF"><span class="style2">ลำดับ</span></TD>
				<TD width="65%" align="center" bgcolor="#0000FF"><span class="style2">เอกสาร</span></TD>
				<TD width="10%" align="center" bgcolor="#0000FF"><span class="style2">แก้ไข</span></TD>
				<TD width="10%" align="center" bgcolor="#0000FF"><span class="style2">ลบ</span></TD>
            </TR>
			<?
			$numb=1;
			  $sqldoc=mysql_query("select * from   tb_document");
						  while($rsdoc= mysql_fetch_array($sqldoc))
						  {?>
            <TR>
				<TD align="center" bgcolor="#FFFFCC"><span class="style3">
				  <?=$numb?>
				</span></TD>
				<TD align="center" bgcolor="#FFFFCC"><span class="style3">
				  <?if($rsdoc[2]!=""){?>
				  <A HREF="../document/<?=$rsdoc[2]?>" target="_blank">
				  <?}?>
				  <?=$rsdoc[1]?>
				  </A></span></TD>
				<TD  align="center" bgcolor="#FFFFCC"><A HREF="?edit=<?=$rsdoc[0]?>" class="style3"><img src="../images/edit.gif" alt=""></A></TD>
				<TD   align="center" bgcolor="#FFFFCC"><A HREF="?del=<?=$rsdoc[0]?>" class="style3"><img src="../images/delete.gif" alt="" width="15" height="15"></A></TD>
            </TR>
      <?$numb++;}?>
                  </table>
				  
				  
				  
				  </td>
                </tr>
  
            </table></td>
          </tr>
          <tr></tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td background="../images/rim_07.gif"> <img src="../images/rim_07.gif" width="23" height="11" alt=""></td>
      </tr>
      <tr>
        <td height="300" background="../images/rim_05.gif">&nbsp; </td>
        <td background="../images/rim_07.gif">&nbsp; </td>
      </tr>
      <tr>
        <td> <img src="../images/rim_10.gif" width="20" height="25" alt=""></td>
        <td background="../images/rim_11.gif"> <img src="../images/rim_11.gif" width="8" height="25" alt=""></td>
        <td background="../images/rim_11.gif">&nbsp; </td>
        <td> <img src="../images/rim_13.gif" width="23" height="25" alt=""></td>
      </tr>
    </table></td>
  </tr>
</tr>
  <tr valign="top" bgcolor="#E7E6E6">
    <td colspan="2"></td>
  </tr>
</table>
</font>
</body>
</Center>
</html>
<?if($del!=""){
$sql1 = "delete from  tb_document   where document_id='$del'";
$result1 = mysql_query($sql1);
if($result1){
echo"<SCRIPT>alert('ลบข้อมูลเสร็จแล้ว');window.navigate('?');</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; url=document.php'>";
 
} else {
echo"<SCRIPT>alert('ไม่สามารถลบข้อมูลได้');window.navigate('?');</SCRIPT>";
echo "<meta http-equiv='refresh' content='0; url=document.php'>";
}
}?>
