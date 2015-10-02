<?php session_start(); include("../conn/conn.php"); $furl=getenv("http_referer");
include "hyyz.php";   //设置网页的访问权限
if ($record==1) {
if($lmbs=="用户管理"){
//获得将被删除的用户ID
$id=$_GET['id'];
//将要删除的用户从mr_user表中删除
$query="delete from tb_mruser where id='$id'";
$result=mysql_query($query);
if($result){
  echo "删除成功!!";
  echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
}else{echo "删除失败!";}
}
if($lmbs=="栏目管理"){
$id=$_GET['id'];
$query="delete from tb_zqfl where id='$id'";
$result=mysql_query($query);
  if($result){
     echo "<font color=\"#ff0000\">删除成功!!</font>";
     echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";}
}
if($lmbs=="论坛主题"){
   $id=$_GET['id'];
   $query="delete from tb_zqlb where id='$id'";
   $result=mysql_query($query);
   if($result){
      echo "<font color=\"#ff0000\">删除成功!!</font>";
      echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; }
}
if($lmbs=="回复主题"){
   $id=$_GET['id'];
   $query="delete from tb_hflbwhere id='$id'";
   $result=mysql_query($query);
   if($result){
     echo "<font color=\"#ff0000\">删除成功!!</font>";
	 echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">"; }
} ?>
<?php }else{ include "yzdl.php"; } ?>
