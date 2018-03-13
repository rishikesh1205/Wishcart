<html>
<head>
<link rel="stylesheet" type="text/css" href="nstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body onload="image()">
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
<div class="image-details">
<div  id="pb">
<div class="part1-border">
<?php

$conn=mysqli_connect('localhost','root','','e-shop');
$sql="Select * from image where Id=1";	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="part1-image" src="data:image;base64, '.$fetch['Images'].'"';
			echo "<br>";
		}
	}
	//echo $qwe;
}

else{
	echo "error";
}

?>

</div>
</div>
<div class="clear"></div>
<div id="im" class="image-modal">
<div class="model-content">
<div class="closefuck">&times;</div>
<?php
$conn=mysqli_connect('localhost','root','','e-shop');
$full="Select * from products where Id='1'";
if($res=mysqli_query($conn,$full)){
	if(mysqli_num_rows($res)>0){
		while($fetch=mysqli_fetch_assoc($res)){
			$des_id=$fetch['Description_ID'];
			$name=$fetch['Product_Name'];
			$Ratings=$fetch['Ratings'];
			$price=$fetch['Price'];
			$emi=$fetch['EMI'];
			$delivery=$fetch['Delivery'];
			$seller=$fetch['Seller'];
			$review="1000";
			$ratingp="5000";
			$discount="15";
			$warranty='1';
			$highlight=$fetch['Highlights'];
			$prod_id=$fetch['Product_id'];	
			$memory=$fetch['Memory'];
			$color=$fetch['color'];
		}
	}
	$_SESSION['color']=$color;
	$_SESSION['memory']=$memory;
	$_SESSION['prod_id']=$prod_id;
	$_SESSION['name']=$name;
	$_SESSION['Ratings']=$Ratings;
	$_SESSION['des_id']=$des_id;
	$_SESSION['price']=$price;
	$_SESSION['emi']=$emi;
	$_SESSION['delivery']=$delivery;
	$_SESSION['seller']=$seller;
	$_SESSION['review']=$review;
	$_SESSION['ratingp']=$ratingp;
	$_SESSION['discount']=$discount;
	$_SESSION['warranty']=$warranty;
	$_SESSION['highlight']=$highlight;
	}
$j=0;
$qwe=array();
$conn=mysqli_connect('localhost','root','','e-shop');
$sql="Select * from image where p_id=1";	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			$qwe[$j] ='<img height:"150" width:"50" class="part2-image" src="data:image;base64, '.$fetch['Images'].'">';
				$qwe1[$j] ='<img height:"150" width:"50"  src="data:image;base64, '.$fetch['Images'].'">';
				$j=$j+1;
		}
		//echo $qwe[0];
		$len_img=$j;
	}
	
	echo "<div class=\"pic_content\">";
	echo "<div class=\"title_image_1\">$name</div>";
	for($i=0;$i<$len_img;$i++){
		echo "<div class=\"pic_inside\">";
		echo "<div class=\"part3_image\" target=\"t$i\" >$qwe[$i]</div>";
		echo "</div>";
	}
	echo "</div>";
	for($i=0;$i<$len_img;$i++){
	echo "<div class=\"pic_content2\" id=\"t$i\">";
	echo "<div class=\"big_pic\">$qwe1[$i]</div>";
	echo "</div>";
}
}
else{
	echo "error";
}

?>

</div>
</div>
</div>

<script>
var mclick=document.getElementById('pb');
var mcon=document.getElementById('im');
var mclose=document.getElementsByClassName("closefuck")[0];
mclick.onclick=function(){
	mcon.style.display="block";
}
mclose.onclick=function(){
	mcon.style.display="none";
}
</script>
<div class="content-details">
<?php

