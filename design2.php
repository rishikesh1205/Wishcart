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
<input type="password" name="passrd" class="login-form"   required><br>	
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


<div class="change-container1"></div>
<div class="asdf123">Top-Brands</div>
<div class="first-border">
<div class="offerslide">
<div class="slide_show_image">
<div id="pic">
<!--<img src="acc.jpg" />!-->
</div>
</div>
</div>
<div class="offerslide">
<div class="slide_show_image1">
<div id="pic">
<!--<img src="acc.jpg" />!-->
</div>
</div>

</div>
</div>
<script>
var i;
var offer=document.getElementsByClassName("offerslide");
slideindex3=1;
offerslideshow();
function offerslideshow(){
for(i=0;i<offer.length;i++)
offer[i].style.display="none";
slideindex3++;
if(slideindex3>offer.length){slideindex3=1}
offer[slideindex3-1].style.display="block";
setTimeout(offerslideshow,2000);
}
</script>

<div class="change-container1"></div>
<div class="asdf123">
<span>Great-Deal</span>
</div>
<div class="first-border">
<span class="prev12" onclick="Gslidechange1(-1)">&#10094;</span>
<span class="next12" onclick="Gslidechange1(1)">&#10095;</span>
<div class="great-offer-slide">
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
</div>
<div class="great-offer-slide">
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
<div class="products">
<img src="iphone 6s.jpeg" class="gd-1">
<div class="sub-1">
<span>Iphone-6s</span>
</div>
<div class="sub-2">
<span>20% off</span>
</div>
</div>
</div>
</div>
<div class="asdf123">
<span>Featured-Brands</span>
</div>
<div class="next_slide">
<span class="prev22" onclick="Pslidechange1(-1)">&#10094;</span>
<span class="next22" onclick="Pslidechange1(1)">&#10095;</span>

<div class="featured_slide">

<div class="featured_border" style="background-image:url('smart-watch.jpeg');">
<div id="pic" ></div>
</div>
<div class="featured_border" style="background-image:url('skybag.png');">
<div id="pic" ></div>
</div>
<div class="featured_border" style="background-image:url('asus_mobile.jpg');">
<div id="pic" ></div>
</div>
</div>

<div class="featured_slide">
<div class="featured_border" style="background-image:url('nike.png');">
<div id="pic" ></div>
</div>
 <div class="featured_border" style="background-image:url('bose.png');">
<div id="pic" ></div>
</div>
<div class="featured_border" style="background-image:url('dell.png');">
<div id="pic" ></div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="asdf123">
<span>Discounts for you</span>
</div>
<div class="discount_slides">
<span class="prev22" onclick="Dslidechange1(-1)">&#10094;</span>
<span class="next22" onclick="Dslidechange1(1)">&#10095;</span>
<div class="discounts_slide">
<div class="disc_img" style="background-image:url('macbook1.jpeg');">
<div id="pic" ></div>

</div>
<div class="products">

</div>
<div class="products">

</div>
<div class="products">

</div>
</div>
</div>
<script>
var gslide=document.getElementsByClassName("great-offer-slide");
var gslideindex=1;
var i;
gslideshow(gslideindex);
function Gslidechange1(n){
	gslideshow(gslideindex+=n);
}
function gslideshow(n){
  if(n>gslide.length){gslideindex=1;}
  if(n<=0){gslideindex=gslide.length;}
  for(i=0;i<gslide.length;i++)
	  gslide[i].style.display="none";
  gslide[gslideindex-1].style.display="block";
}
</script>
<script>
var pslide=document.getElementsByClassName("featured_slide");
var pslideindex=1;
var i;
pslideshow(pslideindex);
function Pslidechange1(n){
	pslideshow(pslideindex+=n);
}
function pslideshow(n){
  if(n>pslide.length){pslideindex=1;}
  if(n<=0){pslideindex=pslide.length;}
  for(i=0;i<pslide.length;i++)
	  pslide[i].style.display="none";
  pslide[pslideindex-1].style.display="block";
}
</script>

</body>
</html>
