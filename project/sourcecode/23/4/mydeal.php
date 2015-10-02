<?php
$link=mysql_connect("localhost","root","root");
mysql_select_db("db_database24",$link);
//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE', $RequestAjaxString);	//Ajax中先用encodeURIComponent对要提交的中文进行编码
mysql_query("set names gb2312");
$key=$_POST[key];
if($key!=""){
	$sql=mysql_query("select * from tb_key where keyvalue='".$key."'");
	$info=mysql_fetch_array($sql);
	if(!$info){
		mysql_query("insert into tb_key (keyvalue) values('".$key."')");
	}
}
?>
<script language="javascript">
	window.location.href="index.php?key=<?php echo $key;?>";
</script>

