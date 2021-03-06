<?php session_start();
$conn = mysqli_connect("localhost", "root", "", "newsportal");
$query = "SELECT * FROM news where approval='fake'";
$result = mysqli_query($conn, $query);
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

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="dashboard/plugins/sweet-alert2/sweetalert2.css">
        <script  src="dashboard/plugins/sweet-alert2/sweetalert2.js"></script>
        <script  src="dashboard/plugins/sweet-alert2/sweetalert2.common.js"></script>
        <script  src="dashboard/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="dashboard/plugins/sweet-alert2/sweetalert2.min.css">
        
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

          <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>

                             <li>
                                <a href="../../index.php" class="waves-effect"><i class="mdi mdi-home-circle"></i><span>HOME</span></a>
                            </li>
                          
                            <li>
                                <a href="profile.php" class="waves-effect"><i class="mdi mdi-account-circle"></i><span>PROFILE</span></a>
                            </li>

                            <li>
                                <a href="useraddpost.php" class="waves-effect"><i class="mdi mdi-tab-plus"></i><span>ADD POST</span></a>
                            </li>

                             <li>
                                <a href="userfakenews.php" class="waves-effect"><i class="mdi mdi-tab-plus"></i><span>FAKE NEWS</span></a>
                            </li>

                           

                       
   
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
           

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
                                    <h4 class="page-title">FAKE NEWS</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">FAKE NEWS</h4>
                                            
            
                                            <div class="table-rep-plugin">
                                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table  table-striped">
                                                        <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                            <th data-priority="1">News Title</th>
                                                            <th data-priority="3">Category Name</th>
                                                            <th data-priority="1">Subcategory Name</th>
                                                            <th data-priority="3">News Description</th>
                                                            <th data-priority="6">Posting Date</th>                                                            
                                                          
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <?php
                                                                 while($fetch = mysqli_fetch_array($result))
                                                                {

                                                             ?>

                                                             <tr>
                                                                 <td><?php echo $fetch['news_id']; ?></td>
                                                                 <td><?php echo $fetch['news_title']; ?></td>
                                                                 <td><?php echo $fetch['cat_name']; ?></td>
                                                                 <td><?php echo $fetch['subcat']; ?></td>
                                                                 <td><?php echo $fetch['news_desc']; ?></td>
                                                                 
                                                                 <td><?php echo $fetch['posting_date']; ?></td>
                                                                         

                                                             </tr>   
                                                            <?php
                                                               }

                                                            ?>

                                                        </tr>
                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->   
                        </div>




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

        <!-- Parsley js -->
        <script src="../plugins/parsleyjs/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
    
    </body>

</html>