<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>计算两个时间的差</title>
</head>

<body>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
  <tr>
    <td width="716">距离奥运会开幕还有：<?php 
$date=gmmktime();
$str=gmmktime(0,0,0,8,8,2012);
$str2=$str-$date;
echo ceil($str2/86400);
?>天</td>
  </tr>
</table>
</body>
</html>
