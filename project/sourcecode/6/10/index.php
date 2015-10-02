<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>UBB应用</title>
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
</style>
</head>
<body>
<?php
$url = '[url=http://www.bccd.com/]编程词典网[/url]';
	$color = '[color=red]蓝色[/color]';
	$b = '[b]粗体[/b]';
	$pics = '/dx';
	$string = '超级连接：'.$url;
	$string .= '<br>字体颜色：'.$color;
	$string .= '<br>粗体：'.$b;
	$string .= '<br>贴图: '.$pics;
	
	$rst = '超级连接：'.preg_replace('/\[url=(http:\/\/\w+(\.\w+)+\/.*)\](.*)\[\/url\]/is','<a href=\'$1\'>$3</a>',$url);
	$rst .= '<br>字体颜色：'.preg_replace('/\[color=(.*)\](.*)\[\/color\]/','<font color=\'$1\'>$2</font>',$color);
	$rst .= '<br>粗体：'.preg_replace('/\[b\](.*)\[\/b\]/','<b>$1</b>',$b);
	$rst .= '<br>贴图：'.preg_replace('/\/(dx)/','<img src=\'images/$1.gif\'/>',$pics);
?>
<table border="1" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
<tr>
    	<td align="center"><h3>UBB使用帮助</h3></td>
    <td align="center"><h4>实例效果</h4></td>
    </tr>
    <tr>
    	<td><?php echo $string; ?></td>
        <td><?php echo $rst; ?></td>
    </tr>
</table>
</body>
</html>