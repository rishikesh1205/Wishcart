<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<div class="account">
<?php
$uname=$_SESSION['Username'];
//echo "Hello,$uname";
?>
</div>
<div class="acc-section">
<div class="acc-s">
<div class="acc-1" target="acc1">	
<div class="acc-head1">Orders</div>
<div class="acc-head2">Track,return or buy things again</div>
</div>
<div class="acc-2" target="acc2">
<div class="acc-head12" >Account-setings</div>
<div class="acc-head21">Edit personal details</div>
</div>
<div class="acc-3" target="acc3">
<div class="acc-head13">Payment-options</div>
<div class="acc-head23">Edit or add payment methods</div>
</div>
<div class="acc-4" target="acc4">
<div class="acc-head14">My Stuffs</div>
<div class="acc-head24">Edit your stuffs</div>
</div>
</div>
</div>
<div class="acc_display_section" id="acc1">
<div class="acc2_section_title11">Your orders</div>
<form method="post" action="Eaccount.php">
<input type="textbox" name="search_order" class="search_order" placeholder="Search all orders">
<input type="submit" value="Search" class="search_submit_1">
</form>
<div class="clear"></div>
<div class="order_heading_border">
<div class="order_heading_1" target="orders">Orders</div>
<div class="order_heading_2" target="open">Open orders</div>
</div>
<div class="open_orders" id="open">
<?php
$c=0;
$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
$sql="Select * from orders where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$Date[$c]=$fetch['Date'];
		$Rec_name[$c]=$fetch['Rec_name'];
		$price[$c]=$fetch['Price'];
		$id[$c]=$fetch['Id'];
		$p_id[$c]=$fetch['P_id'];
		$quantity[$c]=$fetch['Quantity'];
		$price[$c]=$fetch['Price'];
		$payment[$c]=$fetch['Payment'];
		$c=$c+1;
	}
}
for($i=0;$i<$c;$i++)
{
echo "<div class=\"order_border\">";
$sql2="Select * from products where Product_id='$p_id[$i]'";
$res3=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res3)>0){
	while($fetch2=mysqli_fetch_assoc($res3)){
		$prod_name=$fetch2['Product_Name'];
		$seller=$fetch2['Seller'];
	}
}
echo "<div class=\"order_border_1\">";
echo "<div class=\"order_placed\">Order placed -<span class=\"sub_head_border\">$Date[$i]</span></div>";
echo "<div class=\"total\">Total -<span class=\"sub_head_border\">&#8377;
$price[$i]</span></div>";
echo "<div class=\"order_reciever\">Reciever -<span class=\"sub_head_border\">
$Rec_name[$i]</span></div>";
echo "<div class=\"order_id\">Order-Id -<span class=\"\">$id[$i]</span></div>";
echo "</div>";
echo "<div class=\"clear\"></div>";
$sql1="Select * from image where p_id='$p_id[$i]' and Pic_id='1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
	while($fetch1=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="order_image" src="data:image;base64, '.$fetch1['Images'].'">';
	}
}
echo "<div class=\"ordered_details\">";
echo "<div class=\"ordered_details_1\">$prod_name</div>";
echo "<div class=\"ordered_details_2\">Seller: <span class=\"ordered_details_2_1\">$seller</span></div>";
echo "<div class=\"ordered_details_3\">Quantity: <span class=\"ordered_details_3_1\">$quantity[$i]</span></div>";
echo "<div class=\"ordered_details_5\">Payment method:<span class=\"ordered_details_2_1\"> $payment[$i]</span></div>";
echo "<div class=\"ordered_details_4\">Shipping details</div>";
echo "</div>";
echo "<div class=\"cancel_order\">Cancel order</div>";
echo "</div>";
}
?>
</div>
<div class="orders" id="orders">
<?php
$c=0;
$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
$sql="Select * from orders where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$Date[$c]=$fetch['Date'];
		$Rec_name[$c]=$fetch['Rec_name'];
		$price[$c]=$fetch['Price'];
		$id[$c]=$fetch['Id'];
		$p_id[$c]=$fetch['P_id'];
		$quantity[$c]=$fetch['Quantity'];
		$price[$c]=$fetch['Price'];
		$payment[$c]=$fetch['Payment'];
		$c=$c+1;
	}
}
for($i=0;$i<$c;$i++)
{
echo "<div class=\"order_border\">";
$sql2="Select * from products where Product_id='$p_id[$i]'";
$res3=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res3)>0){
	while($fetch2=mysqli_fetch_assoc($res3)){
		$prod_name=$fetch2['Product_Name'];
		$seller=$fetch2['Seller'];
	}
}
echo "<div class=\"order_border_1\">";
echo "<div class=\"order_placed\">Order placed -<span class=\"sub_head_border\">$Date[$i]</span></div>";
echo "<div class=\"total\">Total -<span class=\"sub_head_border\">&#8377;
$price[$i]</span></div>";
echo "<div class=\"order_reciever\">Reciever -<span class=\"sub_head_border\">
$Rec_name[$i]</span></div>";
echo "<div class=\"order_id\">Order-Id -<span class=\"\">$id[$i]</span></div>";
echo "</div>";
echo "<div class=\"clear\"></div>";
$sql1="Select * from image where p_id='$p_id[$i]' and Pic_id='1'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
	while($fetch1=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="order_image" src="data:image;base64, '.$fetch1['Images'].'">';
	}
}
echo "<div class=\"ordered_details\">";
echo "<div class=\"ordered_details_1\">$prod_name</div>";
echo "<div class=\"ordered_details_2\">Seller: <span class=\"ordered_details_2_1\">$seller</span></div>";
echo "<div class=\"ordered_details_3\">Quantity: <span class=\"ordered_details_3_1\">$quantity[$i]</span></div>";
echo "<div class=\"ordered_details_5\">Payment method:<span class=\"ordered_details_2_1\"> $payment[$i]</span></div>";
echo "<div class=\"ordered_details_4\">Shipping details</div>";
echo "</div>";
echo "<div class=\"cancel_order\">Cancel order</div>";
echo "</div>";
}
?>
</div>
</div>

