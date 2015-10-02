<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用substr()函数截取字符串中指定长度的字符</title>
</head>
<body>
<?php 
echo substr("She is a well-read girl",0);    	   //从第6个字符开始截取
echo "<br>";
echo substr("She is a well-read girl",4,14);  	   //从第4个字符开始连续截取14个字符
echo "<br>";
echo substr("She is a well-read girl",-4,4);        //从倒数第4个开始截取4个字符
echo "<br>";
echo substr("She is a well-read girl",0,-4);        //从第一个字符开始截取,截取到倒数第4个字符
?>
</body>
</html>
