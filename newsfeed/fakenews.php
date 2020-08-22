<?php session_start();
$conn = mysqli_connect("localhost", "root", "", "newsportal");

?>
<!DOCTYPE html>
<html>
<head>
<title>NewsFeed | Pages | Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
            <p style="color: white; margin-top: 20px;"><?php echo "Today is " . date("d-m-Y") . "<br>"; ?></p>
       
          <div class="header_top_right">          
         
           <?php if(!isset($_SESSION['uname'])){ ?>
            <a href="dashboard/vertical-blue/pages-login.php" class="btn btn-info btn-lg" style="background-color: black; margin-top: -50px; border-radius: 10px; border-color: black;">
          <span class="glyphicon glyphicon-log-in"></span> Login </a>
    <?php }
        else{  ?>
        <a href="logout.php" class="btn btn-info btn-lg" style="background-color: black; margin-top:-50px; border-radius: 10px; border-color: black;">
          <span class="glyphicon glyphicon-user"></span> Logout  </a>

         <a href="dashboard/vertical-blue/profile.php" class="btn btn-info btn-lg" style="background-color: black; margin-top: -50px; border-radius: 10px; border-color: black;">
          <span class="glyphicon glyphicon-user"></span> Profile  </a>
     <?php }?>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
 <?php  
include_once('navbar.php');
?>
  
  <section id="contentSection">
    
          <div class="contact_area">
            <h2>Fake News</h2>
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
                                                              
                                                                $result = mysqli_query($conn, "SELECT * FROM news where approval='fake'");
                                                                 while($fetch = mysqli_fetch_array($result))
                                                                {

                                                             ?>
                                                                 <td><?php echo $fetch['news_id']; ?></td>
                                                                 <td><?php echo $fetch['news_title']; ?></td>
                                                                 <td><?php echo $fetch['cat_name']; ?></td>
                                                                 <td><?php echo $fetch['subcat']; ?></td>
                                                                 <td><?php echo $fetch['news_desc']; ?></td>
                                                                 
                                                                 <td><?php echo $fetch['posting_date']; ?></td>
                                                                   <?php
                                                               }

                                                            ?>       

                                                             </tr>   
                                                           

                                                       
                                                       
                                                        </tbody>
                                                    </table>       
             
        
 </div>
</div>
    </div>
  </section>
 <?php  
include_once('footer.php');
?>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>