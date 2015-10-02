<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>创建与MySQL服务器的连接</title>
</head>

<body>
<?php
$link = mysql_connect("localhost", "root", "root") or die("不能连接到数据库服务器！可能是数据库服务器没有启动，或者用户名密码有误！".mysql_error());   //连接Mysql服务器
if($link){ 
echo "数据源连接成功!";
}
?>
</body>
</html>
