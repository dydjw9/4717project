<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to comfirm the username is not occupied
*/
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
$username=$_GET[username];
$sql="select * from 4717member where PubEmail='".$username."'";

$result=$pdo->prepare($sql);
$result->execute();
$flag=$result->rowCount();

if ($flag!=0){
		echo "Sorry".$username."has been used!";
	
	}else{
		echo "ok";
	}

?>
