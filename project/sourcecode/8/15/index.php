<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取搜索引擎的关键字</title>
</head>

<body>
<form name="form1" method="post" action="">
  查询关键字：
  <input name="content" type="text" id="content">
  <input type="submit" name="Submit" value="搜索">
</form>
<?php
echo"您输入的关键字是：";
echo $_POST[content];
?>
</body>
</html>
