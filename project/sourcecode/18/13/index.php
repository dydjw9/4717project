<?php session_start();include "conn/conn.php";$furl=getenv("http_referer");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>论坛</title>
<style type="text/css">
<!--
a:link {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style1 {
	font-size: 13px;
	font-family: "宋体";
	font-weight: normal;
}
.style2 {
	font-size: 14px;
	font-family: "宋体";
}
.style3 {
	font-size: 12px;
	font-family: "宋体";
	font-weight: normal;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;
}
td{
font-size:9pt;
}
-->
</style>
<script src="js/zhuce_check.js"></script>
<body>
<table width="773"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><?php include("head.php");?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="style1"><?php include"dljm.php";?></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/55.gif">
      <tr>
        <?php $date=date("Y-m-d H:i:s");?>
        <td height="30">&nbsp;</td>
        <td width="580">
          <span class="style1">&nbsp;当前时间：<?php echo $date;?> </span>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="776" height="60"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/66.gif">
  <?php 
	$query="select * from tb_zqfl where id";
	$result=mysql_query($query);
	echo mysql_error();
	if($result){
	while ($myrow=mysql_fetch_array($result)){
	?>
  <tr>
    <td width="61" height="60" align="right" valign="top"><?php echo "<img src=\"$myrow[tb]\">";?></td>
    <td width="525" height="60" align="center" valign="middle"><table width="100%" height="60"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="33" align="left" valign="middle" class="style1">&nbsp;<img src="images/greendot2.gif" width="11" height="13"><a href="lmzy.php?zq=<?php echo urlencode($myrow[zq]);?>" target="_blank">[<?php echo $myrow[zq];?>]类专区</a></td>
      </tr>
      <tr>
        <td height="27" align="left" valign="middle"><span class="style1">&nbsp;&nbsp;版主:<?php echo $myrow[bz];?></span></td>
      </tr>
    </table></td>
    <td width="180" align="center" valign="middle"><table width="100%" height="60"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" valign="bottom"><span class="style3">&nbsp;创建日期:<?php echo $myrow[cjsj];?></span></td>
      </tr>
	  <tr>
	    <td height="20" valign="middle"><span class="style3">&nbsp;主题总数: 
	<?php 
	  $quer="select count(*)zts from tb_zqlb where zq='$myrow[zq]' ";
	  $resul=mysql_query($quer);
	  $zts=mysql_result($resul,0,"zts");
	  echo $zts;
	  ?></span></td>
      </tr>
      <tr>
        <td height="20" valign="top"><span class="style3">&nbsp;今日主题总数:
	<?php 
	  $jrzt="select count(*)jrzts from tb_zqlb where zq='$myrow[zq]' and fbsj='$date'";
	  $res=mysql_query($jrzt);
	  $jrzts=mysql_result($res,0,"jrzts");
	  echo $jrzts;
	?>	
	</span></td>
      </tr>
    </table></td>
  </tr>
  <?php }
	}?>
</table>

