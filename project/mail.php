<?php

 /*
author: Du Jiawei , Yangweitao
project: 4717webdesign
des:this php is to send email
*/
require_once("smtp.php"); 
require_once("session.php"); 

function sendmail($mailto, $ID)
{
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
$smtpserver = "smtp.126.com";
$smtpserverport = 25;
$smtpusermail = "gstargaming@126.com";
//$smtpemailto = "yangweitaohustntu@gmail.com";
//$smtpemailto = "dydjw9@gmail.com";
$smtpemailto=$mailto;
$smtpuser = "gstargaming";
$smtppass = "lhijgezskzoqixpv"; 
$mailsubject = "Welcome to Gstar";
$mailbody = 
'<p>Dear '.$_SESSION["firstname"].'</p></br>
<p>Thank you so much for registing with us!</br><a href="http://192.168.56.2/f32ee/project/project/activate.php?ID='.$ID.'">Please click this link to activate your account</a></p>
<p>best regards</br>
gstargaming</p>'
;

$mailtype = "HTML";
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
$smtp->debug = FALSE;
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 

}




function ordermail($mailto, $IDs)
{
$smtpserver = "smtp.126.com";
$smtpserverport = 25;
$smtpusermail = "gstargaming@126.com";
//$smtpemailto = "yangweitaohustntu@gmail.com";
//$smtpemailto = "dydjw9@gmail.com";
$smtpemailto=$mailto;
$smtpuser = "gstargaming";
$smtppass = "lhijgezskzoqixpv"; 
$mailsubject = "Welcome to Gstar";
$mailbody = 
'<p>Dear '.$_SESSION["firstname"].'</p></br>
<p>Thank you for shoppingwith us!</br>Your Orders:'.$IDs.'<br> are being delivering.<br></p>
<p>best regards</br>
gstargaming</p>'
;

$mailtype = "HTML";
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
$smtp->debug = FALSE;
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
}


function changepasswordmail($mailto, $ID)
{
$smtpserver = "smtp.126.com";
$smtpserverport = 25;
$smtpusermail = "gstargaming@126.com";
//$smtpemailto = "yangweitaohustntu@gmail.com";
//$smtpemailto = "dydjw9@gmail.com";
$smtpemailto=$mailto;
$smtpuser = "gstargaming";
$smtppass = "lhijgezskzoqixpv"; 
$mailsubject = "Welcome to Gstar";
$mailbody = 
'<p>Dear '.$_SESSION["firstname"].'</p></br>
<p>You apply to change password.</br><a href="http://192.168.56.2/f32ee/project/changepassword.php?id='.$ID.'">Please 
click this link to change your password</a></p>
<p>best regards</br>
gstargaming</p>'
;

$mailtype = "HTML";
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
$smtp->debug = FALSE;
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
}

?>

