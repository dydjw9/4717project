<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>被赋值为null的几种情况</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<div align="center">
<?php
echo "变量(\$string1)直接赋值为null：";
$string1 = null;									//变量$string1被赋空值
$string3 = "str";									//变量$string3被赋值str
if(is_null($string1))								//判断$string1是否为空
	echo "string1 = null";
echo "<p>变量(\$string2)未被赋值：";
if(is_null($string2))								//判断$string2 是否为空
	echo "string2 = null";
echo "<p>被unset()函数处理过的变量(\$string3)：";	
unset($string3);									//释放$string3
if(is_null($string3))								//判断$string3是否为空
	echo "string3 = null";

?>
</div>
</body>
</html>
