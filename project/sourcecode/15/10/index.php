<?php
	function encrpy($str,$key='key'){
		$output;
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = $tmp ^ $key;
			$tmp = ~$tmp; 
			$output .= $tmp;
		}
		return $output;
	}
	function decrpy($str,$key='key'){
		$output;
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = ~$tmp; 
			$tmp = $tmp ^ $key;
			$output .= $tmp;
		}
		return $output;
	}
?>
<form method="post" action="#">
	请输入要加密的字串：<input name="str" type="text" />
	<input name="encode" type="submit" value="加密" />
</form>
<form method="post" action="#">
	请输入要解密的密文：<input name="str" type="text" />
	<input name="decode" type="submit" value="解密" />
</form>
<?php
	if($_POST['encode'] == '加密'){
		echo '加密后的密文是：'.encrpy($_POST['str']);		
	}
	if($_POST['decode'] == '解密'){
		echo '解密后的明文是：'.decrpy($_POST['str']);
	}
?>