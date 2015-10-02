<?php
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
$username=$_GET[username];
$sql=mysql_query("select * from TMem where PubEmail='".$username."'");
$info=mysql_fetch_array($sql);
if ($info){
		echo "Sorry".$username."has been used!";
	}else{
		echo "congratulation".$username." is valid";
	}

?>
