<html>
<body>
<?php
//session_start();
$c=$_POST['z'];
$d=$c;
//echo $d;
$x=$_POST['x'];
$y=$_POST['y'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT T_id from filter_table where F_id='$x' and lvl_id='$y'";
$res=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$p_id[$i]=$fetch['T_id'];
		$i=$i+1;
	}
	$c=count($p_id);
	session_start();
	$search=$_SESSION['search'];
	echo "<div class=\"display_pane1\">";
	echo "<div class=\"pane1\">Showing $c - $c of $c results for $search";	
	echo "</div>";
	echo "<div class=\"sort\">Sort";
	echo "<span class=\"sort-list\">";
	echo "<span class=\"sort1\">Relevance</span>";
	echo "<span class=\"sort2\">Popularity</span>";
	echo "<span class=\"sort3\">Price -- Low to high</span>";
	echo "<span class=\"sort4\">Price -- high to Low</span>";
	echo "<span class=\"sort5\">Newest First</span>";
	echo "</span>";
	echo "</div>";
	echo "</div>";
	echo "<div class=\"space\"></div>";
	
	$sql1="SELECT * FROM products WHERE Product_id='$p_id[0]'";
	$res=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$p_name=$fetch['Product_Name'];
		$Ratings=$fetch['Ratings'];
		$price=$fetch['Price'];
		$emi=$fetch['EMI'];
		$review="1000";
		$ratingp="5000";
		$discount="15";
		$highlight=$fetch['Highlights'];
		echo "<div class=\"result_pane\">";
		$sql="Select Images from image where p_id=$p_id[0] and Id='1'" ;	
if($res1=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res1)>0){
		while($fetch=mysqli_fetch_assoc($res1)){
			echo '<img height:"50" width:"50" class="result_image" src="data:image;base64, '.$fetch['Images'].'">';
		}
	}
}
$wishl="SELECT Id FROM wishlist WHERE Username='$d' AND Product_Name='$p_name'";
$wish=mysqli_query($conn,$wishl);
if(mysqli_num_rows($wish)>0){
	$wv=1;
}
else{
	$wv=0;
}
echo "<div class=\"details_pane\">";
echo "<div class=\"wishlist\"> &#9825;</div>";

echo "</div>";
echo "<div class=\"dummy\"></div>";
echo "<div class=\"details-1\">";
echo "<div class=\"pname\">$p_name</div>";
echo "<div class=\"ratinrev\">";
$rat=$Ratings;
$ra=$rat*10;
$ra=$ra%10;
if($ra>1){
	$rat=$rat-0.5;
	$ra=1;
}
$co=5-($rat+$ra);
for($i=0;$i<$rat;$i++)
	echo"<span class=\"star on\"></span>";
if($ra!=null)
	for($i=0;$i<1;$i++)
		echo "<span class=\"star half\"></span>";
if($co!=null)
	for($i=0;$i<$c;$i++)
		echo"<span class=\"star\"></span>";
echo "<span class=\"review1\">$review Reviews & $ratingp Ratings </span>";
echo "</div>";
echo "<div class=\"high1\">";
$arr=explode('.',$highlight);
$arr=str_replace('.',' ',$arr);
$nq=count($arr);
for($i=0;$i<$nq;$i++)
	echo "<div class=\"highlights2\"><span class=\"sym1\"> &#9679; </span>$arr[$i]</div>";
echo "</div>";
echo "</div>";
echo "<div class=\"details-2\">";
echo "<div class=\"price1\">&#x20B9 $price</div>";
echo "<div class=\"offer1\">$discount% off</div>";
echo "<div class=\"emi2\">EMI Starting from &#x20B9 $emi per month</div>";
echo "</div>";
echo "</div>";
	}
}
}	
?>
<script>

$(document).ready(function(){
	var wv = <?php echo $wv; ?>;
	if(wv == 1){
		$(".wishlist").css("color","red");
	}
	$(".wishlist").click(function(){
	     var user = "<?php echo $d; ?>";
		 var pname = "<?php echo $p_name; ?>";
		 //alert(pname);
		//alert(user);
		$(".wishlist").toggleClass('red');
		$(".dummy").load("wish.php",{as:user,p:pname});
	});
});
</script>
</body>
</html>
