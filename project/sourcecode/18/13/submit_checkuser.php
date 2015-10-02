<?php include "conn/conn.php";?>
<?php  $query="select * from tb_mruser where username='$zc_username'";
        $result=mysql_query($query);
        if ($zc_username!=""){
		   $nn=mysql_num_rows($result);
		   if ($nn==1) {$ycyh="[<font color=red>".$zc_username."</font>]已被注册！";
		   } else {
		   $ycyh="[<font color=green>".$zc_username."</font>]可以注册！";} }
?>


