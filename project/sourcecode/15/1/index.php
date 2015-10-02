<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用crypt()函数进行加密</title>
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
	$str ='This is an example!';					//声明字符串变量$str
	echo '加密前$str的值为：'.$str;
	$crypttostr = crypt($str);						//对变量$str加密
	echo '<p>加密后$str的值为：'.$crypttostr;		//输出加密后的变量
?>
</body>
</html>
