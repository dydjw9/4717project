<?php 
if((strlen($_POST['IDcard'])<>15)&&(strlen($_POST['IDcard'])<>18)){						 //检测用户身份证号的长度是否正确
	echo "<script>alert('用户身份证号标准长度为15位或18位!'); history.back();</script>";
}
else{
	echo "用户信息输入合法！";
}
?>
