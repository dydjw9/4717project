<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to add item to cart
*/

require_once('session.php');
require_once('conn.php');
require_once('checklogin.php');
$itemid=$_GET['itemid'];
$_SESSION["itemid"]=$itemid;

$sql="select * from 4717cart where ItemID='".$itemid."' AND UserID='".$_SESSION["userid"]."' And Status='0'";

$result=$pdo->prepare($sql);
$result->execute();
$flag=$result->rowCount();


echo $flag;
echo $sql;



if($flag!=0)
{
	header("location:../message.php?message=3");
}
else
{
$date=time();
 $cartid=time().$itemid.rand(10,99);

$userid=$_SESSION["userid"];
$pubemail=$_SESSION["pubemail"];
$address=$_SESSION["address"];



 $sql="INSERT INTO 4717cart(CartID,UserID,ItemID,Status,Quantity,Email,Address,Date) 
VALUES ('$cartid','$userid','$itemid','0','1','$pubemail','$address','$date');";
	echo $sql;
$result=$pdo->prepare($sql);
$result->execute();

header("location:../message.php?message=4");
}





?>