<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>输出浮点类型</title>
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
echo '圆周率的3种书写方法：<p>';
echo '第一种：pi() = '. pi() .'<p>';							//调用pi函数输出圆周率
echo '第二种：3.14159265359 = '. 3.14159265359 .'<p>';			//传统书写格式的浮点数
echo '第三种： 314159265359E-11 = '. 314159265359E-11 .'<p>';	//科学记数法格式的浮点数
?>
</div>
</body>
</html>
