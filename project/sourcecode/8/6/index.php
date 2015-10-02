<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取单选按钮的值</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<form action="" method="post" name="form1">
性别：
<input name="sex" type="radio" value="男" checked>男
      <input type="radio" name="sex" value="女">女
<input type="submit" name="Submit" value="提交">
</form>
<?php
echo "您选择的性别为：".$_POST["sex"];
?>
</body>
</html>
