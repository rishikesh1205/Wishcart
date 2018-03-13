<html>
<head>
<title>Wishcart</title>
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
$c_id=$_SESSION['Cd'];
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
echo "<a href=\"Eaccount.php\"><span class=\"contents\">Account</span></a>";
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
<?php
$c_id=$_SESSION['Cd'];
$p_id=$_SESSION['p_id'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
$sql="Select * from customers where C_id='$c_id'";
$res1=mysqli_query($conn,$sql);
if(mysqli_num_rows($res1)>0){
	while($fetch=mysqli_fetch_assoc($res1)){
		$mail_id=$fetch['Email_Id'];
	}
}
?>
<div class="Back"><a href="javascript:history.go(-1)">Back</a></div>
<div class="product_details">Product-Details</div>
<div class="product_border">
<?php
$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
$sql="Select * from products where Product_id='$p_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$name=$fetch['Product_Name'];
		$price=$fetch['Price'];
		$seller=$fetch['Seller'];
		$delivery=$fetch['Delivery'];
	}
}
$sql="Select Images from image where p_id=$p_id and Pic_id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="order_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}
echo "<div class=\"order_space_content\">";
echo "<div class=\"order_name\">$name</div>";
echo "<div class=\"order_seller\">Seller: <span class=\"order_seller_1\">$seller</span></div>";
echo "<div class=\"order_price\">&#8377;$price</div>";
echo "<form method=\"post\" action=\"add_address_detail.php\">";
$_SESSION['del']='2';
echo "<input type=\"text\" name=\"quantity\" pattern=\"[0-2].{0,}\" value='1' class=\"quantity\" title=\"Only 2 units for a customer\">";
echo "<div class=\"confirmation\">Order confirmation email will be sent to <span class=\"color1\">$mail_id</span></div>";
echo "<div class=\"free_del\">Free delivery in <span class=\"color2\">$delivery</span></div>";
echo "</div>";
$_SESSION['price']=$price;
echo "<div class=\"next_space\">";
echo "<input type=\"submit\" class=\"continue_order\" value=\"CONTINUE\">";
echo "</form>";
echo "</div>";
?>
</div>

</div>
</body>
</html>