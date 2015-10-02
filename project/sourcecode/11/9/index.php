<?php
function _session_open($save_path,$session_name)
{
	global $handle;
	$handle = mysql_connect('localhost','root','root') or die('数据库连接失败');		// 连接MYSQL数据库
	mysql_select_db('db_database11',$handle) or die('数据库中没有此库名');				// 找到数据库
	return(true);
}

function _session_close()
{
	global $handle;
	mysql_close($handle);
	return(true);
}

function _session_read($key)
{
	global $handle;							// 全局变量$handle 连接数据库
	$time = time();							// 设定当前时间
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
	$result = mysql_query($sql,$handle);
	$row = mysql_fetch_array($result);
	if ($row)
	{
		return($row['session_data']);			// 返回Session名称及内容
	}else
	{
		return(false);
	}
}

function _session_write($key,$data)
{
	global $handle;
	$time = 60*60;										// 设置失效时间
	$lapse_time = time() + $time;						// 得到Unix时间戳
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
	$result = mysql_query($sql,$handle);
	if (mysql_num_rows($result) == 0 )				// 没有结果
	{
		$sql = "insert into tb_session values('$key','$data',$lapse_time)";		// 插入数据库sql语句
		$result = mysql_query($sql,$handle);
	}else
	{
		$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";												// 修改数据库sql语句
		$result = mysql_query($sql,$handle);
	}
	return($result);
}

function _session_destroy($key)
{
	global $handle;
	$sql = "delete from tb_session where session_key = '$key'";					// 删除数据库sql语句
	$result = mysql_query($sql,$handle);
	return($result);
}

function _session_gc($expiry_time)
{
	global $handle;
	$lapse_time = time();									// 将参数$expiry_time赋值为当前时间戳
	$sql = "delete from tb_session where expiry_time < $lapse_time";	// 删除数据库sql语句
	$result = mysql_query($sql,$handle);
	return($result);
}

session_set_save_handler('_session_open','_session_close','_session_read','_session_write','_session_destroy','_session_gc');

session_start();

$_SESSION['user'] = 'mr';
$_SESSION['pwd'] = 'mrsoft';
?>