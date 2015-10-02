<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>elseif控制语句</title>
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
<div align="center">
<?php
	$moth = date("n");								//设置月份变量$moth
	$today = date("j");								//设置日期变量$today
	if ($today >= 1 and $today <= 10){				//判断日期变量是否在1-10之间
		echo "今天是".$moth."月上旬".$today."日";	//如果是，说明是上旬
	}elseif($today > 10 and $today <= 20){			//否则判断日期变量是否在11-20之间
		echo "今天是".$moth."月中旬".$today."日";	//如果是，说明是中旬
	}else{											//如果两个判断都是false，则输出默认值
		echo "今天是".$moth."月下旬".$today."日";	//说明是本月的下旬
	}
?>

</div>
</body>
</html>
