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
if(!isset($c_id))
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
<div class="Back"><a href="javascript:history.go(-1)">Back</a></div>
<div class="payment_details">Payment-Details</div>
<div class="payment_border">
<div class="saved_cards_pay">Your saved credit and debit cards</div>
<?php
$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
$sql="SELECT * FROM card where C_id='$c_id'";
$res1=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($res1)>0){
	while($fetch=mysqli_fetch_assoc($res1)){
		$card[$i]=$fetch['Card'];
		$i=$i+1;
	}
}
$c=$i;
$i=0;
	echo "<form method=\"post\" action=\"add_address_detail.php\">";
	$_SESSION['del']='3';
	$pay=$_SESSION['pay'];
for($i=0;$i<$c;$i++){
	$e=$i+1;
	echo "<div class=\"card_pay_border\">";
	$cno=$card[$i];
	$cno11=str_split($cno,4);
	$cno1=$cno11[0];
	$cno2='****';
	$cno3='****';
	$cno4=$cno11[3];
	echo "<div class=\"card_no_title\">Card number<span class=\"card_no_1\">$cno1</span><span class=\"card_no_2\">$cno2$cno3</span><span class=\"card_no_3\">$cno4</span></div>";
	echo "<div class=\"hide_pay\" id=\"hide_pay$e\">";
	//echo "<div id=\"hide_pay$e\">";
	echo "<div class=\"cvv\">CVV<input type=\"text\" name=\"cvv[$i]\" class=\"cvv1\" pattern=\"[0-9].{2}\" ></div>";
	echo "<input type=\"submit\" value=\"$pay\" class=\"pay\">";
	//echo "</div>";
	echo "</div>";
	echo "<input type=\"radio\" name=\"card\" target=\"hide_pay$e\" value=\"$e\" class=\"radio_1\">";
	echo "</div>";
}
echo "<div class=\"new_card_border\">";
echo "<div class=\"left_1\">";
echo "<div class=\"new_card_pay\">Credit/Debit/ATM Card </div>";
echo "<input type=\"radio\" name=\"card\" target=\"new_detail\" value=\"new\" class=\"radio_2\">";

echo "<div class=\"hide_pay\" id=\"new_detail\">";
	echo "<div class=\"add_card_title1\">Enter your card information</div>";
	echo "<div class=\"add_card_title2\">Name</div>";
	echo "<span><input type=\"text\" pattern=\"[A-Za-z]\"name=\"card_name\" class=\"card_box\"></span>";
	echo "<div class=\"clear\"></div>"; 
	echo "<div class=\"add_card_title2\">Card number</div>";
	echo "<span><input type=\"text\" name=\"card_num\" class=\"card_box\"></span>";
	echo "<div class=\"clear\"></div>"; 
	echo "<div class=\"add_card_title2\">Exp-Month</div>";
	echo "<select name=\"month\" class=\"drop_card\">";
	echo "<option value=\"01\">01</option>";
	echo "<option value=\"02\">02</option>";
	echo "<option value=\"03\">03</option>";
	echo "<option value=\"04\">04</option>";
	echo "<option value=\"05\">05</option>";	
	echo "<option value=\"06\">06</option>";	
	echo "<option value=\"07\">07</option>";	
	echo "<option value=\"08\">08</option>";	
	echo "<option value=\"09\">09</option>";	
	echo "<option value=\"10\">10</option>";	
	echo "<option value=\"11\">11</option>";	
	echo "<option value=\"12\">12</option>";
	echo "</select>";
	echo "<div class=\"clear\"></div>"; 
	echo "<div class=\"add_card_title2\">Exp-Year</div>";
	echo "<select name=\"year\" class=\"drop_card\">";
	echo "<option value=\"17\">17</option>";
	echo "<option value=\"18\">18</option>";
	echo "<option value=\"19\">19</option>";
	echo "<option value=\"20\">20</option>";
	echo "<option value=\"21\">21</option>";	
	echo "<option value=\"22\">22</option>";	
	echo "<option value=\"23\">23</option>";	
	echo "<option value=\"24\">24</option>";	
	echo "<option value=\"25\">25</option>";	
	echo "<option value=\"26\">26</option>";	
	echo "<option value=\"27\">27</option>";	
	echo "<option value=\"28\">28</option>";
	echo "</select>";
	echo "<div class=\"clear\"></div>";
	echo "<input type=\"submit\" value=\"PAY\" class=\"pay1\">";
	echo "</div>";
	echo "</div>";
	echo "<div class=\"qwe1234\">"; 
echo "</div>";
echo "</div>";
echo "<div class=\"cash_delivery_border\">";
echo "<div class=\"cash_on_title\">Cash on Delivery</div>";
echo "<div class=\"hide_pay\" id=\"confirm_order1\">";
echo "<input type=\"submit\" value=\"Confirm Order\" class=\"confirm_order\">";
echo "</div>";
echo "<input type=\"radio\" name=\"card\" target=\"confirm_order1\" value=\"cash\" class=\"radio_3\">";

echo "</div>";
	echo "</form>";

?>
</div>
</div>
<script>
$(document).ready(function(){
	
	$(".hide_pay").css('display','none');
	//$("#new_detail").css('display','none');
	$(".radio_2").click(function(){
		$("#confirm_order1").css('display','none');
		var w=$(this).attr("target");
		$(".hide_pay").css('display','none');
		$("#"+w).css('display','block');
	});
	$(".radio_3").click(function(){
		$(".hide_pay").css('display','none');
		var e=$(this).attr("target");
		$(".hide_pay").css('display','none');
		$("#"+e).css('display','block');
	});
	$(".radio_1").click(function(){
		$(".hide_pay").css('display','none');
		var q=$(this).attr("target");
		$(".hide_pay").css('display','none');
		$("#"+q).css('display','block');
	});
});
</script>
<Script>
$(document).ready(function(){
	var valid=false;
	$(".cvv1").keypress(function(e){
		var c=String.fromCharCode(e.keyCode);
		var n=c.charCodeAt(0);
		if(n>48 && n<=57){
			return true;		
			}
		else{
			return false;
		}
	
	});
	
});
</script>
</body>
</html>