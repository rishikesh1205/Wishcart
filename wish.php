<html>
<head>
<link rel="stylesheet" type="text/css" href="nstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
$c_id=$_SESSION['Cd'];
$user=$_POST['as'];
$pname=$_POST['p'];

//echo $pname;
if($user!=NULL){
	$conn=mysqli_connect('localhost','root','','e-shop')or die("can't connect");
	$sql="SELECT Id FROM wishlist WHERE Username='$user' AND Product_Name='$pname'";
	$stat=mysqli_query($conn,$sql);
	if(mysqli_num_rows($stat)>0){
		while($fetch=mysqli_fetch_assoc($stat)){
			$i=$fetch['Id'];
			$sql="DELETE FROM wishlist WHERE Id='$i'";
			if($del=mysqli_query($conn,$sql)){
				$wv=0;
				//echo "del";
			}
		}
	}
	else{
	$sql="SELECT Product_id FROM products where Product_Name='$pname'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0){
		while($fetch=mysqli_fetch_assoc($res)){
			$q=$fetch['Product_id'];
			
				
					
						 
						$sql="INSERT INTO wishlist VALUES('','$user','$pname','$q','$c_id')";
						if($res2=mysqli_query($conn,$sql)){
							//echo "F***";
							$wv=1;
						}
						else{
							echo "ERROR";
						}
				
			
		}
	}
}
}
//echo $user;
?>
<script>
$(document).ready(function(){
var wv = <?php echo $wv; ?>;
	if(wv == 0){
		$(".wishlist").css("color","black");
	}
	else{
		$(".wishlist").css("color","red");
	}
});
</script>
</body>
</html>