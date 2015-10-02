<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用Session技术实现聊天室换肤</title>
<style type="text/css">
<!--
.style6 {
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<?php
	$_SESSION[color1]=$_POST[select];
?>	
<body style="background-color:<?php echo $_SESSION[color1];?>">
<table width="1024" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr align="center" valign="middle">
    <td height="80" colspan="2" class="style6">聊天室</td>
  </tr>
  <tr valign="middle">
    <td width="209" height="479" valign="top"><br>
        <span>&nbsp;&nbsp;***进入聊天室,欢迎光临!!</span><br>
&nbsp;&nbsp;<?php echo date("y-m-d h:i:s");?>
</td>
    <td  valign="top"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;在这里显示聊天的内容,希望大家遵守聊天室的规则,不要在聊天室中传播不健康的和非法的内容,谢谢合作! </span></td>
  </tr>
  <tr valign="middle">
    <td height="50" colspan="2"><p><br>
      在这里选择您喜欢的颜色，您的页面也将随即更新！</p>
      <form name="form1" method="post" action="">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请选择您喜欢的风格：</span>
        <select name="select" id="select">
          <option value="green">草绿色</option>
          <option value="yellow">亮黄色</option>
          <option value="white">纯白色</option>
          <option value="red">鲜红色</option>
          <option value="gray">深灰色</option>
          <option value="lavender" selected>熏衣草</option>
          </select>
      <input type="submit" name="Submit" value="提交">
    </form></td>
  </tr>
</table>
</body>
</html>
