<?php
	include_once("../config.php");
	$arr = array('computerbook','name' => 'PHP从入门道具精通','unit_price' => array('price' => '￥65.00','unit' => '本'));
	$smarty->assign('title','使用Smarty读取数组');
	$smarty->assign('arr',$arr);
	$smarty->display('02/index.html');
?>