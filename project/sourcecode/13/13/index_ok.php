<?php 
	if($_FILES['files']['name']==true){
		$filesize=$_FILES['files']['size'];
		if($filesize>1000000){
			echo "对不起,您上传的文件超过规定的大小!!";
			echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">将在3秒钟后返回前页...";
		}else{
			$path = './upfiles/'. $_FILES['files']['name'];
			if (move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
				echo "上传成功!!";
				echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">"; 
			}else{
				echo "文件上传失败!!";
          		echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">";
			}
		}
	}
?>