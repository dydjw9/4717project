<?php
/*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to connect to database. Class debug is also in here
*/

	header("Content-Type:text/html;charset=utf-8");

	error_reporting(E_ALL^E_NOTICE^E_WARNING);

	$dbms='mysql';
	$dbName='f32ee';

/*
	$user='f32ee';
	$pwd='f32ee';
	$host='localhost';

*/
	$user='b39729e4805366';
	$pwd='f49ac655';
	$host='ap-cdbr-azure-southeast-a.cloudapp.net';


	$dsn="$dbms:host=$host;dbname=$dbName";





	try{
		$pdo=new PDO($dsn,$user,$pwd);
	
		
	} catch(Exception $e)
	{echo $e->getMessage()."<br>";}


	class debug
	{
		var $isdebug;
		public function __construct($is)
		{
			$this->isdebug=$is;
		}
		function debugprint($name,$variable)
		{
			if($this->isdebug)
			{
			echo "</br>$name current value is $variable";
		 	}

		}
	}
	$debug=new debug(true);

?>