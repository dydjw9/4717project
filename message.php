<?php
require_once("project/session.php");
$index=null;
$index=$_GET['message'];        //0: register successfull, go to emil account to activate. 1:you account is not activated please activate
$itemid=$_SESSION["itemid"];
$message=array(0=>"Thanks for joining us, please check the email we sent to 
  you at $Spubemail to activate your account!<br>You will be redirect to Home page
   in <label id='secondclock' style='color:red;'>3</label> seconds",
  1=>"Sorry, you account is not been activated, please check the ema
  il we sent to you at $Spubemail to activate your account!<br>You will be redirect to account page
   in <label id='secondclock' style='color:red;'>3</label> seconds",
  2=>"Congratulations $Sfirstname, your account has been activated!<br>You will be redirect to Home page
   in <label id='secondclock' style='color:red;'>3</label> seconds",
  3=>"Your Item is already in your cart.<br>You will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
  4=>"Your Item has been added to your cart<br>You will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
  5=>"Sorry, you did not select any item.<br>You will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
   6=>"Sorry, you security code is wrong, please try again,<br>You will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
   7=>"Your payment is Successfully! A reminding email has been sent to your email account.<br>You will be 
   redirect to youraccount page
   in <label id='secondclock' style='color:red;'>3</label> seconds",
   8=>"Sorry, no item matches your searched games.<br>You will be redirect to Home page
   in <label id='secondclock' style='color:red;'>3</label> seconds",
   9=>"Sorry, you have not brought this item, so that you cannot comment or rate for it. ou will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
   10=>"Your password has been reset. You will be redirect to login page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
   11=>"Sorry, no such account. You will be redirect to previous page
   in <label id='secondclock' style='color:red;'>3</label> seconds ",
   12=>"An email to change your password has been sent to your email. <br>You will be redirect to home page
   in <label id='secondclock' style='color:red;'>3</label> seconds "
   );
$redirect=array(
  0=>"index.php",
   1=>"myaccount.php",
   2=>"index.php",
   3=>"item.php?itemid=$itemid",
   4=>"item.php?itemid=$itemid",
5=>"myaccount.php",
6=>"payment.php",
7=>"myaccount.php",
8=>"index.php",
9=>"item.php?itemid=$itemid",
10=>"login.php",
11=>"forgotpassword.php",
12=>"index.php"
  );
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameStar</title>
<link rel="icon" href="../images/title.ico" type="image/x-icon">
<link rel="newer stylesheet" href="../css/style.css" type="text/css" media="all" />
<link href="../css/nav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="newer stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<style>
.register_response{width:50%;height:120px;text-align:center;font-size:20px;color:#F0FFFF;background:rgba(62,80,101,1);
                   border: 2px solid rgba(88,102,119,1);padding-top:50px;margin-top:200px;margin-left:25%;display:table;
}
</style>

<script type="text/javascript">
function startclock(seconds)
{ 
if(seconds==0)
{
  window.location.href=<?php echo '"'.$redirect[$index].'"';?>;
}
document.getElementById("secondclock").innerHTML=seconds;
i=seconds-1;
   das=setTimeout("startclock("+i+")",1000);


}


</script>
</head>
<body <? echo 'onload="startclock(3)"'; ?>>
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
          <input type="text" id="searchbar" name="key" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value=''"; onblur="if(this.value==''){this.value='Search for games';}"" />
          <button type="submit"  class="gobar leftbar rounded"><div></div></button>
    </form>
    </div><!--end of search-->
          
  </div><!--end of header-top-->
    
</header><!--end of header-->
</div><!--end of wrapper-->
        <br>

    
<div class="register_response">
          
    <p><?php echo $message[$index];?></p>
           
			
			
</div>


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