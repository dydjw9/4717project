<?php
require_once("project/session.php");
require_once("project/conn.php");
$userid=$_SESSION["userid"];


$cmd="SELECT * FROM 4717order where UserID='$userid';";
$result=$pdo->prepare($cmd);
$result->execute();
$res=$result->fetchALL(PDO::FETCH_ASSOC);


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


<script type="text/javascript">
      
        function show(x){
          //var id=x.getElementsByTagName("button")[0].name;
          //var input=document.getElementById(id);
             
               x.getElementsByTagName("button")[0].style.visibility="visible";
                 x.getElementsByTagName("button")[1].style.visibility="visible";
        }
        function noshow(x){
          var id=x.getElementsByTagName("button")[0].name;
          var input=document.getElementById(id);
          if(input.readOnly==true){
        x.getElementsByTagName("button")[0].style.visibility="hidden";
        x.getElementsByTagName("button")[1].style.visibility="hidden";
    }
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

function pay(x,y){
 
  window.location.href = "project/paysingleitem.php?orderid="+x;

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

 
<div class="account_chart">   

         <div class="myaccount">
         	<h2>Your information</h2>
          <?php
          $cmd_info="SELECT * FROM 4717member where NumID='$userid';";
          $db_info=new mysqli($host,$user,$pwd,$dbName);
          $result_info=$db_info->query($cmd_info);
          $row_info=$result_info->fetch_assoc();
          echo '

        	<table class="myaccountTable">
        		<tr><td><label for="lastname">Last Name:</label></td>
    		       <td><input type="text"  name="lastname" readOnly=true value="'.$row_info[LastName].'" id="lastname"/> </td>
               <td></td>
        			</tr>
        		<tr><td><label for="firstname">First Name:</label></td>
    		       <td><input type="text"  value="'.$row_info[FirstName].'" name="firstname" id="firstname" readonly="readonly"/></td>
                 <td></td>
        			</tr>

        		<tr><td><label for="firstname">Gender:</label></td>
    		       <td><input type="text" value="'.$row_info[Gender].'" name="gender" id="gender" readOnly=true/></td>
                 <td></td>
        				</tr>

        		<tr><td><label for="birthday" >Birthday:</label></td>
                   <td><input type="text" value="'.$row_info[Birthday].'" name="birthday" id="birthday" readonly="readonly"/></td>
                     <td></td>
        			</tr>
        		<tr><td><label for="username">UserEmail:</label></td>
        			<td><input type="email" value="'.$row_info[PubEmail].'" name="username" id="username" readonly="readonly"/></td>
                <td></td>
        			</tr>
        		<tr><td><label for="handphone">HandPhone:</label></td>
        			<td><input type="text" id="handphone" name="phone" value="'.$row_info[phone].'" readonly="readonly"/></td>
        			<td onmouseover="show(this);" onmouseout="noshow(this);"><button id="passwordSave" name="handphone" onClick="save(this);">save</button><button id="passwordEdit" name="handphone" onClick="edit(this);">edit</button></td>
        		</tr>
        		<tr><td>  <label for="address">Address:</label></td>
        			<td><input type="text"  name="Address" id="address" value="'.$row_info[Address].'" readonly="readonly"/></td>
        			<td onmouseover="show(this);" onmouseout="noshow(this);"><button id="addressSave" name="address" onClick="save(this);">save</button><button id="addressEdit" name="address" onClick="edit(this);">edit</button></td>
        		</tr>

        	</table>
          ';
          ?>
    		<div class="check_bought">
        	<a href="myorder.php"><button>Check my bought items</button></a>
        </div>
    		    
        </div>
        
        
   



    <div class="gwc">
    	<h2>Your Shopping Chart</h2>
	    <table cellpadding="0" cellspacing="0" class="gwc_tb1">
		  <tr>
			<td class="tb1_td1"><input id="CheckboxAll" checked="true" type="checkbox"  class="allselect" onclick="checkAll(this);"/></td>
			<td class="tb1_td2">Select All</td>
			<td class="tb1_td3"></td>
			
			<td class="tb1_td5">Quantity</td>
			<td class="tb1_td8">Unit Price</td>
			<td class="tb1_td6">Amount</td>
			<td class="tb1_td7">Operation</td>
		  </tr>
	     </table>   <!---The banner---->

	
<?php
$totalitem=count($res)-1;
for($j=0;$j<count($res);$j++)
{
$i=$totalitem-$j;
$aa=$res[$i][ItemID];
$cmd="SELECT * FROM 4717item where ItemID='$aa';";
$result2=$pdo->prepare($cmd);
$result2->execute();
$res2=$result2->fetch(PDO::FETCH_ASSOC);
if($res[$i][Status]==1)      //o is unpaid   1 is paid
{
echo '

  <table cellpadding="0" cellspacing="0" class="gwc_tb2" id="table'.$res[$i][ItemID].'">
    <tr>
      <td class="tb2_td1"><input type="checkbox" class="checkBox" checked="true"  name="isselect['.$i.']" value="'.$res[$i][ItemID].'" id="checkbox'.$res[$i][ItemID].'" onClick="getTotal();"/><label style="font-size:0.3px;">'.date("Y-m-d",$res[$i][Date]).'</label></td>
      <td class="tb2_td2"><a href="item.php?itemid='.$res[$i][ItemID].'"><img src="'.$res2[Path].'big.jpg"/></td>
      <td class="tb2_td3"><a href="item.php?itemid='.$res[$i][ItemID].'">'.$res2[Name].'</a></td>
      <td class="tb2_td4"></td>
      <td class="tb1_td5">
        <input id="min1" name=""  style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="-" onClick="minus(\'id'.$res[$i][ItemID].'\');"/>
        <input id="id'.$res[$i][ItemID].'" name="price['.$i.']" type="text" value="1" style=" width:30px; text-align:center; border:1px solid #ccc;" />
        <input id="add1" name="" style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="+" onClick="add(\'id'.$res[$i][ItemID].'\');"/>
      </td>
      <td class="tb1_td8"><input type="text" id="price['.$i.']" name="checkbox'.$res[$i][ItemID].'" value="'.$res2[Price].'" readonly="readonly"/></td>
      <td class="tb1_td6"><label id="isselect['.$i.']" class="tot" style="color:#ff5500;font-size:14px; font-weight:bold;" value="'.$res2[Price].'">'.$res2[Price].'</label></td>
      <td class="tb1_td7"><button type="button" name="table'.$res[$i][ItemID].'" >Paid</button></td>
    </tr>
  </table>

';
}
else
{

echo '

  <table cellpadding="0" cellspacing="0" class="gwc_tb2" id="table'.$res[$i][ItemID].'">
    <tr>
      <td class="tb2_td1"><input type="checkbox" class="checkBox" checked="true"  name="isselect['.$i.']" value="'.$res[$i][ItemID].'" id="checkbox'.$res[$i][ItemID].'" onClick="getTotal();"/><label style="font-size:0.3px;">'.date("Y-m-d",$res[$i][Date]).'</label></td>
      <td class="tb2_td2"><a href="item.php?itemid='.$res[$i][ItemID].'"><img src="'.$res2[Path].'big.jpg"/></td>
      <td class="tb2_td3"><a href="item.php?itemid='.$res[$i][ItemID].'">'.$res2[Name].'</a></td>
      <td class="tb2_td4"></td>
      <td class="tb1_td5">
        <input id="min1" name=""  style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="-" onClick="minus(\'id'.$res[$i][ItemID].'\');"/>
        <input id="id'.$res[$i][ItemID].'" name="price['.$i.']" type="text" value="1" style=" width:30px; text-align:center; border:1px solid #ccc;" />
        <input id="add1" name="" style=" width:20px; height:18px;border:1px solid #ccc;" type="button" value="+" onClick="add(\'id'.$res[$i][ItemID].'\');"/>
      </td>
      <td class="tb1_td8"><input type="text" id="price['.$i.']" name="checkbox'.$res[$i][ItemID].'" value="'.$res2[Price].'" readonly="readonly"/></td>
      <td class="tb1_td6"><label id="isselect['.$i.']" class="tot" style="color:#ff5500;font-size:14px; font-weight:bold;" value="'.$res2[Price].'">'.$res2[Price].'</label></td>
      <td class="tb1_td7"><button type="button" name="table'.$res[$i][ItemID].'" onClick="pay('.$res[$i][OrderID].','.$i.'); ">Pay</button></td>
    </tr>
  </table>

';
  }
}

?>

	
	<table cellpadding="0" cellspacing="0" class="gwc_tb3">
		<tr>
			<td class="tb3_td3" colspan="7" style="text-align:left;">Total Amount:<span>$</span><span style=" color:#ff5500;"><label id="zong1" style="color:#ff5500;font-size:14px; font-weight:bold;" value="0">0</label></span></td>
	
		</tr>
	</table>

  





</div>





   
 </div>
  <div class="accountmiddle">
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