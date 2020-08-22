<?php
$conn = mysqli_connect('localhost','root','','newsportal');
$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];



if (isset($_POST['submit'])) {

     
     $INSERT = "INSERT Into user_info (fullname,username , email, password,head,usertype,area) values('$fname', '$uname', '$email', '$password','','','')";
     $result=mysqli_query($conn,$INSERT) or die($conn->error); 
     if($result===true){
        
        header("location:pages-login.php");
     }
    
   }
   $conn->close();
?>