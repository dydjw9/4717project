<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>算术运算符的简单应用</title>
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
	$a = -100;									//声明变量$a
	$b = 50;									//声明变量$b
	$c = 30;									//声明变量$c
	echo "\$a = ".$a.",";						//输出变量
	echo "\$b = ".$b.",";
	echo "\$c = ".$c."<p>";						//四则和求模运算
	echo "\$a + \$b = ".($a + $b)."<br>";		//计算变量$a加 $b的值
	echo "\$a - \$b = ".($a - $b)."<br>";;		//计算变量$a减$b的值
	echo "\$a * \$b = ".($a * $b)."<br>";		//计算$a乘$b的值
	echo "\$a / \$b = ".($a / $b)."<br>";		//计算$a除以$b的值
	echo "\$a % \$c = ".($a % $c)."<br>";		//计算$a和$b的余数，被除数为-100
	echo "\$a++ = ".$a++." ";					//对变量$a进行后置递增运算
	echo "运算后\$a的值为：".$a."<br>";
	echo "\$b-- = ".$b--." ";					//对变量$b进行后置递减运算
	echo "运算后\$b的值为：".$b."<br>";
	echo "++\$c = ".++$c." ";					//对变量$c进行前置递增运算
	echo "运算后\$c的值为：".$c;

?>
</body>
</html>
