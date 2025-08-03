<?php 

session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed
                                    Property</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">User Listed Property</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
                            <?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
                    </div>
                    <table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead>
                            <tr class="bg-dark">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">BHK</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Added Date</th>
                                <th class="text-white font-weight-bolder">Status</th>
                                <th class="text-white font-weight-bolder">Update</th>
                                <th class="text-white font-weight-bolder">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
								while($row=mysqli_fetch_array($query))
								{
							?>
                            <tr>
                                <td>
                                    <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a
                                                href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                        </h5>
                                        <span class="font-14 text-capitalize"><i
                                                class="fas fa-map-marker-alt text-success font-13"></i>&nbsp;
                                            <?php echo $row['14'];?></span>
                                        <div class="price mt-3">
                                            <span class="text-success">$&nbsp;<?php echo $row['13'];?></span>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $row['4'];?></td>
                                <td class="text-capitalize">For <?php echo $row['5'];?></td>
                                <td><?php echo $row['29'];?></td>
                                <td class="text-capitalize"><?php echo $row['24'];?></td>
                                <td><a class="btn btn-info"
                                        href="submitpropertyupdate.php?id=<?php echo $row['0'];?>">Update</a></td>
                                <td><a class="btn btn-danger"
                                        href="submitpropertydelete.php?id=<?php echo $row['0'];?>">Delete</a></td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
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