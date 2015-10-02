<?php
//数据库连接类
class ConnDB{
	var $dbtype;
	var $host;
    var $user;
    var $pwd;
    var $dbname;
    var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname){		//构造方法，为成员变量赋值
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
	}
    function GetConnId(){		    						//实现与数据库的连接并返回连接对象
		$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die("数据库服务器连接错误".mysql_error());
    	mysql_select_db($this->dbname,$this->conn) or die("数据库访问错误".mysql_error());
    	mysql_query("set names gb2312");					//设置数据库的编码格式
    	return $this->conn;									//返回连接对象
    }
	function CloseConnId(){									//定义关闭数据库的方法
    		$this->conn->Disconnect();					//执行关闭的操作
    }
}	

//数据库管理类
class AdminDB{
	function ExecSQL($sqlstr,$conn){					//定义方法，参数为SQl语句和连接数据库返回的对象
		$sqltype=strtolower(substr(trim($sqlstr),0,6));	//截取SQL中的前6个字符串，并转换成小写
		$rs=mysql_query($sqlstr);					//执行SQL语句
		if($sqltype=="select"){						//判断如果SQL语句的类型为SELECT
			$array=mysql_fetch_array($rs);				//执行该语句，获取查询结果
			if(count($array)==0 || $rs==false)			//判断语句是否执行成功
				return false;					//如果查询结果为0，或者执行失败，则返回false
			else
				return $array;					//否则返回查询结果的数组
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//判断如果SQL语句类型不为select、则执行如下操作
			if($rs)
			    return true;						//执行成功返回true
			else 
			    return false;    					//是否返回false
		}
	}
}


//分页类
class SepPage{
	var $rs;
	var $pagesize;					//定义每页显示的记录数
	var $nowpage;					//当前页码
	var $array;
	var $conn;
	var $sqlstr;					//执行的SQL语句
	var $total;
	var $pagecount;					//总的记录数
	function ShowDate($sqlstr,$conn,$pagesize,$nowpage){	//定义方法
		$arrays=array();
		$array_title=array();
		$array_content=array();
		if(!isset($nowpage) || $nowpage=="" || $nowpage==0)			//判断当前页变量值是否为空
			$this->nowpage=1;						//定义当前页的值
		else
			$this->nowpage=$nowpage;				//获取当前页的值
		
		$this->pagesize=$pagesize;					//定义每页输出的记录数
		$this->conn=$conn;							//连接数据库返回的标识
		$this->sqlstr=$sqlstr;						//执行的查询语句
		$this->pagecount=$pagecount;				//总的记录数
		$this->total=$total;						//总的记录数
		
		$this->rs=mysql_query($this->sqlstr."limit ".$this->pagesize*($this->nowpage-1).",$this->pagesize",$this->conn);
		$this->total=mysql_num_rows($this->rs);			//获取记录数
  		if($this->total==0){									//判断如果查询结果为0，则输出如下内容
			return false;	  
	   }else{								//否则
	   		if(($this->total % $this->pagesize)==0){			//判断如果总的记录数除以每页显示的记录数等于0
		  		$this->pagecount=intval($this->total/$this->pagesize);	//则为变量pagecount赋值
			}else if($this->total<=$this->pagesize){
				$this->pagecount=1;//如果查询结果小于等于每页记录数，那么为变量赋值为1	
		  	}else{
		     	$this->pagecount=ceil($this->total/$this->pagesize);	//否则输出变量值
		  	}
			while($this->array=mysql_fetch_array($this->rs)){
				array_push($array_title,$this->array[title]);
				array_push($array_content,$this->array[content]);
			}			
			array_push($arrays,$array_title,$array_content);
			return $arrays;
		}
	}
	function ShowPage($contentname,$utits,$anothersearchstr,$class){
		$allrs=mysql_query($this->sqlstr,$this->conn);		//执行查询语句
		$record=mysql_num_rows($allrs);
		$pagecount=ceil($record/$this->pagesize);		//计算共有几页
		$str.="共有".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;每页显示&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;第&nbsp;".$this->nowpage."&nbsp;页/共&nbsp;".$pagecount."&nbsp;页";
		$str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		$str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">首页</a>";
		$str.="&nbsp;";
		if(($this->nowpage-1)<=0){ 
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">上一页</a>";
		}else{
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage-1).$anothersearchstr." class=".$class.">上一页</a>";
		}
		$str.="&nbsp;";	
		if(($this->nowpage+1)>=$pagecount){
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">下一页</a>";
		}else{
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage+1).$anothersearchstr." class=".$class.">下一页</a>";
		}
		$str.="&nbsp;";
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">尾页</a>";
		if(count($this->array)==0 || $this->rs==false)			
			return "";
		else
		    return $str;	
	}
}
//系统常用方法
class UseFun{
	
	function chinesesubstr($str,$start,$len) { 
    $strlen=$start+$len; 
    for($i=0;$i<$strlen;$i++) { 
        if(ord(substr($str,$i,1))>0xa0) { 
            $tmpstr.=substr($str,$i,2); 
            $i++; 
         } 
		else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr; 
}
	
}

?>