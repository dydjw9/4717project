<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用explode()函数将字符串转换成数组</title>
</head>
<body>
<?php
$str = "时装、体闲、职业装";					//定义一个字符串
$strs = explode("、", $str);					//应用explode()函数将字符串转换成数组
print_r($strs);								    //输出数组元素
?>
</body>
</html>
