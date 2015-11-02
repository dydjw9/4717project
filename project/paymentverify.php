<?php
require 'class-Clockwork.php';
require 'session.php';

$code=rand(111111,999999);
$_SESSION["smscode"]=$code;
$phone=$_SESSION["phone"];
$total=$_SESSION["totalpayment"];
echo "Sent to $phone";
$API_KEY="767c6dee0db28354eeabddb7f302cf9ad601f3d9";
$clockwork = new Clockwork( $API_KEY );
$message = array( 'to' => '65'.$phone, 'message' => 'Dear '.$Sfirstname.
	' Your payment safe code is '.$code.' It costs S$'.$total.'  GstarGaming.' );
$result = $clockwork->send( $message );

?>