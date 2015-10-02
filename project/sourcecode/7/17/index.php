<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>声明一个一维数组和一个二维数组，并输出</title>
</head>

<body>
<?php
 $php=array(1=>"I",2=>"Like",3=>"PHP");						//声明一个一维数组
 print_r($php);												//输出一维数组
 echo "<br>";
 $str = array (
     "书籍"=>array ("生活","人与自然","动物世界"),
	 "体育用品"=>array ("m"=>"乒乓球","n"=>"网球","q"=>"高尔夫球"),
	 "水果"=>array ("橙子","葡萄","苹果") );					//声明一个二维数组
 print_r ( $str) ;												//输出二维数组
?>
</body>
</html>

