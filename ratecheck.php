<html>
<head>
<title>Check</title>
</head>
<body>
<?php
session_start();
$c_id=$_SESSION['Cd'];
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_SESSION['name'];	
$pd=$_SESSION['prod_id'];
$dr=$_POST['desc_review'];
$dt=$_POST['desc_title'];
$date=date("Y-m-d");	
echo $date;
echo $dr;
echo $dt;	
$conn=mysqli_connect('localhost','root','','e-shop')or die("unable to connect");
$qry="INSERT INTO reviews (Product_id,Username,Review,Title,Date,C_id) VALUES('$pd','asd','$dr','$dt','$date',$c_id)";
$res=mysqli_query($conn,$qry);
if($res){
	echo "F***";
}
else{
	echo "Error";
}
}
?>
</body>
</html>
