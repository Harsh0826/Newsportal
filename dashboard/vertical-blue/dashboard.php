<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "newsportal");
if (isset($_SESSION['auth']) && !empty($_SESSION['auth']) && $_SESSION['user']=='admin' ){} 
else header('location:admin-login.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>HV Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="dashboard.php" class="logo">
                        <span>
                            <img src="assets/images/dashboard-logo.png" alt="" height="44">
                        </span>
                        <i>
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        

                       
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="admin_profile.php"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                   
                                    <a class="dropdown-item text-danger" href="dashboard_logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                        
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php

            include('leftslidebar_admin.php');

            ?>
        
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Our Dashboard</li>
                                    </ol>          
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <?php 
                                                $q = mysqli_query($conn , "SELECT count(news_id) from news");
                                                while ($no = mysqli_fetch_assoc($q)) {
                                                    
                                                
                                                ?>
                                                <h6 class="text-uppercase verti-label text-white-50">Total News</h6>
                                                <div class="text-white">
                                                    <h6 class="text-uppercase mt-0 text-white-50">Total News</h6>
                                                    <h3 class="mb-3 mt-0"><?php echo $no['count(news_id)'];?></h3>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <?php 
                                                $q = mysqli_query($conn , "SELECT count(*) from user_info where usertype='reporter'");
                                                while ($no = mysqli_fetch_assoc($q)) {                                                   
                                                ?>
                                                <h6 class="text-uppercase verti-label text-white-50">Total Reporters</h6>
                                                <div class="text-white">
                                                    <h6 class="text-uppercase mt-0 text-white-50">Total Reporters</h6>
                                                    <h3 class="mb-3 mt-0"><?php echo $no['count(*)'];?></h3>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <?php 
                                                $q = mysqli_query($conn , "SELECT count(*) from user_info where usertype=''");
                                                while ($no = mysqli_fetch_assoc($q)) {                                                    
                                                ?>
                                                <h6 class="text-uppercase verti-label text-white-50">Total Users</h6>
                                                <div class="text-white">
                                                    <h6 class="text-uppercase mt-0 text-white-50">Total Users</h6>
                                                    <h3 class="mb-3 mt-0"><?php echo $no['count(*)'];?></h3>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <?php 
                                                $q = mysqli_query($conn , "SELECT count(*) from category");
                                                while ($no = mysqli_fetch_assoc($q)) {                                                   
                                                
                                                ?>
                                                <h6 class="text-uppercase verti-label text-white-50">Total Categories</h6>
                                                <div class="text-white">
                                                    <h6 class="text-uppercase mt-0 text-white-50">Total Categories</h6>
                                                    <h3 class="mb-3 mt-0"><?php echo $no['count(*)'];?></h3>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            
                           

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Latest Post</h4>
                                            <div class="table-responsive order-table">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>User Name</th>
                                                            <th data-priority="1">News Title</th>
                                                            <th data-priority="3">Category Name</th>
                                                            <th data-priority="1">Subcategory Name</th>
                                                            <th data-priority="3">News Description</th>
                                                            <th data-priority="6">Posting Date</th>                                                           
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php                                                                
                                                                 $result1 = mysqli_query($conn,"SELECT * FROM news order by news_id desc limit 6"); 

                                                                 while($fetch=mysqli_fetch_assoc($result1))
                                                                {
                                                           ?>
                                                        <tr>                                                         
                                                             
                                                                 <td><?php echo $fetch['username']; ?></td>
                                                                 <td><?php echo $fetch['news_title']; ?></td>
                                                                 <td><?php echo $fetch['cat_name']; ?></td>
                                                                 <td><?php echo $fetch['subcat']; ?></td>
                                                                 <td><?php echo $fetch['news_desc']; ?></td>                                                        
                                                                 <td><?php echo $fetch['posting_date']; ?></td>                                                                                         
                                                        </tr>
                                                        <?php  }   ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

        
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- Peity JS -->
        <script src="../plugins/peity/jquery.peity.min.js"></script>
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/dashboard.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>