<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to add item to cart
*/


if($Sloginstatus==0)
{
	header("location:../login.php");
}
if($_SESSION["activate"]==0)
{
	header("location:../message.php?message=1");
}






?>