<html>
<head>
<title>公告信息管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<table width="828" height="522" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td background="images/image_01.gif">&nbsp;			</td>
		<td height="140" background="images/image_02.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td width="202" rowspan="3" valign="top"><table width="202" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><?php include("menu.php");?></td>
          </tr>
        </table></td>
		<td height="34" background="images/image_04.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td height="38" background="images/image_06.gif">&nbsp;			</td>
	</tr>
	<tr>
		<td height="270" valign="top">
			<table width="626" height="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="257" align="center" valign="top" background="images/image_08.gif"><table width="600" height="271"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="22" align="center" valign="top" class="word_orange"><strong>公告信息<strong>分页显示</strong></strong></td>
                  </tr>
                  <tr>
                    <td height="249" align="center" valign="top">
					<table width="550" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
                      <tr align="center" bgcolor="#f0f0f0">
                        <td width="221">公告标题</td>
                        <td width="329">公告内容</td>
                      </tr>
					<?php
					include_once("conn/system.inc.php");
					$myrow=$seppage->ShowDate("select * from tb_affiche order by id ",$conn,3,$_GET["page"]);
				
					if(!$myrow){
							echo "<font color='red'>暂无公告信息!</font>";
					}else{
					for($i=0;$i<count($myrow[0]);$i++){
					?>
                      <tr bgcolor="#FFFFFF">
                        <td style="padding-left:5px; padding-right:5px; padding-top:5px; padding-bottom:5px;"><?php echo $unhtml->chinesesubstr($myrow[0][$i],'0','30')."...";?></td>
                        <td style="padding-left:5px; padding-right:5px; padding-top:5px; padding-bottom:5px;"><?php echo $myrow[1][$i];?></td>
                      </tr>
					<?php
					}
					}
					?>
                     </table>
                      <br>
                      <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <!--  翻页条 -->
							<td width="37%"><?php echo $seppage->ShowPage("公告","条","","a1");?></td>
                        </tr>
                      </table></td>
                  </tr>
                </table></td>
              </tr>
            </table>			</td>
	</tr>
	<tr>
		<td bgcolor="#F0F0F0"></td>
		<td height="43" background="images/image_12.gif"></td>
	</tr>
</table>
</body>
</html>