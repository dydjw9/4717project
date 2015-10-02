<script language="javascript">
function chk(form){
	if(form.name.value == '' || form.pwd.value == ''){
		alert('请输入信息');
		return false;
	}
}
</script>
<table border="1" cellpadding="0" cellspacing="0" align="center">
<form id="lg" name="lg" method="post" action="index_chk.php" onSubmit="return chk(lg)">
  <tr>
  	<td colspan="2" height="25" align="center" valign="middle">用户登录</td>
  </tr>
  <tr>
    <td width="75" height="25" align="right" valign="middle">用户名：</td>
    <td height="25" align="left" valign="middle"><input name="name" type="text" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td height="25" align="right" valign="middle">密码：</td>
    <td height="25" align="left" valign="middle"><input name="pwd" type="password" size="20" maxlength="20"></td>
  </tr>
  <tr>
		<td height="25" align="right">登录方式：</td>
		<td align="left">
			<select name="method">
				<option value="crypt">crypt加密</option>
				<option value="md5">md5加密</option>
			</select>
		</td>
	</tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input type="submit" value="登陆">&nbsp;<a href="reg.php">注册</a></td>
  </tr>
</form>
</table>
