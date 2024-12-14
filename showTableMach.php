<body>
<?php
	include("Connect.inc");
	$db	= "machinery";
	$tb = "tb_machin";
	$result = mysql_select_db($db);
	if(!$result){
		die('Coule not find Database called $dbName :'.mysql_errno());
	}
	$sql = "select*from $tb";// where name LIKE '%".$_POST["txtName"]."%'";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
	$num_field = mysql_num_fields($result);
	
	echo("<center>");
	echo "<table width=500px border=1px bgcolor=#CCFFCC ><tr>";
		$sql = "show columns from $tb";
		$col = mysql_query($sql);
		while($row = mysql_fetch_row($col)){
			echo "<th bgcolor='#0066CC'>$row[0]</th>";
		}
		echo "</tr>";
		
	$i = 0;
	while($i<$num_rows){
		$data = mysql_fetch_array($result);
		echo "<tr align=\"center\">";
		for($j=0; $j<$num_field;$j++){
			echo "<td>$data[$j]</td>";
		}
		echo "</tr>";
		$i++;
	}
	echo "</table></center>";
	mysql_close($link);
?>
</body>