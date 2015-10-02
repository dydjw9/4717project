<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>对函数的引用</title>
</head>
<body>
<?php
function &example($tmp=0){					//定义一个函数，别忘了加“&”符
	return $tmp;							//返回参数$str
}
$str = &example("看到了");				//声明一个函数的引用$str1;
echo $str."<p>";
?>
</body>
</html>