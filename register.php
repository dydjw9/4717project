<!DOCTYPE html>
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameStar</title>
<link rel="icon" href="images/title.ico" type="image/x-icon">
<link rel="newer stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="newer stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>	
<script language="javascript">
var http_request = false;
function createRequest(url) {
	
	http_request = false;
	if (window.XMLHttpRequest) { 										
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { 								
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("cannot create");
		return false;
	}
	http_request.onreadystatechange = alertContents;   					
	
	http_request.open("GET", url, true);								
	
	http_request.send(null);
}
function alertContents() {   											
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			var error=document.getElementById("usernameerror");
$response=http_request.responseText;
if($response=="ok")
{
			error.innerHTML="ok";
      document.getElementById("submitbutton").disabled=false;
    }
      else {
        error.innerHTML=$response;
        document.getElementById("submitbutton").disabled=true;
      }
		} else {
			alert('server error'+http_request.status);
		}
	}
}
</script>
<script type="text/javascript">
	    function chkPassword (event){
		
	     	var myPassword=event.currentTarget;
	     	var pos=myPassword.value.search(/^(?=.*[0-9].*)(?=.*[A-Z].*)(?=.*[a-z].*).{8,15}$/);
	     	var error=document.getElementById("passworderror");
	     	if (pos !=0) {
			    error.style.display="block";
			    error.innerHTML="Between 8 and 15 digits, at lest one Capital letter, lower case letter, and numer";
	     		document.getElementById("submitbutton").disabled=true;
          myPassword.focus();
	     	    myPassword.select();}
	     	else {error.innerHTML='';error.style.display="none";
        document.getElementById("submitbutton").disabled=false;}
	     }
		 function chkPhone (event){
		
	     	var myPhone=event.currentTarget;
	     	var pos=myPhone.value.search(/^[\d]+$/);
	     	var error=document.getElementById("phoneerror");
	     	if (pos !=0) {
			    error.style.display="block";
			    error.innerHTML="phone number can only be digits";
	     		document.getElementById("submitbutton").disabled=true;
                myPhone.focus();
	     	    myPhone.select();}
	     	else {error.innerHTML='';error.style.display="none";
        document.getElementById("submitbutton").disabled=false;}
	     }
        function confirmPassword(event){
        	var PassWord=document.getElementById("password").value;
        	var confirmPassword=event.currentTarget;
        	var error=document.getElementById("confirmpassworderror");
        	if (PassWord!=confirmPassword.value){
			     error.style.display="block";
			     error.innerHTML="Please confirm your password correcty";
           document.getElementById("submitbutton").disabled=true;
        	     confirmPassword.focus();
        	     confirmPassword.select();
        	}
        	else {error.innerHTML='';
			error.style.display="none";
          document.getElementById("submitbutton").disabled=false;}
        }

       	function chkUserName(event)
		
		{   
			
			var username = event.currentTarget.value;
			var pos=username.search(/^[\w]+@[\w]+.[a-zA-Z\.]{2,10}$/);
			var error=document.getElementById("usernameerror");
			error.innerHTML='';
	     	if (pos !=0) {
			    error.style.display="block";
			    error.innerHTML="Please enter a valid email address";
                document.getElementById("submitbutton").disabled=true;
	     		myPassword.focus();
	     	    myPassword.select();}
	        else {document.getElementById("submitbutton").disabled=false;
		
		//createRequest('checkusername.php?username='+username+'&nocache='+new Date().getTime());
		            createRequest('project/checkusername.php?username='+username+'&nocache='+new Date().getTime());
	             } 
		}
	
	</script>
	

</head>
<body>
 <div class="wrapper">
  <header class="header" id="nav_main">
      
    <div class="header-top">
      <h1 id="logo" class="leftbar"><a href="index.php">GameStar</a></h1>
      
      <nav id="navigation" class="leftbar"> 
        <div id="nav_main_bar">
          <ul>
              <li>
                <div class="bm"><a href="category.php?index=1"><div id="menu"></div></a></div>
                <div class="lm">
                  <ul>
                    <li><a href="category.php?index=1">Moba</a> </li>
                    <li><a href="category.php?index=2">RPG</a> </li>
                    <li><a href="category.php?index=3">Strategy</a> </li>
                    <li class="clear"></li>
                  </ul>
                </div>
              </li>
              
              <li class="active home" id="home"> 
                 <div class="bm"><a href="index.php">Home</a></div>
              </li>
            

              <li id="cat1">
                <div class="bm"><a href="category.php?index=1">Moba</a></div>
                <div class="lm">
                  <ul>
                    <li><a href="item.php?itemid=1031">Dota2</a> </li>
                    <li><a href="item.php?itemid=1032">LOL</a> </li>
                    <li><a href="item.php?itemid=1033">StormHero</a> </li>
                    <li class="clear"></li>
                  </ul>
                </div>
              </li>

              <li id="cat2">
                <div class="bm"><a href="category.php?index=2">RPG</a></div>
                <div class="lm">
                  <ul>
                    <li><a href="item.php?itemid=2031">Assasin</a> </li>
                    <li><a href="item.php?itemid=2032">Fallout4</a> </li>
                    <li><a href="item.php?itemid=2033">GTA5</a> </li>
                    <li class="clear"></li>
                  </ul>
                </div>
              </li>

              <li id="cat3">
                 <div class="bm"><a href="category.php?index=3">Strategy</a></div>
                 <div class="lm">
                  <ul>
                    <li><a href="item.php?itemid=3031">Civilization</a> </li>
                    <li><a href="item.php?itemid=3032">Rome2</a> </li>
                    <li><a href="item.php?itemid=3033">TotalWar</a> </li>
                    <li class="clear"></li>
                  </ul>
                   </div>
               </li>

              <li class="active home" id="log"> 
                 <div class="bm"><a href="<?php if($Sloginstatus==1) echo "myaccount.php"; else echo "login.php"?>"><?php if($Sloginstatus==1) echo $Sfirstname; else echo "login/register"?></a></div>
                 <?php 
                $content='
              <div class="lm">
                  <ul>
                    <li><a href="myaccount.php">My Account</a> </li>
                    <li><a href="project/logout.php">log out</a> </li>
                    <li class="clear"></li>
                  </ul>
                </div>';
               // $content=addslashes($content);
                if($Sloginstatus==1) 
                {
                  echo $content;
                }
                  ?>
              </li>
        </ul>
      </div> <!--end of nav_main_bar-->
            
    </nav> <!--end of navigation-->
    <div class="wrap rounded">
      <form method="post" action="search.php">
          <input type="text" id="searchbar" name="key" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value='';" onblur="if(this.value==''){this.value='Search for games';}"/>
          <button type="submit"  class="gobar leftbar rounded"><div></div></button>
    </form>
    
    </div><!--end of search-->
          
  </div><!--end of header-top-->
    
