 <?php
/*  $i = $_GET['i'];*/
//index.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "newsportal");

function select_cat(){
$connect = mysqli_connect("localhost", "root", "", "newsportal");
$category = '';
$query = "SELECT * FROM category";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
 $category .= '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}
return $category;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
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
        <script>
$(document).ready(function(){
         $('#category').change(function(){  
   var category_id= $(this).val();
   $.ajax({
    url:"fetchcategory.php",
    method:"POST",
    data:{catid:category_id},
    success:function(data){
     $('#subcategory').html(data);
    }
   });
  
 });
});
</script>
<script>
    $(document).ready(function(){
    $("#category").change(function(){ 
    var cat_name =  $(this).children("option:selected").text();
    alert("You have selected - " + cat_name);
    $('#cat_name').val(cat_name);
  });

    $("#subcategory").change(function(){ 
    var subcat =  $(this).children("option:selected").text();
    alert("You have selected - " + subcat);
    $('#subcat').val(subcat);
  });
});
    
</script>
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
                                    <h4 class="page-title">ADD POST</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">ADD POST</h4>
                                    
            
                                            <form method="POST" action="adminaddpost_connect.php">
                                                <input type="Hidden"  name="id" >
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">News Title</label>
                                                    <input type="text" class="form-control" required placeholder="Type something"  name="news_title"/>
                                                </div>
                                                <div class="form-group">
                                                   <label class="bmd-label-floating">Category Name</label>
                                                   <select name="cat_id" class="form-control" id='category'>
                                                   <option value="">--Select Category--</option>
                                                   <?php echo select_cat(); ?>
                                                   </select>
                                                   <input type="Hidden" id="cat_name" class="form-control" name="cat_name"/>
                                                </div>
            
                                                <div class="form-group">
                                                     <label class="bmd-label-floating">SubCategory Name</label>
                                                     <select name="subcat_id" class="form-control" id='subcategory'>
                                                       <option value="">--Select SubCategory--</option>  
                                                                          
                                                     </select>
                                                      <input type="Hidden" class="form-control"  id="subcat" name="subcat"/>  
                                                </div>
                                                <div class="form-group">
                                                     <label class="bmd-label-floating">News Image</label>
                                                     <input type="file" class="form-control" name="news_image" required><br>
                                                </div>
                                                <div class="form-group">
                                                     <label>News Description</label>
                                                    <div class="form-group">
                                                       <textarea reqiured class="form-control" name="news_desc"></textarea>
                                                     </div>
                                                </div>                            
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">
                                                            ADD POST
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                               
            
                                
                            </div> <!-- end row -->  
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