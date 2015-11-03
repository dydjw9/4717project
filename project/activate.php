<?php
/*
author: Du Jiawei, Yangweitao
project: 4717webdesign
des:this php is to activate an account
*/
require_once('session.php');
$ID=$_GET['ID'];


require_once('conn.php');

$cmd="SELECT * FROM 4717member where NumID='$ID';";
$result=$pdo->prepare($cmd);
$result->execute();
$flag=$result->rowCount();

if($flag==0)
	echo "no such account";
else 
{
	$cmd="UPDATE 4717member SET Activate=1 WHERE NumID='$ID';";
$results=$pdo->prepare($cmd);
$results->execute();
	 echo "</br>login success";
	

$result=$result->fetch(PDO::FETCH_ASSOC);
echo $result[PubEmail];
	$_SESSION["pubemail"]=$result[PubEmail];
     $_SESSION["password"]=$result[Password];
	$_SESSION["firstname"]=$result[FirstName];
	$_SESSION["activate"]='1';
	$_SESSION["loginstatus"]=1;
	header("location:../message.php?message=2");
}
?>