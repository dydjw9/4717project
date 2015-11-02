<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to start session
*/

require_once('session.php');
require_once('conn.php');
require_once('checklogin.php');


$orderid=$_GET["orderid"];
$_SESSION["oderid"]=array(0=>$orderid);
$sql="select * from 4717order where orderID='".$orderid."'";

$result=$pdo->prepare($sql);
$result->execute();
$res2=$result->fetch(PDO::FETCH_ASSOC);
echo $sql;
$_SESSION["totalpayment"]=$res2[Total];
echo $res2[Total];
header("location:../payment.php");
?>