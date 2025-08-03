<?php 
include("config.php");
$error = "";
$msg = "";

if (isset($_REQUEST['reg'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $pass = $_REQUEST['pass'];
    $utype = $_REQUEST['utype'];

    if (isset($_FILES['uimage']) && $_FILES['uimage']['error'] == 0) {
        $uimage = $_FILES['uimage']['name'];
        $temp_name1 = $_FILES['uimage']['tmp_name'];
    } else {
        $uimage = "";
        $temp_name1 = "";
    }

    $pass = sha1($pass);
    
    $query = "SELECT * FROM user WHERE uemail='$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);
    
    if ($num == 1) {
        $error = "<p class='alert alert-warning'>Email Id already exists</p> ";
    } else {
        if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage)) {
            $sql = "INSERT INTO user (uname, uemail, uphone, upass, utype, uimage) VALUES ('$name', '$email', '$phone', '$pass', '$utype', '$uimage')";
            $result = mysqli_query($con, $sql);
            move_uploaded_file($temp_name1, "admin/user/$uimage");
            if ($result) {
                $msg = "<p class='alert alert-success'>Registered Successfully</p> ";
            } else {
                $error = "<p class='alert alert-warning'>Registration not successful</p> ";
            }
        } else {
            $error = "<p class='alert alert-warning'>Please fill all the fields</p>";
        }
    }
}
?>
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Register Form -->
            <div class="container p-0 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-6 d-none d-md-block p-0">
                                <img src="images\banner\register.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 40rem;" />
                            </div>
                            <div class="col-md-5 col-lg-5 d-flex align-items-center position-relative">
                                <button type="button" class="close position-absolute" style="right: 10px; top: 10px;"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="card-body p-0 text-black">
                                    <?php echo $error; ?>
                                    <?php echo $msg; ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <img src="" alt="">
                                        </div>
                                        <h5 class="fw-normal" style="letter-spacing: 1px;">Create your account</h5>
                                        <div class="form-outline mb-3">
                                            <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                                name="name" placeholder="Your Name" required />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <input type="email" id="form3Example3cg"
                                                class="form-control form-control-lg" name="email"
                                                placeholder="Email address" required />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <input type="text" id="form3Example4cg" class="form-control form-control-lg"
                                                name="phone" placeholder="Phone" required />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <input type="password" id="form3Example4cg"
                                                class="form-control form-control-lg" name="pass" placeholder="Password"
                                                required />
                                        </div>
                                        <div class="form-outline mb-3">
                                            <select name="utype" id="utype" class="form-control form-control-lg">
                                                <option value="user">User</option>
                                                <option value="agent">Agent</option>
                                                <option value="builder">Builder</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <label class="col-form-label"><b>User Image</b></label>
                                            <input class="form-control" name="uimage" type="file">
                                        </div>
                                        <div class="pt-1 mb-3">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="reg">Register</button>
                                        </div>
                                        <p>Already have an account? <a href="#" id="loginLink">Login here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>