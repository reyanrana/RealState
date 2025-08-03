<?php 

session_start();
include("config.php");
						
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Real Estate PHP</title>
</head>

<body>




    <div id="page-wrapper">
        <div class="row">

            <?php include("include/header.php");?>


            <div class="full-row " style="padding-top: 6rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Agent</h2>
                        </div>
                    </div>
                    <div class="row">

                        <?php 
							$query=mysqli_query($con,"SELECT * FROM user WHERE utype='agent'");
								while($row=mysqli_fetch_array($query))
								{
                            ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="hover-zoomer bg-white shadow-one mb-4">
                                <div class="overflow-hidden"> <img src="admin/user/<?php echo $row['6'];?>"
                                        alt="aimage"> </div>
                                <div class="py-3 text-center">
                                    <h5 class="text-secondary hover-text-success"><a
                                            href="#"><?php echo $row['1'];?></a></h5>
                                    <span>Real Estate - Agent</span>
                                </div>
                            </div>
                        </div>

                        <?php } ?>


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