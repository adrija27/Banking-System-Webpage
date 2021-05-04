<?php
$con=mysqli_connect("localhost","root","","bank") or die(mysqli_error($con));
session_start();

$i=$_SESSION['id'];
$select_query="SELECT id,Name,Balance FROM bank_db WHERE Email='$i'";
$select_query_result= mysqli_query($con,$select_query) or die (mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Balance</title>
        <style >
        	#bck{
                background-image: url('coin.jpg');
                background-repeat: no-repeat;
                background-position: top;
                height: 900px;
                width: 100%;
            }
            .bg_content{
                text-align: center;
                padding: 60px 70px;
                margin-top: 220px;
                color: #ffffff;
                max-width: 660px;
                background-color: rgba(0, 0, 0, 0.8);
}      
.row.content {height: 550px}
    
    
    .sidenav {
      background-color: #040325;
      height: 900px;
    }
        
    
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }


        </style>
</head>
<body id="bck">
  <?php if((mysqli_num_rows($select_query_result))>0) { 
     while ($row=mysqli_fetch_array ($select_query_result)) {  ?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-md">
      <h2 style="color: #A6ADD5">YF BANK</h2><br><br>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="balance.php">PROFILE</a><br><br></li>
        <li><a href="initiatepay.php">INITIATE PAYMENT</a><br><br></li>
        <li><a href="deposit.php">DEPOSIT MONEY</a><br><br></li>
        <li><a href="passchange.php">CHANGE PASSWORD</a><br><br></li>
        <li><a href="YFlogout.php">LOGOUT</a><br><br></li>
      </ul><br>
    </div>
    <div class="col-sm-offset-2 col-sm-6 bg_content">
    <h1> Welcome Back <?php echo $row['Name'] ?> ! </h1>
    <h1> Current Balance - INR <?php echo $row['Balance'] ?></h1>
    <h1> Account Number - <?php echo $row['id'] ?></h1>
    <?php } 
    } ?>
    </div>
  </div>
</div>
</body>
</html>