<html>
<head>
<title>Signup</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$num=$_POST["num"];
	if(!empty($_POST["num"]))
	{
		$num=$_POST["num"];
	}
	$mailid=$_POST["mailid"];
	if(!empty($_POST["mailid"]))
	{
		$mailid=$_POST["mailid"];
	}
	$password=$_POST["password"];
	if(!empty($_POST["password"]))	
	{
		$password=$_POST["password"];
	}
	$uname=$_POST["uname"];
	
	if(!empty($_POST["uname"]))
	{
		$uname=$_POST["uname"];
	}
extract($_POST);
$Mobile_no=$_POST['num'];
$Email_id=$_POST['mailid'];
$Password=$_POST['password'];
$Username=$_POST['uname'];
$conn=mysqli_connect('localhost','root','','e-shop');
$sql="SELECT Mobile_no FROM customers WHERE Mobile_no='$Mobile_no'";
//echo "asd";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	//echo "asd";
	while($row=mysqli_fetch_assoc($result))
	{
	echo "ALREADY EXISTS";
	}
}
//echo $Mobile_no;
//echo $Email_id;
//echo $Password;
else{
	echo "123";
	$v="INSERT INTO customers(Mobile_no,Email_id,Password,Username) VALUES('" .$Mobile_no. "','$Email_id','$Password','$Username')";
	if(mysqli_query($conn,$v))
	{
		//echo $Username;
 header("location:slide.php");	
 }
	else{
	echo "noo";
	}
}
mysqli_close($conn);
}
?>