</header><!--end of header-->
</div><!--end of wrapper-->
        <br>

    
<div class="registerform">
          
           
            <div class="register">
    	        <br>
                <h2>Register your account</h2>
				<br>
    	        <form method="post" action="project/register.php">
    	           <label for="lastname">Last Name:</label><input type="text"  name="lastname" required/> <br>
    		       <label for="firstname">First Name:</label><input type="text"  name="firstname" required/> <br>
    		       <label for="gender">Gender:</label><input type="radio" value="male" name="gender"/><span class="genderfont">Male&nbsp;&nbsp;&nbsp;</span>
    		                                          <input type="radio" value="female" name="gender"/><span class="genderfont">Female<span><br>
                   <label for="birthday" >Birthday:</label><input type="date" name="birthday" required>
				   <label for="handphone">Phone: </label><input type="text" name="handphone" id="phone" required>
    		       <label for="username">UserEmail:</label><input type="email" value="some@where.com"  id="username" name="username" onfocus="this.value='';" onblur="if(this.value==''){this.value='some@where.com';}" required/>     
	
    		       			   			   
    		       <label for="userpassword">Password:</label><input type="password" value='' id="password" name="userpassword"  required/>
    		       
    		       <label for="passwordconfirm">Confirm Password:</label><input type="password" value='' name="passwordconfirm" id="confirmpassword"required/>
    		       <label for="address">Address:</label><input type="text"  name="address" required/>
    	           <script type="text/javascript">
    	              var PassWord=document.getElementById("password");
    	              var ConfirmPassword=document.getElementById("confirmpassword");
					  var username=document.getElementById("username");
					  var phone=document.getElementById("phone");
    	              PassWord.addEventListener("change", chkPassword,false);
    	              ConfirmPassword.addEventListener("change",confirmPassword,false);
						phone.addEventListener("change", chkPhone,false);
					 username.addEventListener("change", chkUserName,false);
    	            </script>

    	            <div class="rightbar"><input type="submit" id="submitbutton" value="Register" name="register">
    	            </div> <!--end of rightbar-->
					
    	        </form><!--end of form-->
            </div><!--end of register-->
			<div class="showpanel">
			                       <div id="phoneerror" class="rounded"></div>
                                   <div id="usernameerror" class="rounded"></div>
			                       <div id="passworderror" class="rounded"></div>
								   <div id="confirmpassworderror" class="rounded"></div>    
			</div>
			
			
</div><!--end of registerform-->


    <br>
    
    <div class="middle">
    </div>


    <div id="footer">
      <!-- shell -->
      <div class="shell">
        <!-- footer-cols -->
        <div class="footer-cols">
          <div class="col">
            <h2>SERVICES</h2>
            <ul>
              <li><a href="#"><span>Delivery</span></a></li>
              <li><a href="#"><span>Worontory</span></a></li>
              <li><a href="#"><span>International Services </span></a></li>
            </ul>
          </div>

          <div class="col">
            <h2>PARTNERS</h2>
            <ul>
              <li><a href="#"><span>Alibaba</span></a></li>
              <li><a href="#"><span>Paypal</span></a></li>
              <li><a href="#"><span>AMAZON </span></a></li>
            </ul>
          </div>

          <div class="col">
            <h2>SOCIAL</h2>
            <ul>
              <li><a href="#"><span>Blog</span></a></li>
              <li><a href="#"><span>Facebook</span></a></li>
              <li><a href="#"><span>Youtube </span></a></li>
            </ul>
          </div>

          <div class="col">
            <h2 style="margin-left:60px;">CONTACT us</h2>
            <ul>
            <li><p>Email: <a href="#">info@gamestar.com</a></p></li>
            <li><p>Phone: 84649347</p></li>
            <li><p>Address: NTU EEE </p></li>
          </ul>
          </div>
          <br>
          
        </div>
        <!-- end of footer-cols -->
        <div class="footer-bottom">
            <p class="copy">Copyright &copy; 2015<span>|</span>Design by: <a href="http://chocotemplates.com" target="_blank">www.GameStar.com</a></p>
        </div>
      </div>
      <!-- end of shell -->
      
          
</div>
    <!-- footer -->
</body>


</html>