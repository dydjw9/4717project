<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用mktime()函数获取当前时间</title>
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
	echo "mktime函数返回的时间戳：".mktime()."<p>";
	echo "当前的日期为：".date("Y-m-d",mktime())."<p>";
	echo "当前的时间为：".date("H:i:s",mktime());
?>
</div>
</body>
</html>
