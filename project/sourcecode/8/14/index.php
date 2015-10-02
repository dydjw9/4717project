<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在表单中添加各个常用的元素</title>
</head>

<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
  <table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
    <tr bgcolor="#993399">
      <td width="103" height="25" align="right" bgcolor="#FFFFFF">姓名：</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
    </tr>
   <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">性别：</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="sex" type="radio" value="男" checked>
        男
        <input type="radio" name="sex" value="女">
      女</td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">地址：</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><select name="address" id="address">
        <option value="长春市" selected>长春市</option>
        <option value="吉林市">吉林市</option>
        <option value="通化市">通化市</option>
        <option value="松源市">松源市</option>
        <option value="四平市">四平市</option>
        <option value="其他">其他</option>
      </select></td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">爱好：</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="fond[]" type="checkbox" id="fond[]" value="上网">
      上网
        <input name="fond[]" type="checkbox" id="fond[]" value="音乐">
      音乐
      <input name="fond[]" type="checkbox" id="fond[]" value="游泳">
      游泳
      <input name="fond[]" type="checkbox" id="fond[]" value="读书">
      读书</td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">本人照片：      </td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="photo" type="file" size="25" maxlength="1000" id="photo"></td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">工作经验：      </td>
      <td height="25" align="left" bgcolor="#FFFFCC"><textarea name="intro" cols="35" rows="4" id="intro"></textarea></td>
    </tr>
    <tr align="center" bgcolor="#CCFF66">
      <td height="25" colspan="2"><input type="submit" name="submit" value="提交">
      &nbsp;&nbsp;
      <input type="reset" name="submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
