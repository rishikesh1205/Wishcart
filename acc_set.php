<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet3.css">
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
$uname=$_SESSION['Uname'];
$mob=$_SESSION['Mob'];
$mail=$_SESSION['Mail'];
$pass=$_SESSION['Pass'];
$address=$_SESSION['Address'];
if (isset($_GET['n'])||($_GET['e'])) {
    $val=$_GET['n'];
	$val1=$_GET['e'];
} 
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");

echo "<div class=\"acc_page_small_title\">";
echo "<a href=\"Eaccount.php\">Your account</a>";
echo "<span class=\"acc_pag_small_1\">&#x203A;</span>";
if($val=='1'){
$_SESSION['val']=$val;
echo "<span class=\"acc_pag_small_1\">Change your $val1</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\"> Change Your $val1</div>";
echo "<div class=\"acc_set_box1\">";
echo "<div class=\"acc_set_content\">";
echo "If you want to change the name associated with your Amazon customer account, you may do so below. Be sure to click the Save Changes button when you are done."; 
echo "</div>";
echo "<div class=\"acc_set_content1\">";
echo "New name";
echo "</div>";
echo "<form method=\"post\" action=\"change.php\">";
echo "<div class=\"acc_set_input\">";
echo "<input type=\"text\" name=\"uname\" value=\"$uname\" class=\"acc_set_input1\">";
echo "</div>";
echo "<div class=\"last_change\">";
echo "<input type=\"submit\" value=\"Save changes\" class=\"last_changes\">";
echo "</form>";
echo "</div>";
}
if($val=='2'){
$_SESSION['val']=$val;
echo "<span class=\"acc_pag_small_1\">Change your $val1</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\"> Change Your $val1</div>";
echo "<div class=\"acc_set_box1\">";
echo "<div class=\"acc_set1_content\">";
echo "Old mobile number";
echo "</div>";
echo "<div class=\"acc_set1_content1\">";
echo "IN  +$mob";
echo "</div>";
echo "<form method=\"post\" action=\"change.php\">";
echo "<div class=\"acc_set1_content\">";
echo "Mobile Number";
echo "</div>";
echo "<input type=\"text\" name=\"mob\" value=\"$mob\" class=\"acc_set_input1\">";
echo "<div class=\"last_change\">";
echo "<input type=\"submit\" value=\"Save changes\" class=\"last_changes\">";
echo "</form>";
echo "</div>";
}
if($val=='3'){
$_SESSION['val']=$val;
echo "<span class=\"acc_pag_small_1\">Change your $val1</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\"> Change Your $val1</div>";
echo "<div class=\"acc_set_box2\">";
echo "<div class=\"acc_set_content\">";
echo "the form below to change the password for your Amazon account";
echo "</div>";
echo "<form method=\"post\" action=\"change.php\">";
echo "<div class=\"acc_set1_content\">";
echo "Current password";
echo "</div>";
echo "<input type=\"password\" name=\"Opass\"  class=\"acc_set_input1\">";
echo "<div class=\"acc_set1_content\">";
echo "New password";
echo "</div>";
echo "<input type=\"password\" name=\"Nnew\"  class=\"acc_set_input1\">";
echo "<div class=\"acc_set1_content\">";
echo "Confirm password";
echo "</div>";
echo "<input type=\"password\" name=\"Cpass\"  class=\"acc_set_input1\">";
echo "<div class=\"last_change\">";
echo "<input type=\"submit\" value=\"Save changes\" class=\"last_changes\">";
echo "</form>";
echo "</div>";
}
if($val=='4'){
echo "<span class=\"acc_pag_small_1\">Change your $val1</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\"> Change Your $val1</div>";
echo "<div class=\"acc_set_box2\">";
echo "<div class=\"acc_set_address_box\">";
echo "<div class=\"acc_set_address_title\">Old Address</div>";
echo "<div class=\"acc_set_address_content1\">$uname</div>";
echo "<div class=\"acc_set_address_content2\">$address</div>";
echo "<div class=\"acc_set_address_content2\">Phone:  $mob</div>";
echo "<form action=\"change.php\" method=\"post\">";
echo "<div class=\"acc_set_address_edit\"><a href=\"change_address.php\">Edit</a></div>";
echo "<div class=\"acc_set_address_delete\">Delete</div>";
echo "</form>";
echo "</div>";
echo "<div class=\"acc_set_address_box2\">";
echo "<div class=\"acc_set_new_addr\">Add new address</div>";
echo "<div class=\"add_addr\"><a href=\"add_new.php\">Add</a></div>";
echo "</div>";
echo "</div>";
}
if($val=='5'){
$_SESSION['val']=$val;
echo "<span class=\"acc_pag_small_1\">Change your $val1</span>";
echo "</div>";
echo "<div class=\"acc_page_small_title1\"> Change Your $val1</div>";
echo "<div class=\"acc_set_box1\">";
echo "<div class=\"acc_set1_content\">";
echo "Old mail-Id";
echo "</div>";
echo "<div class=\"acc_set1_content1\">";
echo $mail;
echo "</div>";
echo "<form method=\"post\" action=\"change.php\">";
echo "<div class=\"acc_set1_content\">";
echo "Edit Mail Id";
echo "</div>";
echo "<input type=\"text\" name=\"mail\" value=\"$mail\" class=\"acc_set_input1\">";
echo "<div class=\"last_change\">";
echo "<input type=\"submit\" value=\"Save changes\" class=\"last_changes\">";
echo "</form>";
echo "</div>";

}
echo "</div>";
?>
</body>
</html>