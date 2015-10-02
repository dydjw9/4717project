<?php
echo strtotime ("now"), "\n";									//当前时间的时间戳
echo "输出时间:".date("Y-m-d H:i:s",strtotime ("now")),"<br>";		//输出当前时间
echo strtotime ("21 May 2009"), "\n";							//输出指定日期的时间戳
echo "输出时间:".date("Y-m-d H:i:s",strtotime ("21 May 2009")),"<br>";	//输出指定日期的时间
echo strtotime ("+3 day"), "\n";							
echo "输出时间:".date("Y-m-d",strtotime ("+3 day")),"<br>";
echo strtotime ("+1 week")."<br>";
echo strtotime ("+1 week 2 days 3 hours 4 seconds")."<br>";
echo strtotime ("next Thursday")."<br>";
echo strtotime ("last Monday"), "\n";
?>
