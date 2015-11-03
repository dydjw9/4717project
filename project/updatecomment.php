<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to delete items from shopping cart
*/
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
require_once("session.php");
if($Sloginstatus==0)
{
	header("location:../login.php");
}
else {

$comment=$_POST[comment];
$userid=$_SESSION["userid"];
$itemid=$_SESSION['itemid'];
$firstname=$_SESSION['firstname'];

$cmd="SELECT * FROM 4717order where UserID='$userid' and ItemID='$itemid' and Status='1';";

$result=$pdo->prepare($cmd);
$result->execute();
$flag=$result->rowCount();


if ($flag!=0){
	$date=date('d/M/Y');
    $sql="insert into 4717comment (ItemID,UserID,FirstName,Comment,Time) values('$itemid','$userid','$firstname','$comment','$date')";
    $result=$pdo->prepare($sql);
    $result->execute();
   
   header("location: ../item.php?itemid=$itemid");
    }
else{
    	header("location: ../message.php?message=9");
    }
}
?>