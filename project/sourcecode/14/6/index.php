<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>继承的实现</title>
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
/*  父类  */
class SportObject{
	public $name;								//定义姓名成员变量
	public $age;								//定义年龄成员变量
	public $avoirdupois;						//定义体重成员变量
	public $sex;								//定义性别成员变量
	public function __construct($name,$age,$avoirdupois,$sex){				//定义构造方法
		$this->name=$name;						//为成员变量赋值
		$this->age=$age;						//为成员变量赋值
		$this->avoirdupois=$avoirdupois;		//为成员变量赋值
		$this->sex=$sex;						//为成员变量赋值
	}
	function showMe(){							//定义方法
		echo '这句话不会显示。';
	}
}
/*  子类BeatBasketBall  */
class BeatBasketBall extends SportObject{				//定义子类，继承父类
	public $height;										//定义身高成员变量
	function __construct($name,$height){				//定义构造方法
		$this -> height = $height;						//为成员变量赋值
		$this -> name = $name;							//为成员变量赋值
	}
	function showMe(){									//定义方法
		if($this->height>185){
			return $this->name."，符合打篮球的要求!";			//方法实现的功能
		}else{
			return $this->name."，不符合打篮球的要求!";			//方法实现的功能
		}
	}
}
/*  子类WeightLifting  */
class WeightLifting extends SportObject{						//继承父类
	function showMe(){											//定义方法
		if($this->avoirdupois<85){
			return $this->name."，符合举重的要求!";				//方法实现的功能
		}else{
			return $this->name."，不符合举重的要求!";			//方法实现的功能
		}
	}
}


//实例化对象
$beatbasketball = new BeatBasketBall('科技','190');				//实例化子类
$weightlifting = new WeightLifting('明日','185','80','20','男');
echo $beatbasketball->showMe()."<br>";							//输出结果
echo $weightlifting->showMe()."<br>";
?>
</body>
</html>
