<?php
error_reporting(0);
$sess_name = session_name();
$sess_id = $_GET[$sess_name];
session_id($sess_id);
session_save_path('./tmp/');
session_start();
if ($_SESSION['admin'] == "")
{
	echo "<script>alert('对不起，你没有权限');location.href='index.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台管理页面</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="779" height="712" border="0" align="center" cellpadding="0" cellspacing="0" background="images/index_02.jpg">
  <tr>
    <td></td>
  </tr>
</table>
</body>
</html>
