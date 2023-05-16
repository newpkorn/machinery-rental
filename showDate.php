<?php
	$d = getdate();
	$time = date("H:i:s");
	$date = $d['mday']."-".$d['month']."-".$d['year'].", ".$time;
	
	echo($date);
 ?>