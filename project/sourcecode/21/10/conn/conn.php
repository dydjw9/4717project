<?php 
$conn=mysql_connect("localhost","root","root") or die('连接失败:' . mysql_error());
mysql_select_db("db_database21",$conn) or die ('数据库选择失败:' . mysql_error());
mysql_query("set names gb2312");
?>
