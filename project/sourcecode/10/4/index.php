<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>getdate()函数获取时间日期信息</title>
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
	$arr = getdate();
	echo $arr[year]."-".$arr[mon]."-".$arr[mday]." ";
	echo $arr[hours].":".$arr[minutes].":".$arr[seconds]." ".$arr[weekday];
	echo "<p>";
	echo "Today is the $arr[yday]th of year";
?>
</div>
</body>
</html>
