<?php
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
session_start();
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['pass']);
$select_query="SELECT * FROM bank_db WHERE Email='$email' AND Password='$password'" ;
$select_result=mysqli_query($con,$select_query) or die(mysqli_error($con)) ;
if(mysqli_num_rows($select_result)>0){
	$_SESSION['id']=$email;
	echo "<script>alert('You are successfully logged in')</script>",$_SESSION['id'];
	echo "<script>location.href='balance.php'</script>";

	
}else{
    echo "<script>alert('Enter correct details ')</script>";
    echo "<script>location.href='YFlogin.php'</script>";

}

?>