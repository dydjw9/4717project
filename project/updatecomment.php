<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to delete items from shopping cart
*/
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
require_once("session.php");
$comment=$_POST[comment];
$userid=$_SESSION["userid"];
$itemid=$_SESSION['itemid'];
$firstname=$_SESSION['firstname'];

$db_check=new mysqli($host,$user,$pwd,$dbName);
$cmd_check="SELECT * FROM 4717order where UserID='$userid' and ItemID='$itemid' and Status='1';";
$result_check=$db_check->query($cmd_check);
$check=$result_check->num_rows;



if ($check==0){
	$date=date('d/M/Y');
    $sql="insert into 4717comment (ItemID,UserID,FirstName,Comment,Time) values('$itemid','$userid','$firstname','$comment','$date')";
    $result=$pdo->prepare($sql);
    $result->execute();
    //echo $date;
    //echo $comment;
   header("location: ../message.php?message=");
    }
else{
    	header("location: ../message.php?message=9");
    }
    
