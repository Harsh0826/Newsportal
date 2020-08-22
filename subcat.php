<?php 
$conn = mysqli_connect("localhost", "root", "", "newsportal");
session_start();
$subcat_id=$_GET['type1'];
?>
<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
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
 

  <section id="sliderSection">
  <?php
            $query=mysqli_query($conn, "select * from news where subcat_id='$subcat_id' LIMIT 1");
            while ($row=mysqli_fetch_array($query)) {             
            ?> 
  <div class="single_post_content"><h2><span><?php echo $row['subcat']; ?></span></h2></div>
<?php } ?>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">

            <?php
            $query=mysqli_query($conn, "select * from news where subcat_id='$subcat_id'");
            while ($row=mysqli_fetch_array($query)) {             
            ?>            
          <div class="single_iteam"> <a href="single_page.php?type3=<?php echo $row["news_id"];?>?type1=<?php echo $row["news_id"];?>"> <img src="images/<?php echo $row['news_images']; ?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.php?type3=<?php echo $row["news_id"];?>"><?php echo $row['news_title']; ?></a></h2>
              <p><?php echo $row['news_desc']; ?></p>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
          <?php
            $query=mysqli_query($conn, "select * from news  order by news_id desc LIMIT 5");
             while ($row=mysqli_fetch_array($query)) {
              ?>
              <li>
                <div class="media"> <a href="single_page.php?type3=<?php echo $row["news_id"];?>?type3=<?php echo $row["news_id"];?>" class="media-left"> <img alt="" src="images/<?php echo $row['news_images']; ?>"> </a>
                  <div class="media-body"> <a href="single_page.php?type3=<?php echo $row["news_id"];?>?type3=<?php echo $row["news_id"];?>" class="catg_title"> <?php echo $row['news_title']; ?></a> </div>
                </div>
              </li>
            <?php } ?>
              
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">    
        <?php      
        $subcat_id=$_GET['type1'];
       $sql2 = "SELECT * FROM news WHERE approval='real' and subcat_id ='$subcat_id'";
        $query1=mysqli_query($conn,$sql2) or die($conn->error);  
        while ($row3=mysqli_fetch_array($query1)){
         ?>         
            <div class="single_post_content_center">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="single_page.php?type3=<?php echo $row3["news_id"];?>?type1=<?php echo $row3["news_id"];?>" class="media-left"> <img alt=""  style="height: 150px; width: 200px;" src="<?php echo "./images/".$row3['news_images'];?>"> </a>
                    <div class="media-body"> <a href="single_page.php?type3=<?php echo $row3["news_id"];?>?type1=<?php echo $row3["news_id"];?>"" class="catg_title"> <?php  echo $row3['news_title'];?></a> 
                    <p><?php echo $row3['news_desc']; ?></p>
                  </div>
                  </div>
                </li>
              </ul>              
            </div>          
          <?php } ?>
          </div>              
        </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
             <?php
    $query=mysqli_query($conn, "select * from news  where approval='real' order by news_id desc LIMIT 5");
    while ($row=mysqli_fetch_array($query)) {
                ?>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.php" class="media-left"> <img alt="" src="<?php echo "./images/".$row['news_images'];?>"> </a>
                  <div class="media-body"> <a href="single_page.php" class="catg_title"> <?php  echo $row['news_title'];?> </a> </div>
                </div>
              </li>
            </ul>
          <?php } ?>
          </div>
          <div class="single_sidebar">            
            <div class="tab-content">              
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li><?php
                
                $sql = "SELECT * from news where approval='real' and cat_id='1' and subcat_id='1'";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){

                ?>
                    <div class="media wow fadeInDown"> <a href="single_page.php" class="media-left"> <img alt="" src="<?php echo "./images/".$row['news_images'];?>"> </a>
                      <div class="media-body"> <a href="single_page.php" class="catg_title"> <?php echo $row['news_desc']; ?></a> </div>
                    </div>
                    <?php } ?>
                  </li>
                  
                </ul>
              </div>
            </div>
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
</body>
</html>