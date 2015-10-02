<?php  
	if(!is_dir("./upfile")){ 							//判断服务器中是否存在指定文件夹
		mkdir("./upfile");								//如果不存在，则创建文件夹
	}
	array_push($_FILES["picture"]["name"],"");			//向表单提交的数组中增加一个空元素   
    $array=array_unique($_FILES["picture"]["name"]);    //删除数组中重复的值
    array_pop($array);             						//删除数组中最后一个单元
	for($i=0;$i<count($array);$i++){					//根据元素个数执行for循环
    	$path="upfile/".$_FILES["picture"]["name"][$i];	//定义上传文件存储位置
		if(move_uploaded_file($_FILES["picture"]["tmp_name"][$i],$path)){	//执行文件上传操作
			$result=true;
		}else{
			$result=false;
		}
	}
	if($result==true){
			echo "文件上传成功，请稍等...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
		}else{
			echo "文件上传失败，请稍等...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
	}

?>
