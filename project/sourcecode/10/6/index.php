<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>输出格式化的时间日期</title>
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
	echo "输出单个变量：".date("Y")."-".date("m")."-".date("d");
	echo "<p>";
	echo "输出组合变量：".date("Y-m-d");
	echo "<p>";
	echo "输出更详细的日期及时间：".date("Y-m-d H:i:s");
	echo "<p>";
	echo "还可以更详细吗？？";
	echo date("l Y-m-d H:i:s T");
	echo "<p>";
	echo "输出转移字符：";
	echo date("\T\o\d\a\y \i\s \\t\h\e jS \o\f \y\e\a\\r");
	
?>
</div>
</body>
</html>
