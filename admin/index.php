<?php 
	session_start();
	include("config.php");
	$error="";
	if(isset($_POST['login']))
	{
		$user=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];
		$pass= sha1($pass);
		
		if(!empty($user) && !empty($pass))
		{
			$query = "SELECT auser, apass FROM admin WHERE auser='$user' AND apass='$pass'";
			$result = mysqli_query($con,$query)or die(mysqli_error());
			$num_row = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if( $num_row ==1 )
			{
				$_SESSION['auser']=$user;
				header("Location: dashboard.php");
			}
			else
			{
				$error='* Invalid User Name and Password';
			}
		}else{
			$error="* Please Fill all the Fileds!";
		}
		
	}   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>RE Admin - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>


    <div class="page-wrappers login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Admin Login Panel</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <p style="color:red;"><?php echo $error; ?></p>

                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control" name="user" type="text" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                            </form>
                            <p>Don't have an account? <a href="register.php" id="register-link">Register here</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/script.js"></script> -->

</body>

</html>