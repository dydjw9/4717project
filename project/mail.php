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

