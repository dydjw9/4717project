<?php date_default_timezone_set("Etc/GMT-8"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>计算两个时间的差</title>
</head>

<body>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
  <tr>
    <td width="716">距离下班时间还有<?php 
$dateY=date("Y");
$datem=date("m");
$dated=date("d");
$dates1=mktime(17,10,0,$datem,$dated,$dateY);
$dates2=mktime();
$dates3=$dates1-$dates2;
echo ceil($dates3/3600);
?>小时。</td>
  </tr>
</table>
</body>
</html>
