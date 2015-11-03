<?php
require 'class-Clockwork.php';
require 'session.php';
require 'conn.php';
require 'mail.php';

$inputcode=$_POST["security"];


$sqlall=null;
$emailall=null;
if($inputcode==$_SESSION["smscode"])
{


foreach ($_SESSION["oderid"] as $key => $value) {
 
 $sql="UPDATE 4717order SET Status='1' where  OrderID='".$value."';";
  $sqlall.=$sql;
  //$cmd="SELECT FROM 4717order SET Status='1' where  OrderID='".$value."';";
  $emailall.='<br>'.$value;
}
$result=$pdo->prepare($sqlall);
$result->execute();
ordermail($_SESSION["pubemail"], $emailall);
echo "dsada";
header("location:../message.php?message=7");






}

else
{
	header("location: ../message.php?message=6");
}


?>