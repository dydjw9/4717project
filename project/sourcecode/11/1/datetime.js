document.write("<span id=labTime width='118px' Font-Size='9pt'></span>");	 //输出显示日期的容器 
setInterval("labTime.innerText=new Date().toLocaleString()",1000);  			 //每1000毫秒(即1秒) 执行一次本段代码 
