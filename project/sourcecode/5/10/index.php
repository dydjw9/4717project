<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用substr()函数截取超长文本的部分字符串，剩余的部分用“…”代替</title>
</head>

<body>
<?php
$text="祝全国程序开发人员在编程之路上一帆风顺二龙腾飞三羊开泰四季平安五福临门六六大顺七星高照八方来财九九同心十全十美百事可乐千事顺心万事吉祥PHP编程一级棒";
if(strlen($text)>30){
	echo substr($text,0,30)."…";
}
else{
	echo $text;
}
?>
</body>
</html>
