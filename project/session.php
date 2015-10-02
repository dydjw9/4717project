<?php
session_start();
echo "session is".$_SESSION["pwd"];
if(!empty($_SESSION["pubemail"]))
	echo "u already login";

?>