<div class="acc_display_section" id="acc2">
<?php
if(isset($_SESSION['change'])){
	echo "<div class=\"changed\">";
	echo "<div class=\"change_text\"><span class=\"change_color\">&#10004;</span> <span class=\"change_space\">You successfully changed your account</span></div>";
	echo "</div>";
	$_SESSION['change']=null;
}
?>



<div class="acc2_section_title">Account Details</div>
<div class="acc2_section_box">
<?php
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * FROM customers where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$uname=$fetch['Username'];
		$mob=$fetch['Mobile_no'];
		$mail=$fetch['Email_Id'];
		$pass=$fetch['Password'];
		$address=$fetch['Address'];
	}
	
	$_SESSION['Uname']=$uname;
	$_SESSION['Mob']=$mob;
	$_SESSION['Mail']=$mail;
	$_SESSION['Pass']=$pass;
	$_SESSION['Address']=$address;
}
echo "<div class=\"acc2_section_border\">";
echo "<div class=\"acc2_section_inside_titles\">Name:<span class=\"inside_title\">$uname</span></div>";
echo "<div class=\"acc2_section_inside_box\" value=\"1\" title=\"Username\"><span class=\"acc2_section_inside_title1\" >Change</span></div>";
echo "</div>";

echo "<div class=\"acc2_section_border\">";
echo "<div class=\"acc2_section_inside_titles\">Mobile Number:<span class=\"inside_title\">$mob</span></div>";
echo "<div class=\"acc2_section_inside_box\" value=\"2\" title=\"Mobile Number\"><span class=\"acc2_section_inside_title1\">Change</span></div>";
echo "</div>";

