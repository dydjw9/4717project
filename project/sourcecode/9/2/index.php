<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>if条件语句</title>
<style type="text/css">
<!--
.style2 {font-size: 12px}
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
}
-->
</style>
</head>
<script language="javascript">
function check(){
var year1=form1.year.value;
//如果变量year能够被4整除，而同时不能被100整除，则执行下面的语句
	if((year1%4)==0 && (year1%100)!=0){
		alert(year1+"年是闰年！");			//如果year变量满足条件，则输出此年份为闰年
	}
}
</script>
<body>
<form name="form1" method="post" action="">
    <span class="style2">检测闰年：</span>  
    <select name="year">
    <option value="2000">2000年</option>
    <option value="2001">2001年</option>
    <option value="2002">2002年</option>
    <option value="2003">2003年</option>
    <option value="2004">2004年</option>
    <option value="2005">2005年</option>
    <option value="2006">2006年</option>
    <option value="2007">2007年</option>
    <option value="2008" selected>2008年</option>
  </select>
  <input type="submit" name="Submit" value="检测" onclick="check();">
</form>
</body>
</html>
