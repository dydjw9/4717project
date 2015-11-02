<?php
require_once("project/session.php");

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
}
</style>
<script type="text/javascript">
function search(){
  var search =document.getElementById("searchbar");
  var key=search.value;
  //window.location.href="project/search.php?key="+key;

}
function blur(x){
  if(x.value==null){
    x.value='Search for Games';
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
                 <div class="bm"><a href="<?php if($Sloginstatus==1) echo "myaccount.php"; 
                 else echo "login.php"?>"><?php if($Sloginstatus==1) echo $Sfirstname; else echo "login/register"?></a></div>
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
          <input type="text" id="searchbar" name="key" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value=''"; onblur="if(this.value==''){this.value='Search for games';}" />
          <button type="submit"  class="gobar leftbar rounded"><div></div></button>
    </form>
    
    </div><!--end of search-->
          
  </div><!--end of header-top-->
    
</header><!--end of header-->
</div><!--end of wrapper-->

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/dota2.png" alt="Chania" width="460" height="260">
      </div>

      <div class="item">
        <img src="images/LOL.png" alt="Chania" width="460" height="260">
      </div>
    
      <div class="item">
        <img src="images/skyrim.png" alt="Flower" width="460" height="260">
      </div>

      <div class="item">
        <img src="images/gta.png" alt="Flower" width="460" height="260">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
</div>

<div class="categorywraper">
  <div class="leftbar category">
         <a href="category.php?index=1"><img src="games/moba/dota2/big.jpg" alt"category1"><br><span>Moba</span></a>
    </div>
    <div class="leftbar category">
          <a href="category.php?index=2"><img src="games/rpg/gta5/big.jpg"  alt"category2"><br><span>RPG</span></a>
    </div>
    <div class="leftbar category">
          <a href="category.php?index=3"><img src="games/strategy/civilization5/big.jpg" alt"category3"><br><span>Strategy</span></a>
    </div>
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