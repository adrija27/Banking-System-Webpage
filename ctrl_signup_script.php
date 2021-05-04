<?php
session_start();
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));

$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$pass=$_POST['pass'];
if(strlen($pass)>=6){
$password=md5($pass);
$select_query="SELECT * FROM bank_db WHERE Email='$email'" ;
$select_result=mysqli_query($con,$select_query) ;
if(mysqli_num_rows($select_result)>0){
	echo "<script>alert('Sorry.... user with this email address already exists')</script>";
	echo "<script>location.href='YFsignup.php'</script>";
}else{
$insert_query="INSERT INTO bank_db (Name,Email,Password) VALUES ('$name','$email','$password')";
$_SESSION['id']=$email;
$insert_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));

echo "<script>alert('User Successfully Signed Up')</script>",$_SESSION['id'];

echo "<script>location.href='balance.php'</script>";

}
}else{
	echo "<script>alert('Password should contain atleast 6 characters. ')</script>";
	echo "<script>location.href='YFsignup.php'</script>";
}

?>
