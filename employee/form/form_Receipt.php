	<?php
  @ob_start();
  @session_start();
  @error_reporting(0);
  ?>
	<? if (isset($print)) { ?>
	  <SCRIPT LANGUAGE="JavaScript">
	    window.print();
	  </script>
	<? } ?>

	<html>

	<head>

	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body lang=EN-US style='tab-interval:36.0pt'>

	  <div class=Section1>

	    <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<span class="style1"> ใบรายการจอง

	      </span></div>
	    <table border=1 cellpadding=0 cellspacing=0 class=MsoNormalTable
	      style='width: auto;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
	      <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
	        <td valign=top style='width: auto;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>รหัสการจอง<o:p></o:p></span></p>
	        </td>
	        <td valign=top style='width: auto;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>ชื่อผู้จอง</span><span
	              style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	              <o:p></o:p>
	            </span></p>
	        </td>
	        <td valign=top style='width:auto;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>เจ้าหน้าที่ทำรายการ</span><span
	              style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	              <o:p></o:p>
	            </span></p>
	        </td>
	        <td valign=top style='width: auto;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>รายการเครื่องจักรกลที่จอง</span><span
	              style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	              <o:p></o:p>
	            </span></p>
	        </td>
	        <td valign=top style='width: auto;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>วันที่จอง</span><span
	              style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	              <o:p></o:p>
	            </span></p>
	        </td>
	        <td valign=top style='width: auto;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	          <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>วันที่รับ</span><span
	              style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	              <o:p></o:p>
	            </span></p>
	        </td>
	      </tr>

	      <?php
        include("../../inc_connect.php");
        include("../function.php");
        $idr = filter_input(INPUT_GET, 'idr', FILTER_VALIDATE_INT);
        $sqlreserv = mysqli_query($conn, "SELECT * FROM tb_reserv, tb_employee, tb_member WHERE tb_reserv.mem_id = tb_member.mem_id AND tb_reserv.emp_id = tb_employee.emp_id AND res_id = '$idr'") or die(mysqli_error($conn));

        if (mysqli_num_rows($sqlreserv) > 0) {
          while ($rsreserv = mysqli_fetch_array($sqlreserv)) {
        ?>
	          <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
	            <td valign=top style='width: auto;border:solid windowtext 1.0pt; border-top:none; mso-border-top-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt; padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <span style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'><?= $rsreserv[0]; ?></span>
	              </p>
	            </td>
	            <td valign=top style='width: auto;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt; mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'><?= $rsreserv['mem_name']; ?></span>
	              </p>
	            </td>
	            <td valign=top style='width: auto;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <span lang=TH style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'><?= $rsreserv['emp_name']; ?></span>
	              </p>
	            </td>
	            <td valign=top style='width: auto;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <?php
                  $sqltype = mysqli_query($conn, "SELECT * FROM tb_reserv_detail, tb_machin WHERE tb_machin.mac_id = tb_reserv_detail.mac_id AND res_id = '$rsreserv[res_id]'") or die(mysqli_error($conn));
                  if (mysqli_num_rows($sqltype) > 0) {
                    while ($rstype = mysqli_fetch_array($sqltype)) {
                      echo $rstype['mac_name'] . "<br>";
                    }
                  } else {
                    echo "No machine data available.";
                  }
                  ?>
	              </p>
	            </td>
	            <td valign=top style='width: auto;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <span style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	                  <?php
                    $eng_date = strtotime($rsreserv['res_date']);
                    echo thai_date1($eng_date);
                    ?>
	                </span>
	              </p>
	            </td>
	            <td valign=top style='width: auto;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
	              <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height: normal'>
	                <span style='font-size:12.0pt;font-family:"TH SarabunPSK","sans-serif"'>
	                  <?php
                    $eng_date2 = strtotime($rsreserv['rec_date']);
                    echo thai_date1($eng_date2);
                    ?>
	                </span>
	              </p>
	            </td>
	          </tr>
	      <?php
          }
        } else {
          echo "No reservation data found.";
        }
        ?>

	    </table>

	    <p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'>
	        <o:p>&nbsp;</o:p>
	      </span></p>

	    <p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>สำนักงานทางหลวงมหาสารคาม</span><a
	        name="_GoBack"></a><span style='font-family:"Angsana New","serif"'>
	        <o:p></o:p>
	      </span></p>

	    <p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>โทร.๐๔๓-๗๑๑๒๗๘</span><span
	        style='font-family:"Angsana New","serif"'>
	        <o:p></o:p>
	      </span></p>

	    <p class=MsoNormal style='margin-left:-2.0cm;text-indent:92.15pt;line-height:
normal;tab-stops:50.25pt'><span lang=TH style='font-size:14.0pt;mso-ansi-font-size:
11.0pt;font-family:"Angsana New","serif"'>โทรสาร ๐๔๓-๗๒๓๓๑๗<o:p></o:p></span></p>

	    <p class=MsoNormal><span style='font-size:12.0pt;line-height:115%;font-family:
"TH SarabunPSK","sans-serif"'>
	        <o:p>&nbsp;</o:p>
	      </span></p>

	  </div>

	</body>

	</html>
	<? ob_flush(); ?>