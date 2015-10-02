<?php
session_start();
if($_COOKIE['cookie1']!=''){	  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="refresh" content="10;url=study.php">
<title>使用COOKIE限制用户访问网站的时间</title>
<style type="text/css">
<!--
.style1 {
	font-size: 25px;
	font-family: "华文行楷";
}
-->
</style></head>

<body>
<table width="392" height="178" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
  <tr>
    <td height="176" align="center">&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="style1">
    <p>用户您好</p></span>    <p> &nbsp;&nbsp;&nbsp; 您当前使用的是“试用版学习资源网”，主要应用COOKIE实现对网站访问时间的限制，当浏览者在网站中停留的时间超过网站规定的访问时间时，将自动跳转到登录页面，只有重新登录才可以继续访问 </p>      <p class="style1">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
}else{ 
	echo "您在本网站停留的时间已经超过我们限制的时间,系统将在5秒钟后退出登录!!谢谢!请稍等...";
	echo "<meta http-equiv=\"Refresh\" content=\"5;url=index.php\">";
}
?>