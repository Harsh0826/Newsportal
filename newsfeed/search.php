<?php

$conn =  mysqli_connect('localhost', 'root', '', 'newsportal');

  if(isset($_POST['search'])){

    $search=$_POST['search']
    $sql="SELECT *from news where news_title like %search%"

    




?>