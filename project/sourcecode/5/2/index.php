<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>去除字符串左边的空格及特殊字符</title>
</head>

<body>
<?php
$str="  (:@_@  创图书编撰伟业  @_@:)   ";
echo ltrim($str);
echo "<br>";
echo ltrim($str," (:@_@ ");
?>
</body>
</html>
