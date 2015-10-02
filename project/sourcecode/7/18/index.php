<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用list()函数和each()函数将存储在数组中的图书名称和作者获取出来</title>
</head>

<body>
<form name="form1" method="post">
     <table width="587" border="1" cellpadding="1" cellspacing="1" bordercolor="#66CC33" bgcolor="#FFFFFF">
       <tr>
         <td width="95" height="30" align="right" bgcolor="#CCFF33">图书名称：</td>
         <td width="479" height="30" bgcolor="#CCFF33">&nbsp;           <input name="图书名称" type="text" class="inputcss" id="图书名称" size="24">
         作者：           <input name="作者" type="text" class="inputcss" id="作者" size="16">
         &nbsp;
         <input name="submit" type="submit"  value="查 询"></td>
       </tr>
  </table>
</form>
<?php
//输出用户登录信息
while(list($name,$value)=each($_POST)){
	if($name!="submit"){
  	  echo "$name=$value<br>";
	}
}
?>
</body>
</html>
