<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过函数对常量进行定义、获取和判断</title>
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
<?php
define ("MESSAGE","能看到一次");
echo MESSAGE."<BR>";					//输出常量MESSAGE
echo Message."<BR>";					//输出"Message"，表示没有该常量
define ("COUNT","能看到多次",true);
echo COUNT."<BR>";						//输出常量COUNT
echo Count."<BR>";						//输出常量COUNT，因为设定大小写不敏感
$name = "count";
echo constant ($name)."<BR>";    			//输出常量COUNT
echo (defined ("MESSAGE"))."<BR>";     	//如果定义返回True，使用echo输出显示1

?>
</body>
</html>
