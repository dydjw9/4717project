<?php session_start();include "conn/conn.php";include "function.php";$furl=getenv("HTTP_REFERER");?>
<?php 
if($qrtj=="提交"){
	$username=htmlspecialchars($zc_username);
	$username=ereg_replace(' ','',$username);
	$password=htmlspecialchars($zc_password);
    $password=ereg_replace(' ','',$password);
	$key = htmlspecialchars($username);
    $txt = htmlspecialchars($password);
	$query="select * from tb_mruser where username='$username'";
	$result=mysql_query($query);
	 if(mysql_num_rows($result)>0){
	     echo "<font class='red'>".$zc_username."已经被注册!!</font>";
   		 echo "<meta http-equiv=\"Refresh\" content=\"3;url=$furl\">3秒钟转入注册页,请稍等...";
	 }else{
	     $password=$_POST[zc_password];
		 $lxdh=$_POST[lxdh];
		 $lxdz=$_POST[lxdz];
	$query="insert into tb_mruser (username,zsxm,password,sex,shengri,lxdh,qq,email,grzy,lxdz)values
	 ('$username','$zsxm','$password','$sex','$shengri','$lxdh','$qq','$email','$grzy','$lxdz')";
	 $result=mysql_query($query);
	 if($result){
	 session_register(username);
	 session_register(password);
	 $_SESSION[fig]=$result[fig];
	  echo "<font class=\"red\">您注册的信息如下！</font><br>";
			   echo "<li class=\"huise03\">用户名:<font color=red>".$username."<br>";
			   echo "<li class=\"huise03\">E-Mail:<font color=red>".$email."<br>";
			   echo "<li class=\"huise03\"><font color=red>".$zc_username."</font>恭喜您注册成功！";
			   echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">5秒钟转入主页,请稍等...";
	 }else{
	 echo mysql_error();
	 echo "<font class='#ff0000'>注册失败!!!</font>";
	 }
	 }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
