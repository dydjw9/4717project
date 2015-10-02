<?php
session_start();
$time = 1 * 60;															// 给出session失效时间
setcookie(session_name(),session_id(),time()+$time,"/");				// 使用setcookie手动设置session失效时间
$_SESSION['user'] = "mr";
$expiry = date("H:i:s");
if (!empty($_SESSION))
{
	echo "<a href='session.php?time=$expiry'>存在SESSION请点击我！</a>";
}else
{
	echo "SESSION不存在";
}
?>
