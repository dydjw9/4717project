<script language="javascript">
	function rg(form){
		if(form.name.value == '' || form.pwd.value == ''){
			alert('请填写信息');
			return false;
		}
		if(form.pwd.value != form.pwd2.value){
			alert("两次密码不同");
			return false;
		}
	}
</script>
<table border="1" cellpadding="0" cellspacing="0" align="center">
<form id="reg" name="reg" method="post" action="reg_chk.php" onSubmit="return rg(reg)">
	<tr>
		<td colspan="2" align="center" valign="middle" height="25">用户注册</td>
	</tr>
	<tr>
		<td width="75" height="25" align="right">用户名：</td>
		<td align="left"><input id="name" name="name" type="text" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">密码：</td>
		<td align="left"><input id="pwd" name="pwd" type="password" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">确认密码：</td>
		<td align="left"><input id="pwd2" name="pwd2" type="password" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">加密方式：</td>
		<td align="left">
			<select name="method">
				<option value="crypt">crypt加密</option>
				<option value="md5">md5加密</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" height="25" align="center">
			<input type="submit" value="注册" />&nbsp;
			<a href="index.php">登录</a>
		</td>
	</tr>
</form>
</table>