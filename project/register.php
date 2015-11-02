<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to proceed registration
*/

$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$gender=substr($_POST['gender'],0,1);
$birthday=$_POST['birthday'];
$pubemail=$_POST['username'];
$password=$_POST['userpassword'];
$address=$_POST['address'];
$phone=$_POST['handphone'];
$b=str_ireplace("-","",$birthday);


require_once('mail.php'); 
require_once('conn.php');
$username=$pubemail;

//$md5password=md5($password);

$numid=md5(uniqid().$pubemail); 
$password=md5($password);

$cmd="INSERT INTO 4717member(FirstName,LastName,NumID,PubEmail,Address,Password,Gender,Birthday,Activate,phone) 
VALUES ('$firstname','$lastname','$numid','$pubemail','$address','$password','$gender','$b','false','$phone');";
$result=$pdo->prepare($cmd);
$result->execute();

sendmail($pubemail,$numid);
$_SESSION["pubemail"]=$pubemail;
     $_SESSION["password"]=$password;
	$_SESSION["firstname"]=$firstname;
	$_SESSION["activate"]=0;
	 $_SESSION["loginstatus"]=1;
header("location:../message.php?message=0");

?>