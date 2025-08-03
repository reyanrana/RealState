<?php 

session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}


$error='';
$msg='';
if(isset($_POST['insert']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];

	$content=$_POST['content'];
	
	$uid=$_SESSION['uid'];
	
	if(!empty($name) && !empty($phone) && !empty($content))
	{
		
		$sql="INSERT INTO feedback (uid,fdescription,status) VALUES ('$uid','$content','0')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Feedback Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Feedback Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}								
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Real Estate </title>
</head>

<body>




    <div id="page-wrapper">
        <div class="row">

            <?php include("include/header.php");?>

            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Profile</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center">Profile</h2>
                        </div>
                    </div>
                    <div class="dashboard-personal-info p-5 bg-white">
                        <form action="#" method="post">
                            <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback Form</h5>
                            <?php echo $msg; ?><?php echo $error; ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="user-id">Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Full Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Contact Number</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone"
                                            maxlength="10">
                                    </div>

                                    <div class="form-group">
                                        <label for="about-me">Your Feedback</label>
                                        <textarea class="form-control" name="content" rows="7"
                                            placeholder="Enter Text Here...."></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-info mb-4" name="insert" value="Send Feedback">
                                </div>
                        </form>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 col-md-12">
                            <?php 
									$uid=$_SESSION['uid'];
									$query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                            <div class="user-info mt-md-50"> <img src="admin/user/<?php echo $row['6'];?>"
                                    alt="userimage">
                                <div class="mb-4 mt-3">

                                </div>

                                <div class="font-18">
                                    <div class="mb-1 text-capitalize"><b>Name:</b> <?php echo $row['1'];?></div>
                                    <div class="mb-1"><b>Email:</b> <?php echo $row['2'];?></div>
                                    <div class="mb-1"><b>Contact:</b> <?php echo $row['3'];?></div>
                                    <div class="mb-1 text-capitalize"><b>Role:</b> <?php echo $row['5'];?></div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include("include/footer.php");?>

        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</body>

</html>