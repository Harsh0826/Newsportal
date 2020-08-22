<?php 
  $conn = mysqli_connect("localhost" , "root" , "" ,"newsportal");
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>NewsFeed | Pages | Single Page</title>
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
<link href="dashboard/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <link href="dashboard/vertical-blue/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="dashboard/vertical-blue/assets/css/icons.css" rel="stylesheet" type="text/css">
 

</head>
<body style="background-image: url(images/bg.jpg)">
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
        <a href="logout.php" class="btn btn-info btn-lg" style="background-color: black; margin-top: -50px; border-radius: 10px; border-color: black;">
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
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
             <?php      
         $news_id = $_GET['type3'];
        
         $sql4="SELECT * from news n join subcategory s where approval='real' and news_id='$news_id' and n.subcat_id=s.subcat_id LIMIT 1"; 
        $query4=mysqli_query($conn,$sql4) or die($conn->error);  
        while ($row4=mysqli_fetch_array($query4)){
         ?>   

            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="cat.php?type=<?php echo $row4["cat_id"];?>"><?php echo $row4['cat_name']; ?></a></li>
              <li class="active"><a href="subcat.php?type1=<?php echo $row1["subcat_id"]; ?>"><?php echo  $row4['subcat']; ?></a></li>
            </ol>
         
            <h1><?php echo $row4['news_title']; ?> </h1>
            <div class="post_commentbox">  <span><i class="fa fa-calendar"></i><?php echo $row4['posting_date']; ?></span> <a href="#"><i class="fa fa-tags"></i><?php echo $row4['subcat']; ?></a>

                                  <div id="wrapper">   
                                        <div class="card-body">                 
                                            <div class="row text-center">                                                
                                                <div>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert" style="float: right; margin-top: -20px; margin-right: 20px; border-radius: 10px;">Share</button>
                                                </div>
                                            </div>           
                                        </div>
                                  </div>

            </div>
            <div class="single_page_content"> <img style="height:400px; width: 700px;" class="img-center" src="images/<?php echo $row4['news_images']; ?> " alt="" >
              <p><?php echo $row4['news_desc']; ?> </p>
             <?php } ?>
        
            </div>
          </div>
        </div>
      </div>
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
              <?php
    $query=mysqli_query($conn, "select * from news where approval='real' ORDER by news_id desc LIMIT 5");
    while ($row=mysqli_fetch_array($query)) {
     ?>
            <ul class="spost_nav">
             
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.php?type3=<?php echo $row["news_id"];?>" class="media-left"> <img alt="" src="images/<?php echo $row['news_images']; ?>"> </a>
                  <div class="media-body"> <a href="single_page.php?type3=<?php echo $row["news_id"];?>" class="catg_title"><?php echo $row['news_title']; ?> </a></div>
                </div>
              </li>
            </ul>
            <?php } ?>
          </div>          
          
        </aside>
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
<script src="dashboard/vertical-blue/assets/js/bootstrap.bundle.min.js"></script>
<script src="dashboard/vertical-blue/assets/js/metisMenu.min.js"></script>
<script src="dashboard/vertical-blue/assets/js/jquery.slimscroll.js"></script>
<script src="dashboard/vertical-blue/assets/js/waves.min.js"></script>

 <!-- Sweet-Alert  -->
<script src="dashboard/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="dashboard/vertical-blue/assets/pages/sweet-alert.init.js"></script>

 <!-- App js -->
 <script src="dashboard/vertical-blue/assets/js/app.js"></script>

</body>
</html>