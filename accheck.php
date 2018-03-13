<html>
<head>
<link type="text/css" rel="stylesheet" href="stylesheet3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
echo "asdasd";
$user=$_SESSION['Username'];
$pswrd=$_SESSION['Password'];
//echo $user;
//echo $pswrd;
//if('session_status'==false)
	//echo "Asd";
//else
	//echo "fu";
//if($_SERVER["REQUEST_METHOD"]=="POST"){
	//echo "Asdf";
	$conn=mysqli_connect('localhost','root','','e-shop')or die("Unable to connect");
	$sql="SELECT * FROM customers where Id='1'";
	if($res=mysqli_query($conn,$sql)){
		//echo"asdf";
	if(mysqli_num_rows($res)>0){
		//echo "as";
		while($fetch=mysqli_fetch_assoc($res)){	
			$gender=$fetch['Gender'];
			$Fname=$fetch['First Name'];
			$Lname=$fetch['Last Name'];
			$City=$fetch['City'];
			$Pincode=$fetch['Pincode'];
			$Profile=$fetch['Profile Name'];
			//header("location:account.php");	
		}
		echo $gender;
		$_SESSION['Gender1']=$gender;
		echo $_SESSION['Gender1'];
		//echo "as";
	//	echo $Fname;
	//	echo $Lname;
	//	echo $City;
	//	echo $Pincode;
	//	echo $Profile;
}
}

?>
</body>
</html>