echo "<div class=\"acc2_section_border\">";
echo "<div class=\"acc2_section_inside_titles\">Password: <input type=\"password\" value=$pass class=\"pass_class\" disabled></div>";
echo "<div class=\"acc2_section_inside_box\" value=\"3\" title=\"Password\"><span class=\"acc2_section_inside_title1\">Change</span></div>";
echo "</div>";

echo "<div class=\"acc2_section_border2\">";
echo "<div class=\"acc2_section_inside_titles\">Address:<span class=\"inside_title\">$address</span></div>";
echo "<div class=\"acc2_section_inside_box\" value=\"4\" title=\"address\"><span class=\"acc2_section_inside_title1\">Change</span></div>";
echo "</div>";
echo "<div class=\"acc2_section_border2\">";
echo "<div class=\"acc2_section_inside_titles\">Mail-Id:<span class=\"inside_title\">$mail</span></div>";
echo "<div class=\"acc2_section_inside_box\" value=\"5\" title=\"mail id\"><span class=\"acc2_section_inside_title1\">Change</span></div>";
echo "</div>";
echo "<div class=\"deletea\">Delete account</div>"
?>
</div>
</div>

<div class="acc_display_section" id="acc3">
<?php
if(isset($_SESSION['change'])){
	echo "<div class=\"changed\">";
	echo "<div class=\"change_text\"><span class=\"change_color\">&#10004;</span> <span class=\"change_space\">You successfully changed your account</span></div>";
	echo "</div>";
	$_SESSION['change']=null;
}
?>
<div class="paymnet_section">
<div class="acc2_section_title">Payment Details</div>
<?php
$conn=mysqli_connect('localhost','root','','e-shop')or die("can't connect");
$sql="SELECT * FROM Card  WHERE C_id='$c_id'";
$res=mysqli_query($conn,$sql);
$i=0;	
if(mysqli_num_rows($res)>0){
	
	while($fetch=mysqli_fetch_assoc($res)){
	$cname[$i]=$fetch['Name'];
	$no[$i]=$fetch['Card'];
	$mon[$i]=$fetch['Exp_mon'];
	$yr[$i]=$fetch['Exp_yr'];
	$nc=str_split($no[$i],4);
	$number[$i]=$nc[3];	
	$i=$i+1;
	}
	$c=$i;
	$i=0;
	echo "<div class=\"acc3_section_box2\">";
echo "<div class=\"saved_cards\">Manage saved cards</div>";
	echo "<div class=\"saved_card_border\">";
	echo "<div class=\"saved_card_border1\">";
	echo "<div class=\"saved_card_info\">Card number ending in <span class=\"number_colr\">$number[$i]</span></div>";
	echo "<div class=\"saved_card_info1\">Expires in <span class=\"number_colr\">$mon[$i]/$yr[$i]</span></div>";	
	echo "</div>";
	echo "<div class=\"saved_card_part1\">";
	echo "<div class=\"saved_card_info21\">Name on card</div>";
	echo "<div class=\"card_name\">$cname[$i]</div>";   
	echo "</div>";
	echo "<div class=\"saved_card_part2\">";
	echo "<div class=\"saved_card_info22\">Billing address";
	echo "<div class=\"address_info1\">$uname</div>";
	echo "</div>";
	echo "<div class=\"clear\"></div>";
	
	echo "<div class=\"address_info2\">$address</div>";
	echo "<div class=\"edit_change\"><a href=\"#\">Edit</a><span><a href=\"#\" class=\"change_space\">Delete</a></span></div>";
	if($c>1){
		echo "<div class=\"more_acc\">More</div>";
	}
	echo "</div>";
	echo"</div>";
	//echo "asd";
	echo "<div class=\"more_show\">";
	for($i=1;$i<$c;$i++){
		echo "<div class=\"saved_card_border\">";
	echo "<div class=\"saved_card_border1\">";
	echo "<div class=\"saved_card_info\">Card number ending in <span class=\"number_colr\">$number[$i]</span></div>";
	echo "<div class=\"saved_card_info1\">Expires in <span class=\"number_colr\">$mon[$i]/$yr[$i]</span></div>";	
	echo "</div>";
	echo "<div class=\"saved_card_part1\">";
	echo "<div class=\"saved_card_info21\">Name on card</div>";
	echo "<div class=\"card_name\">$cname[$i]</div>";   
	echo "</div>";
	echo "<div class=\"saved_card_part2\">";
	echo "<div class=\"saved_card_info22\">Billing address";
	echo "<div class=\"address_info1\">$uname</div>";
	echo "</div>";
	echo "<div class=\"clear\"></div>";
	
	echo "<div class=\"address_info2\">$address</div>";
	echo "<div class=\"edit_change\"><a href=\"#\">Edit</a><span><a href=\"#\" class=\"change_space\">Delete</a></span></div>";	
	echo "</div>";
	echo"</div>";
	}
	echo "<div class=\"less_acc\">Less</div>";
	echo "</div>";
	
	echo "<div class=\"add_card_title11\">Add a new card</div>";
	echo "<div class=\"new_detail\">";
	echo "<div class=\"add_card_title1\">Enter your card information</div>";
	echo "<form method=\"post\" action=\"card.php\">";
	echo "<div class=\"add_card_title2\">Name</div>";
	echo "<span><input type=\"text\" name=\"card_name\" class=\"card_box\"></span>";
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
	echo "<input type=\"submit\" value=\"Add your card\" class=\"add_card\">";
	echo "</form>";
	echo "</div>";
	
	
echo"</div>";

}

