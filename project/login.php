<?php
session_start();
$pubemail=$_GET['username'];
$pwd=$_GET['userpassword'];

require_once('conn.php');

$cmd="SELECT * FROM TMem where PubEmail='$pubemail';";


$sql=mysql_query($cmd,$link);
$result=mysql_fetch_array($sql);
if($result==false)
	echo "failed";
else if($pwd==$result[Pwd])
{
	$_SESSION["pubemail"]=$pubemail;
     $_SESSION["pwd"]=$pwd;
	 echo "</br>login success";
	 echo "</br>".$_SESSION["pwd"];
}
	mysql_close($link);
?>