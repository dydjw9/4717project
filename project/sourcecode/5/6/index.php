<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用addcslashes()函数、stripcslashes()函数分别对指定范围的字符串进行转义、还原</title>
</head>
<body>
<?php
$a="编程体验网";         				   		//对指定范围内的字符进行转义
echo $a;										//输出指定的字符串
echo "<br>";							 		//执行换行
$b=addcslashes($a,"编程体验网");			    //转义指定的字符串
echo $b;										//输出转义后的字符串
echo "<br>";							 		//执行换行
$c=stripcslashes($b);        		   			//对转义的字符串进行还原
echo $c;									    //输出还原后的转义字符串
?>
</body>
</html>
