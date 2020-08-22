<?php
$conn = mysqli_connect('localhost','root','','newsportal');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$area = $_POST['area'];


if (isset($_POST['submit'])) {

     
     $INSERT = "INSERT Into adduser (name, email, password, area) values('$name', '$email', '$password', '$area')";
     $result=mysqli_query($conn,$INSERT) or die($conn->error); 
     if($result===true){
        
        header("location:adduser.php");
     }
    
   }
   $conn->close();
?>