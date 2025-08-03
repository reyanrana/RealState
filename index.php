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
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Real Estate</title>
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            
            <?php include("include/header.php");?>

            <div class="overlay-black w-100 slider-banner1 position-relative"
                style="background-image: url('images/banner/add.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; height:40rem">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4">
                                    <span class="text-success display-4">Let us</span><br>
                                    <span class="display-4">Guide you Home</span>
                                </h1>
                                <form method="post" action="propertygrid.php"
                                    style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">Select Type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="building">Building</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="office">Office</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Select Status</option>
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter City" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-success w-100">Search
                                                    Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary display-5 double-down-line text-center mb-4">Recent Property</h2>
                        </div>

                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM property,user WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="featured-thumb hover-zoomer mb-4">
                                                <div class="overlay-black overflow-hidden position-relative"> <img
                                                        src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                    <div class="featured bg-success text-white">New</div>
                                                    <div class="sale bg-success text-white text-capitalize">For
                                                        <?php echo $row['5'];?></div>
                                                    <div class="price text-primary"><b>Rs<?php echo $row['13'];?>
                                                        </b><span class="text-white"><?php echo $row['12'];?>
                                                            Sqft</span></div>
                                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-3">
                                                        <h5
                                                            class="text-secondary hover-text-success mb-2 text-capitalize">
                                                            <a
                                                                href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                                        </h5>
                                                        <span class="location text-capitalize"><i
                                                                class="fas fa-map-marker-alt text-success"></i>
                                                            <?php echo $row['14'];?></span>
                                                    </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                            <li><span><?php echo $row['6'];?></span> Beds</li>
                                                            <li><span><?php echo $row['7'];?></span> Baths</li>
                                                            <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                            <li><span><?php echo $row['8'];?></span> Balcony</li>

                                                        </ul>
                                                    </div>
                                                    <div class="p-4 d-inline-block w-100">
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



                            </div>
                        </div>
                    </div>
                </div>
            </div>

          

            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    
                                    <img src="images\icons\hand.png" alt="" style="width: 80px;">
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Selling
                                            Service</a></h5>
                                    <p>Maximize returns with our agents' customized property showcasing strategy.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                   
                                    <img src="images\icons\search-house.png" alt="" style="width: 80px;">
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental
                                            Service</a></h5>
                                    <p>Effortlessly maximize rental income with expert tenant and lease management.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                  
                                    <img src="images\icons\listings.png" alt="" style="width: 80px;">
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property
                                            Listing</a></h5>
                                    <p>Explore detailed property listings for sale and rent.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                   
                                    <img src="images\icons\agreement.png" alt="" style="width: 80px;">
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal
                                            Investment</a></h5>
                                    <p>Invest confidently with legal, secure, and profitable insights.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="full-row living bg-one overlay-secondary-half"
                style="background-image: url('images/012.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                    
                                        <div class="pl-2">
                                            <h5 class="mb-3">Top Rated</h5>
                                            <p>With a decade of experience and a portfolio of successful deals, we've
                                                established ourselves as a trusted authority in real estate investing.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                   
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p> With over 10 years of experience in the industry, we've refined our
                                                processes to deliver exceptional results and unparalleled service</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                    
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experienced Agents</h5>
                                            <p> Our team of experienced agents has a deep understanding of the local
                                                market, ensuring you receive expert guidance every step of the way</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-body py-5">


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="icon-thumb-one text-center mb-5">
                                        <div class="bg-success text-white rounded-circle position-absolute z-index-9">1
                                        </div>
                                        <div class="left-arrow"><img src="images\icons\discussion.png" alt="" style="width: 80px;"></div>
                                        <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                                        <p> From initial consultation to final closing, our team of professionals will
                                            work tirelessly to ensure your complete satisfaction.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon-thumb-one text-center mb-5">
                                        <div class="bg-success text-white rounded-circle position-absolute z-index-9">2
                                        </div>
                                        <div class="left-arrow"> <img src="images\icons\search-data.png" alt="" style="width: 80px;"></div>
                                        <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                                        <p>Thoroughly examine and refine every detail, ensuring accuracy and precision
                                            in every document.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="icon-thumb-one text-center mb-5">
                                        <div class="bg-success text-white rounded-circle position-absolute z-index-9">3
                                        </div>
                                        <div><img src="images\icons\agreement.png" alt="" style="width: 80px;"></div>
                                        <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                                        <p>Strategically acquire new assets, expanding our portfolio and driving growth
                                            through calculated investments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <?php include("include/footer.php");?>





            

        </div>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    
</body>

</html>