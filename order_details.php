<html>
<head>
<link rel="stylesheet" type="text/css" href="nstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="page-wrap">
<div class="title-background">
<div class="acc-title"> E-shop</div>
<div class="search_bar_class">
<form method="post" action="sql.php">
<input type="text" name="search" id="search" class="search_bar" placeholder="Search for products brands and more">
</form>
</div>
<?php 
session_start();
//echo var_dump($_SESSION['Username']);
if(empty($_SESSION['Username'])){
echo "<div class=\"start\">";
echo "<a href=\"#\" class=\"start1\" id=\"loginclick\" >Login</a>";
echo "<a href=\"para.html\" class=\"start2\">Signup</a>";
echo "</div>";

}

else{
	echo "<div class=\"drop\">";
//session_start();
echo "<div class=\"black\">";
echo $_SESSION['Username']."'s account";
echo "</div>";
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
<div class="clear"></div>
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
</div>

<div class="categories">
<span class="cat_title">Featured-Categories</span>
</div>

<div class="left-pane">
<div class="left-pane-border">
<span class="item1">Electronics</span>
</div>
<div class="left-pane-border">
<span>Appliances</span>
</div>
<div class="left-pane-border">
<span class="move">Men</span>
</div>
<div class="left-pane-border">
<span class="move1">Women</span>
</div>
<div class="left-pane-border">
<span>Baby&Kids</span>
</div>
<div class="left-pane-border1">
<span class="move-1">Home&Furniture</span>
</div>
<div class="left-pane-border">
<span>Books&More</span>
</div>
</div>
<div class="right-pane">
<div class="Electronics-pane">
<div class="right-pane-title">
<span>Electronics</span>
</div>
<div class="border-head">
<div class="inside-title">Mobiles</div>
</div>
<div class="border-head">
<div class="inside-title">Laptops</div>
</div>
<div class="border-head">
<div class="inside-title1">Televisions</div>
</div>
<div class="border-head">
<div class="inside-title2">Computer-Pheripherals</div>
</div>
<div class="border-head">
<div class="inside-title3">Mobile-Accessories</div>
</div>
<div class="border-head">
<div class="inside-title">Camera</div>
</div>
<div class="border-head">
<div class="inside-title">Tablets</div>
</div>
<div class="border-head">
<div class="inside-title4">Other Products</div>
</div>
</div>
</div>
<div class="clear"></div>
<Script>
$(document).ready(function(){
	$(".Electronics-pane").css('display','none');
	$(".item1").on("click",function(){
		$(".Electronics-pane").css('display','block');
		$(".border-head").fadeIn("1000");
	});
});
</script>
<script>
$(document).ready(function(){
		$(".left-pane-border,.left-pane-border1,.left-pane,.right-pane").hide();
	$(".categories").on("click",function(){
		$(".left-pane-border,.left-pane-border1,.left-pane,.right-pane").toggle();
		
	});
});
</script>
<div class="acc_order_title"><a href="Eaccount.php">Your account</a>
<span class="acc_pag_small_1">&#x203A;</span>
<span class="acc_pag_small_1">Your orders</span>
</div>
<div class="clear"></div>
<div class="order_det">Order Details</div>
<?php
$c_id=$_SESSION['Cd'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * from orders where C_id='$c_id'";
$stat=mysqli_query($conn,$sql);
if(mysqli_num_rows($stat)>0){
	while($fetch=mysqli_fetch_assoc($stat)){
		$date=$fetch['Date'];
		$order_id=$fetch['Id'];		
		$pay=$fetch['Payment'];
		$address=$fetch['Address'];
		$price=$fetch['Price'];
		$shippin=$fetch['Shippin'];
	}
}
if($pay==1){
	$payment="Debit Card";
}
else if($pay==2){
	$payment="Credit Card";
}
elseif($pay==3){
	$payment="Cash On Delivery";
}
$sql="SELECT * from customers where C_id='$c_id'";
$stat=mysqli_query($conn,$sql);
if(mysqli_num_rows($stat)>0){
	while($fetch=mysqli_fetch_assoc($stat)){
		$name=$fetch['Username'];
	}
}
echo "<div class=\"order_det1\">";
echo "<div class=\"\">Ordered on<span class=\"order_date_extend\">$date</span></div>";
echo "</div>";
	echo "<div class=\"order_border\">";
	echo "<div class=\"order_border_11\">";
	echo "<div class=\"Order_ship_details\">Shipping Address</div>";
	echo "<div class=\"order_content_1\">$name</div>";
	echo "<div class=\"order_content_2\">$address</div>";
	echo "</div>";
	echo "<div class=\"order_border_12\">";
	echo "<div class=\"Order_ship_details\">Payment Method</div>";
	echo "<div class=\"order_payment\">$payment</div>";
	echo "</div>";
	echo "<div class=\"order_summary\">";
	echo "<div class=\"Order_ship_details\">Order Summary</div>";
	echo "<div class=\"order_billdet1\">";
	echo "<div class=\"order_price_details\">Item(s)Subtotal</div>";
	echo "<div class=\"order_price_details\">Shipping</div>";
	echo "<div class=\"order_price_details\">Total</div>";
	echo "</div>";
	echo "<div class=\"order_billdet2\">";
	echo "<div class=\"order_price_details\">&#x20B9;$price</div>";
	echo "<div class=\"order_price_details\">&#x20B9;$shippin</div>";
	$total=$price+$shippin;
	echo "<div class=\"order_price_details\">&#x20B9;$total</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";

?>
</body>