<html>
<head>
<title>Ref</title>
</head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','e-shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO products(Category,Type,Product_Name,Stock,Brand,Price,Reviews) VALUES('Electronics','Mobile','Apple','20','Iphone5s','29000','asda')";
if(mysqli_query($conn,$sql))
{
	echo "done";
//mysqli_close($conn);
}
else{
	echo "noo";
}
mysqli_close($conn);
?>
</body>
</html>
