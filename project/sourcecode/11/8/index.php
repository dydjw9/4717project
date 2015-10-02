<?php
session_cache_limiter('private');
$cache_limit = session_cache_limiter();

session_cache_expire(30);
$cache_expire = session_cache_expire();

session_start();
?>
<html>
<head>
<title>Session客户端缓存</title>
</head>
<style type="text/css">
<!--
.black12 {
	font-family: "宋体";
	font-size: 12px;
	line-height: 30px;
	color: #000000;
	text-decoration: none;
}
.red12 {
	font-family: "宋体";
	font-size: 12px;
	line-height: 30px;
	color: red;
	text-decoration: none;
}
-->
</style>

<body>
<table width="502" height="300" border="0" align="center" cellpadding="0" cellspacing="0" background="images/index_01.jpg">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="120">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="black12">缓存限制为 <span class="red12"><?=$cache_limit ?></span></td>
      </tr>
      <tr>
        <td align="center" class="black12">缓存Session页面失效时间在 <span class="red12"><?=$cache_expire ?></span> 分钟之后</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>