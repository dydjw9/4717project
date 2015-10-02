<?php
session_start();
include "conn/conn.php"; 
if ($_SESSION[username]==""){
echo "请先登录,才可以发表主题信息!!";
echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
}else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>主题发布</title>
<style type="text/css">
<!--
.style1 {font-size: 13px;
	font-family: "宋体";
	font-weight: normal;
}
body {
	background-color: #EFF3FF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
td{
font-size:9pt;
}
-->
</style>
</head>
<script src="js/zc_check.js" ></script>
<body>
<div align="center"><?  include"head.php";?></div>	
<form name="myform" method="post" action="fbzt_ok.php" enctype="multipart/form-data"  onSubmit="javascript:return fbzt_check();">
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="images/555.gif">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="776" height="30">&nbsp;&nbsp;== 发布主题 == </td>
  </tr>
</table>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="776"><table width="778"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top" background="images/zc1.gif">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td background="images/zc2.gif">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top" background="images/zc3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td width="7" align="center" valign="top" background="images/zc1.gif">&nbsp;</td>
        <td width="225" align="center" valign="top"><table width="88%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
		  <?php 
		  $query="select * from tb_mruser where username='$username'";
		  $result=mysql_query($query);
		  $myrow=mysql_fetch_array($result);
		  $ip=getenv(remote_addr);
		  ?>
            <td align="center"><p>==发帖人信息==</p>
              <p><?php echo $myrow[username];?></p>
			
              <p>我是:<?php echo $myrow[sex];?>生</p>
              <p><?php echo $myrow[email];?></p>
              <p><?php echo $myorw[qq];?></p>
              <p>IP:<?php echo $ip;?></p>
              </td>
          </tr>
        </table></td>
        <td width="7" background="images/zc2.gif" bgcolor="#EFF3FF">&nbsp;</td>
        <td width="530" align="center" valign="top">
		  <table width="88%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="18%" height="30" align="center">类别:</td>
            <td><select name="zq" size="1" id="zq">
              <option value="php" selected>PHP</option>
              <option value="jsp">JSP</option>
              <option value="delphi">Delphi</option>
              <option value="visual basic">Visual Basic</option>
              <option value="visual foxpro">Visual Foxpro</option>
              <option value="visual c++">Visual C++ </option>
              <option value="power">Power Buider</option>
              <option value=".net">.net</option>
              <option value="asp">ASP</option>
            </select></td>
          </tr>
          <tr>
            <td height="30" align="center">主题:</td>
            <td><input name="zhuti" type="text" id="zhuti" size="40" maxlength="80"></td>
          </tr>
          <tr>
            <td height="193" align="center">内容:</td>
            <td align="left" valign="top">              <span class="huise09-20">
              <input name="user" type="hidden" id="user" value="<?php echo $username;?>">
              <textarea name="neirong" cols="50" rows="12" wrap="PHYSICAL" id="neirong"></textarea>
</span></td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="center"><input name="zttj" type="submit" id="zttj" value="提 交">
&nbsp;              <input type="reset" name="Submit" value="重 置">             </td>
            </tr>
		
        </table>		</td>
        <td width="10" align="center" valign="top" background="images/zc3.gif">&nbsp;</td>
      </tr>
    </table>
	</td>
  </tr>
</table>
<table width="776" height="19" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#B2C0EF">
    <td></td>
    </tr>
</table>
</form>
</body>
</html>
<?php }?>