<?php

$pubemail=$_GET['username'];
$pwd=$_GET['userpassword'];
require_once('conn.php');
mysql_select_db(f32ee);
$cmd="SELECT * FROM TMem where PubEmail='$pubemail';";

echo "</br>".$cmd;
$sql=mysql_query($cmd,$link);
$result=mysql_fetch_array($sql);
if($result==false)
	echo "failed";
else echo $result[Pwd];
	mysql_close($link);
?>