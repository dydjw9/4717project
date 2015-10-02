<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title> 获取复选框的值</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="index.php">
<table width="506" cellpadding="0" cellspacing="0">
  <tr>
    <td width="462" height="25" align="center" valign="top">
	    您喜欢的图书类型:
	      <input type="checkbox" name="mrbook[]" value="入门类">
	    入门类
	    <input type="checkbox" name="mrbook[]" value="案例类"> 
        案例类
        <input type="checkbox" name="mrbook[]" value="讲解类">
        讲解类
        <input type="checkbox" name="mrbook[]" value="典型实例类">实例类
	  </td>
    <td width="42" align="center" valign="top"><input type="submit" name="submit" value="提交"></td>
  </tr>
</table>
</form>
		<?php
		if(($_POST[mrbook]!= null)){	
			echo "您选择的结果是：";
			for($i = 0;$i<count($_POST[mrbook]);$i++)
				echo $_POST[mrbook][$i]."&nbsp;&nbsp;";		//循环输出用户选择的图书类别
		}
		?>
</body>
</html>