echo "<div class=\"product-name\">$name</div>";
$rat=$Ratings;
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
echo "<div class=\"space-align\">";
for($i=0;$i<$rat;$i++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($i=0;$i<1;$i++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($i=0;$i<$c;$i++)
		echo"<span class=\"star\"></span>";

echo "<span class=\"review\">$review Reviews & $ratingp Ratings </span>";
echo "<div class=\"price\">&#x20B9; $price";
echo "<span class=\"discount\"> $discount% discount</span>";
echo "</div>";
echo "<div class=\"EMI-P\">EMI Starts From &#x20B9;$emi/month </div>";
echo "<div class=\"EMI-P\">Bank Offer Extra 5% off on Axis Bank Buzz Credit Cards </div>";
echo "<div class=\"warranty\">Warranty <span class=\"w-1\">$warranty Year Manufacture Warranty</span></div>";
echo "<div class=\"p-color\">Color  </div>";
echo "<div class=\"p-color1-border\"></div>";
echo "<div class=\"p-color1-border1\"></div>";
echo "<div class=\"p-color1-border1\"></div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"p-color1-border\"></div>";	
echo "<div class=\"p-color1-border1\"></div>";
echo "<div class=\"p-color1-border1\"></div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"storage\">Storage</div>";
echo "<div class=\"storage-border\"><span class=\"st-value\">32GB</span></div>";
echo "<div class=\"storage-border1\"><span class=\"st-value\">64GB</span></div>";
echo "<div class=\"storage-border1\"><span class=\"st-value\">128GB</span></div>";
echo "<div class=\"storage-border1\"><span class=\"st-value\">256GB</span></div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"storage\">Delivery</div><input type=\"textbox\" class=\"delivery1\">";
echo "<div class=\"d-details\">Delivery in n days</div>";
//echo "<div class=\"clear\"></div>";
echo "<div class=\"high\">Highlights</div>";
$arr=explode('.',$highlight);
$arr=str_replace('.',' ',$arr);
$nq=count($arr);
for($i=0;$i<$nq;$i++)
	echo "<div class=\"highlights1\"><span class=\"sym\"> &#9679; </span>$arr[$i]</div>";
echo "</div>";
echo "</div>";
echo "<div class=\"clear\"></div>";
echo "<div class=\"description-border\">";

echo "<div class=\"description-title\">Product-Description</div>";
$sql="SELECT * FROM description_title where Description_id='$des_id'";
$rst=mysqli_query($conn,$sql);
if(mysqli_num_rows($rst)>0){
	while($fetch=mysqli_fetch_assoc($rst)){
		$desc1=$fetch['desc_1'];
		$desc2=$fetch['desc_2'];
		$desc3=$fetch['desc_3'];
		$desc4=$fetch['desc_4'];
		$desc5=$fetch['desc_5'];
		$desc6=$fetch['desc_6'];
		$desc7=$fetch['desc_7'];
		$desc8=$fetch['desc_8'];
		$desc9=$fetch['desc_9'];
		$desc10=$fetch['desc_10'];
	}
	
$sql1="SELECT * FROM description_head where Description_id='$des_id'";
$rst=mysqli_query($conn,$sql1);
if(mysqli_num_rows($rst)>0){
	while($fetch=mysqli_fetch_assoc($rst)){
		$desc_1=$fetch['desc_1'];
		$desc_2=$fetch['desc_2'];
		$desc_3=$fetch['desc_3'];
		$desc_4=$fetch['desc_4'];
		$desc_5=$fetch['desc_5'];
		$desc_6=$fetch['desc_6'];
		$desc_7=$fetch['desc_7'];
		$desc_8=$fetch['desc_8'];
		$desc_9=$fetch['desc_9'];
		$desc_10=$fetch['desc_10'];
	}
}	
    echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc1</div>";
	echo "<div class=\"description-content\">$desc_1</div>";
	echo "</div>";
	echo "<div class=\"more1\">";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc2</div>";
	echo "<div class=\"description-content\">$desc_2</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc3</div>";
	echo "<div class=\"description-content\">$desc_3</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc4</div>";
	echo "<div class=\"description-content\">$desc_4</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc5</div>";
	echo "<div class=\"description-content\">$desc_5</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc6</div>";
	echo "<div class=\"description-content\">$desc_6</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc7</div>";
	echo "<div class=\"description-content\">$desc_7</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc8</div>";
	echo "<div class=\"description-content\">$desc_8</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc9</div>";
	echo "<div class=\"description-content\">$desc_9</div>";
	echo "</div>";
	echo "<div class=\"description-content-border\">";
	echo "<div class=\"description-title-1\">$desc10</div>";
	echo "<div class=\"description-content\">$desc_10</div>";
	echo "</div>";
	echo "</div>";
	echo "<div class=\"clear\"></div>";
	echo "<div class=\"expand\">Expand</div>";
	echo "</div>";
echo "<div class=\"description-title\">Specificaions</div>";	
$sql="select * from specifications_head where Id <= 2";
$res=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($res)){
	while($fetch=mysqli_fetch_assoc($res)){
		$arr1[$i]=$fetch['Id'];
		$arrr[$i]=$fetch['spec_type'];
		$i=$i+1;
	}
	$count=count($arr1);
}
$k=0;
for($i=0;$i<$count;$i++){
echo "<div class=\"specification-border\">";
echo "<div class=\"specs_title\">$arrr[$i]</div>";	
$sql1="select * from specification_content where spec_type_id=$arr1[$i]";
$res=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$arr2[$k]=$fetch['Id'];
		$arr3[$k]=$fetch['Spec_head'];
		echo "<div class=\"spec_head\">$arr3[$k]</div>";
		$sql2="select * from specs_value where Specs_id='$arr2[$k]'";
		$res2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($res2)>0){
			while($fetch2=mysqli_fetch_assoc($res2)){
				$f=$fetch2['Specs_val'];
		echo "<div class=\"specs\">$f</div>";
			echo "<div class=\"clear\"></div>";
				echo "<br>";
			}
		}
		$k=$k+1;
	}
}
echo "</div>";
}
echo "<div class=\"description-title\">Ratings And Reviews</div>";
echo "<div class=\"rating-border\">";
echo "<form method=\"post\" action=\"rate.php\">";
echo "<button class=\"rate-this\" type=\"submit\">Rate this product!</button>";
echo "</form>";
echo "<div class=\"rating-space\"></div>";
echo "<div class=\"rating-1\">";
echo "<div class=\"rating-level-1\"><div class=\"five-star\"></div></div> <span class=\"ratin-star\">5<span class=\"star-color-gold\">&#9734;</span></span>";
echo "<div class=\"rating-level-1\"><div class=\"four-star\"></div></div> <span class=\"ratin-star\">4<span class=\"star-color-green\">&#9734;</span></span>";
echo "<div class=\"rating-level-1\"><div class=\"three-star\"></div></div><span class=\"ratin-star\">3<span class=\"star-color-green\">&#9734;</span></span>";
echo "<div class=\"rating-level-1\"><div class=\"two-star\"></div></div> <span class=\"ratin-star\">2<span class=\"star-color-red\">&#9734;</span></span>";
echo "<div class=\"rating-level-1\"><div class=\"one-star\"></div></div> <span class=\"ratin-star\">1<span class=\"star-color-orange\">&#9734;</span></span>";
echo "</div>";
echo "<div class=\"rating-2\">";
echo "<div class=\"big-title\">$Ratings<span class=\"small-title\">&#9734;</span></div>";
echo "<div class=\"rating1-small\">$ratingp Ratings<span class=\"rating2-small\">&$review 	Reviews</span></div>";
echo "<div class=\"\">";
echo "</div>";
echo "</div>";
echo "</div>";
$sql="SELECT * FROM reviews where Product_id='$prod_id'";
$qry=mysqli_query($conn,$sql);
$o=0;
$c_c=0;
if(mysqli_num_rows($qry)){
	while($fetch=mysqli_fetch_assoc($qry)){
		$c_id[$o]=$fetch['id'];
		$username[$o]=$fetch['Username'];
		$ratin[$o]=$fetch['Rating'];
		$re[$o]=$fetch['Review'];
		//$re[$o]=$review;
		$title[$o]=$fetch['Title'];
		$date[$o]=$fetch['Date'];	
		$c_c=$c_c+1;
		$o=$o+1;
	}	
	
} 
else{
	echo "error";
}
if($c_c<3){
	for($j=0;$j<$c_c;$j++){
echo "<div class=\"review-border\">";
$rat=$ratin[$j];
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
echo "<div class=\"space-align\">";
for($i=0;$i<$rat;$i++)
	echo"<span class=\"star on\"></span>";
if($d!=null)
	for($i=0;$i<1;$i++)
		echo "<span class=\"star half\"></span>";
if($c!=null)
	for($i=0;$i<$c;$i++)
		echo"<span class=\"star\"></span> ";
echo "<span class=\"rev_title\">$title[$j]</span>";
echo "</div>";
echo "<div class=\"rev_sec\">$re[$j]</div>";
echo "<div class=\"rev_user\">$username[$j]";
echo "<span class=\"rev_date\">$date[$j]</span>";
echo "</div>";
echo "</div>";
}
echo "<div class=\"more_rev\"> More reviews</div>";
}
else{
	                 //more comments
}
}

