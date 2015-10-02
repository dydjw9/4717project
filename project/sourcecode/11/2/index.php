<?php
date_default_timezone_set("Etc/GMT-8");
if(!isset($_COOKIE["visittime"])){									//如果Cookie不存在
 	setcookie("visittime",date("y-m-d H:i:s")); 					//设置一个Cookie变量
	echo "欢迎您第一次访问网站！"."<br>";							//输出字符串
}else{																//如果Cookie存在
	setcookie("visittime",date("y-m-d H:i:s"),time()+60); 			//设置带Cookie失效时间的变量
    echo "您上次访问网站的时间为：".$_COOKIE["visittime"];			//输出上次访问网站的时间
	echo "<br>";													//输出回车符
}
	echo "您本次访问网站的时间为： ".date("y-m-d H:i:s");			//输出当前的访问时间
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

