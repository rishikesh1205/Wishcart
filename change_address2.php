<html>
<?php
session_start();
if(!isset($c_id))
$c_id=$_SESSION['Cd'];


if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST['fullname'];
	$mob=$_POST['mobile'];
	$pincode=$_POST['pincode'];
	$address=$_POST['address'];
	$city=$_POST['city'];
$value=array("$name","$mob","$pincode","$address","$city");
$conn=mysqli_connect('localhost','root','','e-shop')or die("cant connect");
$sql="SELECT * FROM customers where C_id='$c_id'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	while($fetch=mysqli_fetch_assoc($res)){
		$name1=$fetch['Username'];
		$mob1=$fetch['Mobile_no'];
		$pincode1=$fetch['Pincode'];
		$address1=$fetch['Address'];
		$city1=$fetch['City'];
	}
$value1=array("$name1","$mob1","$pincode1","$address1","$city1");	
}
$c=sizeof($value);
$tempn=array("Username","Mobile_no","Pincode","Address","City");
for($i=0;$i<$c;$i++){
if($value[$i]!=$value1[$i]){	
$temp=$value[$i];
echo $i;
$sql="UPDATE customers SET $tempn[$i]='$temp' WHERE C_id=$c_id";
echo "$tempn[$i],$temp";
echo "\n";
$res=mysqli_query($conn,$sql);
}
}
$_SESSION['change']='1';
header("location:Eaccount.php");
}
?>
</html>