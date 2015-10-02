<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>中文字符串的截取类</title>
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
class MsubStr{
	function csubstr($str, $start, $len) { 				//$str指的是字符串,$start指的是字符串的起始位置，$len指的是长度。
	$strlen = $start + $len; 							//用$strlen存储字符串的总长度（从字符串的起始位置到字符串的总长度）
	for($i = 0; $i < $strlen; $i ++) { 					//通过for循环语句,循环读取字符串
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { 	//如果字符串中首个字节的ASCII序数值大于0xa0,则表示为汉字
			$tmpstr .= substr ( $str, $i, 2 ); 			//每次取出两位字符赋给变量$tmpstr，即等于一个汉字
			$i ++; 										//变量自加1
		} else { 										//如果不是汉字，则每次取出一位字符赋给变量$tmpstr
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr; 									//输出字符串
	}
}
$mc=new MsubStr();										//类的实例化
?> 
<table width="204" height="195" border="0" cellpadding="0" cellspacing="0" background="images/bg.JPG">
  <tr>
    <td width="25" height="37">&nbsp;</td>
    <td width="157">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="关注明日科技，关注PHP从入门到精通改版！";
			if(strlen($string)>10){
				echo substr($string,0,9)."...";
			}else{
				echo $string;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="关注PHP从入门到精通改版！";
			if(strlen($string)>10){
				echo substr($string,0,9)."...";
			}else{
				echo $string;
			}
		?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>
		<?php 
			$strs="关注明日科技，关注PHP从入门到精通改版！";
			if(strlen($string)>10){
				echo $mc ->csubstr($strs, "0" , "9")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$strs="关注PHP编程词典！";
			if(strlen($string)>30){
				echo $mc ->csubstr($strs, "0" , "20")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
