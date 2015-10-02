<?php include("conn/conn.php"); $furl=getenv("http_referer");
   $id=$_GET['id'];
   $query="delete from tb_hflb where id='$id'";
   $result=mysql_query($query);
   if($result){
      echo "<font color=\"#ff0000\">É¾³ý³É¹¦!!</font>";
      echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; }
?>
