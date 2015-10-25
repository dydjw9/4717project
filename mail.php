<?php

 
require_once("smtp.php"); 
/*
//$smtpserver = "smtp.sina.com";//SMTP服务器 
$smtpserver = "smtp.sina.com";//SMTP服务器 
$smtpserverport = 25;//SMTP服务器端口 
$smtpusermail = "jiawei1188@sina.com";//SMTP服务器的用户邮箱 
$smtpemailto = "jiawei1188@hotmail.com";//发送给谁 
$smtpuser = "jiawei1188";//SMTP服务器的用户帐号 
$smtppass = "8723918";//SMTP服务器的用户密码 
$mailsubject = "aboutphgoto";//邮件主题 
$mailbody = "file is in dropbox";//邮件内容 
$mailtype = "HTML";//邮件格式（HTML/TXT）
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证
$smtp->debug = FALSE;//是否显示发送的调试信息 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
echo "sent";
*/
//$smtpserver = "smtp.sina.com";//SMTP服务器 
$smtpserver = "smtp.126.com";//SMTP服务器 
$smtpserverport = 25;//SMTP服务器端口 
$smtpusermail = "gstargaming@126.com";//SMTP服务器的用户邮箱 
//$smtpemailto = "yangweitaohustntu@gmail.com";//发送给谁 
$smtpemailto = "dydjw9@gmail.com";
$smtpuser = "gstargaming";//SMTP服务器的用户帐号 
$smtppass = "lhijgezskzoqixpv";//SMTP服务器的用户密码 
$mailsubject = "Welcome to Gstar";//邮件主题 
$mailbody = 
'<p>Dear weitao yang</p></br>
<p>Thank you so much for registing with us!</p></br>
<p>best regards</p></br>
<p>gstargaming</p></br>'
;//邮件内容 

$mailtype = "HTML";//邮件格式（HTML/TXT）
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证
$smtp->debug = FALSE;//是否显示发送的调试信息 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
echo "sent";
?>
lhijgezskzoqixpv
