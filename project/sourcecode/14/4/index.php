<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>构造方法</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
class SportObject{
	public $name;								//定义成员变量
	public $height;								//定义成员变量
	public $avoirdupois;						//定义成员变量
	public $age;								//定义成员变量
	public $sex;								//定义成员变量
	public function __construct($name,$height,$avoirdupois,$age,$sex){				//定义构造方法
		$this->name=$name;						//为成员变量赋值
		$this->height=$height;					//为成员变量赋值
		$this->avoirdupois=$avoirdupois;		//为成员变量赋值
		$this->age=$age;						//为成员变量赋值
		$this->sex=$sex;						//为成员变量赋值
	}
	public function bootFootBall(){				//声明成员方法
		if($this->height<185 and $this->avoirdupois<85){
			return $this->name."，符合踢足球的要求!";			//方法实现的功能
		}else{
			return $this->name."，不符合踢足球的要求!";			//方法实现的功能
		}
	}
}
$sport=new SportObject('明日','185','80','20','男');			//实例化类，并传递参数
echo $sport->bootFootBall();								//执行类中的方法

?>

</body>
</html>
