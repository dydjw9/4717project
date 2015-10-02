<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>变量间的赋值</title>
</head>
<body>
<?php
$i = "spcn";				//声明变量$i
$j = & $i;					//使用引用赋值，这是$j已经赋值成为zhao
$i = "hello ,$i";			//重新给$j赋值
echo $j;					//输出变量$j
echo "<br>";
echo $i;					//输出变量$i

?>
</body>
</html>
