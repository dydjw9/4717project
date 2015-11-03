<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to start session
*/

$time=20*60;
session_set_cookie_params($time);
session_start();

if(empty($_SESSION["loginstatus"]))
{
	$_SESSION["pubemail"]=null;
	$_SESSION["password"]=null;

$_SESSION["loginstatus"]=0;
$_SESSION["userid"]=null;
$_SESSION["firstname"]=null;
$_SESSION["activate"]=1;
$_SESSION["itemid"]=null;
$_SESSION["address"]=null;
$_SESSION["oderid"]=array();
$_SESSION["totalpayment"]=null;
$_SESSION["smscode"]=null;
$_SESSION["phone"]=null;

}

$Spubemail=$_SESSION["pubemail"];
$Spassword=$_SESSION["password"];

$Sloginstatus=$_SESSION["loginstatus"];

$Sfirstname=$_SESSION["firstname"];
$Sactivate=$_SESSION["activate"];




?>