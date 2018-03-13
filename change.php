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
$val=$_SESSION['val'];
$c_id=$_SESSION['Cd'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if($val=='1'){
		$user=$_POST['uname'];
		$conn=mysqli_connect('localhost','root','','e-shop')or die("UNABLE TO CONNECT");
		$sql="UPDATE customers SET Username='$user'	 WHERE C_id='$c_id'";
		if($res=mysqli_query($conn,$sql)){
				$_SESSION['change']='1';
				header("location:Eaccount.php");
			}
		
		
	}
	if($val=='2'){
		$mob=$_POST['mob'];
		$conn=mysqli_connect('localhost','root','','e-shop')or die("UNABLE TO CONNECT");
		$sql="UPDATE customers SET Mobile_no='$mob'	 WHERE C_id='$c_id'";
		if($res=mysqli_query($conn,$sql)){
				$_SESSION['change']='1';
				header("location:Eaccount.php");
			}
	}
	if($val=='3'){
		$opass=$_POST['Opass'];
		$npass=$_POST['Nnew'];
		$cpass=$_POST['Cpass'];
		$conn=mysqli_connect('localhost','root','','e-shop')or die("UNABLE TO CONNECT");
		$sql="SELECT * FROM customers where C_id='$c_id'";
		$res=mysqli_query($conn,$sql);
		if(mysqli_num_rows($res)>0){
			while($fetch=mysqli_fetch_assoc($res)){
				$pass=$fetch['Password'];
			}
			if($opass==$pass){
				if($npass==$cpass){
					$_SESSION['change']='1';
					header("location:Eaccount.php");
				}
				else{
					echo "<div class=\"error_border\"><span class=\"change_color\">&#10006;</span><span class=\"change_space\">Something is wrong!please check  <a href=\"javascript:history.go(-1)\">back</a></span></div>";
				}
			}
			else{
				echo "<div class=\"error_border\"><span class=\"change_color\">&#10006;</span><span class=\"change_space\">Something is wrong!please check  <a href=\"javascript:history.go(-1)\">back</a></span></div>";
			}
		}

	}
	if($val=='5'){
		$mail=$_POST['mail'];
		$conn=mysqli_connect('localhost','root','','e-shop')or die("UNABLE TO CONNECT");
		$sql="UPDATE customers SET Email_Id='$mail'	 WHERE C_id='$c_id'";
if($res=mysqli_query($conn,$sql)){
				$_SESSION['change']='1';
				header("location:Eaccount.php");
			}
	}
	
	
}
?>
</body>
</html>