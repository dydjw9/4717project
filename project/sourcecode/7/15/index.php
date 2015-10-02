<?php
$array_push = array ("PHP从入门到精通", "PHP范例手册", "PHP范例手册","PHP网络编程自学手册");	//定义数组
array_push ($array_push, "PHP开发典型模块大全","PHP网络编程自学手册");							//添加元素
print_r($array_push);				//输出数组
echo "<br>";
$result=array_unique($array_push);	//删除数组中重复的元素
print_r($result);					//输出删除后的数组
?>
