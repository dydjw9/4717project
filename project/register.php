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
mysql_select_db(f32ee);
$cmd="INSERT INTO TMem(FirstName,LastName,NumID,PubEmail,PriEmail,Pwd,gender,birthdate) 
VALUES ('$firstname','$lastname','$b','$pubemail','$priemail','$pwd','$gender','$b');";
echo "</br>".$cmd;
mysql_query($cmd,$link);
	mysql_close($link);
?>