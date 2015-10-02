<?php session_start(); include "conn/conn.php";  if($page==""){$page=1;}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>论坛</title>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {
	font-size: 13px;
	font-family: "宋体";
}
.style2 {
	font-size: 12px;
	font-family: "宋体";
}
.style3 {font-size: 13px;
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
</head>
<body>
<center>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="center" valign="middle">
      <td colspan="3"><?php include "head.php";?></td>
    </tr>
    <tr>
      <td width="109" height="25" background="images/2.gif">&nbsp;</td>
      <td width="531" align="right" valign="middle" background="images/2.gif">
      欢迎登录本站！ &nbsp;&nbsp;<?php echo $date;?>
      </td>
      <td width="136" background="images/2.gif">&nbsp;</td>
    </tr>
</table>
  <center>
<table width="776" height="139" border="0" align="center" cellpadding="0" cellspacing="0" background="images/6.gif">
  <tr>
      <td width="776" height="30"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;原主题：『<?php echo $zhuti;?>』</span></td>
  </tr>
  <tr>
      <td height="109" colspan="3" align="left" valign="top">
	     <table width="100%" height="109"  border="0" cellpadding="0" cellspacing="0">
<?php $query="select * from tb_zqlb where zhuti='$zhuti'";
	   $result=mysql_query($query);
	   $ztrow=mysql_fetch_array($result);
?>
<tr>
<?php
	   $update="update tb_zqlb set fwjl=fwjl+1 where id='$lmbs'"; 
	   $result=mysql_query($update);
	   $query="select * from tb_mruser where username='$ztrow[username]'";
	   $result=mysql_query($query);
	   $row=mysql_fetch_array($result);
?>
               <td width="136" height="109" align="left" valign="top">
                  <table width="136" height="91" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                       <td height="24" align="center" valign="middle" class="style1"><?php echo $ztrow[username];?></td>
                    </tr>
                    <tr>
                       <td height="67" align="center" valign="middle" class="style1">我是:<?php echo $row[sex];?>生</td>
                    </tr>
          </table>	      </td>
               <td width="1">&nbsp;</td>
               <td width="643" align="left" valign="top"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
                 <tr>
                   <td width="78%" height="24" class="style1"> 发表时间：<?php echo $ztrow[fbsj];?></td>
                   <td width="22%" class="style1">&nbsp;<a href="hftj.php?zhuti=<?php echo urlencode($zhuti);?>&lmbs=<?php echo $lmbs;?>">回复</a>&nbsp;
                       <?php if($_SESSION[fig]=="1"){?>
                       <a href="del_zhuti.php?id=<?php echo $ztrow[id];?>">删除</a>
                       <?php }?></td>
                 </tr>
                 <tr>
                   <td height="3" colspan="2">&nbsp;</td>
                 </tr>
                 <tr>
                   <td colspan="2" class="style2">&nbsp;&nbsp;<?php echo $ztrow[neirong];?>&nbsp;</td>
                 </tr>
               </table></td>
 </tr>
    </table></td>
  </tr>
</table>
<?php	
             if($page){
			    $page_size=2;
				$quer="select count(*) as total from tb_hflb where ljid='$lmbs'";
				$resul=mysql_query($quer);
				$message_count=mysql_result($resul,0,'total');
				$page_count=ceil($message_count/$page_size);
				$offset=($page-1)*$page_size;
				$quer="select * from tb_hflb where ljid='$lmbs' order by id desc limit $offset ,$page_size";
				$resul=mysql_query($quer);
				while($myrow=mysql_fetch_array($resul)){
	  ?>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" colspan="3" valign="middle" background="images/5.gif" class="style1"> &nbsp;&nbsp;回 复:<?php echo $myrow[hfzt];?></td>
  </tr>
  <tr>
    <td height="83" align="left" valign="top"><table width="776" height="83" border="0" cellpadding="0" cellspacing="0" background="images/7.gif">
	  <tr>
        <td width="136" height="83" align="center" valign="top"><table width="136" height="24" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24" align="center" valign="middle" class="style1"><?php echo $myrow[username];?>
             </td>
          </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="80%" height="24" class="style1">&nbsp;发表时间：<?php echo $myrow[hfsj];?></td>
            <td width="20%" align="center"><span class="style1"><?php if($_SESSION[fig]=="1"){?><a href="del_huifu.php?id=<?php echo $myrow[id];?>">删除</a><?php }?>
            </span></td>
          </tr>
          <tr>
            <td height="3" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="style2">&nbsp;&nbsp;<?php echo $myrow[hfnr];?>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }
}?>
<table width="776" height="40" border="0" align="center" cellpadding="0" cellspacing="0" background="images/4.gif">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">
              <table width="776" height="19" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#B2C0EF">
                  <td width="26%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页 记录：<?php echo $message_count;?> 条&nbsp;</td>
                  <td width="74%" align="right" class="hongse01">
                    <?php
				  if($page!=1){
				     echo  "<a href=zthf.php?page=1&lmbs=".$lmbs."&zhuti=".$zhuti.">首页</a>&nbsp;";
					 echo "<a href=zthf.php?page=".($page-1)."&lmbs=".$lmbs."&zhuti=".$zhuti.">上一页</a>&nbsp;";
				   }
				  if($page<$page_count){
				      echo "<a href=zthf.php?page=".($page+1)."&lmbs=".$lmbs."&zhuti=".$zhuti.">下一页</a>&nbsp;";
				      echo  "<a href=zthf.php?page=".$page_count."&lmbs=".$lmbs."&zhuti=".$zhuti.">尾页</a>";
				   }
				?>
&nbsp;&nbsp;&nbsp; </td>
                </tr>
</table>	</td>
  </tr>
</table>

