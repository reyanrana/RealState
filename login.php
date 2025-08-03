<?php
include("config.php");
$error = "";
$msg = "";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = sha1($pass);

    if (!empty($email) && !empty($pass)) {
        $sql = "SELECT * FROM user WHERE uemail='$email' && upass='$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['uemail'] = $email;
           
        } else {
            $error = "<p class='alert alert-warning'>Email or Password does not match!</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please fill all the fields</p>";
    }
}
?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="container p-0 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-6 d-none d-md-block p-0">
                                <img src="https://cdn.pixabay.com/photo/2019/05/24/11/00/interior-4226020_960_720.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-5 col-lg-5 d-flex align-items-center m-2 position-relative">
                                <button type="button" class="close position-absolute" style="right: 10px; top: 10px;"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="card-body px-2 text-black">
                                    <?php echo $error; ?>
                                    <?php echo $msg; ?>
                                    <form method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <img src="" alt="">
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" class="form-control form-control-lg"
                                                name="email" required />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="pass" required />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit"
                                                name="login">Login</button>
                                        </div>
                                        <a class="small text-muted" href="#!">Forgot password?</a>

                                        <p>Don't have an account? <a href="#" id="registerLink">Register here</a></p>

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