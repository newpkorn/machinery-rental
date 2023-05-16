<? 
	@session_start();
include("inc_connect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<?
if($username=="" or $password==""){
	echo"<center><font color=red>กรุณากรอก Username และ Password ครบทุกช่อง</font></center>"; 
	echo"<meta http-equiv='refresh' content=1;url='Formlogin.php'>";exit();


}

	$sql="select*from tb_admin WHERE adm_user='".$_POST["username"]."'and adm_pass='".$_POST["password"]."' ";
	$query=mysql_query($sql);
	$row=mysql_num_rows($query);

	if ($row!=0) {
	$_SESSION['username'] = $username;
    $_SESSION['adm_id'] = mysql_result($query,0,"adm_id");
		 $_SESSION['adm_name'] = mysql_result($query,0,"adm_name");
	print "<meta http-equiv=refresh content=0;URL=Admin/Menu_Detail.php>";

	}
	else {
					


	
		$sql2="select*from tb_employee WHERE emp_user='".$_POST["username"]."'and emp_pass='".$_POST["password"]."' ";
	$query2=mysql_query($sql2);
	$row2=mysql_num_rows($query2);
	if ($row2!=0) {
			$_SESSION['username'] = $username;
    $_SESSION['emp_id'] = mysql_result($query2,0,"emp_id");
	 $_SESSION['emp_name'] = mysql_result($query2,0,"emp_name");
			print "<meta http-equiv=refresh content=0;URL=employee/Menu_Detail.php>";	
	}
	else {
echo"<SCRIPT>alert('User และ Passwordไม่ถูกต้อง');window.navigate('Formlogin.php');</SCRIPT>";
print "<meta http-equiv=refresh content=0;URL=Formlogin.php>";	
session_register("code_error");
	}
	}
?> 

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function validate(){
	var f = document.login;
	if (f.username.value=="") 	{
		alert("กรุณาป้อนชื่อผู้ใช้งาน.");
		f.username.focus();
		return false;
	}
	if (f.password.value=="") 	{
		alert("กรุณาป้อนรหัสผ่าน.");
		f.password.focus();
		return false;
	}
}
//  End -->
</script>