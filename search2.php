<html>
<head>
<title>Search demo</title>
<style>
.filter-1,.filter-2{
	border:1px solid none;
	height:300px;
	width:250px;
	margin-left:10px;
	margin-top:10px;
	background-color:#f5f5f5;
}
.filter-head{
	border:1px solid none;
	height:40px;
	padding-left:20px;
	padding-top:10px;
	font-size:23px;
	background-color:#f5f5f5;
}

</style>
</head>
<body>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$search=$_POST['search'];
	$search1=$search;
	echo $search1;
	$search1="Iphone";
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * FROM products WHERE CONCAT(Category,' ',Type,' ',Product_Name,' ',Ratings,' ',Image,' ',URL) LIKE '$search1'";
echo "Asd";
//$sql="SELECT * FROM products WHERE CONCAT(Product_Name,' ',Brand,' ',Type) LIKE '$search'";
if($res=mysqli_query($conn,$sql)){
	if(mysqli_num_rows($res)>0){
		echo "Asd";
		while($fetch=mysqli_fetch_assoc($res)){
			$q=$fetch['Typeid'];
		}
		echo $q;
	}
}
}
/*
$taar=array();
$i=0;
$sql1="SELECT Fid,Name FROM filters WHERE Pid='$q'";
if($res1=mysqli_query($conn,$sql1)){
	if(mysqli_num_rows($res1)>0){
		while($fetch1=mysqli_fetch_assoc($res1)){
			$taar[$i]=$fetch1['Name'];
			$tarr1[$i]=$fetch1['Fid'];
			$i=$i+1;
		}
	}
$i=0;	
$c=count($taar);
$c1=count($tarr1);
for($i=0;$i<$c;$i++){
	echo "<div class=\"filter-1\">";
$sql1="SELECT description FROM filter_level WHERE P_id='$tarr1[$i]'";
echo $taar[$i];
echo "<br>";
if($res1=mysqli_query($conn,$sql1)){
	if(mysqli_num_rows($res1)>0){
		while($fetch1=mysqli_fetch_assoc($res1)){
			echo $fetch1['description'];
			echo "<br>";
		}
	}	
}
echo "</div>";
}
}
else{
	echo "error";
}
}*/
?>

</body>
</html>