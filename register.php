
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>GameStar Register</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="newer stylesheet" href="css/style.css" type="text/css" media="all" />

	<script src="js/jquery-1.11.0.min.js"></script>
	<?php
require_once("project/test_ajax.php");
?>
	<script type="text/javascript">

	
	    function chkPassword (event){
	     	var myPassword=event.currentTarget;
			
	     	var pos=myPassword.value.search(/^(?=.*[0-9].*)(?=.*[A-Z].*)(?=.*[a-z].*).{8,15}$/);
			
	     	var error=document.getElementById("passworderror");
	     	if (pos !=0) {error.innerHTML="Between 8 and 15 digits, at lest one Capital letter, lower case letter, and numer";
	     		myPassword.focus();
	     	    myPassword.select();}
	     	else {error.innerHTML='';}
	     }
        function confirmPassword(event){
			
        	var PassWord=document.getElementById("password").value;
        	var confirmPassword=event.currentTarget;
        	var error=document.getElementById("confirmpassworderror");
			
        	if (PassWord!=confirmPassword.value){error.innerHTML="Please confirm your password correcty";
        	     confirmPassword.focus();
        	     confirmPassword.select();
        	}
        	else {error.innerHTML='';}
        }
		function chkUserName(event)
		
		{
			var username = event.currentTarget.value;
		
	if(username=="") {
		
		form1.username.focus();
		return false;
	}
	else {
		//createRequest('checkusername.php?username='+username+'&nocache='+new Date().getTime());
		createRequest('/project/checkusername.php?username='+username+'&nocache='+new Date().getTime());
	}
		}

       
	</script>

</head>
<body>
    <div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
					<h1 id="logo" class="leftbar"><a href="index.html">GameStar</a></h1>
					<nav id="navigation" class="leftbar">	
						<ul>
							<li class="active home"><a href="index.html">Home</a></li>
							<li><a href="category1.html">Category1</a></li>
							<li><a href="category2.html">Category2</a></li>
							<li><a href="category3.html">Category3</a></li>
							<li><a href="Login.php">Login/Register</a></li>							
						</ul>

					</nav>
					<div class="wrap rounded">
                                            <input type="text" id="searchbar" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value='';"/>
                                            <button class="gobar leftbar rounded"><div></div></button>
                    </div>
				</div>
			</div>
		</header>

    </div>
    <br>

    
        <div class="registerform">
            <h1 id='h1'>Register Form</h1>
            <br>
            <div class="register">
    	        <br>
                <h2>Register your account</h2><br>
    	        <form method="get" name="registerform" action="project/register.php">
    	           <label for="lastname">Last Name:</label>
    		       <input type="text"  name="lastname" required/> <br>
    		       <label for="firstname">First Name:</label>
    		       <input type="text"  name="firstname" required/> <br>
    		       <label for="gender">Gender:</label>
    		       <input type="radio" value="male" name="gender"/><span class="genderfont">Male&nbsp;&nbsp;&nbsp;</span>
    		       <input type="radio" value="female" name="gender"/><span class="genderfont">Female<span><br>
                   <label for="birthday" >Birthday:</label>
                   <input type="date" name="birthday" required>
    		       <label for="username">UserEmail:</label>
    		       <input type="email" value="some@where.com"  id = "username" name="username" onfocus="this.value='';" onblur="if(this.value==''){this.value='some@where.com';}" required/>
				   <span id="usernameerror" class="rounded"></span>
    		       <label for="userpassword">Password:</label>
    		       <input type="password" value='' id="password" name="userpassword"  required/><span id="passworderror" class="rounded"></span>
    		       <label for="passwordconfirm">Confirm Password:</label>
    		       <input type="password" value='' name="passwordconfirm" id="confirmpassword"required/><span id="confirmpassworderror" class="rounded"></span>
    		       <label for="address">Address:</label>
    		       <input type="text"  name="address" required/>
    		       
    		      
    	        

    	        <script type="text/javascript">
    	            var PassWord=document.getElementById("password");
    	            var ConfirmPassword=document.getElementById("confirmpassword");
    	            PassWord.addEventListener("change", chkPassword,false);
    	            ConfirmPassword.addEventListener("change",confirmPassword,false);
					var username=document.getElementById("username");
					username.addEventListener("change", chkUserName,false);
    	        </script>

    	        <div class="rightbar">
    	        	
    	        	<input type="submit" value="Register" name="register">
    	        </div>
    	        </form>
    	
            </div>
        </div>
    <br>
    </div>
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
						<h2>CONTACT us</h2>

						<p>Email: <a href="#">info@gamestar.com</a></p>
						<p>Phone: 84649347</p>
						<p>Address: NTU EEE </p>
					</div>
					
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