<!DOCTYPE html>
<html>
<head>
	<title><?php echo "User Login" ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style >
    	#foot{
	 padding-top: 10px;
	 
     background-color: #101010;
     color:#9d9d9d;
     
            }
        .margin{
    		margin-top: 100px;
    		margin-bottom: 151px;
    	}
    	#b{
    		background-color: #f5fffb;
    	}

    </style>
    

    
</head>
<body id="b">
	<nav class="navbar navbar-inverse ">
    	<div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>    
                <a href="YourFinance.html" class="navbar-brand">Your Finance Bank</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavBar">    
        	<ul class="nav navbar-nav navbar-right">
        		<li><a href="YFau.html"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
        		<li><a href="YFsignup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
        		<li><a href="YFlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>	
        	</ul>
        </div>
        </div>	
    </nav>
    <div class="container">
<div class="row margin">
	<div class="col-md-offset-4 col-md-4 ">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center>
					<h1>Login</h1>
				</center>
            </div>
            <div class="panel-body">
            <form  method="post" action="ctrl_login_script.php" >
            	<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" class="form-control" placeholder="Email" >
                </div>
                <div class="form-group">
                	<label for="pass">Password</label>
                	<input type="Password" name="pass" class="form-control" placeholder="Password" >
                </div>
                <div class="form-group">
                	<button type="submit" value="Login" class="btn btn-block btn-success">Login</button>
                </div>
            </form>    
		</div>	
		<div class="panel-footer" >
			<p>Don't have an account ? <a href="YFsignup.php"> Click here to Sign Up</a></p>
		</div>	
	</div>	
</div>
</div>
</div>
 <footer id="foot">
    	<div class="container">
    		<center>
    			<p>Copyright © Your Finance Bank. All Rights Reserved | Contact Us: +91-8448444853</p>
    		</center>
    	</div>
    </footer>  

</body>
</html>