else{
	
	echo "<div class=\"acc3_section_box1\">";
	echo "<div class=\"acc3_no_card\">No card has been stored</div>";
	echo "<div class=\"acc3_add_card\">";
	echo "<div class=\"add_card_title\">Add a new card</div>";
	echo "<div class=\"new_detail\">";
	echo "<div class=\"add_card_title1\">Enter your card information</div>";
	echo "<form method=\"post\" action=\"card.php\">";
	echo "<div class=\"add_card_title2\">Name</div>";
	echo "<span><input type=\"text\" name=\"card_name\" class=\"card_box\"></span>";
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
	echo "<input type=\"submit\" value=\"Add your card\" class=\"add_card\">";
	echo "</form>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
?>
</div>
</div>

<div class="acc_display_section" id="acc4">
<div class="acc_stuff_section">
<div class="acc2_section_title">My Stuff Details</div>
<div class="acc4_section_box">
<?php
$pr_id1=array();
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * FROM wishlist where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
	$p_id[$i]=$fetch['P_id'];
	$name=$fetch['Username'];
	$i=$i+1;
	}
	$cq=$i;
}
else{
	$cq=0;
}
$i=0;
$sql1="SELECT * from reviews where C_id='$c_id'";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
	while($fetch=mysqli_fetch_assoc($res1)){
		$prod[$i]=$fetch['Product_id'];
		$review[$i]=$fetch['Review'];
		$date[$i]=$fetch['Date'];
		$username[$i]=$fetch['Username'];
		$likes[$i]=$fetch['likes'];
		$dislikes[$i]=$fetch['dislikes'];
		$i=$i+1;
	}
	$cw=$i;
}
else{
	$cw=0;
}
	echo "<div class=\"Eaccount_slide\">";
	echo "<div class=\"slide_change\">";
	echo "<span class=\"prev1\" onclick=\"slidechange(-1)\">&#10094;</span>";
	echo "<span class=\"next1\" onclick=\"slidechange(1)\">&#10095;</span>";
	echo "</div>";
	echo "<div class=\"stuff_slide\">";
	echo "<div class=\"total_wishlist\">My reviews($cw)</div>";
	echo "</div>";
	echo "<div class=\"stuff_slide\">";
	echo "<div class=\"total_wishlist\">My wishlist( $cq )</div>";
	echo "</div>";
	echo "</div>";
	
	$i=0;
	if(isset($prod[$i])){
	$sql="SELECT * FROM products where Product_id='$prod[$i]'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		while($fetch=mysqli_fetch_assoc($res)){
			$P_name=$fetch['Product_Name'];
			$rating=$fetch['Ratings'];			}
	}
	}
	echo "<div class=\"stuff_slide2\">";
	echo "<div class=\"review_border_acc\">";
	if($cw==0)
		echo "<div class=\"no_review\">No reviews Yet !</div>";
	else{
	$sql="Select Images from image where p_id=$prod[$i] and Pic_id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="result_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}

