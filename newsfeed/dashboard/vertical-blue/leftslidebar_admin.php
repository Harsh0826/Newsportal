
 <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>

                             <li>
                                <a href="../../index.php" class="waves-effect">
                                    <i class="mdi mdi-home-circle"></i><span class="badge badge-primary float-right"></span> <span> Home </span>
                                </a>
                            </li>
                             <?php
                            if($_SESSION['user']=='admin'){?>
                            <li>
                                <a href="dashboard.php" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge badge-primary float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>
                            <?php } ?>
                             <li>
                                <a href="admin_addpost.php" class="waves-effect"><i class="mdi mdi-tab-plus"></i><span> Add Post</span></a>
                            </li>
                            <?php
                            if($_SESSION['user']=='admin'){?>
                            <li>
                                <a href="hod.php" class="waves-effect"><i class="mdi mdi-account-plus"></i><span> Add Hod</span></a>
                            </li>
                            <?php } ?>
                            <?php
                            if($_SESSION['user']=='admin' or $_SESSION['user']=='hod'){?>
                             <li>
                                <a href="reporter.php" class="waves-effect"><i class="mdi mdi-account-plus"></i><span> Add Reporter</span></a>
                            </li>
                           
                            <li>
                                    <a href="approval.php" class="waves-effect"><i class="mdi mdi-clipboard-check"></i><span>News Approval</span></a>
                                                                  
                            </li>

                             <?php } ?>



                             <li>
                                    <a href="employee.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span>Employees</span></a>
                                                                  
                            </li> 

                             <li>
                                    <a href="fakenews.php" class="waves-effect"><i class="mdi mdi-close-circle"></i><span>Fake News</span></a>
                                                                  
                            </li> 



                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>