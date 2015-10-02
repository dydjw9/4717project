<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用另一种流程控制的书写格式</title>
</head>
<body>
<?php
	$ss = 2;						//声明变量$ss，赋初值为最小的素数
	$max = 1000;					//声明变量$max，赋值为最大的范围
	$arr = array();					//声明一个数组$arr
	echo $max."以内的素数为：";
	while($ss < $max):				//判断变量是否在允许的范围内
		$boo = false;				//声明一个布尔变量$boo，初值为false
		foreach($arr as $value):		//使用foreach语句遍历$arr数组
			if($ss % $value == 0):	//如果变量$ss 能够被数组元素整除
				$boo = true;		//将布尔变量赋值为true
				break;				//跳出当前循环
			endif;
		endforeach;
		if(!$boo):					//判断变量$boo值
			echo $ss." ";		//如果$boo为假，则说明当前变量$ss为素数，输出素数
			$arr[count($arr)] = $ss;//同时存到数组中
		endif;
		$ss++;		  			//变量$ss加1
	endwhile;						//结束循环
?>

</body>
</html>
