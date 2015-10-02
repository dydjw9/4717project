<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>静态变量的使用</title>
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
class Book{										//Book类
	static $num = 0;							//声明一个静态变量$num，初值为0
	public function showMe(){					//申明一个方法
		echo '您是第'.self::$num.'位访客';		//输出静态变量
		self::$num++;							//将静态变量加1
	}
}
$book1 = new Book();							//实例化对象$book1
$book1 -> showMe();								//调用showMe()方法
echo "<br>";
$book2 = new Book();							//实例化对象$book2;
$book2 -> showMe();								//再次调用showMe()方法
echo "<br>";
echo '您是第'.Book::$num.'为访客';				//直接使用类名调用静态变量
?>
</body>
</html>
