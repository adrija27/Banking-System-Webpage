<?php
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
session_start();
$m=$_SESSION['id'];
$amount=$_POST['amount'];
$to=$_POST['to'];
$b_name=mysqli_real_escape_string($con,$_POST['b_name']);
if($amount <0){
	echo "<script>alert('Amount should be more than 0 !! ')</script>";
	echo "<script>location.href='initiatepay.php'</script>";
}
else{
if($b_name =='YF Bank'){
	$select_query1="SELECT Balance FROM bank_db WHERE Email='$m'" ;
	$select_query2="SELECT Balance FROM bank_db WHERE id='$to'" ;
	$select_result2=mysqli_query($con,$select_query2) or die(mysqli_error($con)) ;
if(mysqli_num_rows($select_result2)>0){
	$rowdata2=mysqli_fetch_array($select_result2);
	$select_result1=mysqli_query($con,$select_query1) or die(mysqli_error($con)) ;
	$rowdata1=mysqli_fetch_array ($select_result1);
	$bal1=$rowdata1['Balance'];
    if(($bal1-$amount)>=0){
    	$upb1=$bal1-$amount;
    	$update_query1="UPDATE bank_db SET Balance='$upb1' WHERE Email='$m'";
    	$update_result1=mysqli_query($con,$update_query1) or die(mysqli_error($con)) ;
    	$bal2=$rowdata2['Balance'];
    	$upb2=$bal2+$amount;
    	$update_query2="UPDATE bank_db SET Balance='$upb2' WHERE id='$to'";
    	$update_result2=mysqli_query($con,$update_query2) or die(mysqli_error($con));
    	echo "<script>alert('Payment Successful !')</script>",$_SESSION['id'];

		echo "<script>location.href='balance.php'</script>";
    }

    else{
    	echo "<script>alert('Out of Balance !')</script>";
        echo "<script>location.href='initiatepay.php'</script>";
    }
	
}else{
    echo "<script>alert('Enter correct details ')</script>";
    echo "<script>location.href='initiatepay.php'</script>";

}
}
else{
	$select_query1="SELECT Balance FROM bank_db WHERE Email='$m'" ;
	$select_result1=mysqli_query($con,$select_query1) or die(mysqli_error($con)) ;
	$rowdata1=mysqli_fetch_array ($select_result1);
	$bal1=$rowdata1['Balance'];
	if(($bal1-$amount)>=0){
    	$upb1=$bal1-$amount;
    	$update_query1="UPDATE bank_db SET Balance='$upb1' WHERE Email='$m'";
    	$update_result1=mysqli_query($con,$update_query1) or die(mysqli_error($con)) ;
    	echo "<script>alert('Payment Successful !')</script>",$_SESSION['id'];

		echo "<script>location.href='balance.php'</script>";
    }

    else{
    	echo "<script>alert('Out of Balance !')</script>";
        echo "<script>location.href='initiatepay.php'</script>";
    }	
}

}