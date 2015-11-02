<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to delete items from shopping cart
*/
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
require_once("session.php");
$order=$_GET["nth_order"];

$userid=$_SESSION["userid"];

$sql="select * from 4717cart where ItemID='$order' AND Status='0' AND UserID='$userid'";

$result=$pdo->prepare($sql);
$result->execute();
$res=$result->fetch(PDO::FETCH_ASSOC);
$cartid= $res[CartID];

$cmd="UPDATE 4717cart SET Status='1' where CartID='$cartid';";
$result2=$pdo->prepare($cmd);
$result2->execute();
//echo $cmd;
//echo'<script> window.location="../myaccount.php"; </script> ';
header("location: ../myaccount.php");
?>
