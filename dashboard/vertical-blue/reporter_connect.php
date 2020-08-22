<?php
session_start();
$conn = mysqli_connect('localhost','root','','newsportal');
$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hod_id=$_POST['hod_id'];
$area = $_POST['area'];



if (isset($_POST['submit'])) {

     
     $INSERT = "INSERT Into user_info(fullname, username, email, password,head,usertype, area) values('$fullname', '$username' ,'$email', '$password','$hod_id','reporter', '$area')";
     $result=mysqli_query($conn,$INSERT) or die($conn->error); 
     if($result===true){
        
        header("location:reporter.php");
     }
    
   }
   $conn->close();
?>