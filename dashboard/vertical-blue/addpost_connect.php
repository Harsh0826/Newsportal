<?php
$conn = mysqli_connect('localhost','root','','newsportal');
session_start();

$ntitle = $_POST['news_title'];
$ndesc = $_POST['news_desc'];
$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];
$subcat_id = $_POST['subcat_id'];
$subcat = $_POST['subcat'];
$nimage = $_POST['news_image'];

$date = date('Y-m-d H:i:s');

if (isset($_POST['submit'])) {

     
     $INSERT = "INSERT Into news (username,news_title, cat_id,cat_name, subcat_id,subcat, news_desc, news_images,posting_date,status,approval) values('".$_SESSION['uname']."','$ntitle','".$cat_id."', '".$cat_name."', '".$subcat_id."', '$subcat', '$ndesc', '$nimage','$date','pending','')";
     $result=mysqli_query($conn,$INSERT) or die($conn->error); 
     if($result===true){
     	
     	header("location:useraddpost.php");
     }
    
   }
   $conn->close();
?>