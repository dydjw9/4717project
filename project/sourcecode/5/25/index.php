<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用函数explode()对全国各省汇名称以逗号进行分割</title>
</head>

<body>
<?php
$content = "北京,上海,天津,重庆,河北,山西,辽宁,吉林,黑龙江,江苏,浙江,安徽,福建,江西,山东,河南,湖北,湖南,其他";
$data=explode(",",$content);
for($index=0;$index<count($data);$index++){							//数组循环
echo $data[$index];
echo "</br>";
}
?>
</body>
</html>
