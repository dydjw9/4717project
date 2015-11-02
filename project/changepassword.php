<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to proceed registration
*/


$password=$_POST['userpassword'];

//require_once('session.php'); 
session_start();
require_once('conn.php');
$username=$pubemail;
$userid=$_SESSION["userid"];
//$md5password=md5($password);

$password=md5($password);
//echo $userid;

$cmd="UPDATE 4717member SET Password='".$password."' where NumID='".$userid."'";
$result=$pdo->prepare($cmd);
$result->execute();
echo $cmd;
header("location:../message.php?message=10");

?>