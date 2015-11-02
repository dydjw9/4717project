<?php
require_once("project/session.php");
require_once("project/conn.php");
$itemid=$_GET["itemid"];
$_SESSION["itemid"]=$itemid;

$cmd="SELECT * FROM 4717item where ItemID='$itemid';";
$result=$pdo->prepare($cmd);
$result->execute();
$res=$result->fetch(PDO::FETCH_ASSOC);



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
<link type="text/css" href="css/star.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/star.js"></script>
	<script type="text/javascript">
	     var regbtn=document.getElementById("register");
	     regbtn.onclick="register.php";
	</script>
<style type="text/css">
 

<?php 

echo '
#id'.$res[ItemID].' {
      width: 520px;
    height: 400px;
    background: url('.$res[Path].'big.jpg);
    background-size: 100% 100%;
  }';


?>

</style>
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

    <div class="Itemcontent">
    	<div class="ItemcontentHead">
    		<div class="ItemcontentHeadPicture leftbar" 
        <?php
        echo 'ID="id'.$res[ItemID].'"';
        ?>>
            </div><!--end of ItemcontentHeadPicture-->
    		<div class="ItemcontentHeadInfo rightbar">
    			  <h3><strong>System Requirement</strong></h3><br>
           <div class="requirement">
             
             <label>OS</label>: <span id="os"><?php echo $res[Os]?></span> <br> 
             <label>Processor</label>:<span id="cpu"><?php echo $res[Cpu]?></span> <br> 
             <label>Memory</label>: <span id="memory"><?php echo $res[Ram]?></span><br>
             <label>Hard Drive</label>: <span id="hd"><?php echo $res[Hd]?></span> <br>
             <label>Price</label>: $<?php echo $res[Price]?>  <br>
             
                   <label id="rating">Ratings: <span>
                    <?php 
                     $cmdrating="SELECT * FROM 4717rating where ItemID='$itemid';";


  $db=new mysqli($host,$user,$pwd,$dbName);
  $result_rating=$db->query($cmdrating);
$count=$result_rating->num_rows;

                

                    $sum=0.0;
                    for($i=0;$i<$count;$i++){
                      $row=$result_rating->fetch_assoc();
                      $sum=$sum+$row[Rating];

                    }
                    echo number_format($sum/$count,2);
                      
                    ?>
                  </span> </label> <br>
             </div>
    			   
                   <div id="xzw_starSys">
                        <div id="xzw_starBox">
                           <ul class="star" id="star">
                               <li><a href="google.com" title="1" class="one-star" style="z-index:3;">1</a></button></li>
                               <li><a href="project/updaterating.php?rating=2" title="2" class="two-stars">2</a></button></li>
                               <li><a href="project/updaterating.php?rating=3" title="3" class="three-stars">3</a></li>
                               <li><a href="project/updaterating.php?rating=4" title="4" class="four-stars">4</a></li>
                               <li><a href="project/updaterating.php?rating=5" title="5" class="five-stars">5</a></li>
                            </ul>
                           

                            <script type="text/javascript">
                            function update(x){
                                   window.location.href = "project/updaterating.php?rate="+x;
                            }
                            </script>
                        </div><!--end of xzw_starBox-->
                        <div class="current-rating" id="showb">
                        </div><!--end of current-rating-->
             
                        <div class="description"></div><!--end of description-->
             </div><!--end of ItemcontentHeadInfo-->
             
             <a href="project/addtocart.php?itemid=<?php echo $itemid?>"><button>Add to Chart</button></a>


        </div><!--end of ItemcontentHead-->
         


    </div><!--end of Itemcontent-->
</div>
    
	<div class="comments">
	    <div class="Aboutthisgame">
        <?php
        $path="$res[Path]big.txt";
        $size = filesize($path);
        //approach one
        //$myfile = fopen($path, "r") or die("Unable to open file!");
        //echo fread($myfile,$size);

        // approach two
        //echo readfile($path);
         
        //approach three 
        $file = fopen($path,"r");
         while(! feof($file)){
               echo fgets($file). "<br />";
         }
         fclose($file);

        ?>
             
        </div><!--Aboutthisgame end-->
	
	
        <div class="review">
            <div class="quiz">
                <h3>I want comment</h3>
                <div class="quiz_content">
                     <form action="project/updatecomment.php" id="" method="post">
                          <div class="l_text">
                               <label class="m_flo">Contents：</label>
                               <textarea name="comment" id="comment" class="text">
                               </textarea>
                               <span class="tr">words between 5-200</span>
                          </div><!--l_text end-->
                          <button class="btm" type="submit">Comment</button>
                     </form>
                </div><!--quiz_content end-->
            </div><!--quiz end-->
        </div><!--review end-->
        
<?php
$db_comment=new mysqli($host,$user,$pwd,$dbName);
$cmd_comment="SELECT * FROM 4717comment where ItemID='$itemid';";
$result_comment=$db_comment->query($cmd_comment);
$count_comment=$result_comment->num_rows;
for($i=0;$i<$count_comment;$i++)
{

$row=$result_comment->fetch_assoc();
$time=$row[Time];
$comment=$row[Comment];
$user=$row[FirstName];

echo '

            <div class="past_review">
                <div class="user">'.$user.'
                </div>
                <div class="user_review">
                      <div class="user_time">'.$time.'</div>
                      <div class="user_comment">'.$comment.'</div>
                </div>
            </div>
 

';

  }

?>



    </div><!--comments end-->
      
   

    <div style="width:100%;height:200px;">
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