<?
function convert($number)
{
$txtnum1 = array('�ٹ��','˹��','�ͧ','���','���','���','ˡ','��','Ỵ','���','�Ժ');
$txtnum2 = array('','�Ժ','����','�ѹ','����','�ʹ','��ҹ');
$number = str_replace(",","",$number);
$number = str_replace(" ","",$number);
$number = str_replace("�ҷ","",$number);
$number = explode(".",$number);
if(sizeof($number)>2){
return '�ȹ������µ�ǹШ��';
exit;
}
$strlen = strlen($number[0]);
$convert = '';
for($i=0;$i<$strlen;$i++){
$n = substr($number[0], $i,1);
if($n!=0){
if($i==($strlen-1) AND $n==1){ $convert .= '���'; }
elseif($i==($strlen-2) AND $n==2){ $convert .= '���'; }
elseif($i==($strlen-2) AND $n==1){ $convert .= ''; }
else{ $convert .= $txtnum1[$n]; }
$convert .= $txtnum2[$strlen-$i-1];
}
}
$convert .= '�ҷ';
if($number[1]=='0' OR $number[1]=='00' OR $number[1]==''){
$convert .= '��ǹ';
}else{
$strlen = strlen($number[1]);
for($i=0;$i<$strlen;$i++){
$n = substr($number[1], $i,1);
if($n!=0){
if($i==($strlen-1) AND $n==1){$convert .= '���';}
elseif($i==($strlen-2) AND $n==2){$convert .= '���';}
elseif($i==($strlen-2) AND $n==1){$convert .= '';}
else{ $convert .= $txtnum1[$n];}
$convert .= $txtnum2[$strlen-$i-1];
}
}
$convert .= 'ʵҧ��';
}
return $convert;
}

//���¡�� funtion
//$x = '51,211.10 �ҷ';   //������������� , ����
//echo $x.' => '.convert($x);

?>

<?php   
$thai_day_arr=array("�ҷԵ��","�ѹ���","�ѧ���","�ظ","����ʺ��","�ء��","�����");   
$thai_month_arr=array(   
  "0"=>"",   
   "1"=>"���Ҥ�",   
   "2"=>"����Ҿѹ��",   
  "3"=>"�չҤ�",   
  "4"=>"����¹",   
   "5"=>"����Ҥ�",   
   "6"=>"�Զع�¹",    
   "7"=>"�á�Ҥ�",   
    "8"=>"�ԧ�Ҥ�",   
    "9"=>"�ѹ��¹",   
 "10"=>"���Ҥ�",   
   "11"=>"��Ȩԡ�¹",   
    "12"=>"�ѹ�Ҥ�"                     
);
function thai_date($time){   
global $thai_day_arr,$thai_month_arr;   
$thai_date_return="�ѹ".$thai_day_arr[date("w",$time)];   
$thai_date_return.= "��� ".date("j",$time);   
$thai_date_return.=" ��͹".$thai_month_arr[date("n",$time)];   
 $thai_date_return.= " �.�.".(date("Y",$time)+543);   
$thai_date_return.= "  ".date("H:i",$time)." �.";   
return $thai_date_return;   
}   
function thai_date1($time){   
global $thai_day_arr,$thai_month_arr;   
$thai_date_return= " ".date("j",$time);   
$thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
 $thai_date_return.= " ".(date("Y",$time)+543);   
return $thai_date_return;   
}   
function thai_date2($time){   
global $thai_day_arr,$thai_month_arr;   
$thai_date_return= " ".date("j",$time);   
$thai_date_return.=" ��͹ ".$thai_month_arr[date("n",$time)];   
 $thai_date_return.= " �.�. ".(date("Y",$time)+543);   
$thai_date_return.= " ���� ".date("H:i",$time)." �.";   
return $thai_date_return;   
}   
function thai_date3($time){   
global $thai_day_arr,$thai_month_arr;   
$thai_date_return= " ".date("j",$time);   
$thai_date_return.="  ".$thai_month_arr[date("n",$time)];   
 $thai_date_return.= " ".(date("Y",$time)+543);   
$thai_date_return.= " ���� ".date("H:i",$time)." �.";   
return $thai_date_return;   
}   

function thai_date4($time){   
global $thai_day_arr,$thai_month_arr;   
$thai_date_return.="  ".$thai_month_arr[date("n",$time)];  

return $thai_date_return;   
}   
?>  