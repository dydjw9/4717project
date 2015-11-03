<?php
require_once('project/session.php');
require_once('project/conn.php');


foreach ($_SESSION["oderid"] as $key => $value) {
  
  
}


$userid=$_SESSION["userid"];
$orderarray=$_SESSION["oderid"];
$total=$_SESSION["totalpayment"];

$cmd="SELECT * FROM 4717member where NumID='$userid';";    //sql commend
//echo $cmd;
$result=$pdo->prepare($cmd);
$result->execute();
$flag=$result->rowCount();
$userinfo=$result->fetch(PDO::FETCH_ASSOC);


$_SESSION["phone"]=$userinfo[phone];


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

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.1.4.2-min.js"></script>
<script src="js/Calculation.js"></script>
 <script type="text/javascript">
   function save(x){
      id=x.name;
     var text=document.getElementById(id);
     var name=text.name;
     var value=text.value;
    window.location.href="project/updateinfo.php?name="+name+"&value="+value;
      text.readOnly=true;
                       }
                       function edit(x){
                         id=x.name;
                        document.getElementById(id).readOnly=false;
                         
                       } 
</script>



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
      var error=document.getElementById("sendresponse");
      error.innerHTML=http_request.responseText;
    } else {
      alert('server error'+http_request.status);
    }
  }
}

function sendsms()
{
  createRequest('project/paymentverify.php?nocache='+new Date().getTime());
}










</script>


  <script type="text/javascript">


      function checkAll(x){
        if (x.checked==false){
                 var checkbox=document.getElementsByClassName("checkBox");
                      for (var i=0;i<checkbox.length;i++){   
                            checkbox[i].checked=false;
                      }
                 getTotal();
            }
            else{
              var checkbox=document.getElementsByClassName("checkBox");
                for (var i=0;i<checkbox.length;i++){   
                 checkbox[i].checked=true;
                }
                getTotal();
            }
    }
        
        
function getTotal(){

  var total=0.0;
  var checkbox=document.getElementsByClassName("checkBox");

    for (var i=0;i<checkbox.length;i++)
    {   
        if (checkbox[i].checked==true){
          id=checkbox[i].name;
          var tot=document.getElementById(id);
          total=total+parseFloat(tot.innerHTML);
          //alert(total);
           
        }
    }
    var zong=document.getElementById("zong1");
    zong.innerHTML=total.toFixed(2);

}        
function add(x){
  var text_box=document.getElementById(x);
  text_box.value=parseInt(text_box.value)+1;
    
    var priceNode=text_box.name;
   var price=parseFloat(document.getElementById(priceNode).value);
       var totalNode=document.getElementById(document.getElementById(priceNode).name).name;
    //var totalNode=document.getElementById(priceNode).name;
    geteachtotal(text_box.value,price,totalNode);

    getTotal();

}


function minus(x){
  var text_box=document.getElementById(x);
  if (parseInt(text_box.value)>1){
     
     text_box.value=parseInt(text_box.value)-1;
     

       var priceNode=text_box.name;
       var price=parseFloat(document.getElementById(priceNode).value);
       var totalNode=document.getElementById(document.getElementById(priceNode).name).name;
       geteachtotal(text_box.value,price,totalNode);
       getTotal();
  }
  
}

function geteachtotal(quantum,price,totalNode){
     
  var tot=document.getElementById(totalNode);
  tot.innerHTML=(parseFloat(price)*parseFloat(quantum)).toFixed(2);
}


function DeleteList(x,y){
  var str1="table";
  var str2="checkbox";
  var id_table=str1.concat(x);
  var id_check=str2.concat(x);
  var table=document.getElementById(id_table);
  table.style.display="none";
  var check=document.getElementById(id_check);
  check.checked=false;
  getTotal();
  //createRequest('project/deletecart.php?nth_order='+y);
  window.location.href = "project/deletecart.php?nth_order="+x;

}

           
                    //var total=parseFloat($("#total1").php)+parseFloat($("#total2").val());
</script>
       

  <style>
  .myaccountTable button{color:red;}
  </style>

</head>
<body onload="getTotal();">
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


<div class="payment">
     <div class="payment_content">
        
      <form method="post" action="project/paybill.php">
              <label for="lastname">Last Name:</label><input type="text"  name="lastname" value="<?php echo $userinfo[LastName];?>" readonly=true required/> <br>
              <label for="firstname">First Name:</label><input type="text"  name="firstname" value="<?php echo $userinfo[FirstName];?>" readonly=true required/> <br>
              
              <label for="address1">Phone:</label><input type="text"  name="address1" value="<?php echo $userinfo[phone];?>" readonly=true class="address" required/><br>
              <label for="address2">Address:</label><input type="text"  name="address2" value="<?php echo $userinfo[Address];?>" readonly=true  class="address" required/><br>
              <br>
              <label for="total">Total:</label><input type="text"  name="total" value="S$<?php echo $total;?>" readOnly="readonly"/> <br>
              <label for="card">Card Number:</label><input type="text"  name="card" required/> <br>
              <label for="holder">Card Holder:</label><input type="text"  name="holder" required/> <br>
              <label for="obtain">obtain security code:</label><input type="button"  name="obtain" value="code" onclick="sendsms()"/> <label id="sendresponse"></label><br>
              <label for="security">Security Code:</label><input type="text"  name="security" required/> <br>
            
              <input type="submit" value="Confirm">
        </form>

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