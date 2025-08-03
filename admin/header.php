<?php

require("config.php");

 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<div class="header col-lg-12 col-md-auto col-sm-auto">



    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>

    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="nav user-menu ">


        <li class="nav-item dropdown app-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="40"
                        alt="Ryan Taylor"></span>
            </a>

            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?php echo $_SESSION['auser'];?></h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>

    </ul>


</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            <div class="header-left d-flex justify-content-center pb-4">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/navbar.png" alt="Logo" width="120" height="80">
                </a>

            </div>

            <ul>
                <hr class="border-white">
                <li class="menu-title">

                    <span class="text-white">Main</span>

                </li>

                <li>
                    <a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <hr class="border-white">
                <li class="menu-title">
                    <span class="text-white">All Users</span>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="adminlist.php"> Admin </a></li>
                        <li><a href="userlist.php"> Users </a></li>
                        <li><a href="useragent.php"> Agent </a></li>
                        <li><a href="userbuilder.php"> Builder </a></li>
                    </ul>
                </li>
                <hr class="border-white">
                <li class="menu-title">
                    <span class="text-white">State & City</span>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-location"></i> <span>State & City</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="stateadd.php"> State </a></li>
                        <li><a href="cityadd.php"> City </a></li>
                    </ul>
                </li>
                <hr class="border-white">
                <li class="menu-title">
                    <span class="text-white">Property Management</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-map"></i> <span> Property</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="propertyadd.php"> Add Property</a></li>
                        <li><a href="propertyview.php"> View Property </a></li>

                    </ul>
                </li>

                <hr class="border-white">

                <li class="menu-title">
                    <span class="text-white">Query</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-comment"></i> <span> Contact</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="contactview.php"> Contact </a></li>

                    </ul>
                </li>
                <hr class="border-white">
                <li class="menu-title">
                    <span class="text-white">About</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-browser"></i> <span> About Page </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="aboutadd.php"> Add About Content </a></li>
                        <li><a href="aboutview.php"> View About </a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>