<?php 
include("config.php");
$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
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

    <title>Real Estate</title>
</head>

<body>


    <div id="page-wrapper">
        <div class="row">

            <?php include("include/header.php");?>

            <div class="full-row " style="padding-top: 8rem;">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 bg-secondary">
                            <div class="contact-info">
                                <h3 class="mb-4 mt-4 text-white">Contacts</h3>

                                <ul>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Address</h5>

                                            <span class="text-white">Office # 101, 1st Floor, Al-Hafeez View, Main
                                                Boulevard, Gulberg III, Lahore, Pakistan 54600</span>

                                        </div>
                                    </li>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-phone-alt text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Call Us</h5>
                                            <span class="d-table text-white">+92 42 3577 1111</span>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Email Address</h5>
                                            <span class="d-table text-white">info@jagahrealestate.com</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-md-12 col-lg-7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="text-secondary double-down-line text-center mb-5">Get In Touch</h2>
                                        <?php echo $msg; ?><?php echo $error; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="w-100" action="#" method="post">
                                            <div class="row">
                                                <div class="row mb-4">
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Your Name*">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Email Address*">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Phone" maxlength="10">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="subject" class="form-control"
                                                            placeholder="Subject">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" rows="5"
                                                                placeholder="Type Comments..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" value="send message" name="send"
                                                    class="btn btn-success">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("include/footer.php");?>

            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</body>

</html>