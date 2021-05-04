<?php
session_start();
session_unset();
if(!isset($_SESSION['id'])){
	echo "<script>alert('User successfully logged out')</script>";
	echo "<script>location.href='YFlogin.php'</script>";
}
?>
