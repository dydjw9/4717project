<?php
	include_once "func.php";
	if($_POST['name'] != "tm"){
		$tm -> refurbish('用户名错误');
	}else{
		$tm -> skipachange('尊贵的用户，欢迎您的光临','main.php');
	}
?>