echo "<div class=\"review_set\">";
echo "<div class=\"rev_pro_name\">$P_name</div>";
$rat=$rating;
$d=$rat*10;
$d=$d%10;
if($d>1){
	$rat=$rat-0.5;
	$d=1;
}
//	echo "$rat,$d";
$c=5-($rat+$d);
//echo $c;
//$c=5-$rat;
//echo $c;
echo "<div class=\"star_space\">";
echo "<div class=\"space-align\">";
for($k=0;$k<$rat;$k++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($k=0;$k<1;$k++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($k=0;$k<$c;$k++)
		echo"<span class=\"star\"></span>";
echo "</div>";
	
	echo "<div class=\"acc_review\">$review[$i]</div>";
	echo "<div class=\"acc_username\">$username[$i] <span class=\"acc_date\">$date[$i]</span></div>";
echo "</div>";

	echo "</div>";
	echo "<div class=\"review_set1\">";
	echo "<div class=\"acc_likes\"> &#128077;<span class=\"like_no\">$likes[$i]</span></div>";
	echo "<div class=\"acc_dislikes\">&#128078;<span class=\"like_no\">$dislikes[$i]</span></div>";
	echo "</div>";
	echo "<div class=\"review_set2\">";
	echo "<div class=\"rev_edit\"><a href=\"#\">Edit</a><span class=\"rev_edit2\"><a href=\"#\">Delete</a></span></div>";	
	echo"</div>";
	echo "</div>";
	if($cw>1)
		echo "<div class=\"more_rev_word\">More</div>";
	echo "<div class=\"extra_section\">";
	for($i=1;$i<$cw;$i++){
		echo "<div class=\"review_border_acc\">";
	$sql="Select Images from image where p_id=$prod[$i] and Id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="result_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}
echo "<div class=\"review_set\">";
echo "<div class=\"rev_pro_name\">$P_name</div>";
$rat=$rating;
$d=$rat*10;
$d=$d%10;
if($d>1){
	$rat=$rat-0.5;
	$d=1;
}
//	echo "$rat,$d";
$c=5-($rat+$d);
//echo $c;
//$c=5-$rat;
//echo $c;
echo "<div class=\"star_space\">";
echo "<div class=\"space-align\">";
for($k=0;$k<$rat;$k++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($k=0;$k<1;$k++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($k=0;$k<$c;$k++)
		echo"<span class=\"star\"></span>";
echo "</div>";
	
	echo "<div class=\"acc_review\">$review[$i]</div>";
	echo "<div class=\"acc_username\">$username[$i] <span class=\"acc_date\">$date[$i]</span></div>";
echo "</div>";

	echo "</div>";
	echo "<div class=\"review_set1\">";
	echo "<div class=\"acc_likes\"> &#128077;<span class=\"like_no\">$likes[$i]</span></div>";
	echo "<div class=\"acc_dislikes\">&#128078;<span class=\"like_no\">$dislikes[$i]</span></div>";
	echo "</div>";
	echo "<div class=\"review_set2\">";
	echo "<div class=\"rev_edit\"><a href=\"#\">Edit</a><span class=\"rev_edit2\"><a href=\"#\">Delete</a></span></div>";	
	echo"</div>";
	echo "</div>";
	
	}
	echo "<div class=\"less_rev_word\">Less</div>";
	echo "</div>";
	echo "</div>";
	}
//wishlist-side	
	echo "<div class=\"stuff_slide2\">";
if($cq==0)
	echo "<div class=\"no_review\">No Wishlist Yet !</div>";
else{
	echo "<div class=\"review_border_acc\">";
	$sql="SELECT * FROM wishlist WHERE C_id='$c_id'";
	$i=0;
	$qry=mysqli_query($conn,$sql);
	if(mysqli_num_rows($qry)>0){
		while($fetch=mysqli_fetch_assoc($qry)){
			$pro_wish[$i]=$fetch['P_id'];
			$Pro_name[$i]=$fetch['Product_name'];
			$username_wish[$i]=$fetch['Username'];
			$i=$i+1;
		}
	}
	$wc=$i;
//echo $wc;	
	$i=0;
	$sql="SELECT * FROM products where Product_id='$pro_wish[$i]'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		while($fetch=mysqli_fetch_assoc($res)){
			$P_name=$fetch['Product_Name'];
			$rating=$fetch['Ratings'];	
			$price=$fetch['Price'];
		}
	}
	$sql="Select Images from image where p_id=$pro_wish[$i] and Id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="result_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}