else{
	echo "error";
}
?>
<?php 
echo "<div class=\"qstion_border\">";
echo "<div class=\"inside_border\">";
echo "<div class=\"qstion\"> Questions and answers about the item";
echo "</div>";
echo "</div>";
echo "<div class=\"ask\"> Ask question</div>";
$conn=mysqli_connect('localhost','root','','e-shop');
$sql1="Select * from qa";
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>0){
	$p=0;
	$c=0;
while($fetch=mysqli_fetch_assoc($res1)){
	$id[$p]=$fetch['Id'];
	$question[$p]=$fetch['question'];
	$user[$p]=$fetch['User'];
	$ans[$p]=$fetch['answer'];
	$p=$p+1;
	$c=$c+1;
}
for($i=0;$i<$c;$i++){
if($ans[$i]!=null){
echo "<div class=\"qa_border\">";
echo "<div class=\"qa-heading\">Q:";
echo "<span class=\"qn\">$question[$i]</span>";
echo "</div>";
echo "<div class=\"qa-heading\">A:";
echo "<span class=\"qn\">$ans[$i]</span>";
echo "</div>";
echo "</div>";	
}
}
}       
else{
	echo "<div class=\"none\">No questions are posted on this item</div>";
}
echo "</div>";
echo "</div>";
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
	$(".pic_content2").css('display','none');
	$(".part3_image").click(function(){
		$(".pic_content2").css('display','none');
		var q=$(this).attr("target");
		$("#"+q).css('display','block');
	});
});
</script>
<script>
function fuck(){
	var len='<?php echo $len_img;?>'
	var arr=[];
	for( var i=0;i<len;i++){
		arr[i]='<?php echo $qwe[$j];?>'
	}
}
</script>
<script>
var c=1;
$(document).ready(function(){	
	$(".more1").hide();
	$(".expand").click(function(){
	c=c+1;
	if(c%2==0){
		$(".expand").text("Less");
	}
	else{
		$(".expand").text("Expand");
	}
	$(".more1").toggle();

	});
});
</script>

</body>
</html>