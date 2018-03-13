<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body onload="fuck()">
<div class="title"> E-shop</div>
<?php 
session_start();
//echo var_dump($_SESSION['Username']);
$user=$_SESSION['Username'];
$pswrd=$_SESSION['Password'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("Unable to connect");
	$sql="SELECT * FROM customers where Username='$user' and Password='$pswrd'";
	if($res=mysqli_query($conn,$sql)){
		//echo"asdf";
	if(mysqli_num_rows($res)>0){
		//echo "as";
		while($fetch=mysqli_fetch_assoc($res)){	
$username=$fetch['Username'];
$mobile=$fetch['Mobile_no'];
$address=$fetch['Address'];
$pin=$fetch['Pincode'];
$city=$fetch['City'];
		}
		
	}
	}
	
if(empty($_SESSION['Username'])){
echo "<div class=\"start\">";
echo "<a href=\"#\" id=\"loginclick\" class=\"jquerylogin\">Login</a>";
echo "<a href=\"para.html\">Signup</a>";
echo "</div>";

}

else{
	echo "<div class=\"drop\">";
//session_start();
echo $_SESSION['Username']."'s account";
echo "<div class=\"dropdown-content1\">";
echo "<a href=\"account.php\"><span class=\"contents\">Account</span></a>";
echo "<span class=\"contents\">Orders</span>";
echo "<span class=\"contents\">Wallet</span>";
echo "<span class=\"contents\">Reviews</span>";
echo "<span class=\"contents\">Wishlist</span>";
echo "<A href=\"logout.php\"><span class=\"contents\">Logout</span></a>";

echo "</div>";
echo "</div>";
}
?>
<script>
$(document).ready(function(){
		$(".dropdown-content1").hide();
	$(".drop").click(function(){
		$(".dropdown-content1").toggle();
	});
});
</script>
<div id="lm" class="login-modal">
<div class="login-content">
<div class="login-border1">
</div>
<div class="login-border2">
<span class="close">&times;</span>
<form method="post" action="check.php">
<div class="enter-title">Enter your Username/Mobile number</div>
<input type="text" name="username" class="login-form" required>
<div class="enter-paswrd">Enter password</div>
<input type="password" name="passrd" class="login-form" autocomplete="on"  required><br>	
<button type="submit"class="getin">Get in</button>
<a href="#">
<div class="new-sign">
New to E-shop.!?
</div>
</a>
</form>
<div class="forgot">Forgot anything!?</div>
</div>
</div>
</div>
<script>
var clicks1=document.getElementById("loginclick");
var modal=document.getElementById('lm');
var close=document.getElementsByClassName("close")[0];
clicks1.onclick=function(){
modal.style.display="block";
}
close.onclick=function(){
modal.style.display="none";
}
window.onclick=function(event){
if(event.target==modal){
modal.style.display="none";
}
}
</script>
<div class="clear"></div>
<div class="Buy1">
<div class="Buy-border1" target="login">
<div class="Buy-heading">Login</div>
<div class="Buy-border1-head">Name: <?php echo "<span class=\"ans\">$username</span>"; ?></div>
<div class="Buy-border1-head">Mobile: <?php echo "<span class=\"ans\">$mobile</span>"; ?></div>
<div class="change" id="change">Change</div>
</div>
<div class="Buy-border2" target="address">
<div class="Buy-heading">Address</div>
<div class="Buy-border1-head">Name: <?php echo "<span class=\"ans\">$username</span>"; ?></div>
<div class="address-1">Address:<?php echo "<span class=\"addr\">$address</span>";?></div>
<div class="change" id="change">Change</div>
</div>
<div class="Buy-border21">

</div>
<div class="Buy-border22">

</div>
</div>

<div class="Buy-border3">
<div class="Buy-border31" id="login" style="display: none;">
<div class="Login-title">
<div class="Login-head">Login</div>
</div>
<div class="Buy-border1-head">Name: <?php echo "<span class=\"ans\">$username</span>"; ?></div>
<div class="Buy-border1-head">Mobile: <?php echo "<span class=\"ans\">$mobile</span>"; ?></div>
<div class="Buy-border1-add">Advantages of secure login</div>
<div class="Buy-border1-adde"><span class="color">&#9755;</span> Easily Track Orders,Hassle free Returns</div>
<div class="Buy-border1-adde"><span class="color">&#9755;</span> Get Relevant Details Alerts and Recommendation</div>
<div class="Buy-border1-adde"><span class="color">&#9755;</span> Wishlist,Ratings,Reviews and more</div>
<div class="logout">Logout & Sign in to another account</div>
<Div class="continue">CONTINUE CHECKOUT</div>
<div class="condition">Please note that upon clicking *Logout* you will lose all items in cart and will be redirected to E-shop home page</div>
</div>
<div class="Buy-border31" id="address">
<div class="Login-title">
<div class="Login-head">Delivery- Address</div>
</div>
<div class="Buy-border1-head">Name: <?php echo "<span class=\"ans\">$username</span>"; ?></div>
<!--<div class="Buy-border1-head">Mobile: <?php echo "<span class=\"ans\">$mobile</span>"; ?></div>!-->
<div class="new-addr">Delivery-Address:<textarea id="addres_info" cols="40" rows="5" class="address_box2"></textarea></div>
<div class="pincode">Pincode:<div><input type="text" id="pincode_info" class="pincode_box"></div></div>
<div class="city">City:<div><input type="text" id="city_info" class="city_box"></div></div><Div class="clear"></div>
<div class="reciever">Reciever-Details:</div><div class="rec-name">Name:<input type="text" id="reciever_info" class="reciever_box"><span class="rec-name">Mobile-number:<input type="text" id="reciever_info" class="reciever_box"></span>
<div class="continue1">CONTINUE CHECKOUT</div>
</div>
</div>
</div>


<script>
$(document).ready(function(){
$(".Buy-border31").css('display','none');
	$(".Buy-border1,.Buy-border2").on("click",function(){
		//$(".Buy-border1").hide();
		//$(".Buy-border2").hide();
$(".Buy-border31").css('display','none');
	tid1=$(this).attr("target");
		document.getElementById(tid1).style.display="block";
		//document.getElementById("login").style.display="block";
	});
	
});
</script>
<script>
function fuck(){
	$address1='<?php echo $address;?>'
	$pincode='<?php echo $pin;?>'
	$city1='<?php echo $city;?>'
document.getElementById("addres_info").value=$address1;
document.getElementById("pincode_info").value=$pincode;
document.getElementById("city_info").value=$city1;

}
</script>
<!--<div class="Buy-border2">
</div>!-->
<!--<div id="lm" class="login-modal">
<div class="login-content">
<div class="login-border1">
</div>
<div class="login-border2">
<span class="close">&times;</span>
<form method="post" action="check.php">
<div class="enter-title">Enter your Username/Mobile number</div>
<input type="text" name="username" class="login-form" required>
<div class="enter-paswrd">Enter password</div>
<input type="password" name="passrd" class="login-form" autocomplete="on"  required><br>	
<button type="submit"class="getin">Get in</button>
<a href="#">
<div class="new-sign">
New to E-shop.!?
</div>
</a>
</form>
<div class="forgot">Forgot anything!?</div>
</div>
</div>
</div>
<script>
var clicks1=document.getElementById("change");
var modal=document.getElementById('lm');
var close=document.getElementsByClassName("close")[0];
clicks1.onclick=function(){
modal.style.display="block";
}
close.onclick=function(){
modal.style.display="none";
}
window.onclick=function(event){
if(event.target==modal){
modal.style.display="none";
}
}
</script>
<div class="Buy-border1">
<div class="Buy-heading">Address</div>
<div class="ans1"><?php echo $username ?></div>
<br>
<div class="ans1"><?php echo $address ?></div>
<div id="change2">Change</div>
</div>
<div class="address-modal" id="am">
<div class="address-content">
<div class="login-border1">
</div>
<div class="login-border2">
<div class="close1">&times;</div>
<div class="name-1">Name:<?php echo "<span class=\"ans\">$username</span>"; ?></div>
<div class="name-1">Mobile:<?php echo "<span class=\"ans\">$mobile</span>"; ?></div>
<div class="address-1">Address:<?php echo "<span class=\"addr\">$address</span>";?></div>
<div class="edit">&#9998; Edit </div>
<Div class="new-addr">New-Address:<div><textarea id="addres_info" cols="40" rows="5" class="address_box1"></textarea></div></div>
<button type="submit"class="getin">Save</button>
</div>
</div>
</div>
<div class="Buy-border1">
<div class="Buy-heading">Order</div>
<div class="name-1">Product:</div>
<div class="name-1">Quantity</div>
<div id="details">Details</div>
</div>
<div class="Buy-border1">

</div>
<script>
var aclick=document.getElementById("change2");
var amodal=document.getElementById("am");
var close1=document.getElementsByClassName("close1")[0];
aclick.onclick=function(){
	amodal.style.display="block";
}
close1.onclick=function(){
	amodal.style.display="none";
}
window.onclick=function(event){
	if(event.taget==amodal){
		amodal.style.display="none";
	}
}
</script>!-->
</body>
</html>
