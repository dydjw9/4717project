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
</style>
<title>预定义常量（时间日期）</title>
<div align="center">
<?php
/*	使用预定义常量输出不同格式的时间和日期	*/
	echo "DATE_ATOM = ".date(DATE_ATOM);				
	echo "<p>DATE_COOKIE = ".date(DATE_COOKIE);
	echo "<p>DATE_ISO8601 = ".date(DATE_ISO8601);
	echo "<p>DATE_RFC822 = ".date(DATE_RFC822);
	echo "<p>DATE_RFC850 = ".date(DATE_RFC850);
	echo "<p>DATE_RSS = ".date(DATE_RSS);
	echo "<p>DATE_W3C = ".date(DATE_W3C);
?>

</div>