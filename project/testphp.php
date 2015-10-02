<?php
	require_once('conn.php');
	$cmd="alter table TMem add column birthday int(8)";
	mysql_query($cmd,$link);
	mysql_close($link);
?>