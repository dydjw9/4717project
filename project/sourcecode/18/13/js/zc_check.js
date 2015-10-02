//主题发布
function fbzt_check(){
		 if (myform.user.value.length=="" && myform.pass.value.length==""){
				alert("注册之后才可以发布主题!:)");
				myform.zhuti.focus();
				return false;
		}
		 if (myform.zq.value==""){
				alert("请选择您要发布的主题专区!!");
				myform.zq.focus();
				return false;
		}
	        if (myform.zhuti.value==""){
				alert("请输入您要发布的主题!!");
				myform.zhuti.focus();
				return false;
		}
		  
	        if (myform.neirong.value==""){
				alert("请输入您所发布主题的内容!!");
				myform.neirong.focus();
				return false;
		}
		if (myform.neirong.value.length<=10 || form1.neirong.value.length>=1500){
				alert(" 主题内容既不能少于10个字也不能多于1500个字!!");
				myform.neirong.focus();
				return false;
		}
}
//评论主题
function hftj_check(){
		 if (myform.user.value.length=="" && myform.pass.value.length==""){
				alert("您没有回复主题的权限，请先注册!!:)");
				myform.hfzt.focus();
				return false;
		}
	        if (myform.hfzt.value==""){
				alert("请输入您要评论主题!!");
				myform.hfzt.focus();
				return false;
		}
	        if (myform.hfnr.value==""){
				alert("请输入您所评论的内容!!");
				myform.hfnr.focus();
				return false;
		}
		if (myform.hfnr.value.length<=10 || form1.hfnr.value.length>=1500){
				alert(" 评论内容既不能少于10个字也不能多于200个字!!");
				myform.hfnr.focus();
				return false;
		}
}

