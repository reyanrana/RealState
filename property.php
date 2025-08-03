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



    <div id="page-wrapper ">
        <div class="row">

            <?php include("include/header.php");?>

            <div class="full-row " style="padding-top: 10rem;">
                <div class="container">
                    <div class="row">
                     <h2 class="w-100 pl-3 py-5">Property Available</h2>
                        <div class="col-lg-8">
                            <div class="row">

                                <?php 
							$query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid");
								while($row=mysqli_fetch_array($query))
								{
							?>

                                <div class="col-md-6">
                                    <div class="featured-thumb hover-zoomer mb-4">
                                        <div class="overlay-black overflow-hidden position-relative"> <img
                                                src="admin/property/<?php echo $row['18'];?>" alt="pimage">

                                            <div class="sale bg-success text-white">For <?php echo $row['5'];?></div>
                                            <div class="price text-primary bg-light font-weight-bold text-capitalize">Rs<?php echo $row['13'];?>
                                                <span class="bg-dark text-white"><?php echo $row['12'];?> Sqft</span></div>

                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a
                                                        href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                                </h5>
                                                <span class="location text-capitalize"><i
                                                        class="fas fa-map-marker-alt text-success"></i>
                                                    <?php echo $row['14'];?></span>
                                            </div>
                                            <div class="px-4 pb-4 d-inline-block w-100">
                                                <div class="float-left text-capitalize"><i
                                                        class="fas fa-user text-success mr-1"></i>By :
                                                    <?php echo $row['uname'];?></div>
                                                <div class="float-right"><i
                                                        class="far fa-calendar-alt text-success mr-1"></i>
                                                    <?php echo date('d-m-Y', strtotime($row['date']));?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-lg-4">


                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 ">Featured
                                Property</h4>
                            <ul class="property_list_widget">

                                <?php 
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                                <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a
                                            href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                    </h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>
                                        <?php echo $row['14'];?></span>

                                </li>
                                <?php } ?>

                            </ul>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently
                                    Added Property</h4>
                                <ul class="property_list_widget">

                                    <?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                    <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                        <h6 class="text-secondary hover-text-success text-capitalize"><a
                                                href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                        </h6>
                                        <span class="font-14"><i
                                                class="fas fa-map-marker-alt icon-success icon-small"></i>
                                            <?php echo $row['14'];?></span>

                                    </li>
                                    <?php } ?>

                                </ul>
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