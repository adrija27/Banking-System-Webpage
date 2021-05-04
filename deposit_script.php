<?php
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
session_start();
$ml=$_SESSION['id'];
$val=$_POST['val'];
if($val<0){
	echo "<script>alert('Deposit Amount should be more than 0 !! ')</script>";
	echo "<script>location.href='deposit.php'</script>";
}
else{
	$select_query="SELECT Balance FROM bank_db WHERE Email='$ml'";
	$select_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
	$rowdata=mysqli_fetch_array($select_result);
	$bal=$rowdata['Balance'];
	$upb=$bal+$val;
	$update_query="UPDATE bank_db SET Balance='$upb' WHERE Email='$ml'";
	$update_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
	echo "<script>alert('Balance Added Successfully !')</script>",$_SESSION['id'];

	echo "<script>location.href='balance.php'</script>";
}