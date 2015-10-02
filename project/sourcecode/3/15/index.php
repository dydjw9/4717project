<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<?php
$zy = "不会看到." ;					//声明全局变量$zy
$zyy = "会看到" ;					//声明全局变量$zyy
function lxt(){
	echo $zy."<br>";				//$zy不能被调用，没有输出
    global $zyy;					//利用关键字global在函数内部定义全局变量
    echo $zyy."<br>" ;				//此处调用$zyy
 }    
 lxt();
?>
</body>
</html>
