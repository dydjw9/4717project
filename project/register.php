<?php
$lastname=$_GET['lastname'];
$firstname=$_GET['firstname'];
$gender=substr($_GET['gender'],0,1);
$birthday=$_GET['birthday'];
$pubemail=$_GET['username'];
$pwd=$_GET['userpassword'];
$priemail=$_GET['address'];
$b=str_ireplace("-","",$birthday);
require_once('conn.php');

$numid=md5(uniqid().$pubemail); 
echo "</br>id is ".$numid; 
$cmd="INSERT INTO TMem(FirstName,LastName,NumID,PubEmail,PriEmail,Pwd,gender,birthday) 
VALUES ('$firstname','$lastname','$numid','$pubemail','$priemail','$pwd','$gender','$b');";
echo "</br>cmd is".$cmd;
mysql_query($cmd,$link);
	mysql_close($link);
?>