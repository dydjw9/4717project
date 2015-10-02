<?php
session_start();
$_SESSION[user]=$_POST[user];
$_SESSION[pwd]=$_POST[pwd];
if($_SESSION[user]==""){
  echo "<script language='javascript'>alert('请通过正确的途径登录本系统！');history.back();</script>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../CSS/style.css" rel="stylesheet">
<title>通过SESSION判断用户的操作权限</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body >

<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="258" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center"><TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    <TD  style="WIDTH: 140px; COLOR: red;">当前用户:&nbsp;<?php if($_SESSION[user]=="tsoft" && $_SESSION[pwd]=="111"){echo "管理员";}else{echo "普通用户";}?>&nbsp;&nbsp;</TD>
                    <TD width="70"><a href="#">博客首页</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >我的文章</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >我的相册</a></TD>
                    <TD width="70">|&nbsp;<a href="#">音乐在线</a></TD>
                    <TD width="70">|&nbsp;<a href="#">修改密码</a></TD>
                    <?php
					  if($_SESSION[user]=="tsoft" && $_SESSION[pwd]=="111"){
					?>
                    <TD width="70">|&nbsp;<a href="default.php">用户管理</a></TD>
                    <?php  
					  }
					?>
                </TR>
            </TABLE>
              <br>
              <br>
 女人永远也不知道男人为什么不对她说“我爱你”这3个字?     <br>
 <br>
 <br> <br>
因为他们知道并不是不想说，只是他们自己明白，一万句我爱你用在身上也不够。 <br>
</TD>
          </TR>
      </TABLE>
      欢迎访问博客网 请使用IE 6.0 在1024×768分辨率下浏览本网站&nbsp;<a href="safe.php">注销用户</a></TD>
    </TR> 
</TABLE> 
</body>
</html>
