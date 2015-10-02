<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>抽象类</title>
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
</style></head>
<body>
<?php
	abstract class CommodityObject{							//定义抽象类
		abstract function service($getName,$price,$num);	//定义抽象方法
	}
	class MyBook extends CommodityObject{				//定义子类，继承抽象类
		function service($getName,$price,$num){		//定义方法
			echo '您购买的商品是'.$getName.'，该商品的价格是：'.$price.' 元。';
			echo '您购买的数量为：'.$num.' 本。';
			echo '如发现缺页，损坏请在3日内更换。';
		}
	}
	class MyComputer extends CommodityObject{			//定义子类继承父类
		function service($getName,$price,$num){			//定义方法
			echo '您购买的商品是'.$getName.'，该商品的价格是：'.$price.' 元。';
			echo '您购买的数量为：'.$num.' 台。';
			echo '如发生非人为质量问题，请在3个月内更换。';
		}
	}
	$book = new MyBook();					//实例化子类
	$computer = new MyComputer();			//实例化子类
	$book -> service('《PHP从入门到精通》',85,3);	//调用方法
	echo '<p>';
	$computer -> service('XX笔记本',8500,1);		//调用方法
	
	
?>
</body>
</html>
