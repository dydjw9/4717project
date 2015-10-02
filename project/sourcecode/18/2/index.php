<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>选择MySQL数据库</title>
</head>

<body>
<?php
$link = mysql_connect("localhost", "root", "root") or die("不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！".mysql_error());   //连接Mysql服务器
$db_selected=mysql_select_db("db_database18",$link);
//$db_selected=mysql_query("use db_database18",$link);
if($db_selected){
echo "数据库选择成功!";
}
?>
</body>
</html>
