<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to delete items from shopping cart
*/
header('Content-type: text/html;charset=utf-8');        
require_once('conn.php');
require_once("session.php");
$name=$_GET[name];
$value=$_GET[value];
$userid=$_SESSION["userid"];
$itemid=$_SESSION['itemid'];


//$db_info=new PDO($host,$user,$pwd,$dbName);
$cmd_info="update 4717member set $name='$value' where NumID='$userid';";
$result_info=$pdo->prepare($cmd_info);
$result_info->execute();
echo '<script> window.location="../myaccount.php?itemid='.$itemid.'"; </script>';

?>
