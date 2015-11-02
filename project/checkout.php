<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to add item to cart
*/

require_once('session.php');
require_once('conn.php');
require_once('checklogin.php');

if($_SESSION["loginstatus"]==3)
{
	echo "idiot";
	header("location: ../message.php?message=1");

}



if( count($_POST['isselect'])==0)
{
	header("location:../message.php?message=5");
}

$isselect=$_POST['isselect'];
$quantity=$_POST['price'];
$count=count($quantity);


$userid=$_SESSION["userid"];
$pubemail=$_SESSION["pubemail"];
$address=$_SESSION["address"];
$orderarray=array();
$ordercount=0;
$result=null;

$total=0;          //the total value of orders
for($i=0;$i<$count;$i++)
{
	if(empty($isselect[$i]))
		{continue;}
	$date=time();
$orderid=time().rand(100000,999999);

$itemid=$isselect[$i];

$aa=$itemid;
$cmd="SELECT * FROM 4717item where ItemID='$aa';";
$result2=$pdo->prepare($cmd);
$result2->execute();
$res2=$result2->fetch(PDO::FETCH_ASSOC);

$price=$res2[Price];


 $sql="UPDATE 4717cart SET Status='1' where ItemID='".$isselect[$i]."' AND UserID='".$userid."';";

$result.=$sql;
$quan=$quantity[$i];
$singletotal=$price*$quan;
$total+=$singletotal;
$cmd="INSERT INTO 4717order(OrderID,UserID,ItemID,Status,Quantity,Email,Address,Date,Price,Total) 
VALUES ('$orderid','$userid','$itemid','0','$quan','$pubemail','$address','$date','$price','$singletotal');";
echo $cmd; 
$orderarray[$ordercount]=$orderid;
$ordercount++;
$result.=$cmd;

}
$result=$pdo->prepare($result);
$result->execute();
$flag=$result->rowCount();
//echo $result;
$_SESSION["oderid"]=$orderarray;
$_SESSION["totalpayment"]=$total;

if( count($_POST['isselect'])!=0 && $_SESSION["loginstatus"]!=3)
header("location:../payment.php");






?>