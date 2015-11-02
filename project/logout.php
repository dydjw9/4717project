<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to logout.
*/

session_start();
/*
if(empty($_SESSION["loginstatus"]))
{
	$_SESSION["pubemail"]=null;
	$_SESSION["password"]=null;

$_SESSION["loginstatus"]=0;

$_SESSION["firstname"]=null;
$_SESSION["activate"]=null;

}

$Spubemail=$_SESSION["pubemail"];
$Spassword=$_SESSION["password"];

$Sloginstatus=$_SESSION["loginstatus"];

$Sfirstname=$_SESSION["firstname"];
$Sactivate=$_SESSION["activate"];
*/
$_SESSION["loginstatus"]=0;

	$_SESSION["pubemail"]=null;
	$_SESSION["password"]=null;

$_SESSION["loginstatus"]=0;
$_SESSION["userid"]=null;
$_SESSION["firstname"]=null;
$_SESSION["activate"]=null;
$_SESSION["itemid"]=null;
$_SESSION["address"]=null;
$_SESSION["oderid"]=array();
$_SESSION["totalpayment"]=null;
$_SESSION["smscode"]=null;
$_SESSION["phone"]=null;


header("location:../index.php");
?>