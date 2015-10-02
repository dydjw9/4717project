<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用JavaScript脚本控制输入字符串的长度</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<script language="javascript">
function checkstr(str,digit){ 					//定义checkstr函数实现对用户名长度的限制   
	var n=0; 								//定义变量n,初始值为0
	for(i=0;i<str.length;i++){					//应用for循环语句,获取表单提交用户名字符串的长度
		var leg=str.charCodeAt(i); 			//获取字符的ASCII码值
		if(leg>255){ 						//判断如果长度大于255
		   	n+=2; 						//则表示是汉字为2个字节
		}else {
			n+=1; 						//否则表示是英文字符,为1个字节
		}
	}
	if (n>digit){ 							//判断用户名的总长度如果超过指定长度,则返回true
		return true;
	}else {
		return false; 						//如果用户名的总长度不超过指定长度，则返回false
	}	 	 
}	
</script>
<script language="javascript">
function checkname(){					//定义checkname函数,对表单中提交的数据进行判断
	var name=form1.username.value; 
	if(name==""){						//如果username的值为空
		alert("用户名不能为空");			//则输出"请输入用户名!"
		form1.username.focus();			//返回到该表单
	}
else{
		if(checkstr(name,20)){ 			//应用checkstr函数判断表单中提交的用户名的长度是否合理
			alert("用户名长度不能超过20个字节，请重新输入！");
			form1.username.focus();
		}
	}	
}		
</script>

<body> 
<table width="393" border="1" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF3399"> 
  <form name="form1" method="post" action=""> 
    <tr align="center" bgcolor="#FF99CC"> 
      <td height="24" colspan="2"><span class="style1">用户注册</span></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td width="64" height="24" align="center" class="style1">用户名:</td> 
      <td width="312" height="24"><input name="username" type="text" id="username" size="20" maxlength="50"> 
        <span class="style2">&nbsp;*&nbsp;用户名不能超过20个字节</span></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td height="24" align="center" class="style1">密&nbsp;&nbsp;码:</td> 
      <td height="24"><input name="password" type="password" id="password" size="20" maxlength="50"></td> 
    </tr> 
    <tr bgcolor="#FF99CC"> 
      <td height="24" colspan="2" align="center"><input type="submit" name="Submit" value="注 册" onClick="checkname();"></td> 
    </tr> 
  </form> 
</table> 
</body>
</html>
