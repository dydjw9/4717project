<?php

require_once('session.php');
require_once('conn.php');

$key=$_POST['key'];


$sql="SELECT * FROM 4717item WHERE Name LIKE \"%$key%\"";

$result=$pdo->prepare($sql);
$result->execute();
$flag=$result->rowCount();
$res=$result->fetchALL(PDO::FETCH_ASSOC);

?>

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
	<script type="text/javascript">
	     var regbtn=document.getElementById("CatItemFirstPicture");
	     regbtn.onclick="ItemsPage/starwars.php";
	</script>


<head>

<style type="text/css">


<?php 
for($i=0;$i<count($res);$i++)
{
echo '
#id'.$res[$i][ItemID].' {
    width: 30%;
    height: 100px;
    background: url('.$res[$i][Path].'big.jpg);
    background-size: 100% 100px;}';
}
?>

</style>
</head>




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
          <input type="text" id="searchbar" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value='';" onblur="this.value='Search for Games';"/>
          <button class="gobar leftbar rounded"><div></div></button>
    </div><!--end of search-->
          
  </div><!--end of header-top-->
    
</header><!--end of header-->
</div><!--end of wrapper-->
    <br>

    <div class="content">


<?php
for($i=0;$i<count($res);$i++){
echo '
    	<div class="CatItem"><a href="item.php?itemid='.$res[$i][ItemID].'">
    		<div id="id'.$res[$i][ItemID].'" class="leftbar">
    		</div>
    		<div class="CatItemInfo rightbar">
    			<div class="leftbar CatItemDescrib">'.$res[$i][Name].'</div>
    			<div class="rightbar CatItemPrice">'.$res[$i][Price].'</div>
    		</div></a>
    	</div>
';
  }
?>
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