<?php
session_start();
$val=$_SESSION['del'];
$c_id=$_SESSION['Cd'];
$p_id=$_SESSION['p_id'];
$date=date("Y/m/d");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if($val=='1'){
		$_SESSION['rec_name']=$_POST['rec_name'];
		$_SESSION['alt_num']=$_POST['alt_num'];
		$len=$_SESSION['alt_num'];
		header("location:order2.php");
	}
	if($val=='2'){
		 $_SESSION['no']=$_POST['quantity'];
		 $price=$_SESSION['price'];
		 $price=preg_replace('$,$', '' ,$price);
		 $pay=$price*$_SESSION['no'];
		 $_SESSION['pay']=$pay;
		header("location:order3.php");
	}
	if($val=='3'){
		if(isset($_POST['card'])){
		$_SESSION['card_val']=$_POST['card'];
		$_SESSION['cvv']=implode(',',$_POST['cvv']);
	}	
	}
	//echo $c_id;
	if($val=='3'){
		$rec_name1=$_SESSION['rec_name'];
	$alt_num1=$_SESSION['alt_num'];
	$no1=$_SESSION['no'];
	$cv=$_SESSION['card_val'];
	$cvv=$_SESSION['cvv'];
	$pay=$_SESSION['pay'];
	if(($cv=='1')||($cv=='2')){
		$cv=='Debit card';
	}
	else{
		$cv='Cash on delivery';
	}
	if(!isset($alt_num1))
		$alt_num1='';
	$conn=mysqli_connect('localhost','root','','e-shop')or die("Cant connect");
	$sql2="Select * from customers where C_id='$c_id'";
	$res1=mysqli_query($conn,$sql2);
	if(mysqli_num_rows($res1)>0){
		while($fetch1=mysqli_fetch_assoc($res1)){
			$address=$fetch1['Address'];
		}
	}
	$sql3="select * from products where Product_id='$p_id'";
	$res2=mysqli_query($conn,$sql3);
	if(mysqli_num_rows($res2)>0){
		while($fetch2=mysqli_fetch_assoc($res2)){
			$delivery=$fetch2['Delivery'];
		}
	}
	$sql="INSERT INTO orders values('','$c_id','$p_id','$date','$address','$rec_name1','$alt_num1','$no1','$pay','$cv')";
	if(mysqli_query($conn,$sql)){
	$_SESSION['done']='1';
	$sql3="INSERT INTO delivery values('','$c_id','$p_id','$address','$date','process')";
	if(mysqli_query($conn,$sql3)){
	//header("location:Eaccount.php");	
	echo $date;
	}
	}
	else{
		echo "error";
	}
}

}
?>