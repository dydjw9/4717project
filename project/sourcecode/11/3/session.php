<?php
session_start();
if ($_SESSION[username] != "")
echo "请等待Session失效<br>暂时SESSION存在！";
else 
echo "SESSION已经失效";
?>