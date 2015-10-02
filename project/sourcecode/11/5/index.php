<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>登录页面</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="328" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100"></td>
  </tr>
  <tr>
    <td height="214" valign="top" background="images/index_01.jpg">
	<form id="form1" name="form1" method="post" action="common.php?<?=session_name(); ?>=<?=session_id(); ?>">
	<table width="100%" height="171" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="200" height="60"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right" class="white12">用户名：</td>
        <td>
            <input name="username" type="text" size="15" />        
        </td>
      </tr>
      <tr>
        <td align="right" class="white12">密&nbsp; 码：</td>
        <td><input name="password" type="password" size="15" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td valign="bottom"><input type="submit" name="Submit" value="登 录" />
          <input type="reset" name="Submit2" value="取 消" /></td>
      </tr>
    </table>
	</form>
	</td>
  </tr>
</table>
</body>
</html>