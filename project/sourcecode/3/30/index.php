<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>取消引用</title>
</head>
<body>
<?php
	$num = 1234;						//声明一个整型变量
	$math = &$num;						//声明一个对变量$num的引用$math
	echo "\$math is:  ".$math."<br>";	//输出引用$math
	unset($math);						//取消引用$math
	echo "\$math is: ".$math."<br>";	//再次输出引用
	echo "\$num is:  ".$num;			//输出原变量
?>
</body>
</html>
