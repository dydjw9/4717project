<?php

 
require_once("smtp.php"); 
/*
//$smtpserver = "smtp.sina.com";//SMTP������ 
$smtpserver = "smtp.sina.com";//SMTP������ 
$smtpserverport = 25;//SMTP�������˿� 
$smtpusermail = "jiawei1188@sina.com";//SMTP���������û����� 
$smtpemailto = "jiawei1188@hotmail.com";//���͸�˭ 
$smtpuser = "jiawei1188";//SMTP���������û��ʺ� 
$smtppass = "8723918";//SMTP���������û����� 
$mailsubject = "aboutphgoto";//�ʼ����� 
$mailbody = "file is in dropbox";//�ʼ����� 
$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤
$smtp->debug = FALSE;//�Ƿ���ʾ���͵ĵ�����Ϣ 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
echo "sent";
*/
//$smtpserver = "smtp.sina.com";//SMTP������ 
$smtpserver = "smtp.126.com";//SMTP������ 
$smtpserverport = 25;//SMTP�������˿� 
$smtpusermail = "gstargaming@126.com";//SMTP���������û����� 
//$smtpemailto = "yangweitaohustntu@gmail.com";//���͸�˭ 
$smtpemailto = "dydjw9@gmail.com";
$smtpuser = "gstargaming";//SMTP���������û��ʺ� 
$smtppass = "lhijgezskzoqixpv";//SMTP���������û����� 
$mailsubject = "Welcome to Gstar";//�ʼ����� 
$mailbody = 
'<p>Dear weitao yang</p></br>
<p>Thank you so much for registing with us!</p></br>
<p>best regards</p></br>
<p>gstargaming</p></br>'
;//�ʼ����� 

$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤
$smtp->debug = FALSE;//�Ƿ���ʾ���͵ĵ�����Ϣ 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
echo "sent";
?>
lhijgezskzoqixpv
