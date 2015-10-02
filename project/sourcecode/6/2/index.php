<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用ereg_replace()函数替换字符</title>
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
	$ereg = 'tm';							//要匹配的字串
	$str = 'hello,tm,Tm,tM.';					//要查找的文本
	$rep_str = eregi_replace($ereg,'TM',$str);		//使用eregi_replace()函数进行替换
	echo $rep_str;							//输出替换后的文本


?>
</body>
</html>
