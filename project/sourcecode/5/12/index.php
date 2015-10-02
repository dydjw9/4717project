<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用strnatcmp()函数按“自然排序”法进行字符串的比较</title>
</head>

<body>
<?php 
$str1="str2.jpg";							//定义字符串常量
$str2="str10.jpg";							//定义字符串常量
$str3="mrsoft1";							//定义字符串常量
$str4="MRSOFT2";							//定义字符串常量
echo strcmp($str1,$str2);     					//按字节进行比较,返回1
echo strcmp($str3,$str4);     					//按字节进行比较,返1
echo strnatcmp($str1,$str2);  					//按"自然排序"法进行比较,返回-1
echo strnatcmp($str3,$str4);  					//按"自然排序"法进行比较,返回1
?>
</body>
</html>
