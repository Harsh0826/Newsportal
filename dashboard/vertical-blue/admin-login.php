<?php
 $conn = mysqli_connect('localhost', 'root','', 'newsportal');
session_start();

if(isset($_POST['submit'])){

 $email=$_POST['email'];
 $password=$_POST['password'];

 $sql = "SELECT * from user_info where usertype!='' AND email='".$email."' AND password='".$password."'";
 echo $result = mysqli_query($conn,$sql) or die("error");


 if($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['auth']=$email; 
        $_SESSION['user1']=$row['username'];
        $_SESSION['user']=$row['usertype'];

        if($_SESSION['user']=='hod' or $_SESSION['user']=='reporter'){          
        header('location: admin_addpost.php');      }
        
        if ($_SESSION['user']=='admin') {
                    # code...
               header('location: dashboard.php'); 
        } 
    }
 else{
    echo '<script type="text/javascript">';
    echo ' alert("Login Failed :(")';  
    echo '</script>';
    //exit();
 }
}
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
    </head>

    <body>

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="assets/images/hv.png" height="50" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to Admin</p>

                        <form class="form-horizontal m-t-30"  method="POST">

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" required="1">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required="1">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button name="submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            

        </div>

        <!-- END wrapper -->
            

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>
