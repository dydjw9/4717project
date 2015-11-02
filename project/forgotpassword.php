<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to proceed registration
*/









require_once('mail.php'); 
require_once('conn.php');

$pubemail=$_POST['useremail'];
$sql="select * from 4717member where PubEmail='".$pubemail."'";
$result=$pdo->prepare($sql);
$result->execute();
$flag=$result->rowCount();
if($flag==0)
{

header("location:../message.php?message=11");
}
else 
{$result=$result->fetch(PDO::FETCH_ASSOC);
	$userid=$result[NumID];
	//send email
	//echo $userid;
	changepasswordmail($pubemail,$userid);
	header("location:../message.php?message=12");
}

?>