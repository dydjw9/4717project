<?php  session_start();   include "conn/conn.php"; include "submit_checkuser.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户注册</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "宋体";
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;
}
.style2 {
	font-size: 13px;
	font-family: "宋体";
}
.style3 {font-size: 13px;
	font-family: "宋体";
	font-weight: normal;
}
td{
font-size:9pt;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>
<script src="js/zhuce_check.js"></script>
<body>
<div align="center"><?  include"head.php";?></div>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="images/555.gif">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="760" height="30"><span class="style1">&nbsp;== 用户注册信息填写 == </span></td>
  </tr>
</table>
<table width="776"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="13" align="left" valign="top" background="images/zc1.gif">&nbsp;</td>
        <td width="752" align="center"><table width="69%"  border="0" cellpadding="0" cellspacing="0">
          <form name="myform" method="post" action="zc_ok.php" enctype="multipart/form-data" onSubmit="javascript: return checkit(this);">
            <tr>
              <td width="18%" rowspan="2" align="center" valign="bottom"><span class="style2">用 户 名:</span></td>
              <td height="16" valign="bottom"><?php echo $ycyh;?></td>
            </tr>
            <tr>
              <td height="16" valign="bottom"><input name="zc_username" type="text" id="zc_username" size="20" maxlength="20" value="<?php echo $zc_username;?>">
        * <a href="javascript:{user_check(myform);}" class="style2" ><font color="#FF0000">检测帐号</font></a></td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">真实姓名:</td>
              <td><input name="zsxm" type="text" id="zsxm" size="20" maxlength="10">
        *</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">密&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
              <td><input name="zc_password" type="password" id="zc_password" size="20" maxlength="30">
        *</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">密码确认:</td>
              <td><input name="mmqr" type="password" id="mmqr" size="20" maxlength="30">
        *</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">性&nbsp;&nbsp;&nbsp;&nbsp;别:</td>
              <td class="style2"><input name="sex" type="radio" value="男" checked>
        男
          <input type="radio" name="sex" value="女">
        女</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">生&nbsp;&nbsp;&nbsp;&nbsp;日:</td>
              <td><input name="shengri" type="text" id="shengri" size="20" maxlength="20">
        (格式为：yyyy-mm-dd)</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">联系电话:</td>
              <td><input name="lxdh" type="text" id="lxdh" size="20" maxlength="20">
        *</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">OICQ号:</td>
              <td><input name="qq" type="text" id="qq" size="20" maxlength="20"></td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">Email:</td>
              <td><input name="email" type="text" id="email" size="40" maxlength="50">
        *</td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">个人主页:</td>
              <td><input name="grzy" type="text" id="grzy" size="40" maxlength="50"></td>
            </tr>
            <tr>
              <td height="28" align="center" class="style2">联系地址:</td>
              <td><input name="lxdz" type="text" id="lxdz" size="40" maxlength="100">
        *</td>
            </tr>
            <tr>
              <td height="34" align="center">&nbsp;</td>
              <td class="style2"><input name="qrtj" type="submit" id="qrtj" value="提交">
                  <input type="reset" name="Submit2" value="重置"></td>
            </tr>
          </form>
        </table></td>
        <td width="11" align="right" valign="top" background="images/zc3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" colspan="4" align="center" valign="top"><img src="images/zc5.gif" width="776" height="10"></td>
      </tr>
</table>
</body>
</html>
