<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Navbar Example</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    .transparent-navbar {
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
        position: fixed;
        width: 100%;
        z-index: 1000;

    }

    .black {
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(25px);
    }
    </style>
</head>

<body>
    <header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
        <div class="main-nav secondary-nav transparent-navbar py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <a class="navbar-brand position-relative" href="index.php">
                                <img class="nav-logo" src="images/logo/navbarlogo.png" alt="" style="width:6rem;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse col-12" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto col-6">
                                    <li class="nav-item mx-2 dropdown">
                                        <a class="nav-link text-white" href="index.php" role="button"
                                            aria-haspopup="true" aria-expanded="false">Home</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link text-white" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link text-white" href="contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link text-white" href="property.php">Properties</a>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link text-white" href="agent.php">Agent</a>
                                    </li>
                                    <?php if(isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My
                                            Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="profile.php">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="feature.php">Your Property</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php } else { ?>
                                    <li class="nav-item mx-2">
                                        <a class="nav-link text-white" href="#" data-toggle="modal"
                                            data-target="#loginModal">Login/Register</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="navbar-nav mx-auto">
                                    <?php if(isset($_SESSION['uemail'])) { ?>
                                    <a class="btn btn-success d-none d-xl-block p-2" style="border-radius:10px;"
                                        href="submitproperty.php">Submit Property</a>
                                    <?php } else { ?>
                                    <a class="btn btn-success d-none d-xl-block p-2 text-white" data-toggle="modal"
                                        data-target="#loginModal" style="border-radius:10px;">Submit Property</a>
                                    <?php } ?>
                                    <ul class="list-text-dark d-table ml-3">
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php include 'login.php'; ?>
    <?php include 'register.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 160) {
                $(".transparent-navbar").addClass("black");
            } else {
                $(".transparent-navbar").removeClass("black");
            }
        });

        $('#registerLink').click(function() {
            $('#loginModal').modal('hide');
            $('#registerModal').modal('show');
        });

        $('#loginLink').click(function() {
            $('#registerModal').modal('hide');
            $('#loginModal').modal('show');
        });

        $('#registerModal').on('hidden.bs.modal', function() {
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        });

        $('#loginLink').click(function(e) {
            e.preventDefault();
            $('#loginModal').modal('show');
        });


        $('#loginModal').on('shown.bs.modal', function() {
            console.log('Login modal shown');
        });
    });
    </script>
</body>

</html>