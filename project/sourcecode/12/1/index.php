<?php
$im = imagecreate(200,60);                      //创建一个画布
$white = imagecolorallocate($im, 225,66,159);     //设置画布的背景颜色为浅绿色
imagegif($im);                               //输出图像
?>
