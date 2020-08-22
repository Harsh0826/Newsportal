<?php

 $conn = mysqli_connect('localhost', 'root', '','newsportal');


if(isset($_POST['submit'])){
  
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $message =$_POST['message'];
 
 $INSERT = "INSERT Into contact(name,email,message)values('$name','$email','$message')";
     $result=mysqli_query($conn,$INSERT); 
     if($result===true){
     	
     	header("location:contact.php");
    
   }
}
   $conn->close();


?>