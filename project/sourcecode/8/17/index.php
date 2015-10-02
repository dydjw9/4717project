<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>输出用户的注册信息</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="606" border="2" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FFCC66">
    <tr align="center" bgcolor="#FFCC00">
      <td height="33" colspan="3"><span class="style1">用户注册</span></td>
    </tr>
    <tr>
      <td width="131" height="24" align="right" bgcolor="#FFFFCC">昵称：</td>
      <td width="284" height="24" align="left" bgcolor="#FFFFFF"><input name="user" type="text" id="user" size="30"></td>
      <td width="165" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[user];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">密码：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="pwd" type="password" id="pwd" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[pwd];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">性别：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="sex" type="radio" value="男" checked>
        男
        <input type="radio" name="sex" value="女">
        女</td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[sex];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">学历：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><select name="select">
        <option value="高中">高中</option>
        <option value="专科">专科</option>
        <option value="本科" selected>本科</option>
        <option value="研究生">研究生</option>
        <option value="博士生">博士生</option>
        <option value="硕士生">硕士生</option>
      </select></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[select];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">联系电话：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[tel];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">E-mail：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[email];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">个人主页：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="homepage" type="text" id="homepage" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[homepage];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">你喜欢：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="like[]" type="checkbox" id="like[]" value="购物">
        购物
        <input name="like[]" type="checkbox" id="like[]" value="上网">
        上网
        <input name="like[]" type="checkbox" id="like[]" value="看电影">
        看电影
        <input name="like[]" type="checkbox" id="like[]" value="旅游">
        旅游</td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php
	  for($i=0;$i<count($_POST[like]);$i++){
		echo $_POST[like][$i]."&nbsp;&nbsp;";
	  }
	 ?>
	  </td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">我的照片：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="photo" type="file" id="photo" size="25"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php 
		$path="./upfiles/".$_FILES[photo][name];
		move_uploaded_file($_FILES[photo][tmp_name],$path);
		echo $path;
	  ?>
      </td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">个人简介：</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><textarea name="instr" cols="35" rows="5" id="instr"></textarea></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $_POST[instr];?></td>
    </tr>
    <tr align="center" bgcolor="#FFCC00">
      <td height="30" colspan="3"><input type="submit" name="Submit" value="注册">
      &nbsp;&nbsp;
      <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
