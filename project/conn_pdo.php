<?php
	header("Content-Type:text/html;charset=utf-8");
	$dbms='mysql';
	$dbName='f32ee';
	$user='f32ee';
	$pwd='f32ee';
	$host='localhost';
	$dsn="$dbms:host=$host;dbname=$dbName";
	try{
		$pdo=new PDO($dsn,$user,$pwd);
		echo"success";
		
	} catch(Exception $e)
	{echo $e->getMessage()."<br>";}

?>