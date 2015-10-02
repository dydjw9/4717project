<?php
session_start();
include "conn/conn.php";
$furl=getenv("http_referer");
       $time=date("y-m-d h:m:s");
           if($_POST[zttj]){
	          $zhuti=htmlspecialchars($_POST[zhuti]);
			  $neirong=htmlspecialchars($_POST[neirong]);
			  $neirong=str_replace("\n","<br>",$_POST[neirong]);
			  $neirong=str_replace("","&nbsp;",$_POST[neirong]); 			
              $query="insert into tb_zqlb (zq,zhuti,neirong,username,fbsj)
			          values('".$_POST[zq]."','$zhuti','$neirong','".$_SESSION[username]."','$time')";
			  $result=mysql_query($query); 
	          if($result){
			     echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
				 echo "发布成功!";
			  }else{ echo "发布主题失败!!"; }    
	       }
		   if($_POST[hftj]){
	        $date=date("y:m:d H:i:s");
	        $hfzt=htmlspecialchars($_POST[hfzt]);
			$hfnr=htmlspecialchars($_POST[hfnr]);
			$hfnr=str_replace("\n","<br>",$_POST[hfnr]);
			$hfnr=str_replace("","&nbsp;",$_POST[hfnr]);
			$query="insert into tb_hflb(hfzt,hfnr,hfsj,username,ljid,zq)values('$hfzt','$hfnr','$date','".$_SESSION[username]."','".$_POST[ljid]."','".$_POST[zq]."')";
			$result=mysql_query($query);  //送出一个query字符串
			
			if($result){
			
			      echo "回复成功!!";
			      echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
			
			}else{
			   echo "回复失败!!!";
			}
			}
?>
 