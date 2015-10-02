<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>对URL传递的参数进行解码</title>
</head>

<body>
    <a href="index.php?id=<?php echo urlencode("编程词典");?>">PHP编程词典</a>
	<?php echo "您提交的查询字符串的内容是:".urldecode($_GET[id]);?>
</body>
</html>
