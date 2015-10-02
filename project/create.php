<?php
	//header("Content-Type:text/html;charset=utf-8");
	require_once('conn.php');

	echo $link."</br>";
	
	$sql="CREATE TABLE TMem
	(
	FirstName varchar(15),
	LastName varchar(15),
	NumID int(16),
	PubEmail varchar(32),
	PriEmail varchar(32),
	Pwd varchar(32))";
	mysql_query($sql,$link);
	mysql_close($link);
?>