$sql="SELECT * FROM reviews where Product_id='$pro_wish[$i]'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$count_rev[$k]=$fetch['id'];
		$k=$k+1;
	}
}
echo "<div class=\"review_set\">";
echo "<div class=\"rev_pro_name\">$P_name</div>";
$rat=$rating;
$d=$rat*10;
$d=$d%10;
if($d>1){
	$rat=$rat-0.5;
	$d=1;
}
//	echo "$rat,$d";
$c=5-($rat+$d);
//echo $c;
//$c=5-$rat;
//echo $c;
echo "<div class=\"star_space\">";
echo "<div class=\"space-align\">";
for($k=0;$k<$rat;$k++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($k=0;$k<1;$k++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($k=0;$k<$c;$k++)
		echo"<span class=\"star\"></span>";
		echo "<span class=\"rev\">($k)</span>";
		
echo "<div class=\"wish_price\">&#8377;$price</div>";	
echo "<div class=\"wish_space\">";
echo "<div class=\"add_to_cart\">Add-To-Cart</div>";
echo "</div>";
echo "</div>"; 

	echo "</div>";

	echo "</div>";
	echo "<div class=\"delete_wish\">Delete</div>";
	echo "</div>";
	if($cq>1)
		echo "<div class=\"more_wish\">More</div>";
	}
echo "<div class=\"extra_section1\">";
for($i=1;$i<$cq;$i++){
	echo "<div class=\"review_border_acc\">";
$sql="SELECT * FROM products where Product_id='$pro_wish[$i]'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		while($fetch=mysqli_fetch_assoc($res)){
			$P_name=$fetch['Product_Name'];
			$rating=$fetch['Ratings'];	
			$price=$fetch['Price'];
		}
	}
	$sql="Select Images from image where p_id=$pro_wish[$i] and Id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="result_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}
