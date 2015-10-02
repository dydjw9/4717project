<?php session_start();$furl=getenv("HTTP_REFERER"); ?>
<?php 
   session_unregister(username);
   session_unregister(password);
   echo "<p><meta http-equiv=\"Refresh\" content=\"3;url=$furl\">用户已注销3秒钟转入主页,请稍等...</p>";
?>


