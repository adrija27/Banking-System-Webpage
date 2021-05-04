<?php
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
session_start();
$mla=$_SESSION['id'];
$password=md5($_POST['pass1']);
$n_password=$_POST['pass2'];
$c_password=$_POST['pass3'];
$select_query="SELECT * FROM bank_db WHERE password='$password' AND Email='$mla'" ;
$select_result=mysqli_query($con,$select_query) or die(mysqli_error($con)) ;
if(mysqli_num_rows($select_result)>0){
	if($n_password==$c_password ){
		if(strlen($n_password)>=6){
	$p=md5($n_password);
	$update_query="UPDATE bank_db SET Password='$p' WHERE Email='$mla'";
	$update_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
	echo "<script>alert('Password Changed Successfully !')</script>",$_SESSION['id'];
	echo "<script>location.href='passchange.php'</script>";
}
else{
	echo "<script>alert('New password should have more than 6 characters')</script>";
	echo "<script>location.href='passchange.php'</script>";

}
}else{
	echo "<script>alert('New password is not matching with confirm password')</script>";
	echo "<script>location.href='passchange.php'</script>";
}
}else{
	echo "<script>alert('Please enter the correct password (old password)')</script>";
	echo "<script>location.href='passchange.php'</script>";
}
?>