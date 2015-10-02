<?php
	include_once("conn/system.inc.php");
	$title=$_POST[txt_title];
	$content=$_POST[txt_content];
	$createtime=date("Y-m-d H:i:s");
	$result=$admindb->ExecSQL("insert into tb_affiche(title,content,createtime)values('$title','$content','$createtime')",$conn);
	if($result){
		echo "<script>alert('公告信息添加成功!');window.location.href='add_affiche.php';</script>";	
	}else{
		echo "<script>alert('公告信息添加失败!');window.location.href='add_affiche.php';</script>";
	}
?>
