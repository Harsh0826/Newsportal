 

 <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation" style="height: 20px;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">Latest</a></li>
          <?php
            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result))
            {  
          ?>
          <li class="dropdown" ><a href="cat.php?type=<?php echo $row["cat_id"];?>"><?php echo $row["cat_name"]?></a>
            <ul class="dropdown-menu" role="menu">
              <?php
            $sql1 = "SELECT * FROM subcategory WHERE cat_id =".$row['cat_id'];
            $result1 = mysqli_query($conn, $sql1);
             while($row1 = mysqli_fetch_array($result1))
                  {       ?>
              <li><a href="subcat.php?type1=<?php echo $row1["subcat_id"]; ?>"><?php echo $row1["subcat"]?></a></li>
              <?php } ?>
            </ul>           
          </li>
        <?php } ?>
          <li><a href="fakenews.php" name="cat_id">Fake News</a></li>
          <li><a href="contact.php" name="cat_id">Contact Us</a></li>
          <li style="margin-left: 160px; margin-top: 12px;">
                <form id="searchform" method="post" action="search.php" style="margin-top: -50px;">
                      <input type="text" placeholder="Search.." id="search" name="search" style="border-radius: 5px; margin-left: 680px;">
                      <button type="submit" name="submit"><i class="fa fa-search"></i></button> 
                </form>
          </li>
        </ul>
      </div>
    </nav>

    <section id="newsSection">
            
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
             <?php
    $query=mysqli_query($conn, "select * from news  where approval='real' order by news_id desc");
    while ($row=mysqli_fetch_array($query)) {
     ?>
            <li><a href="single_page.php?type3=<?php echo $row["news_id"];?>"><img src="images/<?php echo $row['news_images']; ?>" alt=""><?php echo $row['news_title']; ?></a></li>
            <?php } ?>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>            
              <li class="googleplus"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>