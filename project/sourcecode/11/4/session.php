<?php
session_start();
echo "传送页面时间：" , $_GET[time] , "<br>";
echo date("H:i:s");
echo "<p>";
echo $_SESSION['user'] , "<p>";
?>