<?php
/* 消息处理类
 */
class TakeMsg{
	function __construct(){
	}
	/* 简单消息处理，只输出信息
	 * 参数$mess是要显示的信息
	 */
	function simpleMsg($mess){
		echo $mess;
	}
	/* 用于跳转的消息处理
	 * 参数$mess是要显示的消息
	 * url 是要跳转的页面，默认为刷新本页
	 */
	function skipachange($mess,$url=NULL){
		if(!is_null($url)){
			echo "<script>alert('".$mess."');location='".$url."';</script>";
		}else{
			echo "<script>alert('".$mess."');location.reload;</script>";
		}
	}
	/* 自动刷新页面
	 * 参数sec为自动刷新的时间
	 */
	function refurbish($mess,$sec=3,$url=NULL){
		if(is_null($url)){
			$hr = $_SERVER['HTTP_REFERER'];
			echo $mess.'<br>';
			echo '页面将于'.$sec.'秒后跳转。如果没有跳转，请点击这里<a href="'.$hr.'">返回</a>';
			echo '<meta http-equiv="refresh" content="'.$sec.';url='.$hr.'"/>';
		}else{
			echo $mess.'<br>';
			echo '页面将于'.$sec.'秒后跳转。如果没有跳转，请点击这里<a href="'.$url.'">返回</a>';
			echo '<meta http-equiv="Refresh" content="'.$sec.';url='.$url.'">';
		}
	}
}
$tm = new TakeMsg();
?>