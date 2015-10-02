<html>
<head>
<title>带记忆功能的查询</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="Css/style.css" rel="stylesheet">
</head>
<script language="javascript">
var http_request = false;
function createRequest(url) {
	//初始化对象并发出XMLHttpRequest请求
	http_request = false;
	if (window.XMLHttpRequest) { // Mozilla或其他除IE以外的浏览器
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { // IE浏览器
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");

		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("不能创建XMLHTTP实例!");
		return false;
	}
	inputField = document.getElementById("key");            
	keyTable = document.getElementById("key_table");
	memorDiv = document.getElementById("pop");
	keyTableBody = document.getElementById("key_table_body");
	if (inputField.value.length > 0) {
		var url = "getKey.php?key=" + inputField.value+'&nocache='+new Date().getTime(); 
		http_request.open("GET", url, true);
		http_request.onreadystatechange = callTool;    //调用返回结果处理函数正确显示提示列表
		http_request.send(null);
	} else {
		clearTool();
	}	
}
//返回结果处理函数
function callTool() {
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			if(http_request.responseXML==null){                	
			var key = http_request.responseXML.getElementsByTagName("mykey")[0].firstChild.data;
				clearTool();
			}else{
				setKeys(http_request.responseXML.getElementsByTagName("mykey"));
				//alert(http_request.responseText);
			}
		} else if (http_request.status == 204){
			clearTool();
		}
	}
}
//生成提示列表的内容
function setKeys(the_keys) {            
	clearTool();
	var size = the_keys.length;
	setOffsets();
	var row, cell, txtNode;
	for (var i = 0;i<size; i++) {
		var nextNode = the_keys[i].firstChild.data;
		row = document.createElement("tr");
		cell = document.createElement("td");
		cell.onmouseout = function() {this.className='mouseOver';this.style.background='#FFFAFA';this.style.color='#000000';};
		cell.onmouseover = function() {this.className='mouseOut';this.style.background='#9D741C';this.style.color='#FFFFFF';};
		cell.setAttribute("border", "0");
		cell.onclick = function() { assignKey(this); } ;  
		cell.onkeydown=function(){if(event.keyCode==13){assignKey(this);}};                           
		txtNode = document.createTextNode(nextNode);
		cell.appendChild(txtNode);
		row.appendChild(cell);
		keyTableBody.appendChild(row);
	}
/******************将光标焦点定位在提示列表的第一行上************/
	if(size>0){		
		ObjTable.Load("key_table","TD");
		var oPrev = ObjTable.getNode(0,0);
		iCurRow=0;
		iCurCol=0;
		//设置节点的位置
		ObjTable.curRow = iCurRow;
		ObjTable.curCol = iCurCol;
		oPrev.focus();
		oPrev.bgColor ="#9D741C";
		oPrev.style.color="#FFFFFF";
	}
/**********************************************************/			
}
//设置提示列表框的位置
function setOffsets() {
	var end = inputField.offsetWidth;
	var left =calculateOffset(inputField, "offsetLeft")
	 var top = calculateOffset(inputField, "offsetTop") + inputField.offsetHeight;
	memorDiv.style.border = "black 1px solid";
	memorDiv.style.left = left + "px";
	memorDiv.style.top = top + "px";
	keyTable.style.width = end + "px";
}
//计算提示列表框的位置
function calculateOffset(field, attr) {
  var offset = 0;
  while(field) {
	offset += field[attr]; 
	field = field.offsetParent;
  }
  return offset;
}
//将选择的值赋值给用于获取查询关键字的文本框
function assignKey(cell) {
	inputField.value = cell.firstChild.nodeValue;
	clearTool();
}
//移去提示列表
function clearTool() {
	var ind = keyTableBody.childNodes.length;
	for (var i = ind - 1; i >= 0 ; i--) {
		 keyTableBody.removeChild(keyTableBody.childNodes[i]);
	}
	memorDiv.style.border = "none";
}
</script>
<script language="JavaScript"> 
var ObjTable = new Object();
var prevbool = true;
ObjTable.colCount=0;	//列数
ObjTable.rowCount=0;	//行数
ObjTable.Map = null;	//Table Map
ObjTable.prevRow = -1;	//前一单元格的行号，默认为-1
ObjTable.prevCol = -1;	//前一单元格的列号，默认为-1
ObjTable.curRow=-1;		//当前行号，默认为-1
ObjTable.curCol=-1;		//当前列号，默认为-1
ObjTable.Element="TD";	//待操作元素的Tag Name
ObjTable.Load = function(a_sID,a_sTagName){	//载入table
	var iRowCount=0, iColCount=0, i, j, m, n, iIndex=0, iCount;
	var sTable = document.getElementById(a_sID);
	if (sTable!=null) {	//设置table属性
    	var tableMap = [];
    	iColCount=sTable.rows[0].cells.length;
		iRowCount = sTable.rows.length;		//获取总行数
    	document.getElementsByTagName('body')[0].onkeydown=ObjTable_moveFocus;		//监听keydown事件
    	ObjTable.colCount = iColCount;		//列数
    	ObjTable.rowCount = iRowCount;		//行数
		var aCols=null, iCell;
    	for (i=0; i<iRowCount; ++i) {
			aCols = new Array(iColCount);
        	tableMap.push(aCols);
    	}
    	for (i=0; i<iRowCount; ++i) {
    		iIndex=0;
    		for (j=0; j<iColCount; j+=iCell.colSpan) {
    			if (tableMap[i][j]==null) {
    				iCell = sTable.rows[i].cells[iIndex++];
    				for(m=i; m<i+iCell.rowSpan; ++m) {
    					for(n=j; n<j+iCell.colSpan; ++n) {tableMap[m][n] = i+','+j;}
    				}
    				tableMap[i][j] = iCell;
    			}
    		}
    	}
    	ObjTable.Map = tableMap;
    }
};
//移动焦点
function ObjTable_moveFocus(event) {
	//获取当前节点
	var e = event || window.event;
	var oNode = e.target || e.srcElement;
	var oNext = null;
	switch (e.keyCode) {
		case 38:	//上键 0
			oNext = CTable_getNextNode(0);
			break;
		case 13:	//回车键
		
		case 40:	//下键 1
			oNext = CTable_getNextNode(1);
			break;
	}
	//改变背景色
	if (oNext) {
    		oNext.focus();
    		oNext.bgColor="#9D741C";
			oNext.style.color="#FFFFFF";
	}
}
//获取指定行、列号的单元格
ObjTable.getNode = function(a_iRow,a_iCol) {
	//如果行号或列号小于零，则返回null
	if (a_iRow<0 || a_iCol<0) {return null;}
	//初始化数据
	var oNode=null;
	var aMaps = ObjTable.Map, aTemps=null;
	var iRow = a_iRow, iCol=a_iCol;
	var sTemp="";
	//获取节点
	while(true) {
		oNode = aMaps[iRow][iCol];
		sTemp=typeof(oNode);
		if (sTemp.toLowerCase()=="string") {
			aTemps=oNode.split(",");
			iRow = aTemps[0];
			iCol = aTemps[1];
		}
		else {break;}
	}
	return oNode;		//函数返回值
}
//获取一下节点
function CTable_getNextNode(a_key) {
	var oNode = null;
	var iCol = ObjTable.curCol ,iRow=ObjTable.curRow;
	var iRowCount = ObjTable.rowCount, iColCount=ObjTable.colCount;
	var aMaps = ObjTable.Map, aTemps=null;
	var iCurCol=iCol, iCurRow = iRow, iTemp;
	var sTemp="", sStr="";
	oNode = aMaps[iRow][iCol];
	if (typeof(oNode)=="string") {
		aTemps = oNode.split(",");
		iCurRow = aTemps[0];
		iCurCol = aTemps[1];
	}
	while (true) {
		switch(a_key) {
			case 0:
				iRow--;
				break;
			case 1:
				iRow++;
				break;
		}
		if (iRow<0) {iRow=iRowCount-1;}
		if (iRow>=iRowCount) {iRow=0;}
		if ((iCurRow == iRow) && (iCurCol == iCol)) {continue;}
		oNext = aMaps[iRow][iCol];
		sTemp=typeof(oNext);
		if (sTemp.toLowerCase()=="string") {
			aTemps=oNext.split(",");
			if ((iCurRow!=aTemps[0]) || (iCurCol!=aTemps[1])){break;}
		continue;
		}
		break;
	}; //结束获取下一个节点
	switch(a_key) {
		case 0:		//上
		case 1:		//下
			if (oNext.colSpan>1) {
				ObjTable.prevCol = CTable.curCol;
				ObjTable.prevRow = ObjTable.curRow;
				ObjTable.curRow = iRow;
			}
			else {
				ObjTable.prevCol = ObjTable.curCol;
				ObjTable.prevRow = ObjTable.curRow;
				ObjTable.curCol = iCol;
				ObjTable.curRow = iRow;
			}
			break;
	}
	RecallFocus(ObjTable);
	prevbool=false;
	iCurRow=ObjTable.curCol;
	iCurCol=ObjTable.curRow;
	return oNext;
}
function RecallFocus(c){
	var oPrev = ObjTable.getNode(c.prevRow,c.prevCol);
	if (oPrev){
    	oPrev.bgColor="#FFFFFF";
		oPrev.style.color="#000000";
	}
}
</script> 
<script language="javascript">
function mycheck(){
	if (form1.key.value==""){
		alert("请输入查询条件！");form1.key.focus();return;
	}
	form1.submit();	
}
</script>
<body>
<table width="777"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="182" height="282" valign="top">&nbsp;</td>
    <td align="center" valign="top">
      <table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolordark="#FFFFFF">
	  <form action="mydeal.php" method="post" name="form1">
        <tr>
          <td width="14%" height="27" class="word_orange">&nbsp;快速搜索：</td>
          <td width="86%" height="27">&nbsp;
        <input name="key" type="text" class="Sytle_text" id="key" size="50" onKeyUp="createRequest();">
		<div style="position:absolute; left: 535px; top: 125px;" id="pop">
        <table id="key_table" bgcolor="#FAFAFF" border="0" cellspacing="0" cellpadding="0">            
            <tbody id="key_table_body"></tbody>
        </table>
    	</div>
            &nbsp;
            <input name="Button" type="button" class="btn_grey" value="搜索" onClick="mycheck();"> 
            &nbsp; </td>
        </tr>
	   </form>
        <tr>
          <td height="28" colspan="2" align="center" valign="top">
		  <table width="700" height="45" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#E0BF7C">
            <tr>
              <td width="158" height="25" align="center" bgcolor="#FFE9B7" class="word_orangeB">图书名称</td>
              <td width="179" align="center" bgcolor="#FFE9B7" class="word_orangeB">内容简介</td>
              <td width="77" align="center" bgcolor="#FFE9B7" class="word_orangeB">作者</td>
              <td width="106" align="center" bgcolor="#FFE9B7" class="word_orangeB">出版社</td>
              <td width="67" align="center" bgcolor="#FFE9B7" class="word_orangeB">定价</td>
              <td width="99" align="center" bgcolor="#FFE9B7" class="word_orangeB">出版日期</td>
            </tr>
			<?php
			$link=mysql_connect("localhost","root","root");
			mysql_select_db("db_database23",$link);
			//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE', $RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
			mysql_query("set names gb2312");
			$key=$_GET[key];
			$sql=mysql_query("select * from tb_book where bookname like '%".$key."%'");
			$result=mysql_fetch_object($sql);
			//header('Content-type: text/html;charset=GB2312');								//指定发送数据的编码格式为GB2312
			do{
			?>
            <tr>
              <td height="25" class="word_orange">&nbsp;<?php echo $result->bookname;?></td>
              <td class="word_orange">&nbsp;<?php echo $result->synopsis;?></td>
              <td class="word_orange">&nbsp;<?php echo $result->maker;?></td>
              <td class="word_orange">&nbsp;<?php echo $result->publisher;?></td>
              <td class="word_orange">&nbsp;<?php echo $result->price;?></td>
              <td class="word_orange">&nbsp;<?php echo $result->issuDate;?></td>
            </tr>
			<?php
			 }while($result=mysql_fetch_object($sql));
			?>
            </table>
		  </td>
        </tr>
    </table>
		  </td>
        </tr>
    </table>
</body>
</html>
