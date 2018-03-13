<html>
<head>
<link rel="stylesheet" type="text/css" href="nstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>

</style>
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
if(!isset($c_id))
$c_id=$_SESSION['Cd'];
$prod_id=$_SESSION['prod_id'];
$name=$_SESSION['name'];
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
<?php
echo "<div class=\"qa_title\">$name<span class=\"acc_pag_small_1\">&#x203A;</span>
<span class=\"qa_title1\">Questions&Answers</span></div>";
echo "<form method=\"post\" action=\"\">";
echo "<input type=\"text\" name=\"qstion\" class=\"ask_qstion\" placeholder=\"Clear your mind.Feel free to ask!\">";
echo "<input type=\"submit\" value=\"Post\" class=\"ask_1\">";
echo "</form>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"end_thing\"></div>";
echo "<select class=\"sort_thing\"  name=\"selectchoice\">";
echo "<option class=\"sort_thing1\" value=\"Newest_First\">Newest First</option>";
echo "<option class=\"sort_thing1\" value=\"Most_Helpfull\">Most Helpfull</option>";
echo "</select>";
echo "<div class=\"dummy1\"></div>";	
?>
<br>
<div class="end-section">
<div class="end-1">
<div class="end-section-title">Help</div>
<div class="end-section1">
<div class="space">
<li>Payments</li>
<li>Saved Cards</li>
<li>Shipping</li>
<li>FAQ</li></div>
</div>
</div>
<div class="end-2">
<div class="end-section-title">E-shop</div>
<div class="end-section1">
<div class="space">
<li>Contact Us</li>
<li>About Us</li>
<li>Carrear</li>
<li>Sell on Eshop</li></div>
</div>
</div>
<div class="end-3">
<div class="end-section-title">Misc</div>
<div class="end-section1">
<div class="space">
<li>Online shopping</li>
<li>Return centre</li>
<li>100% guarantee</li>
<li>Site map</li></div>
</div>
</div>

<div class="end-4">
<div class="end-section-title">Address</div>
<div class="end-section2">
<div class="space">
<li>Eshop Internet private Limited</li>
<li>No-5c Poonga nagar</li>
<li>Varadharajapuram,Cbe-15</li>
<li>Moblie-9442370007</li></div>
</div>
</div>
</div>
</div>
<Script>
$(document).ready(function(){
	var clickval=0;
	var id=$('select option:selected').val();
	$(".dummy1").load("show.php",{one:id});
	$(".sort_thing").click(function(){
		if(clickval==0){
			clickval+=1;
		}
		else if(clickval==1){
			clickval=0;
			 id=$('select option:selected').val();
			$(".dummy1").load("show.php",{one:id});
		}
	});
	
});
</script>








</body>
</html>