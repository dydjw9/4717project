<?php
$time = 1 * 60;									// 设置session失效时间
session_set_cookie_params($time);				// 使用函数
session_start();								// 初始化session
$_SESSION[username] = 'mr';
if ($_SESSION[username] != "")
{
	echo "<a href='session.php'>请点击我查看是否失效！</a>";
}else 
{
	echo "没有设置SESSION";
}
?>