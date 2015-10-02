<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_line.php");
include ("jpgraph/jpgraph_scatter.php");

$datay1 = array(83,57,93,112,142,112,89,125,69,105,118,75);				//定义数组

//创建画布
$graph = new Graph(620,260);
$graph->SetMarginColor('red');
$graph->SetScale("textlin");
$graph->SetFrame(false);
$graph->SetMargin(30,5,25,20);

//创建标签标题、颜色、文字大小等属性
$graph->tabtitle->Set(' 2009年轿车的月销量统计  ' );
$graph->tabtitle->SetFont(FF_SIMSUN,FS_NORMAL,10);
$graph->tabtitle->SetColor('darkred','yellow');
// 设置X轴网格
$graph->xgrid->Show();

//应用月份做为X轴的坐标
$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

//创建折线对象
$p1 = new LinePlot($datay1);
$p1->SetColor("navy");

$p1->mark->SetType(MARK_IMG,'car.gif',0.8);				//载入汽车模型标记，并限制其输出大小

//输出汽车模型标记的位置
$p1->value->SetFormat('%d');
$p1->value->Show();
$p1->value->SetColor('darkred');
$p1->value->SetFont(FF_ARIAL,FS_BOLD,10);
$p1->value->SetMargin(14);					//设置汽车销量距汽车模型标记的距离

$p1->SetCenter();			//设置汽车销量及模型在X轴各坐标点居中显示
$graph->Add($p1);			//添加折线图到图像中
$graph->Stroke();			//输出图像到浏览器

?>


