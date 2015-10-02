<?php
	$conn=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());	//连接服务器
	mysql_select_db("db_database15",$conn);		//连接数据库
	mysql_query("set names gb2312");			//设置编码格式
?>
