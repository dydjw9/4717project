<?php
$path = './tmp/';							// 设置session存储路径
session_save_path($path);					
session_start();							// 初始化session
$_SESSION[username] = true;
echo "Session文件名称为：sess_" , session_id();
?>