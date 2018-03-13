<html>
<head>
<link rel="stylesheet" type="text/css" href="nstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
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
<?php
$c_id=$_SESSION['Cd'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * FROM customers where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$name=$fetch['Username'];
		$mob=$fetch['Mobile_no'];
		$pincode=$fetch['Pincode'];
		$address=$fetch['Address'];
		$city=$fetch['City'];
	}
}
echo "<div class=\"acc_page_small_title\">";
echo "<a href=\"Eaccount.php\">Your account</a>";
echo "<span class=\"acc_pag_small_1\">&#x203A;</span>";
echo "<a href=\"javascript:history.go(-1)\" class=\"add_space\">Your Address</a>";
echo "<span class=\"acc_pag_small_1\">&#x203A;</span>";
echo "<span class=\"add_space\">Change your address</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\">";
echo "<div class=\"bold\">Change Your Address</div>";
echo "<form method=\"post\" action=\"change_address2.php\">";
echo "<div class=\"box-title\">Name</div>";
echo "<div class=\"addrs_box\">";
echo "<input type=\"text\" name=\"fullname\" value=\"$name\" class=\"addr_box\">";
echo "</div>";
echo "<div class=\"content_boxes\">";
echo "<div class=\"box-title\">Mobile-Number</div>";
echo "<div class=\"addrs_box\">";
echo "<input type=\"text\" name=\"mobile\" value=\"$mob\" class=\"addr_box\">";
echo "</div>";
echo "</div>";
echo "<div class=\"content_boxes\">";
echo "<div class=\"box-title\">Pincode</div>";
echo "<div class=\"addrs_box\">";
echo "<input type=\"text\" name=\"pincode\" value=\"$pincode\" class=\"addr_box\">";
echo "</div>";
echo "</div>";
echo "<div class=\"content_boxes\">";
echo "<div class=\"box-title\">Street-address</div>";
echo "<div class=\"addrs_box\">";
echo "<textarea class=\"text_area\" name=\"address\">$address</textarea>";
echo "</div>";
echo "</div>";
echo "<div class=\"content_boxes\">";
echo "<div class=\"box-title\">City</div>";
echo "<div class=\"addrs_box\">";
echo "<input type=\"text\" name=\"city\" value=\"$city\" class=\"addr_box\">";
echo "</div>";
echo "</div>";
echo "<div class=\"content_boxes\">";
echo "<div class=\"box-title\">State</div>";
echo "<div class=\"addrs_box\">";
echo "<input type=\"text\" name=\"State\" value=\"\" class=\"addr_box\">";
echo "</div>";
echo "</div>";
echo "<div class=\"save_addr\">";
echo "<input type=\"submit\"  value=\"Save changes\" class=\"save_addrs\">"; 
echo "</form>";
echo"</div>";
echo "</div>";
?>

</body>
</html>