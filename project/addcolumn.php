<?php
	//header("Content-Type:text/html;charset=utf-8");
	require_once('conn.php');

	echo $link."</br>";
	mysql_select_db(f32ee);
	$sql="alter table TMem add column birthdate int(8);";
	mysql_query($sql,$link);
	mysql_close($link);
?>