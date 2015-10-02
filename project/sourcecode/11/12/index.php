<?php
class Session
{
	private $db;				// 设置数据库变量
	private $expiry = 3600;		// 设置Session失效时间	
	
	public function Session()
	{
		session_set_save_handler(array(& $this,'_session_open'),
								array(& $this,'_session_close'),
								array(& $this,'_session_read'),
								array(& $this,'_session_write'),
								array(& $this,'_session_destroy'),
								array(& $this,'_session_gc')
		);	
	}	
	
	public function _session_open($save_path,$session_name)
	{
		$this->db = mysql_connect('localhost','root','root') or die ("数据库连接失败！");
		mysql_select_db("db_database11",$this->db);
		return(true);
	}
	
	public function _session_close()
	{
		mysql_close($this->db);
		return(true);
	}
	
	public function _session_read($key)
	{
		$time = time();							// 设定当前时间
		$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
		$result = mysql_query($sql,$this->db);
		$row = mysql_fetch_array($result);
		if ($row)
		{
			return($row['session_data']);			// 返回Session名称及内容
		}else
		{
			return(false);
		}
	}
	
	public function _session_write($key,$data)
	{
		$lapse_time = time() + $this->time;					// 得到Unix时间戳
		$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
		$result = mysql_query($sql,$this->db);
		if (mysql_num_rows($result) == 0 )				// 没有结果
		{
			$sql = "insert into tb_session values('$key','$data',$lapse_time)";		// 插入数据库sql语句
			$result = mysql_query($sql,$this->db);
		}else
		{
			$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";												// 修改数据库sql语句
			$result = mysql_query($sql,$this->db);
		}
		return($result);
	}
	
	public function _session_destroy($key)
	{
		$sql = "delete from tb_session where session_key = '$key'";					// 删除数据库sql语句
		$result = mysql_query($sql,$this->db);
		return($result);
	}
	
	public function _session_gc($expiry_time)
	{
		$expiry_time = time();									// 将参数$expiry_time赋值为当前时间戳
		$sql = "delete from tb_session where expiry_time < $expiry_time";	// 删除数据库sql语句
		$result = mysql_query($sql,$this->db);
		return($result);
	}
}
$_session_new = new Session();
session_start();

$_SESSION['SID'] = true;
?>