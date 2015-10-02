<?php include("conn/conn.php"); $furl=getenv("http_referer");
   $id=$_GET['id'];
   $result=mysql_query("delete from tb_zqlb where id='$id'");
   $info=mysql_query("delete from tb_hflb where ljid='$id'");
   if($result==true && $info==true){
      echo "<font color=\"#ff0000\">É¾³ý³É¹¦!!</font>";
      echo "<script>window.location.href='index.php';</script>"; }
?>
