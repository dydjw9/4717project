<?php
	header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
	$link=mysql_connect("localhost","root","root");
	mysql_select_db("db_database23",$link);
	$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
	mysql_query("set names gb2312");
	$username=$_GET[username];
	$sql=mysql_query("select * from tb_user where name='".$username."'");
	$info=mysql_fetch_array($sql);
	if ($info){
		echo "很报歉!用户名[".$username."]已经被注册!";
	}else{
		echo "祝贺您!用户名[".$username."]没有被注册!";
	}
?>
