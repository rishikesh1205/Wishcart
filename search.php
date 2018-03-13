<html>
<head>
<title>E-Shop</title>
<link type="text/css" rel="stylesheet" href="stylesheet3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body bgcolor="#E6E6FA">
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
<div class="search">
<form method="post" action="search.php">
<input type="text" name="search" id="search" placeholder="Search for products brands and more">
</form>
</div>

<div class="filter-list">
<div class="border1">
<script>
$(document).ready(function(){
$(".price").hide();
$(".filter-head1").click(function(){
$(".price").slideToggle();
});
});
</script>
<span class="filter-head1">Price-Range &#9662;</span>
<div class="Price">
<p><input type="checkbox" value="price1" name="1">
<label for="1">10000-20000</label></p>
<p><input type="checkbox" value="price2" name="2">
<label for="2">20000-30000</label></p>
<p><input type="checkbox" value="price3" name="3">
<label for="3">30000-50000</label></p>
<p><input type="checkbox" value="price4" name="4">
<label for="4">Above 50000</label></p>
</div>
</div>
<script>
$(document).ready(function(){
$(".Storage").hide();
$(".filter-head2").click(function(){
$(".Storage").slideToggle();
});
});
</script>
<div class="border1">
<span class="filter-head2">Internal Storage &#9662;</span>
<div class="Storage">
<p><input type="Checkbox" value="storage1" name="5">
<label for="5">8-16 GB</label></p>
<p><input type="Checkbox" value="storage2" name="6">
<label for="6">16-32 GB</label></p>
<p><input type="Checkbox" value="storage3" name="7">
<label for="7">32-64 GB </label></p>
<p><input type="Checkbox" value="storage4" name="8">
<label for="8">64-128 GB </label></p>
<p><input type="Checkbox" value="storage5" name="9">
<label for="9">128-256 GB </label></p>
</div>
</div>
<script>
$(document).ready(function(){
$(".Battery").hide();
$(".filter-head3").click(function(){
$(".Battery").slideToggle();
});
});
</script>
<div class="border1">
<span class="filter-head3">Battery-Type &#9662;</span>
<div class="Battery">
<p><input type="Checkbox" value="battery1" name="10">
<label for="10">2000-3000 mAh</label></p>
<p><input type="Checkbox" value="battery2" name="11">
<label for="11">3000-4000 mAh </label></p>
<p><input type="Checkbox" value="battery3" name="12">
<label for="12">4000-5000 mAh </label></p>
<p><input type="Checkbox" value="battery4" name="13">
<label for="13">Above 5000 mAh</label></p>
</div>
</div>
<script>
$(document).ready(function(){
$(".Camera-S").hide();
$(".filter-head4").click(function(){
$(".Camera-S").slideToggle();
});
});
</script>
<div class="border1">
<span class="filter-head4">Secondary Camera &#9662;</span>
<div class="Camera-S">
<p><input type="Checkbox" value="camera1" name="14">
<label for="14">5-8 MP </label></p>
<p><input type="Checkbox" value="camera2" name="15">
<label for="15">8-13 MP </label></p>
<p><input type="Checkbox" value="camera3" name="16">
<label for="16">13-15.9 MP </label></p>
<p><input type="Checkbox" value="camera4" name="17">
<label for="17">16-20.9 MP </label></p>
</div>
</div>
<script>
$(document).ready(function(){
$(".Camera-P").hide();
$(".filter-head5").click(function(){
$(".Camera-P").slideToggle();
});
});
</script>
<div class="border1">
<span class="filter-head5">Primary Camera &#9662;</span>
<div class="Camera-P">
<p><input type="Checkbox" value="camera11" name="18">
<label for="18">5-7.9 MP </label></p>
<p><input type="Checkbox" value="camera12" name="19">
<label for="19">8-11.9 MP </label></p>
<p><input type="Checkbox" value="camera13" name="20">
<label for="20">12- 12.9 MP</label></p>
</div>
</div>
<script>
$(document).ready(function(){
$(".Screen").hide();
$(".filter-head6").click(function(){
$(".Screen").slideToggle();
});
});
</script>
<div class="border1">
<span class="filter-head6">Screen Size &#9662;</span>
<div class="Screen">
<p><input type="Checkbox" value="screen1" name="21">
<label for="21"> 4-4.5 inch</label></p>
<p><input type="Checkbox" value="screen2" name="22">
<label for="22">4.5-5 inch </label></p>
<p><input type="Checkbox" value="screen3" name="23">
<label for="23">5-5.5 inch </label></p>
<p><input type="Checkbox" value="screen4" name="24">
<label for="24">6 inch & Above </label></p>
</div>
</div>
</div>
<?php
/*if($_SERVER["REQUEST_METHOD"]=="POST"){
$result=$_POST['search'];	
$conn=mysqli_connect('localhost','root','','e-shop')or die("F***");
//echo $result;	
$sql="SELECT * FROM products WHERE CONCAT(Category,' ',Type,' ',Product_Name) LIKE '%$result%'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)	{
  while($get=mysqli_fetch_assoc($res)){
	$category1=$get["Category"];
    $brand=$get["Brand"];   
   echo "<div class=\"crct\">$category1</div>";
   echo $brand;
  }
}
}*/
?>
<?php
echo "<div class=\"product-list\">";
for($i=0;$i<1;$i++){
echo "<div class=\"items\">";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$result=$_POST['search'];	
//echo $result;
$conn=mysqli_connect('localhost','root','','e-shop')or die("F***");
//echo $result;	
$sql="SELECT * FROM products WHERE CONCAT(Category,' ',Type,' ',Product_Name,' ',Ratings,' ',Image,' ',URL) LIKE '%$result%'";
//$sql="CREATE VIEW `produ` AS SELECT * FROM  products WHERE Id=1";
if($res=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res)>0)	{
  while(($get=mysqli_fetch_assoc($res))){
	$category1=$get["Category"];
    $rating=$get["Ratings"];   
	$name=$get['Product_Name'];
	//$image=$get['Image'];
	$url=$get['URL'];
	$image=$get['Image'];
   echo '<img  src="data:image;base64,'.$get['Image'].' ">';
   echo "<div class=\"name\">$name</div>";
   echo "<div class=\"rate\">$rating</div>";
   echo $url;
   //echo "</a>";
	}
  }
}


} 
else{
	if(empty($res))
		echo "asd";
//	die(mysqli_error());
}
echo "</div>";

}
echo "</div>";
?>
</body>
</html>