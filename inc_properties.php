<? session_start();
	if(session_is_registered("SITE_NAME")==false) {
		session_register("DB_HOSTNAME");
		session_register("DB_NAME");
		session_register("DB_USERNAME");
		session_register("DB_PASSWORD");

		session_register("LOGIN_OK");
		session_register("LOGIN_ID");
		session_register("LOGIN_NAME");
		session_register("LOGIN_EMAIL");
		session_register("LOGIN_LEVEL");
		session_register("LOGIN_PIC"); 
		
		

	}	
/*
	$_SESSION["SITE_NAME"] = "http://localhost/dooca1";
	$_SESSION["SITE_EMAIL"] = "webmater@dooca.ac.th";
	$_SESSION["SITE_TITLE"] = "dooca.ac.th";*/
    $_SESSION["SITE_NAME"] = "http://202.28.32.155/work/lms";
	$_SESSION["DB_HOSTNAME"] = "localhost";
	$_SESSION["DB_NAME"] 	 = "lms";
	$_SESSION["DB_USERNAME"] = "root";
	$_SESSION["DB_PASSWORD"] = "123456";//1234
	
	

	extract($_POST);
	extract($_GET);
	extract($_SESSION);
	extract($_SERVER);
	
	$GROUP_NEWS = array("หน้าแรก","อาจารย์","นิสิต","นิสิตและอาจารย์");
	$EXAMINE = array("","ก่อนเรียน","หลังเรียน");

	$M_THAI_LONG = array("","??????","??????????","??????","??????","???????","????????","??????","???????","???????","??????","?????????","???????");
	$M_THAI_SHORT = array("","?.?.","?.?.","??.?.","??.?.","?.?.","??.?.","?.?.","?.?.","?.?.","?.?.","?.?.","?.?.");	

 #กำหนดการแสดงต่อหน้าของสินค้า
$Num_Pages="10";
$Per_Page_product_index="10";//หน้าแรก
$Per_Page_product_all="10";
$Per_Page_product_Re="30";//หน้าออกรายงานของ admin
#กำหนดการแสดงต่อหน้าของตัวแทนจำหน่าย
$Per_Page_mem="25";
$Per_Page_mem_re="20";//รายงาน
$Per_Page_mail="15";//ข้อความที่ส่งถึง
// กำหนดความกว้างของการอัพโหลดภาพตัวอย่างสินค้า
$photowidthProEx="500";
$PhotoSizeProEx="50240";
$numExPicUnit="5";//จำนวนภาพตัวอย่างสินค้าที่สามารถเพิ่มได้
#กำหนดการแสดงต่อหน้าของสมาชิกลูกค้า
$Per_Page_cus="30";//รายงาน

	function alert($msg,$link) {
?>
        <SCRIPT LANGUAGE="JavaScript1.2">
			<!-- Begin
				alert("<?=$msg?>");
<? if($link=="next") { ?>
//				return true;
<? } else if($link!="") { ?>
				window.location.href="<?=$link?>";
<? } else { ?>
				history.back();
<? } ?>
			// End -->
		</script>
<?
	}

	function error_msg($str,$SQL) {
		print "<font color='red'>?????????????????????????????????????????????<hr size='1'>????????? : ".$str."<br> SQL : $SQL<br>??????????????????????  <a href='javascript:location.reload()' target='_self'>???????????????????</a></font>";
	}

	function message($str) { 
		if($str!="") {
			$a = "<table width='388' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#FF0000'>
			  <tr> 
				<td><table width='100%' height='25' border='0' bgcolor='#FEFFEA'>
					  <tr align='center'> 
						<td width='100%' height='25'><font color='red'>".$str."</font></td>
					  </tr>
				  </table></td>
			  </tr>
			</table>";
			 return $a;
		}
	}

	function message_ok($str) { 
		if($str!="") {
			$a = "<table width='388' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='green'>
			  <tr> 
				<td><table width='100%' height='25' border='0' bgcolor='#FEFFEA'>
					  <tr align='center'> 
						<td width='100%' height='25'><font color='green'>".$str."</font></td>
					  </tr>
				  </table></td>
			  </tr>
			</table>";
			 return $a;
		}
	}
	function show_datetime($tmp) {
		if($tmp!="0000-00-00" && $tmp!="" && $tmp!="0000-00-00 00:00:00") {
			global $M_THAI_LONG;
			list($d,$m,$y,$time) = split(" ",$tmp);
			$y += 543;
			return $d."&nbsp;".$m."&nbsp;".$y." ".$time;
		}
	}

	function show_long_date($tmp) {
		if($tmp!="0000-00-00" && $tmp!="" && $tmp!="0000-00-00 00:00:00") {
			global $M_THAI_LONG;
			list($y,$m,$d,$time) = split("-",$tmp);
		       	$y += 543;
			return $y."-".$m."-".$d." ";
		}
	}

	function show_short_date($tmp) {
		if($tmp!="0000-00-00" && $tmp!="" && $tmp!="0000-00-00 00:00:00") {
			global $M_THAI_SHORT;
			list($d,$m,$y,$time) = split(" ",$tmp);
			$y += 543;
			return $d." ".$m." ".$y;
		}
	}

	function show_thai_date($tmp) {
		if($tmp!="0000-00-00" && $tmp!="" && $tmp!="0000-00-00 00:00:00") {
			global $M_THAI_SHORT;
			list($y,$m,$d,$time) = split("-",$tmp);
			$y += 543;
			return $d."-".$m."-".$y;
		}
	}

	function show_2_date($tmp,$tmp1) {
		global $M_THAI_SHORT;
		$y = substr($tmp,0,4)+543;
		$m = substr($tmp,5,2);
		$d = substr($tmp,8,2);

		$y1 = substr($tmp1,0,4)+543;
		$m1 = substr($tmp1,5,2);
		$d1 = substr($tmp1,8,2);
		if($y!=$y1) {
			return $d." ".$M_THAI_SHORT[intval($m)]." ".substr($y,2,2)."-".$d1." ".$M_THAI_SHORT[intval($m1)]." ".substr($y1,2,2);
		} else if($m!=$m1) {
			return $d." ".$M_THAI_SHORT[intval($m)]."-".$d1." ".$M_THAI_SHORT[intval($m1-1)]." ".substr($y1,2,2);
		} else {
		return $d."-".$d1." ".$M_THAI_SHORT[intval($m-1)]." ".substr($y1,2,2);
		}
	}

	function show_time($tmp) {
		$time = substr($tmp,11,9);
		return $time;
	}

	function deletepicture($SQL,$pic) {
		$resultx = mysql_query($SQL) or die("Error");
		$tmpx = mysql_fetch_array($resultx);
		if($tmpx[$pic]!="") {
			@unlink("../images-upload/".$tmpx[$pic]);
		}
	}

	function format($tmp) {
		$tmp = substr("000000",0,5-strlen($tmp)).$tmp;
		return $tmp;
	}
	
	function find_img($pic) {
		$pic = strtolower($pic);
		if(substr_count($pic,".jpg")>0 || substr_count($pic,".gif")>0 || substr_count($pic,".bmp")>0 || substr_count($pic,".png")>0 || substr_count($pic,".jpeg")>0) {
			return "<img src='../images-upload/$pic'>";
		} else {
			return "<a href='../images-upload/$pic' target='_blink'>$pic</a>";
		}
	}
	function find_img1($pic) {
		$pic = strtolower($pic);
		
			return "<a href='../../images-upload/$pic' target='_blink'>$pic</a>";
		
	}
?>
