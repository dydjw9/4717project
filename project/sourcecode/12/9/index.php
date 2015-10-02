<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");

//定义数组
$data1 = array(40,21,17,14,23);
$data2 = array(60,54,107,24,83);
$data3 = array(52,151,99,110,223);
$data4 = array(70,181,117,114,33);

//创建画布
$graph = new PieGraph(600,350,"auto");
$graph->SetShadow();

//设置标题名称
$graph->title->Set("统计2006年、2007年、2008年、2009年农产品的产量比率");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);

//创建饼形图对象
$size=0.13;
$p1 = new PiePlot($data1);
$p1->SetLegends(array("大豆","玉米","水稻","小麦","高梁"));
$p1->SetSize($size);
$p1->SetCenter(0.25,0.32);
$p1->value->SetFont(FF_FONT0);
$p1->title->Set("2006年");
$p1->title->SetFont(FF_SIMSUN,FS_BOLD);

$p2 = new PiePlot($data2);
$p2->SetSize($size);
$p2->SetCenter(0.65,0.32);
$p2->value->SetFont(FF_FONT0);
$p2->title->Set("2007年");
$p2->title->SetFont(FF_SIMSUN,FS_BOLD);

$p3 = new PiePlot($data3);
$p3->SetSize($size);
$p3->SetCenter(0.25,0.75);
$p3->value->SetFont(FF_FONT0);
$p3->title->Set("2008年");
$p3->title->SetFont(FF_SIMSUN,FS_BOLD);

$p4 = new PiePlot($data4);
$p4->SetSize($size);
$p4->SetCenter(0.65,0.75);
$p4->value->SetFont(FF_FONT0);
$p4->title->Set("2009年");
$p4->title->SetFont(FF_SIMSUN,FS_BOLD);

$graph->Add($p1);
$graph->Add($p2);
$graph->Add($p3);
$graph->Add($p4);

$graph->Stroke();

?>



