<?php
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$meth = $_POST['method'];
	$key = 'tomorrow';
	if($name != '' and $pwd != ''){
	  $conn = mysql_connect("localhost","root","root") or die("数据库链接错误".mysql_error());
	  mysql_select_db("db_database15",$conn) or die("数据库访问错误".mysql_error());
	  mysql_query("set names gb2312");
	  if($meth == "crypt"){
	  	$pwd = crypt(trim($pwd),$key);
	  }else{
	  	$pwd = md5($pwd);
	  }
	  $sql = "insert into tb_user(user,password) values('".$name."','".$pwd."')";
	  $rst = mysql_query($sql,$conn);
	  if($rst){
	  	echo "<script>alert('添加成功，请登录');location='index.php';</script>";
	  }else{
		echo "<script>alert('添加失败');history.go(-1);</script>";
	  }
	}
?>