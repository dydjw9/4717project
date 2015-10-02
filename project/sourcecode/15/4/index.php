<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用md5()和sha1()函数进行加密</title>
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
</style></head>
<body>
<div align="center">
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" colspan="2" align="center" valign="middle" scope="col"><?php echo 'md5()和shal()函数的对比效果'; ?></td>
  </tr>
  <tr>
    <td width="200" height="30" align="right" valign="middle"><?php echo '使用md5()函数加密字符串PHPER：' ?></td>
    <td width="200" height="30" align="center" valign="middle"><?php echo md5('PHPER'); ?></td>
  </tr>
  <tr>
    <td width="200" height="30" align="right" valign="middle"><?php echo '使用shal()函数加密字符串PHPER：'; ?></td>
    <td width="200" height="30" align="center" valign="middle"><?php echo sha1('PHPER');  ?></td>
  </tr>
</table>
</div>
</body>
</html>
