<?php
require 'class-Clockwork.php';
$API_KEY="767c6dee0db28354eeabddb7f302cf9ad601f3d9";
$clockwork = new Clockwork( $API_KEY );
$message = array( 'to' => '006586519036', 'message' => 'This is a test!' );
$result = $clockwork->send( $message );
echo "sent";
?>