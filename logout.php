<?session_start();
	session_destroy(); 
	$LOGIN_OK=false;
	$redirect = "Formlogin.php";
?>
<br><br><br>


<SCRIPT LANGUAGE="JavaScript1.2">
<!-- Begin
document.location.href = '<?print $redirect; ?>';
// End -->
</script>