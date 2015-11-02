<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to proceed the request of login
*/



require_once('conn.php');  //connect to db
require_once('session.php');
     //start session

$pubemail=$_POST['username'];   
$password=$_POST['userpassword'];         //get user & pwd

$password=md5($password);

$cmd="SELECT * FROM 4717member where PubEmail='$pubemail';";    //sql commend

$result=$pdo->prepare($cmd);
$result->execute();
$flag=$result->rowCount();
//if($result==false)
if($flag==0)
	{echo "failed";
$_SESSION["loginstatus"]=2;
header("location:../login.php");

//$debug->debugprint('sql comment',$cmd);

}

else 
	{ $result=$result->fetch(PDO::FETCH_ASSOC);
		if($password==$result[Password])
{
	$_SESSION["pubemail"]=$pubemail;
     $_SESSION["password"]=$password;
	$_SESSION["firstname"]=$result[FirstName];
	$_SESSION["activate"]=$result[Activate];
	$_SESSION["userid"]=$result[NumID];
	$_SESSION["address"]=$result[Address];
	 echo "</br>login success";
	 $_SESSION["loginstatus"]=1;
//header("location:../index.php");
	if($result[Activate]==0)
		{
			echo "you need activate";
	$_SESSION["loginstatus"]=3;
	header("location: ../message.php?message=1");
	}
	else 
	{
		header("location:../index.php");
	}
}
 else {echo "password error";
$debug->debugprint("true password ",$result[Password]);
$debug->debugprint("input password ",$password);

	
$_SESSION["loginstatus"]=2;
	header("location:../login.php");     //0, no attempt to login
												//1,login success
												// 2, account or pwd error 3, not activate

}
	
	
	}
?>