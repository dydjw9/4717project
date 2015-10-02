<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用count()函数递归统计数组元素的个数</title>
</head>
<body>
<?php
$array = array("php" => array("PHP函数参考大全","PHP程序开发范例宝典","PHP数据库系统开发完全手册"),
               "asp" => array("ASP经验技巧宝典")
         );												//声明一个二维数组
echo count($array,COUNT_RECURSIVE);						//递归统计数组元素的个数
?>
</body>
</html>
