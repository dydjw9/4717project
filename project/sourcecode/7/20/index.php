<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用sort()函数对数组进行升序排序</title>
</head>

<body>
<?php
 $array=array(76,32,99,24,8,75);
 $array1=sort($array);   					//用sort()函数对$array数组进行升序排序，并返回新数组$array1
 for($i=0;$i<count($array);$i++){			//应用for循环语句输出数组元素
   echo $array[$i]."&nbsp;&nbsp;";
 }
?>
</body>
</html>
