<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用crypt函数进行数据验证</title>
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
</head>
<body>
<div align="center">
<?php
	$conn = mysql_connect("localhost","root","root") or die("数据库链接错误".mysql_error());
	mysql_select_db("db_database15",$conn) or die("数据库访问错误".mysql_error());
	mysql_query("set names gb2312");
?>
  <form id="form1" name="form1" method="post" action="">
    <table border="0" cellpadding="0" cellspacing="0">
      <tr>
			<td width="100" height="30" align="right" valign="middle" scope="col">用户名：</td>
        <td width="100" height="30" align="left" valign="middle" scope="col"><label for="textfield"></label>
        <input name="username" type="text" id="username" size="15" /></td>
        <td width="100" align="center" valign="middle" scope="col"><input type="submit" name="Submit" value="检查" id="Submit" /></td>
      </tr>
    </table>
  </form>
<?php
	if(trim($_POST[username]) != ""){
		$usr = crypt(trim($_POST[username]),"tm");
		$sql = "select * from tb_user where user = '".$usr."'";
		$rst = mysql_query($sql,$conn);
		if(mysql_num_rows($rst) > 0){
			echo "<font color='red'>用户名已存在。</font>";
		}else{
			echo "<font color='green'>恭喜您：用户名可以使用!</font>";
		}
	}
?>
</div>
</body>
</html>
