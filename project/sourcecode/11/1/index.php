<?php
setcookie("TMCookie",'www.mrbccd.com');
setcookie("TMCookie", 'www.mrbccd.com', time()+60);    	  //设置cookie有效时间为60秒
//设置有效时间为60秒，有效目录为“/tm/”,有效域名为“mrbccd.com”及其所有子域名
setcookie("TMCookie", $value, time()+3600, "/tm/",". mrbccd.com", 1); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script language="javascript" src="datetime.js"></script>
<?php
date_default_timezone_set("Etc/GMT-8");
echo "<br>当前时间：" , date("Y-m-d H:i:s") , "<br>";
echo $_COOKIE['TMCookie'];
?>
