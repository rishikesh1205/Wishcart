<html>
<head>
<title>E-shop</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$user=$_POST['username'];	
$pswrd=$_POST['passrd'];
$conn=mysqli_connect('localhost','root','','e-shop')or die("UNABLE TO CONNECT");
$sql="SELECT * FROM customers where Mobile_no='$user' OR Email_Id='$user'";
if($res=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res)){
		while($fetch=mysqli_fetch_assoc($res)){
			$passwrd=$fetch['Password'];
			$username=$fetch['Username'];	
			$cd=$fetch['C_id'];
		}
	}
if($pswrd==$passwrd){
	session_start();
	$_SESSION['Username']=$username;
	$_SESSION['Cd']=$cd;
	header("location:product.php");
}
		
	else{
		echo "wrong";
}}
else{
	echo "fuck";
}
echo $_SESSION['Username'];
	}
	else{
		echo"a";
	}

	

?>
</body>
</html>