$sql="SELECT * FROM reviews where Product_id='$pro_wish[$i]'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$count_rev[$k]=$fetch['id'];
		$k=$k+1;
	}
}
echo "<div class=\"review_set\">";
echo "<div class=\"rev_pro_name\">$P_name</div>";
$rat=$rating;
$d=$rat*10;
$d=$d%10;
if($d>1){
	$rat=$rat-0.5;
	$d=1;
}
//	echo "$rat,$d";
$c=5-($rat+$d);
//echo $c;
//$c=5-$rat;
//echo $c;
echo "<div class=\"star_space\">";
echo "<div class=\"space-align\">";
for($k=0;$k<$rat;$k++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($k=0;$k<1;$k++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($k=0;$k<$c;$k++)
		echo"<span class=\"star\"></span>";
		echo "<span class=\"rev\">($k)</span>";
		
echo "<div class=\"wish_price\">&#8377;$price</div>";	
echo "<div class=\"wish_space\">";
echo "<div class=\"add_to_cart\">Add-To-Cart</div>";
echo "</div>";
echo "</div>"; 

	echo "</div>";

	echo "</div>";
	echo "<div class=\"delete_wish\">Delete</div>";
	echo "</div>";	
}
echo "<div class=\"less_wish\">Less</div>";
echo "</div>";	
	echo "</div>";
	
	
?>
</div>
</div>
</div>

<div class="white_space"></div>
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


<script>
$(document).ready(function(){
	$(".acc_display_section").css('display','none');
	$(".acc-1,.acc-2,.acc-3,.acc-4").click(function(){
		$(".acc_display_section").css('display','none');
		$(".acc-section").css('margin-top','0px');
		var q=$(this).attr("target");
		$("#"+q).css('display','block');
	});
});	
</script>
<script>
$(document).ready(function(){
	$(".acc2_section_inside_box").click(function(){
		var q=$(this).attr("value");
		var w=$(this).attr("title");
		//alert(w);
		//curl=window.location.href;
		//alert(curl);
		curl="/acc_set.php"+"?"+"n"+"="+q+"&"+"e"+"="+w;
		//qurl=removeParam(e,curl);
		//alert(qurl);
		//alert(curl);
				//window.location.href=curl+"?"+att+"="+val;
		window.location.href=curl;
	});
});
</script>
<script>
$(document).ready(function(){
	$(".new_detail").css('display','none');
	$(".add_card_title").click(function(){
		$(".add_card_title").css('margin-top','0px');
		$(".new_detail").css('display','block');
	});
});
</script>
<script>
$(document).ready(function(){
	$(".new_detail").css('display','none');
	$(".add_card_title11").click(function(){
		$(".add_card_title11").css('margin-top','30px');
		$(".new_detail").css('display','block');
	});
});
</script>
<script>
$(document).ready(function(){
	$(".more_show").hide();
	$(".more_acc").click(function(){
		$(".more_acc").hide();
		$(".more_show").show();
		$(".less_acc").show();
	});
	$(".less_acc").click(function(){
		$(".less_acc").hide();
		$(".more_show").hide();
		$(".more_acc").show();
	});
});
</script>
<script>
$(document).ready(function(){
	$(".extra_section").hide();
	$(".extra_section1").hide();
	$(".less_rev_word").hide();
	$(".more_wish").click(function(){
		$(".more_wish").hide();
		$(".extra_section1").show();
		$(".less_wish").show();
	});
	$(".more_rev_word").click(function(){
		$(".more_rev_word").hide();
		$(".extra_section").show();
		$(".less_rev_word").show();
	});
	$(".less_rev_word").click(function(){
		$(".less_rev_word").hide();
		$(".extra_section").hide();
		$(".more_rev_word").show();
	});
	$(".less_wish").click(function(){
		$(".less_wish").hide();
		$(".extra_section1").hide();
		$(".more_wish").show();
	});
});
</script>
<Script>
$(document).ready(function(){
	$(".open_orders,.orders").css('display','none');
	$(".order_heading_1,.order_heading_2").click(function(){
		$(".open_orders,.orders").css('display','none');
		var q=$(this).attr("target");
		$("#"+q).css('display','block');
	});
});
</script>
<script>
var slideindex=1;
var slides=document.getElementsByClassName("stuff_slide");
var slides2=document.getElementsByClassName("stuff_slide2");
slideshow(slideindex);
function slidechange(n){
slideindex=slideindex+n;
//alert(slideindex);
slideshow(slideindex);
}
function slideshow(n){
if(n>slides.length){slideindex=1;}
if(n<=0){slideindex=slides.length;}
for(i=0;i<slides.length;i++){
	slides[i].style.display="none";
	slides2[i].style.display="none";
}	
	slides[slideindex-1].style.display="block";
	slides2[slideindex-1].style.display="block";

}
</script>
</body>
</html>