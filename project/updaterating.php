<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to delete items from shopping cart
*/
header('Content-type: text/html;charset=utf-8');		
require_once('conn.php');
require_once("session.php");
$rate=$_GET[rate];
$userid=$_SESSION["userid"];
$itemid=$_SESSION['itemid'];


$cmd="SELECT * FROM 4717rating where UserID='$userid' and ItemID='$itemid';";
$db=new mysqli($host,$user,$pwd,$dbName);
$result_cmd=$db->query($cmd);
$count=$result_cmd->num_rows;

$db_check=new mysqli($host,$user,$pwd,$dbName);
$cmd_check="SELECT * FROM 4717order where UserID='$userid' and ItemID='$itemid' and Status='1';";
$result_check=$db_check->query($cmd_check);
$check=$result_check->num_rows;


if ($count==0){
	if ($check==1){
        $sql="insert into 4717rating (ItemID,UserID,Rating) values('$itemid','$userid','$rate')";
        $result=$pdo->prepare($sql);
        $result->execute();
        echo '<script> window.location="../item.php?itemid='.$itemid.'"; </script>';
    }
    else{
    	header("location: ../message.php?message=9");
    }

}
else{
	echo "you already rated for this item";

}

?>
