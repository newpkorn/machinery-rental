<?php
// Function to convert numbers into Thai text
function convert($number)
{
  $txtnum1 = array('ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า', 'สิบ');
  $txtnum2 = array('', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน');
  $number = str_replace(",", "", $number);
  $number = str_replace(" ", "", $number);
  $number = str_replace("บาท", "", $number);
  $number = explode(".", $number);

  if (sizeof($number) > 2) {
    return 'ทศนิยมหลายตัวนะจ๊ะ';
    exit;
  }

  $strlen = strlen($number[0]);
  $convert = '';
  for ($i = 0; $i < $strlen; $i++) {
    $n = substr($number[0], $i, 1);
    if ($n != 0) {
      if ($i == ($strlen - 1) and $n == 1) {
        $convert .= 'เอ็ด';
      } elseif ($i == ($strlen - 2) and $n == 2) {
        $convert .= 'ยี่';
      } elseif ($i == ($strlen - 2) and $n == 1) {
        $convert .= '';
      } else {
        $convert .= $txtnum1[$n];
      }
      $convert .= $txtnum2[$strlen - $i - 1];
    }
  }
  $convert .= 'บาท';

  if ($number[1] == '0' or $number[1] == '00' or $number[1] == '') {
    $convert .= 'ถ้วน';
  } else {
    $strlen = strlen($number[1]);
    for ($i = 0; $i < $strlen; $i++) {
      $n = substr($number[1], $i, 1);
      if ($n != 0) {
        if ($i == ($strlen - 1) and $n == 1) {
          $convert .= 'เอ็ด';
        } elseif ($i == ($strlen - 2) and $n == 2) {
          $convert .= 'ยี่';
        } elseif ($i == ($strlen - 2) and $n == 1) {
          $convert .= '';
        } else {
          $convert .= $txtnum1[$n];
        }
        $convert .= $txtnum2[$strlen - $i - 1];
      }
    }
    $convert .= 'สตางค์';
  }
  return $convert;
}

// Array for Thai days and months
$thai_day_arr = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");

$thai_month_arr = array(
  "0" => "",
  "1" => "มกราคม",
  "2" => "กุมภาพันธ์",
  "3" => "มีนาคม",
  "4" => "เมษายน",
  "5" => "พฤษภาคม",
  "6" => "มิถุนายน",
  "7" => "กรกฎาคม",
  "8" => "สิงหาคม",
  "9" => "กันยายน",
  "10" => "ตุลาคม",
  "11" => "พฤศจิกายน",
  "12" => "ธันวาคม"
);

// Function to convert timestamp to Thai date format (Full)
function thai_date($time)
{
  global $thai_day_arr, $thai_month_arr;
  $thai_date_return = "วัน" . $thai_day_arr[date("w", $time)];
  $thai_date_return .= "ที่ " . date("j", $time);
  $thai_date_return .= " เดือน" . $thai_month_arr[date("n", $time)];
  $thai_date_return .= " พ.ศ." . (date("Y", $time) + 543);
  $thai_date_return .= "  " . date("H:i", $time) . " น.";
  return $thai_date_return;
}

// Function to convert timestamp to Thai date format (Day, Month, Year only)
function thai_date1($time)
{
  global $thai_month_arr;
  $thai_date_return = " " . date("j", $time);
  $thai_date_return .= " " . $thai_month_arr[date("n", $time)];
  $thai_date_return .= " " . (date("Y", $time) + 543);
  return $thai_date_return;
}

// Function to convert timestamp to Thai date format (Month, Year, Time)
function thai_date2($time)
{
  global $thai_month_arr;
  $thai_date_return = " " . date("j", $time);
  $thai_date_return .= " เดือน " . $thai_month_arr[date("n", $time)];
  $thai_date_return .= " พ.ศ. " . (date("Y", $time) + 543);
  $thai_date_return .= " เวลา " . date("H:i", $time) . " น.";
  return $thai_date_return;
}

// Function to convert timestamp to Thai date format (Month, Year)
function thai_date3($time)
{
  global $thai_month_arr;
  $thai_date_return = " " . date("j", $time);
  $thai_date_return .= "  " . $thai_month_arr[date("n", $time)];
  $thai_date_return .= " " . (date("Y", $time) + 543);
  $thai_date_return .= " เวลา " . date("H:i", $time) . " น.";
  return $thai_date_return;
}

// Function to convert timestamp to Thai month name only
function thai_date4($time)
{
  global $thai_month_arr;
  $thai_date_return = "  " . $thai_month_arr[date("n", $time)];
  return $thai_date_return;
}
