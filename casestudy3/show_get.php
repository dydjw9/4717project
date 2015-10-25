<?php

require_once "email.class.php";


echo"your infomation is as following <BR>";
echo"name: ".$_GET['name']."<BR>";
echo"email: ".$_GET['email']."<BR>";
echo"startDate: ".$_GET['Startdate']."<BR>";
echo"experience: ".$_GET['experience']."<BR>";
 

$to      = 'dydjw9@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

	
	$smtpserver = "smtp.sina.com.cn";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "jiawei1188@sina.com";//SMTP服务器的用户邮箱
	$smtpemailto = $_GET['email'];//发送给谁
	$smtpuser = "jiawei1188";//SMTP服务器的用户帐号
	$smtppass = "8723918";//SMTP服务器的用户密码
	$mailtitle = "Job Application Received";//邮件主题
	$mailcontent = "<h1>".$_GET['experience']."</h1>";//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "sry";
		echo "<a href='index.html'>点此返回</a>";
		exit();
	}
	echo "successful";
	echo "<a href='index.html'>点此返回</a>";
	echo "</div>";
?>