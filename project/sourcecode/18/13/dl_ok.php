<?php
session_start();
include "conn/conn.php";$furl=getenv("HTTP_REFERER");?>
<?php 
       $query="select lxdz,fig from tb_mruser where username='$username' and password='$password'";
       $result=mysql_query($query);
	   $info=mysql_fetch_array($result);
if ($result) {
   if (mysql_num_rows($result)!=0){
       $dljf=mysql_result($result,0,"lxdz"); 
  	   session_register("username");
       session_register("password");
       session_register("lxdz");	
	   $_SESSION[fig]=$info[fig];
	   $_SESSION[username]=$username;
       echo "<font class=\"#ff0000\">$username.恭喜您登录成功！</font>";
       echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">2秒钟转入前页,请稍等....";
			 }else{
			 echo "您输入的用户ID<b>$username</b>不正确或不存在...";
			 echo "<meta http_equiv=\"refresh\" content=\"3;url=$furl\">3秒后转入前页....";
			 }
			} 
			 else{
			 echo mysql_error;
			 echo "<font class=\"#ff0000\">登录失败!!!</font>" ;
		 }
?>
